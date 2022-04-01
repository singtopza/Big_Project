<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ReservationModel;
use App\Models\DockCarModel;
use App\Models\TicketPriceModel;
use App\Models\StationModel;
use App\Models\PaymentModel;

class ReservationController extends BaseController
{
  public function reservation()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    $first_station = $this->request->getvar('first_station');
    $end_station = $this->request->getvar('end_station');
    $time = $this->request->getvar('time');
    $date = $this->request->getvar('date');
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
      if(isset($first_station) && $first_station == 0) {
        $session->setFlashdata('swel_title', 'โปรดระบุสถานีต้นทางเพื่อทำการจอง!');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
      else if(isset($end_station) && $end_station == 0) {
        $session->setFlashdata('swel_title', 'โปรดระบุสถานีปลายทางเพื่อทำการจอง!');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
      else if(isset($time) && $time == 0) {
        $session->setFlashdata('swel_title', 'โปรดระบุเวลาเพื่อทำการจอง!');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
      else if(isset($date) && $date == null) {
        $session->setFlashdata('swel_title', 'โปรดระบุวันเพื่อทำการจอง!');
        $session->setFlashdata('swel_button', 'ตกลง');
        return redirect()->to('/');
      }
      $model_station = new StationModel();
      $data_sending['station_getStations'] = $model_station->getStation();
      $data_sending['station_getStation_NK'] = $model_station->getStationNK();
      if(isset($first_station) && isset($end_station) && isset($time) && isset($date) && $date != null) {
        $data_station_start = $model_station->getStationById_S($first_station);
        $data_station_end = $model_station->getStationById_E($end_station);
        $session->setFlashdata('first_station_id', $first_station);
        $session->setFlashdata('first_station_name', $data_station_start['Station_Name']);
        $session->setFlashdata('end_station_id', $end_station);
        $session->setFlashdata('end_station_name', $data_station_end['Station_Name']);
        $session->setFlashdata('date', $date);
        $model_dockcar = new DockCarModel();
        $data_dockcar_getTime = $model_dockcar->getDock_car_Out_byId($time);
        $time_out = $data_dockcar_getTime['Van_Out'];
        $time_create = date_create($time_out);
        $time_format = date_format($time_create, "H.i");
        $session->setFlashdata('time', $time);
        $session->setFlashdata('fixtime', $time_format);
        $model_ticketprice = new TicketPriceModel();
        $data_tickpetprice_getPrice = $model_ticketprice->getTicketPriceById($first_station, $end_station);
        $session->setFlashdata('ticket_price', $data_tickpetprice_getPrice['Tic_Price']);
        $model_reservation = new ReservationModel(); // link with DockCar
        $model_reservation->checkBeforeReservation($first_station, $time, $date);
        return redirect()->to('/reservation');
      }
      echo view('reservation', $data_sending);
    } else {
      $session = session();
      $session->setFlashdata('swel_title', 'คุณจำเป็นต้องเข้าสู่ระบบ!');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำการจองตั๋ว');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ตกลง');
      return redirect()->to('/login');
    }
  }

  public function confirm_reservation()
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
      $data_reservation = $model_reservation->getReservationForConfirm($userId);
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
      return view('confirm_reservation', $data_sending);
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }

  public function kickReservationController()
  {
    return redirect()->to('/reservation');
  }

  public function addreservation()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    if (isset($ses_userid)) {
      $select_chair = $this->request->getVar('select-chair');
      $first_station = $this->request->getVar('first_station');
      $end_station = $this->request->getVar('end_station');
      $date = $this->request->getVar('date');
      $dock_id = $this->request->getVar('time');
      $date_create = date_create($date);
      $date_format = date_format($date_create, "dmy");
      $reserve_code = "V".$dock_id.$date_format;
      $model_ticketprice = new TicketPriceModel();
      $data_tickpetprice_getPrice = $model_ticketprice->getTicketPriceById($first_station, $end_station);
      $tickpet_price_id = $data_tickpetprice_getPrice['Tic_Price_ID'];
      $tickpet_price = $data_tickpetprice_getPrice['Tic_Price'];
      $total_price = ($select_chair*$tickpet_price);
      $model_reservation = new ReservationModel();
      $data = [
        'Reserve_Code' => $reserve_code,
        'User_ID' => $ses_userid,
        'Re_Seate' => $select_chair,
        'Re_DateTime' => date("Y-m-d H:i:s"),
        'Go_Date' => $date,
        'GoBack' => "GO",
        'Dock_car_id' => $dock_id,
        'Tic_Price_ID' => $tickpet_price_id,
        'Station_Start' => $first_station,
        'Station_End' => $end_station,
        'Total_Price' => $total_price,
        'Status' => "waiting",
      ];
      $model_reservation->save($data);
      return redirect()->to('/confirm-reservation');
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }
  
  public function confirm()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    if (isset($ses_userid)) {
      $Reserve_ID = $this->request->getVar('reId');
      $model_reservation = new ReservationModel();
      $confirm_Reservation = $model_reservation->confirmReservationById($ses_userid, $Reserve_ID);
      if ($confirm_Reservation) {
        $session->setFlashdata('swel_title', 'ยืนยันการจองสำเร็จ');
        $session->setFlashdata('swel_icon', 'success');
        $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
        return redirect()->to('/payment');
      }
    }
  }

  public function cancel()
  {
    $session = session();
    $ses_userid = $session->get('ses_id');
    if (isset($ses_userid)) {
      $Reserve_ID = $this->request->getVar('reId');
      $model_reservation = new ReservationModel();
      $delete_Reservation = $model_reservation->deleteReservationById($ses_userid, $Reserve_ID);
      if ($delete_Reservation) {
        $session->setFlashdata('swel_title', 'ยกเลิกการจองสำเร็จ');
        $session->setFlashdata('swel_icon', 'success');
        $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
        return redirect()->to('/reservation');
      }
    }
  }

  public function check_reservation()
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
      $model_payment = new PaymentModel();
      $data_payment = $model_payment->getReservationAfterConfirm($userId);
        foreach ($data_payment as $value) {
          $Reserve_ID = $value['Reserve_ID'];
          $data_sending['Reserve_ID'] = $Reserve_ID;
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
          $data_payment = $model_payment->getStatus($userId, $Reserve_ID);
          foreach ($data_payment as $value) {
            $data_sending['Confirm'] = $value['Confirm'];
            $data_sending['Note'] = $value['Note'];
            if ($value['Confirm'] == "cancel") {
              $data_sending['Status_Format'] = "<font color='red'>การจองถูกยกเลิก!</font>";
            } else if ($value['Confirm'] == "waiting") {
              $data_sending['Status_Format'] = "<font color='#205977'>กำลังตรวจสอบการชำระเงิน</font>";
            } else if ($value['Confirm'] == "success") {
              $data_sending['Status_Format'] = "<font color='green'>ชำระเงินสำเร็จแล้ว</font>";
            } else {
              $data_sending['Status_Format'] = "<font color='red'>มีบางอย่างผิดพลาด!</font>";
            }
          }
        }
        return view('check_reservation', $data_sending);
    } else {
      $session->setFlashdata('swel_title', 'เกิดข้อผิดพลาด');
      $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
      $session->setFlashdata('swel_icon', 'error');
      $session->setFlashdata('swel_button', 'ดำเนินการต่อ');
      return redirect()->to('/login');
    }
  }
}