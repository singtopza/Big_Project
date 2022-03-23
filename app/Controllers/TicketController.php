<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\TicketModel;

class TicketController extends BaseController
{
  public function his_reservation()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $data_sending = [];
    if (isset($ses_userid)) {
      $model = new UsersModel();
      $data = $model->where('User_ID', $ses_userid)->first();
      $data_sending['Q_ID'] = $data['User_ID'];
      $data_sending['Q_F_Name'] = $data['F_Name'];
      $data_sending['Q_L_Name'] = $data['L_Name'];
      $data_sending['Q_Email'] = $data['Email'];
      $data_sending['Q_Phone'] = $data['Phone'];
      $data_sending['Q_Pos_ID'] = $data['Pos_ID'];
      if (!isset($data['Pic'])) {
        $data_sending['Q_Picture'] = "";
      } else {
        $data_sending['Q_Picture'] = $data['Pic'];
      }
      $model_ticket = new TicketModel();
      $user_ID = $ses_userid;
      $data_sending['history'] = $model_ticket->get_history($user_ID);
      return view('his_reservation', $data_sending);
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }
  
  public function kickTicketController()
  {
    return redirect()->to('/');
  }
}