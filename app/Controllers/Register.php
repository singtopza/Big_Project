<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer;

class Register extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        
        $data = [];
        $session = session();
        $ses_userid = $session->get('ses_id');
        if (isset($ses_userid)) {
            $_SESSION['C00002'] = 'C00002';
            return redirect()->to('/Home');
        }
        echo view('register', $data);
    }

    public function save() {
        //include helper form
        helper(['form']);
        //Set rules validation form
        $rules = [
            'firstname' => 'required|min_length[2]|max_length[25]',
            'lastname' => 'required|min_length[2]|max_length[25]',
            'email' => 'required|min_length[5]|max_length[50]|valid_email|is_unique[customer.email]',
            'phone' => 'required|min_length[10]|max_length[10]',
            'password' => 'required|min_length[3]|max_length[200]',
            'confpassword' => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $model = new Customer();
            $data = [
                'F_Name' => $this->request->getVar('firstname'),
                'L_Name' => $this->request->getVar('lastname'),
                'Email' => $this->request->getVar('email'),
                'Pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'Phone' => $this->request->getVar('phone'),
            ];
            $data_cus = $model->where('Email', $this->request->getVar('email'))->first();
            if(isset($data_cus)) {
                print "<script type=\"text/javascript\">alert('ข้อผิดพลาด: อีเมลนี้ถูกใช้ไปแล้ว!\\nErrorCode: C00003');</script>";
                echo view('register');
            } else {
                $model->save($data);
                $session = session();
                $_SESSION['C10001'] = 'C10001';
                return redirect()->to('/Login');
            }

        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}