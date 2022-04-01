<?php 

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model {
  protected $table = 'payment';
  protected $primaryKey = 'Pay_ID ';
  protected $allowedFields = ['Pay_ID ', 'User_ID', 'Pay_DateTime', 'Pay_Date', 'Bank', 'Slip', 'Confirm', 'Note', 'Reserve_ID'];

  public function getStatus($userId, $Reserve_ID)
  {
    $where_sql = "User_ID = {$userId} AND Reserve_ID = {$Reserve_ID}";
    return $this->db
      ->table('payment')
      ->where($where_sql)
      ->orderBy('Pay_ID', 'DESC')
      ->limit(1)
      ->get()
      ->getResultArray();
  }

  public function getReservationAfterConfirm($userId)
  {
    $where_sql = "payment.User_ID = {$userId}";
    $data = $this->db
      ->table('payment')
      ->join('reservation', 'reservation.Reserve_ID = payment.Reserve_ID')
      ->join('dock_car', 'reservation.Dock_car_id = dock_car.Dock_car_id')
      ->join('ticket_price', 'reservation.Tic_Price_ID = ticket_price.Tic_Price_ID')
      ->where($where_sql)
      ->orderBy('Reservation.Reserve_ID', 'DESC')
      ->limit(1)
      ->get()
      ->getResultArray();
    return $data;
  }

  public function viewPaymentAll()
  {
    $where_sql = "payment.confirm = 'waiting'";
    $data = $this->db
      ->table('payment')
      ->join('users', 'users.User_ID = payment.User_ID')
      ->join('reservation', 'reservation.Reserve_ID = payment.Reserve_ID')
      ->join('dock_car', 'dock_car.Dock_car_id = reservation.Dock_car_id')
      ->where($where_sql)
      ->orderBy('Pay_DateTime', 'ASC')
      ->get()
      ->getResultArray();
    return $data;
  }
}