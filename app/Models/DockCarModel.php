<?php

namespace App\Models;

use CodeIgniter\Model;

class DockCarModel extends Model
{
  protected $table = 'dock_car';
  protected $primaryKey = 'Dock_car_id';
  protected $allowedFields = ['Dock_car_id', 'Around_ID', 'Van_Out', 'Station_ID', 'Van_ID'];

  public function viewDockCar_kanjanaburi()
  {
    return $this->db
      ->table('dock_car')
      ->join('van', 'dock_car.Van_ID = van.Van_ID')
      ->where('Station_ID', 7)
      ->orderBy('Van_Out', 'ASD')
      ->get()->getResultArray();
  }

  public function viewDockCar_nakhonpathom()
  {
    return $this->db
      ->table('dock_car')
      ->join('van', 'dock_car.Van_ID = van.Van_ID')
      ->where('Station_ID', 1)
      ->orderBy('Van_Out', 'ASD')
      ->get()->getResultArray();
  }

  public function getTicketPriceBySelect($first_station, $end_station)
  {
    $where_sql = "Station_Start={$first_station} AND Station_End={$end_station}";
    $data = $this->where($where_sql)->first();
    if ($data) {
      return $data;
    }
  }

  public function getDock_car_Out_byId($time)
  {
    $where_sql = "Dock_car_id = {$time}";
    $data = $this->where($where_sql)->first();
    if ($data) {
      return $data;
    }
  }
}
