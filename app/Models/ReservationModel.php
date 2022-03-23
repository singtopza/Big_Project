<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
  protected $table = 'reservation';
  protected $primaryKey = 'Reserve_ID';
  protected $allowedFields = ['Reserve_ID', 'Reserve_Code', 'User_ID', 'Re_Seate', 'Re_DateTime', 'Go_Date', 'GoBack', 'Dock_car_id', 'Tic_Price_ID', 'Station_Start', 'Station_End', 'Total_Price', 'Status'];

  public function checkBeforeReservation($first_station, $time, $date)
  {
    $session = session();
    $where_sql = "reservation.Dock_car_id = {$time} AND reservation.Station_Start = {$first_station} AND reservation.Go_Date = '{$date}'";
    $data = $this->db
      ->table('reservation')
      ->join('dock_car', 'reservation.Dock_car_id = dock_car.Dock_car_id')
      ->join('van', 'dock_car.Van_ID = van.Van_ID')
      ->where($where_sql)
      ->limit(1)
      ->get()
      ->getResultArray();
    if ($data == null) {
      $where_sql = "dock_car.Dock_car_id = {$time}";
      $data_sending = $this->db
        ->table('dock_car')
        ->join('van', 'dock_car.Van_ID = van.Van_ID')
        ->where($where_sql)
        ->limit(1)
        ->get()
        ->getResultArray();
      foreach ($data_sending as $value) {
        $session->setFlashdata('seats_num', $value['Seats_Num']);
        $session->setFlashdata('havechair', $value['Seats_Num']);
      }
    } else {
      $where_sql = "reservation.Dock_car_id = {$time} AND reservation.Station_Start = {$first_station} AND reservation.Go_Date = '{$date}'";
      $data_sending = $this->db
        ->table('reservation')
        ->select('*')
        ->selectSUM('reservation.Re_Seate', 'Sum_Re_Seate')
        ->join('dock_car', 'reservation.Dock_car_id = dock_car.Dock_car_id')
        ->join('van', 'dock_car.Van_ID = van.Van_ID')
        ->where($where_sql)
        ->limit(1)
        ->get()
        ->getResultArray();
      foreach ($data_sending as $value) {
        $havechair = $value['Seats_Num'] - $value['Sum_Re_Seate'];
        $session->setFlashdata('seats_num', $value['Seats_Num']);
        $session->setFlashdata('havechair', $havechair);
      }
    }
  }

  public function getReservationForConfirm($userId)
  {
    $where_sql = "User_ID = {$userId} AND Status = 'waiting'";
    $data = $this->db
      ->table('reservation')
      ->join('dock_car', 'reservation.Dock_car_id = dock_car.Dock_car_id')
      ->join('ticket_price', 'reservation.Tic_Price_ID = ticket_price.Tic_Price_ID')
      ->where($where_sql)
      ->orderBy('Reservation.Reserve_ID', 'DESC')
      ->limit(1)
      ->get()
      ->getResultArray();
    return $data;
  }

  public function getReservationAfterConfirm($userId)
  {
    $where_sql = "User_ID = {$userId} AND Status = 'confirm'";
    $data = $this->db
      ->table('reservation')
      ->join('dock_car', 'reservation.Dock_car_id = dock_car.Dock_car_id')
      ->join('ticket_price', 'reservation.Tic_Price_ID = ticket_price.Tic_Price_ID')
      ->where($where_sql)
      ->orderBy('Reservation.Reserve_ID', 'DESC')
      ->limit(1)
      ->get()
      ->getResultArray();
    return $data;
  }

  public function confirmReservationById($ses_userid, $Reserve_ID)
  {
    $where_sql = "User_ID = {$ses_userid} AND Reserve_ID = {$Reserve_ID} AND Status = 'waiting'";
    return $this->db
      ->table('reservation')
      ->set('Status', "confirm")
      ->where($where_sql)
      ->limit(1)
      ->update();
  }

  public function deleteReservationById($ses_userid, $Reserve_ID)
  {
    $where_sql = "User_ID = {$ses_userid} AND Reserve_ID = {$Reserve_ID} AND Status = 'waiting'";
    return $this->db
      ->table('reservation')
      ->where($where_sql)
      ->limit(1)
      ->delete();
  }
}
