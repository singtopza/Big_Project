<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UsersModel;
use App\Models\PaymentModel;
use App\Models\ReservationModel;
use App\Models\StationModel;

class PaymentController extends Controller
{
  public function kickPaymentController()
  {
    return redirect()->to('/');
  }

  public function payment()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $data_sending = [];
    if (isset($ses_userid)) {
      $model = new UsersModel();
      $data = $model->where('User_ID', $ses_userid)->first();
      $userId = $data['User_ID'];
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
      $model_reservation = new ReservationModel();
      $data_reservation = $model_reservation->getReservationAfterConfirm($userId);
      foreach ($data_reservation as $value) {
        $data_sending['Reserve_ID'] = $value['Reserve_ID'];
        $data_sending['Van_Out'] = $value['Van_Out']." น.";
        $data_sending['Go_Date'] = $value['Go_Date'];
        $first_Station = $value['Station_Start'];
        $end_station = $value['Station_End'];
        $model_station = new StationModel();
        $station_start = $model_station->getStationById_S($first_Station);
        $station_end = $model_station->getStationById_E($end_station);
        $data_sending['Station_Start'] = $station_start['Station_Name'];
        $data_sending['Station_End'] = $station_end['Station_Name'];
        $data_sending['Re_Seate'] = $value['Re_Seate'];
        $data_sending['Tic_Price'] = $value['Tic_Price'];
        $data_sending['Total_Price'] = $value['Total_Price'];
      }
      // SELECT * FROM reservation INNER JOIN payment ON reservation.Reserve_ID = payment.Reserve_ID WHERE reservation.User_ID = 1 AND payment.User_ID = 1 AND payment.Result = "false" ORDER BY reservation.Reserve_ID DESC LIMIT 1;
      return view('payment', $data_sending);
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function add_payment()
  {
    $session = session();
    $userId = $session->get('ses_id');
    $data_sending = [];
    if (isset($userId)) {
      $bank_id = $this->request->getVar('radioBank');
      if (!file_exists($_FILES['slip']['tmp_name']) || !is_uploaded_file($_FILES['slip']['tmp_name'])) {
        $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
        $session->setFlashdata('swel_text', 'โปรดอัพโหลดสลิปเพื่อยืนยันการชำระเงิน');
        $session->setFlashdata('swel_icon', 'error');
        $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
        return redirect()->to('/payment');
      } else {
        $model_reservation = new ReservationModel();
        $data_reservation = $model_reservation->getReservationAfterConfirm($userId);
        foreach ($data_reservation as $value) {
          $Reserve_ID = $value['Reserve_ID'];
        }
        $fileimg =  $this->request->getFile('slip');
        $temp = explode(".", $_FILES["slip"]["name"]);
        $newfilename = "U".$userId."R".$Reserve_ID."B".$bank_id.'.'.end($temp);
        $fileimg->move(T_PUBLIC . '/uploads/slip', $newfilename, true);
        $data = [
          'User_ID' => $userId,
          'Pay_DateTime' => date("Y-m-d H:i:s"),
          'Bank' => $bank_id,
          'Slip' => $newfilename,
          'Confirm' => "waiting",
          'Note' => "",
          'Reserve_ID' => $Reserve_ID,
        ];
        $model_payment = new PaymentModel();
        $model_payment->save($data);
        return redirect()->to('/checking');
      }
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function booking_details()
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
      return view('booking_details', $data_sending);
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }
}
