<?php

namespace App\Controllers;

use App\Models\UsersModel;

class EmployeeController extends BaseController
{
  public function index()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $ses_posid = $session->get('ses_pos_id');
    $data_sending = [];
    if (isset($ses_userid)) {
      if ($ses_posid >= 2) {
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
        // $session->setFlashdata('swel_title_emp', "ยินดีต้อนรับ ".$data_sending['Q_F_Name']);
        // $session->setFlashdata('swel_button_emp', 'เข้าใช้งาน');
        return view('employee/dashboard', $data_sending);
      } else {
        $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด!');
        $session->setFlashdata('swel_text', 'คุณไม่ได้รับอนุญาตให้เข้าสู่หน้านี้');
        $session->setFlashdata('swel_icon', 'error');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
    } else {
      $session->setFlashdata('swel_title', 'อ๊ะ คุณยังไม่ได้เข้าสู่ระบบ!');
      $session->setFlashdata('swel_text', 'โปรดลงชื่อเข้าใช้ก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ตกลง');
      return redirect()->to('/');
    }
  }

  public function manager()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $ses_posid = $session->get('ses_pos_id');
    $data_sending = [];
    if (isset($ses_userid)) {
      if ($ses_posid >= 2) {
        $model = new UsersModel();
        $data = $model->where('User_ID', $ses_userid)->first();
        $data_sending['Q_F_Name'] = $data['F_Name'];
        $session->setFlashdata('swel_title_emp', "ยินดีต้อนรับ ".$data_sending['Q_F_Name']);
        $session->setFlashdata('swel_button_emp', 'เข้าใช้งาน');
        return redirect()->to('/dashboard');
      } else {
        $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด!');
        $session->setFlashdata('swel_text', 'คุณไม่ได้รับอนุญาตให้เข้าสู่หน้านี้');
        $session->setFlashdata('swel_icon', 'error');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
    } else {
      $session->setFlashdata('swel_title', 'อ๊ะ คุณยังไม่ได้เข้าสู่ระบบ!');
      $session->setFlashdata('swel_text', 'โปรดลงชื่อเข้าใช้ก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ตกลง');
      return redirect()->to('/');
    }
  }

  public function kickVanController()
  {
    return redirect()->to('/Dashboard');
  }

  public function manage_van()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $ses_posid = $session->get('ses_pos_id');
    $data_sending = [];
    if (isset($ses_userid)) {
      if ($ses_posid >= 2) {
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
        return view('employee/manage_van', $data_sending);
      } else {
        $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด!');
        $session->setFlashdata('swel_text', 'คุณไม่ได้รับอนุญาตให้เข้าสู่หน้านี้');
        $session->setFlashdata('swel_icon', 'error');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
    } else {
      $session->setFlashdata('swel_title', 'อ๊ะ คุณยังไม่ได้เข้าสู่ระบบ!');
      $session->setFlashdata('swel_text', 'โปรดลงชื่อเข้าใช้ก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ตกลง');
      return redirect()->to('/');
    }
  }

  public function manage_traffic()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $ses_posid = $session->get('ses_pos_id');
    $data_sending = [];
    if (isset($ses_userid)) {
      if ($ses_posid >= 2) {
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
        return view('employee/manage_traffic', $data_sending);
      } else {
        $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด!');
        $session->setFlashdata('swel_text', 'คุณไม่ได้รับอนุญาตให้เข้าสู่หน้านี้');
        $session->setFlashdata('swel_icon', 'error');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
    } else {
      $session->setFlashdata('swel_title', 'อ๊ะ คุณยังไม่ได้เข้าสู่ระบบ!');
      $session->setFlashdata('swel_text', 'โปรดลงชื่อเข้าใช้ก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ตกลง');
      return redirect()->to('/');
    }
  }
}