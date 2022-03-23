<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\ComplaintModel;

class ComplaintController extends Controller
{
  public function kickComplaintController()
  {
    return redirect()->to('/');
  }

public function index()
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
      return view('report', $data_sending);
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function add_report()
  {
  $session = session();
    $title = $this->request->getVar('title');
    $type = $this->request->getVar('type');
    $message = $this->request->getVar('message');
    $model = new ComplaintModel();
    $data = [
    'Com_Topic' => $title,
    'Com_Type_ID' => $type,
    'Com_Content' => $message,
    ];
    $model->save($data);
    $session->setFlashdata('success_report', 'รายงานปัญหาสำเร็จ!');
    return redirect()->to('/report');
  }
}