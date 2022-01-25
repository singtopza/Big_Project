<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserRegister;

class Register extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
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
            $model = new UserRegister();
            $data = [
                'F_Name' => $this->request->getVar('firstname'),
                'L_Name' => $this->request->getVar('lastname'),
                'Email' => $this->request->getVar('email'),
                'Pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'Phone' => $this->request->getVar('phone'),
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}