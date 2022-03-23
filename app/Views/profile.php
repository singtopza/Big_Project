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
                    <img src="<?php echo base_url('360/uploads/userProfile/'.$Q_Picture) ?>" width="100px" height="100px" alt="<?php echo $Q_Picture; ?>" class="profile-user-profile">
                  <?php } else { ?>
                    <img src="<?php echo base_url('images/no-picture.png') ?>" width="100px" height="100px" alt="N/A">
                  <?php } ?>
                </center>
                <br>
                <div class="container">
                <div class="row mt-4">
                  <div class="col-2"></div>
                  <div class="col-4 txt-color-1">
                    <txt>ชื่อ </txt> 
                  </div>
                  <div class="col-4 txt-color-5">
                    <txt> <?php echo $Q_F_Name; ?></txt> 
                  </div>
                  <div class="col-2"></div>
                </div>
                <div class="row mt-4">
                <div class="col-2"></div>
                    <div class="col-4 txt-color-1">
                        <txt>นามสกุล </txt> 
                    </div>
                    <div class="col-4 txt-color-5">
                        <txt><?php echo $Q_L_Name; ?> </txt> 
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mt-4">
                <div class="col-2"></div>
                    <div class="col-4 txt-color-1">
                        <txt>เบอร์โทรศัพท์ </txt> 
                    </div>
                    <div class="col-4 txt-color-5">
                        <txt><?php echo $Q_Phone; ?> </txt> 
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mt-4">
                <div class="col-2"></div>
                    <div class="col-4 txt-color-1">
                        <txt>อีเมล </txt> 
                    </div>
                    <div class="col-4 txt-color-5">
                        <txt><?php echo $Q_Email; ?> </txt> 
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mt-4">
                <div class="col-2"></div>
                    <div class="col-4 txt-color-1">
                        <txt>รหัสผ่าน </txt> 
                    </div>
                    <div class="col-4 txt-color-5">
                        <txt><a href="<?php echo base_url('/change-password'); ?>" class="unlink">เปลี่ยนรหัสผ่าน</a></txt> 
                    </div>
                    <div class="col-2"></div>
                </div>
                </div>
                <br>
                <center>
                    <a href="<?php echo base_url('/edit-form'); ?>" class="btn btn-logreg-confirm mt-3 mb-5">แก้ไขโปรไฟล์</a>
                </center>
            </div>
        </div>
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