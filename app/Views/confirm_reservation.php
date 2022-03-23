<!DOCTYPE html>
<html lang="en">

<head>
  <title>I-Van</title>
  <?php require('components/header.php'); ?>
</head>

<body>
  <?php require('components/navbar.php'); ?>
  <div class="container">
    <div class="row row-check-re">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="tabcard_des px-4">
          <center>
            <h2 class="text-center my-5">ยืนยันสถานะการจองตั๋ว</h2>
            <div class="card">
              <div class="card-header card-header-check-re">
                <p>ข้อมูลผู้ใช้บริการ</p>
              </div>
              <div class="card-body card-body-check-re">
                <div class="text-data">
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">ชื่อ-นามสกุล: </p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Q_F_Name." ".$Q_L_Name; ?></p>
                    </div>
                  </div>
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">เบอร์โทรศัพท์: </p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Q_Phone; ?></p>
                    </div>
                  </div>
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">อีเมล: </p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Q_Email; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-distance">
            </div>
            <div class="card">
              <div class="card-header card-header-check-re">
                <p>ข้อมูลสถานะการจอง</p>
              </div>
              <div class="card-body card-body-check-re">
                <div class="text-data">
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">รหัสการจอง:</p>
                    </div>
                    <div class="col-7">
                      <p class="text-left"><?php echo $Reserve_ID; ?></p>
                    </div>
                  </div>
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">สถานีต้นทาง:</p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Station_Start; ?></p>
                    </div>
                  </div>
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">สถานีปลายทาง:</p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Station_End; ?></p>
                    </div>
                  </div>
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">วัน / เดือน / ปี: </p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Go_Date; ?></p>
                    </div>
                  </div>
                  <div class="row row-check-re">
                    <div class="col-5">
                      <p class="text-center">เวลาที่ออก: </p>
                    </div>
                    <div class="col-7">
                      <p><?php echo $Van_Out; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-distance card-distance-check-re">

            </div>
            <div class="card">
              <div class="card-header card-header-check-re">
                <p>ยอดเงินรวมที่ต้องชำระ</p>
              </div>
              <div class="card-body card-body-check-re">
                <div class="text-data">
                  <div class="text-data1">
                    <p>ราคาตั๋วทั่วไป <span style="margin-left: 180px;">จำนวนที่นั่ง</span>
                      <span style="margin-left: 180px;">ราคา</span>
                      <span style="margin-left: 180px;">รวม(บาท)</span>
                    </p>
                  </div>
                  <hr>
                  <div class="text-data1">
                    <p><span style="margin: 100px;"><?php echo $Re_Seate; ?></span>
                      <span style="margin: 0.5px;">x</span>
                      <span style="margin: 150px;"><?php echo $Tic_Price; ?></span>
                      <span style="margin: 30px;"><?php echo $Total_Price; ?></span>
                    </p>
                  </div>
                  <hr>
                  <p>ช่องทางการชำระเงิน</p>
                  <img src="<?php echo base_url('images/scb.jpg') ?>" alt="" width="50px" height="50px" />&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="<?php echo base_url('images/ktb.jpg') ?>" alt="" width="50px" height="50px" />&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="<?php echo base_url('images/kbank.png') ?>" alt="" width="50px" height="50px" />&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="<?php echo base_url('images/ttb.jpg') ?>" alt="" width="50px" height="50px" />&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="btn-group" role="group">
                  <a href="<?php echo base_url('/ReservationController/confirm')."?reId=$Reserve_ID" ?>" class="btn btn-logreg-confirm mb-5">ยืนยันการจอง</a><p class="px-3"></p>
                  <a href="<?php echo base_url('/ReservationController/cancel')."?reId=$Reserve_ID" ?>" class="btn btn-logreg-confirm mb-5">ยกเลิกการจอง</a>
                </div>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
  <?php require('components/footer.php'); ?>
</body>
</html>