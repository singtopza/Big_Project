<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Van</title>
  <?php require_once(APPPATH . 'Views\components_emp\header.php'); ?>
</head>
<body>
  <div class="wrapper">
    <?php require_once(APPPATH . 'Views\components_emp\wrapper.php'); ?>
    <div id="content">
      <?php require_once(APPPATH . 'Views\components_emp\navbar.php'); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="head-em">
              <h4 class="text-center my-5">ตรวจสอบการชำระเงิน</h4>
              <hr>
            </div>
            <div class="tabcard_em px-4">
              <?php foreach ($listPaymentAll as $value) { ?>
                <div id="tb-payment-<?= $value['Pay_ID']; ?>">
                <div class="row" style="text-align: left;">
                  <div class="col-3">
                    <txt>ชื่อ-นามสกุล :</txt><br>
                    <txt>วัน/เดือน/ปี :</txt><br>
                    <txt>เวลาที่จอง :</txt>
                    <div class="txt-pay">
                    รหัสการชำระเงิน : <?= $value['Pay_ID']; ?>
                  </div>
                  </div>
                  <div class="col-4">
                    <txt>
                      <?php
                      echo $value['F_Name'] . " " . $value['L_Name'];
                      ?>
                    </txt><br>
                    <txt><?= $value['Go_Date']; ?></txt><br>
                    <txt><?= $value['Van_Out']; ?> น.</txt>
                  </div>
                  <div class="col-1">
                    <center>
                      <img src="<?= base_url('360/uploads/slip/'.$value['Slip']); ?>" class="pt-2" width="100%" data-bs-toggle="modal" data-bs-target="#<?= "IDIS".$value['Pay_ID']; ?>">
                      <span class="text-danger"><?= "฿".$value['Total_Price']; ?></span>
                      <!-- Modal -->
                      <div class="modal fade" id="<?= "IDIS".$value['Pay_ID']; ?>" tabindex="-1" aria-labelledby="ExampleLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <img src="<?= base_url('360/uploads/slip/'.$value['Slip']); ?>" width="100%">
                            </div>
                          </div>
                        </div>
                      </div>
                    </center>
                  </div>
                  <div class="col-2">
                    <br>
                    <button class="btn button-check" onclick="update_payment(<?= $value['Pay_ID']; ?>)">ยืนยัน</button>
                  </div>
                  <div class="col-2">
                    <br>
                    <!-- อยู่ระหว่างการดำเนินการ -->
                    <a href="<?php echo base_url('PaymentController/update_payment?pay='); ?><?= $value['Pay_ID']; ?>" class="btn btn-outline-danger">ลบข้อมูล</a>
                  </div>
                </div>
                <hr>
                </div>
                <?php } ?>
            </div>
            <script>
                  function update_payment(id) {
                    swal({
                      title: "คุณมั่นใจที่จะอนุมัติการจองหรือไม่?",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        $.ajax({
                          type: "POST",
                          url: "ajax_query/ajax_updatepayment.php",
                          dataType: "html",
                          data: {
                            pay_id: id
                          },
                          error() {
                            alert("มีบางอย่างผิดพลาด โปรดติดต่อผู้ดูแลระบบโดยด่วน!");
                          }
                        });
                        document.getElementById("tb-payment-"+id).style.display = "none";
                        swal("ยืนยันข้อมูลการชำระเงินเสร็จสิ้น", {
                          icon: "success",
                        });
                      }
                    });
                  }
                </script>
</body>
</html>