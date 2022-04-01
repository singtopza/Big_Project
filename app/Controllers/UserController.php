<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UsersModel;
use App\Models\DockCarModel;
use App\Models\TicketPriceModel;
use App\Models\StationModel;

class UserController extends Controller
{
  public function kickUserController()
  {
    return redirect()->to('/');
  }

  public function index()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $data_sending = [];
    $model_station = new StationModel();
    $data_sending['station_getStations'] = $model_station->getStation();
    $data_sending['station_getStation_NK'] = $model_station->getStationNK();
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
      return view('index', $data_sending);
    } else {
      return view('index', $data_sending);
    }
  }

  public function profile()
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
      return view('profile', $data_sending);
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function editprofile()
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
      return view('editprofile', $data_sending);
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function edit()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    helper(['form']);
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
      $rules = [
        'firstname' => 'required|min_length[2]|max_length[25]',
        'lastname' => 'required|min_length[2]|max_length[25]',
        'email' => 'required|min_length[5]|max_length[50]|valid_email',
        'phone' => 'required|min_length[10]|max_length[10]',
        'pic' => [
          #mime_in[pic, image/jpg, image/jpeg, image/png]
          'rules' => 'max_size[pic,2048]',
          'errors' => [
            'max_size' => 'ข้อผิดพลาด: รูปภาพต้องมีขนาดไม่เกิน 2MB',
            #'mime_in' => 'ข้อผิดพลาด: โปรดใช้รูปภาพประเภท jpg, jpeg หรือ png',
          ],
        ],
      ];
      if ($this->validate($rules)) {
        $model = new UsersModel();
        $fileimg =  $this->request->getFile('pic');
        if (!file_exists($_FILES['pic']['tmp_name']) || !is_uploaded_file($_FILES['pic']['tmp_name'])) {
          $data = [
            'F_Name' => $this->request->getVar('firstname'),
            'L_Name' => $this->request->getVar('lastname'),
            'Email' => $this->request->getVar('email'),
            'Phone' => $this->request->getVar('phone'),
          ];
        } else {
          $temp = explode(".", $_FILES["pic"]["name"]);
          $newfilename = $ses_userid . '.' . end($temp);
          $fileimg->move(T_PUBLIC . '/uploads/userProfile', $newfilename, true);
          $data = [
            'F_Name' => $this->request->getVar('firstname'),
            'L_Name' => $this->request->getVar('lastname'),
            'Email' => $this->request->getVar('email'),
            'Phone' => $this->request->getVar('phone'),
            'Pic' => $newfilename,
          ];
        }
        $model_data = $model->where('User_ID', $ses_userid)->first();
        if (isset($model_data)) {
          $model->update($ses_userid, $data);
          $session->setFlashdata('swel_title', 'สำเร็จ');
          $session->setFlashdata('swel_text', 'ข้อมูลของคุณได้รับการแก้ไขเรียบร้อยแล้ว!');
          $session->setFlashdata('swel_icon', 'success');
          $session->setFlashdata('swel_button', 'ตกลง');
          return redirect()->to('/profile');
        }
      } else {
        $data_sending['validation'] = $this->validator;
        return view('editprofile', $data_sending);
      }
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function change_pass()
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
      return view('Change_Pass', $data_sending);
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function resetpwd()
  {
    $session = session();
    helper(['form']);
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
      $rules = [
        'oldpassword' => 'required|min_length[2]|max_length[200]',
        'newpassword' => 'required|min_length[2]|max_length[200]',
        'confpassword' => 'matches[newpassword]',
      ];
      if ($this->validate($rules)) {
        $oldpass = $this->request->getVar('oldpassword');
        $getpass = $data['Pass'];
        $verify_password = password_verify($oldpass, $getpass);
        if ($verify_password) {
          $data = [
            'Pass' => password_hash($this->request->getVar('newpassword'), PASSWORD_DEFAULT),
          ];
          $model_data = $model->where('User_ID', $ses_userid)->first();
          if (isset($model_data)) {
            $model->update($ses_userid, $data);
            $session->setFlashdata('swel_title', 'สำเร็จ');
            $session->setFlashdata('swel_text', 'รหัสผ่านของคุณได้รับการแก้ไขเรียบร้อยแล้ว!');
            $session->setFlashdata('swel_icon', 'success');
            $session->setFlashdata('swel_button', 'ตกลง');
            return redirect()->to('/profile');
          }
        } else {
          $session->setFlashdata('msg', 'รหัสผ่านเก่าไม่ถูกต้อง!');
          return redirect()->to('/change-password');
        }
      } else {
        $data_sending['validation'] = $this->validator;
        return view('editprofile', $data_sending);
      }
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function login()
  {
    helper(['form']);
    $session = session();
    $ses_userid = $session->get('ses_id');
    if (isset($ses_userid)) {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด!');
      $session->setFlashdata('swel_text', 'คุณได้เข้าสู่ระบบอยู่แล้ว จะไม่สามารถเข้าสู่ระบบในระหว่างนี้ได้');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/');
    } else {
      $session->destroy();
      return view('login');
    }
  }

  public function auth()
  {
    $model = new UsersModel();
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    $rememberme = $this->request->getVar('rememberme');
    $data = $model->login($email, $password, $rememberme);
    if ($data) {
      return redirect()->to('/');
    } else {
      return redirect()->to('/login');
    }
  }

  public function register()
  {
    helper(['form']);
    $session = session();
    $ses_userid = $session->get('ses_id');
    if (isset($ses_userid)) {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด!');
      $session->setFlashdata('swel_text', 'คุณได้เข้าสู่ระบบอยู่แล้ว จะไม่สามารถเข้าสู่ระบบในระหว่างนี้ได้');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/');
    } else {
      $session->destroy();
      return view('register');
    }
  }

  public function policy()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
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
      return view('policy', $data_sending);
    } else {
      return view('policy');
    }
  }

  public function new()
  {
    $session = session();
    helper(['form']);
    $rules = [
      'firstname' => 'required|min_length[2]|max_length[25]',
      'lastname' => 'required|min_length[2]|max_length[25]',
      'email' => [
        'rules' => 'required|min_length[5]|max_length[50]|valid_email|is_unique[users.email]',
        'errors' => [
          'required' => 'โปรดระบุอีเมล!',
          'valid_email' => 'รูปแบบของอีเมลไม่ถูกต้อง!',
          'is_unique' => 'อีเมลนี้ถูกใช้แล้ว!',
        ],
      ],
      'phone' => [
        'rules' => 'required|min_length[10]',
        'errors' => [
          'required' => 'โปรดระบุหมายเลขโทรศัพท์!',
          'min_length' => 'เบอร์โทรติดต่อต้องมีจำนวน 10 ตัวอักษร!',
        ],
      ],
      'password' => [
        'rules' => 'required|min_length[3]|max_length[30]',
        'errors' => [
          'required' => 'โปรดระบุรหัสผ่าน!',
          'min_length' => 'รหัสผ่านต้องมีอย่างน้อย 3 ตัวอักษร!',
          'max_length' => 'รหัสผ่านต้องไม่เกิน 30 ตัวอักษร!',
        ],
      ],
      'confpassword' => [
        'rules' => 'matches[password]',
        'errors' => [
          'matches' => 'รหัสผ่านไม่ตรงกัน!',
        ],
      ],
    ];
    if ($this->validate($rules)) {
      $model = new UsersModel();
      $data = [
        'F_Name' => $this->request->getVar('firstname'),
        'L_Name' => $this->request->getVar('lastname'),
        'Email' => $this->request->getVar('email'),
        'Pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        'Phone' => $this->request->getVar('phone'),
        'Pos_ID' => '1',
      ];
      $data_users = $model->where('Email', $this->request->getVar('email'))->first();
      if (isset($data_users)) {
        return redirect()->to('/register');
      } else {
        $model->save($data);
        $session->setFlashdata('swel_title', 'สำเร็จ!');
        $session->setFlashdata('swel_text', 'สมัครสมาชิกสำเร็จแล้ว คุณสามารถลงชื่อเข้าใช้งานระบบได้ในขณะนี้');
        $session->setFlashdata('swel_icon', 'success');
        $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
        return redirect()->to('/login');
      }
    } else {
      $validation = $this->validator->listErrors();
      $session->setFlashdata('validation', $validation);
      return redirect()->to('/register');
    }
  }

  public function table_reservation()
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
    }
    $model_dock = new DockCarModel();
    $data_sending['dockcars_kanjanaburi'] = $model_dock->viewDockCar_kanjanaburi();
    $data_sending['dockcars_nakhonpathom'] = $model_dock->viewDockCar_nakhonpathom();
    $model_ticketprice = new TicketPriceModel();
    $data_sending['ticketprice_ntok'] = $model_ticketprice->CountTicketNtoK();
    $data_sending['ticketprice_kton'] = $model_ticketprice->CountTicketKtoN();
    return view('table_reservation', $data_sending);
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/login');
  }
}
