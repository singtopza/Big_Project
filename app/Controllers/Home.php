<?php

namespace App\Controllers;
use App\Models\Customer;
use App\Models\Employee;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $ses_userid = $session->get('ses_id');
        $ses_posid = $session->get('ses_pos_id');
        $data_sending = [];
        $movetohomepage_msg = $session->get('C00002');
        if (isset($movetohomepage_msg)) {
        print "<script type=\"text/javascript\">alert('ข้อผิดพลาด: คุณได้เข้าสุ่ระบบอยู่แล้ว!\\nErrorCode: C00002');</script>";
        unset($_SESSION['C00002']);
        }
        if (isset($ses_userid)) {
          if (isset($ses_userid) && !isset($ses_posid)) {
            $model = new Customer();
            $data = $model->where('Cus_ID', $ses_userid)->first();
            $data_sending['Q_ID'] = $data['Cus_ID'];
          } else if (isset($ses_userid) && isset($ses_posid)) {
            $model = new Employee();
            $data = $model->where('Emp_ID', $ses_userid)->first();
            $data_sending['Q_ID'] = $data['Emp_ID'];
            $data_sending['Q_Pos_ID'] = $data['Pos_ID'];
          }
          $data_sending['Q_F_Name'] = $data['F_Name'];
          $data_sending['Q_L_Name'] = $data['L_Name'];
          $data_sending['Q_Email'] = $data['Email'];
          $data_sending['Q_Phone'] = $data['Phone'];
          if (!isset($data['Pic'])) {
            $data_sending['Q_Picture'] = "";
          } else {
            $data_sending['Q_Picture'] = $data['Pic'];
          }
        }
        return view('index', $data_sending);
    }
}
