<?php
  $session = session(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>I-Van</title>
	<?php require('components/header.php'); ?>
</head>
<body>
<?php require('components/navbar.php'); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 justify-content-md-center px-4">
            <div class=" tabcard_des">
                <h1 class="logreg-txt text-center py-5">ข้อมูลส่วนตัว</h1>
                <center>
                  <?php if (isset($Q_Picture) && !empty($Q_Picture)) { ?>
                    <img src="<?php echo base_url('360/uploads/userProfile/'.$Q_Picture) ?>" width="100px" height="100px" alt="N/A">
                  <?php } else { ?>
                    <img src="<?php echo base_url('images/no-picture.png') ?>" width="100px" height="100px" alt="N/A">
                  <?php } ?>
                </center>
                <br>
                <div class="container">
                <div class="row">
                    <div class="col-4">
                        <txt>ชื่อ </txt> 
                    </div>
                    <div class="col-4">
                        <txt> <?php echo $Q_F_Name; ?></txt> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <txt>นามสกุล </txt> 
                    </div>
                    <div class="col-4">
                        <txt><?php echo $Q_L_Name; ?> </txt> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <txt>เบอร์โทรศัพท์ </txt> 
                    </div>
                    <div class="col-4">
                        <txt><?php echo $Q_Phone; ?> </txt> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <txt>อีเมล </txt> 
                    </div>
                    <div class="col-4">
                        <txt><?php echo $Q_Email; ?> </txt> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <txt>รหัสผ่าน </txt> 
                    </div>
                    <div class="col-4">
                        <txt><a href="" style="text-decoration:none;">เปลี่ยนรหัสผ่าน</a></txt> 
                    </div>
                </div>
                </div>
                <br>
                <center>
                    <a href="/editprofile" class="btn btn-logreg-confirm mt-3 mb-5">แก้ไขโปรไฟล์</a>
                </center>
            </div>
        </div>
    </div>
</div>

<?php require('components/footer.php'); ?>
</body>
</html>