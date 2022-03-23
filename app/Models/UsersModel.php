<?php 

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model {

  protected $table = 'users';
  protected $primaryKey = 'User_ID';
  protected $allowedFields = ['User_ID', 'F_Name', 'L_Name', 'Email', 'Pass', 'Phone', 'Pic', 'Pos_ID'];

  public function login($email, $password, $rememberme) 
  {
    $session = session();
    $data = $this->where('Email', $email)->first();
    if ($data)
    {
      $pass = $data['Pass'];
      $verify_password = password_verify($password, $pass);
      if ($verify_password)
      {
        $ses_data = [
          'ses_id' => $data['User_ID'],
          'ses_pos_id' => $data['Pos_ID'],
        ];
        if(!empty($rememberme))
        {
          $arr_cookie_options = array (
            'expires' => time() + 10 * 365 * 24 * 60 * 60,
            'path' => '/',
          );
          setcookie ("email", $email, $arr_cookie_options);
          setcookie ("password", $password, $arr_cookie_options);
        }
        else
        {
          $arr_cookie_options_else = array (
            'path' => '/',
          );
          setcookie ("email", "", $arr_cookie_options_else);
          setcookie ("password", "", $arr_cookie_options_else); 
        }
        $session->set($ses_data);
        $session->setFlashdata('swel_title', 'เข้าสู่ระบบสำเร็จแล้ว');
        $session->setFlashdata('swel_icon', 'success');
        $session->setFlashdata('swel_button', 'เข้าใช้งาน');
        return $data;
      }
      else
      {
        $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง!');
      }
    }
    else
    {
      $session->setFlashdata('msg', 'ไม่พบที่อยู่อีเมลในระบบ!');
    }
  }
}