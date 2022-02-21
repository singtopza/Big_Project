<?php

namespace App\Controllers;
use App\Models\Customer;
use App\Models\Employee;

class Editprofile extends BaseController
{
  public function index()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $ses_posid = $session->get('ses_pos_id');
    $data_sending = [];
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
    } else {
      $_SESSION['C00001'] = 'C00001';
      return redirect()->to('/Login');
    }
    return view('editprofile', $data_sending);
  }

  public function update()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    helper(['form']);
    $rules = [
      'firstname' => 'required|min_length[2]|max_length[25]',
      'lastname' => 'required|min_length[2]|max_length[25]',
      'email' => 'required|min_length[5]|max_length[50]|valid_email',
      'phone' => 'required|min_length[10]|max_length[10]',
      'pic' => 'max_size[pic,2048]|max_length[30]|ext_in[pic,jpg,jpeg,png,x-png]',
    ];
    if ($this->validate($rules)) {
      $model_cus = new Customer();
      // $model_emp = new Employee();
      $fileimg =  $this->request->getFile('pic');
      if (isset($fileimg)) {
        $temp = explode(".", $_FILES["pic"]["name"]);
        $newfilename = 'C'.$ses_userid.'.'.end($temp);
        $fileimg->move(T_PUBLIC.'/uploads/userProfile', $newfilename, true);
        $data_cus = [
          'F_Name' => $this->request->getVar('firstname'),
          'L_Name' => $this->request->getVar('lastname'),
          'Email' => $this->request->getVar('email'),
          'Phone' => $this->request->getVar('phone'),
          'Pic' => $newfilename,
        ];
      } else {
        $data_cus = [
          'F_Name' => $this->request->getVar('firstname'),
          'L_Name' => $this->request->getVar('lastname'),
          'Email' => $this->request->getVar('email'),
          'Phone' => $this->request->getVar('phone'),
        ];
      }
      $model_data_cus = $model_cus->where('Cus_ID', $ses_userid)->first();
      if(isset($model_data_cus)) {
        $model_cus->update($ses_userid, $data_cus);
        // $session = session();
        // $_SESSION['C10001'] = 'C10001';
        return redirect()->to('/profile');
      }
    } else {
        $data_cus['validation'] = $this->validator;
        return view('editprofile', $data_cus);
    }
  }
}