<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserRegister;

class Login extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        echo view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserRegister();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('Email', $email)->first();
        if ($data) {
            $pass = $data['Pass'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'ses_cus_id' => $data['Cus_ID'],
                    'ses_first_name' => $data['F_Name'],
                    'ses_last_name' => $data['L_Name'],
                    'ses_email' => $data['Email'],
                    'ses_phone' => $data['Phone'],
                    'ses_pic' => $data['Pic'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Home');
            } else {
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'ไม่พบที่อยู่อีเมลในระบบ');
            return redirect()->to('/login');
        }
    }
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}