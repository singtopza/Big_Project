<?php
  $session = session(); 
  $checkname = $session->get('ses_id');
  $ses_F_Name = $session->get('ses_first_name');
  $ses_L_Name = $session->get('ses_last_name');
  $ses_Email = $session->get('ses_email');
  $ses_Phone = $session->get('ses_phone');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Van</title>
	<?php require('components/header.php'); ?>
</head>
<body>
<?php require('components/navbar.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 justify-content-md-center px-4">
      <div class="payment-tabcard-des">
        <h1 class="logreg-txt text-center py-3">ชำระเงิน</h1>
        <form action="/Payment/check" method="POST">
        <table class="pm-table" width="100%">
          <thead>
            <tr>
              <th colspan="3" class="pm-th">ข้อมูลผู้ใช้บริการ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pm-td" width="30%">ชื่อ-นามสกุล:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="username" value="<?php echo $ses_F_Name." ".$ses_L_Name; ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">เบอร์โทรศัพท์:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="phone" value="<?php echo $ses_Phone; ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">อีเมล:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="email" value="<?php echo $ses_Email; ?>" readonly></td>
            </tr>
          </tbody>
        </table>
        <table class="pm-table mt-4" width="100%">
          <thead>
            <tr>
              <th colspan="3" class="pm-th">ข้อมูลสถานะการจอง</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pm-td" width="30%">รหัสการจอง:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="res_id" value="<?php echo "001" ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">สถานีต้นทาง:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="res_start" value="<?php echo "นครปฐม(มาลัยแมน)" ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">สถานีปลายทาง:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="res_end" value="<?php echo "กาญจนบุรี(บขส.)" ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">วัน / เดือน / ปี:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="res_date" value="<?php echo "20/01/2564" ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">เวลาที่ออก:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="res_time" value="<?php echo "09.00 น." ?>" readonly></td>
            </tr>
            <tr>
              <td class="pm-td" width="30%">จำนวนที่นั่ง:</td>
              <td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext" name="res_chair" value="<?php echo "2" ?>" readonly></td>
            </tr>
          </tbody>
        </table>
        <table class="pm-table pm-del-border mt-4" width="100%">
          <thead>
            <tr>
              <th colspan="3" class="pm-th">ยอดเงินรวมที่ต้องชำระ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pm-td" width="30%"><strong>ราคารวม:</strong></td>
              <strong><td class="pm-td-input" width="70%"><input type="text" class="form-control-plaintext text-danger text-bold" name="res_id" value="<?php echo "฿140" ?>" readonly></td></strong>
            </tr>
          </tbody>
        </table>
        <table class="pm-table pm-del-top" width="100%">
          <thead>
            <tr>
              <th colspan="3" class="pm-th-bank">ช่องทางการชำระเงิน</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2" class="pm-td-input" width="100%">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                      <img src="<?php echo base_url('images/scb.jpg'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio1">หมายเลข: 123-4567-89</label>
                    </div>
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                      <img src="<?php echo base_url('images/ktb.jpg'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio2">หมายเลข: 123-4567-89</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                      <img src="<?php echo base_url('images/kbank.png'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio3">หมายเลข: 123-4567-89</label>
                    </div>
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                      <img src="<?php echo base_url('images/ttb.jpg'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio4">หมายเลข: 123-4567-89</label>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <th colspan="3" class="pm-th-bank">หลักฐานการชำระเงิน</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="50%">                
                <div class="mb-3 ps-5">
                  <input class="form-control" type="file" id="formFile">
                </div>
              </td>
              <td width="50%"></td>
            </tr>
          </tbody>
        </table>
        <center><button type="submit" class="btn btn-logreg-confirm mt-5 mb-4">ยืนยัน</button></center>
        </form>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php require('components/footer.php'); ?>
</body>
</html>