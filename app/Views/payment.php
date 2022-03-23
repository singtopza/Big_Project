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
        <form action="/PaymentController/add_payment" method="POST" enctype="multipart/form-data">
        <table class="pm-table" width="100%">
          <thead>
            <tr>
              <th colspan="3" class="pm-th">ข้อมูลผู้ใช้บริการ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pm-td pt-3" width="30%">ชื่อ-นามสกุล:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Q_F_Name." ".$Q_L_Name; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">เบอร์โทรศัพท์:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Q_Phone; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">อีเมล:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Q_Email; ?></td>
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
              <td class="pm-td pt-3" width="30%">รหัสการจอง:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Reserve_ID; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">สถานีต้นทาง:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Station_Start; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">สถานีปลายทาง:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Station_End; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">วัน / เดือน / ปี:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Go_Date; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">เวลาที่ออก:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Van_Out; ?></td>
            </tr>
            <tr>
              <td class="pm-td pt-3" width="30%">จำนวนที่นั่ง:</td>
              <td class="pm-td-input pt-3" width="70%"><?php echo $Re_Seate; ?></td>
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
              <td class="pm-td pt-3" width="30%"><strong>ราคารวม:</strong></td>
              <td class="pm-td-input pt-3 text-danger" width="70%"><strong><?php echo "฿".$Total_Price; ?></strong></td>
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
                      <input type="radio" id="customRadio1" name="radioBank" class="custom-control-input" value="1">
                      <img src="<?php echo base_url('images/scb.jpg'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio1">หมายเลข: 123-4567-89</label>
                    </div>
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio2" name="radioBank" class="custom-control-input" value="2">
                      <img src="<?php echo base_url('images/ktb.jpg'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio2">หมายเลข: 123-4567-89</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio3" name="radioBank" class="custom-control-input" value="3">
                      <img src="<?php echo base_url('images/kbank.png'); ?>" width="50px" class="mx-3 mb-4">
                      <label class="custom-control-label" for="customRadio3">หมายเลข: 123-4567-89</label>
                    </div>
                    <div class="custom-control custom-radio ps-5">
                      <input type="radio" id="customRadio4" name="radioBank" class="custom-control-input" value="4">
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
                  <input type="file" name="slip" id="formFile" class="form-control" accept="image/x-png,image/jpeg,image/jpg">
                </div>
              </td>
              <td width="50%"></td>
            </tr>
          </tbody>
        </table>
        <center><button type="submit" class="btn btn-logreg-confirm mt-5 mb-4">ชำระเงิน</button></center>
        </form>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php require('components/footer.php'); ?>
</body>
</html>
<script>
$(document).ready(function () {
  <?php if(session()->getFlashdata('swel_title')) { ?>
    swal({
      title: "<?= session()->getFlashdata('swel_title') ?>",
      text: "<?= session()->getFlashdata('swel_text') ?>",
      icon: "<?= session()->getFlashdata('swel_icon') ?>",
      button: "<?= session()->getFlashdata('swel_button') ?>",
    });
  <?php } ?>
});
</script>