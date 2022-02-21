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
                        <p> สมเกียรติ ช่อเหมือน</p> 
                    </div>
                    
                </div>
    
                <div class="row row-check-re">
                    <div class="col-5">
                        <p class="text-center">เบอร์โทรศัพท์: </p> 
                    </div>
                    <div class="col-7">
                        <p>065-7285962</p> 
                    </div>
                    
                </div>
                <div class="row row-check-re">
                    <div class="col-5">
                        <p class="text-center">อีเมล : </p> 
                    </div>
                    <div class="col-7">
                        <p>Tko@webmail.npru.ac.th</p> 
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
                        <p class="text-center">รหัสการจอง: </p> 
                    </div>
                    <div class="col-7">
                        <p class="text-left">001</p> 
                    </div>
                    
                </div>
    <div class="row row-check-re">
                    <div class="col-5">
                        <p class="text-center">สถานีต้นทาง: </p> 
                    </div>
                    <div class="col-7">
                        <p>นครปฐม(มาลัยแมน)</p> 
                    </div>
                    
                </div>
    <div class="row row-check-re">
                    <div class="col-5">
                        <p class="text-center">สถานีปลายทาง: </p> 
                    </div>
                    <div class="col-7">
                        <p>กาญจนบุรี(บขส.)</p> 
                    </div>
                    
                </div>
     <div class="row row-check-re">
                    <div class="col-5">
                        <p class="text-center">วัน / เดือน / ปี  : </p> 
                    </div>
                    <div class="col-7">
                        <p>20/01/2564</p> 
                    </div>
                    
                </div>
    <div class="row row-check-re">
                    <div class="col-5">
                        <p class="text-center">เวลาที่ออก  : </p> 
                    </div>
                    <div class="col-7">
                        <p>09.00 น.</p> 
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
<p>ราคาตั๋วทั่วไป <span style = "margin-left: 180px;">จำนวนที่นั่ง</span>
<span style = "margin-left: 180px;">ราคา</span> 
<span style = "margin-left: 180px;">รวม(บาท)</span></p>
</div>
<hr>
<div class="text-data1">
<p><span style = "margin: 100px;">2</span>
<span style = "margin: 0.5px;">x</span> 
<span style = "margin: 150px;">70</span> 
<span style = "margin: 30px;">140</span></p>
</div>
<hr> 
<p>ช่องทางการชำระเงิน</p>
<img src="<?php echo base_url('images/scb.jpg')?>" alt="" width="50px" height="50px"/>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="<?php echo base_url('images/ktb.jpg')?>" alt="" width="50px" height="50px"/>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="<?php echo base_url('images/kbank.png')?>" alt="" width="50px" height="50px"/>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="<?php echo base_url('images/ttb.jpg')?>" alt="" width="50px" height="50px"/>&nbsp;&nbsp;&nbsp;&nbsp;

  </div>
  <div class="btn-group" role="group" aria-label="Basic example">
          <button class="btn btn-logreg-confirm mb-5">ชำระเงิน</button>
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