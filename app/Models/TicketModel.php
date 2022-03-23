<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
  protected $table = 'ticket';
  protected $primaryKey = 'Tick_ID ';
  protected $allowedFields = ['Tick_ID ', 'Tick_GetDateTime', 'Tick_Code', 'Pay_ID'];

  public function get_history($user_ID)
  {
    $where_sql = "reservation.User_ID = {$user_ID} and payment.Confirm = 'true'";
    return $this->db
      ->table('ticket')
      ->join('payment', 'ticket.Pay_ID = payment.Pay_ID')
      ->join('reservation', 'payment.Reserve_ID = reservation.Reserve_ID ')
      ->where($where_sql)
      ->orderby('Tick_ID', 'Desc')
      ->get()->getResultArray();
  }
}
