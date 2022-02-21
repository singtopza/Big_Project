<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer;
use App\Models\Employee;

class Login extends Controller {
    public function index() {
        $session = session();
        $ses_userid = $session->get('ses_id');
        $movetologin_msg = $session->get('C00001');
        $reg_success_msg = $session->get('C10001');
        //include helper form
        helper(['form']);

        if (isset($ses_userid)) {
            $_SESSION['C00002'] = 'C00002';
            return redirect()->to('/Home');
        } else {
            if (isset($movetologin_msg)) {
                print "<script type=\"text/javascript\">alert('ข้อผิดพลาด: โปรดทำการเข้าสู่ระบบก่อนการทำรายการ!\\nErrorCode: C00001');</script>";
            }
            if (isset($reg_success_msg)) {
                print "<script type=\"text/javascript\">alert('สมัครสมาชิกสำเร็จ!');</script>";
            }
            $session->destroy();
            return view('login');
        }
    }

    public function auth() {
        $session = session();
        $model_customer = new Customer();
        $model_employee = new Employee();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data_cus = $model_customer->where('Email', $email)->first();
        $data_emp = $model_employee->where('Email', $email)->first();
        if ($data_cus) {
            $pass = $data_cus['Pass'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'ses_id' => $data_cus['Cus_ID'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Home');
            } else {
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง!');
                return redirect()->to('/login');
            }
        } else if ($data_emp) {
            $pass = $data_emp['Pass'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'ses_id' => $data_emp['Emp_ID'],
                    'ses_pos_id' => $data_emp['Pos_ID'],
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