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
                    <h1 class="logreg-txt text-center py-5">แก้ไขข้อมูลส่วนตัว</h1>
                    <center>
                      <?php if (isset($Q_Picture) && !empty($Q_Picture)) { ?>
                    <img src="<?php echo base_url('360/uploads/userProfile/'.$Q_Picture); ?>" width="100px" height="100px" alt="<?php echo $Q_Picture; ?>" class="profile-user-profile">
                    <?php } else { ?>
                    <img src="<?php echo base_url('images/no-picture.png') ?>" width="100px" height="100px" alt="N/A">
                    <?php } ?>
                    </center>
                    <br>
                    <div class="container">
                        <form action="<?php echo base_url('/UserController/edit'); ?>" method="post" enctype="multipart/form-data">
                        <center><label for="profile_choosefile" class=" btn btn-primary mb-4" id="choose-file-label"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;เลือกภาพ</label>
                        <input class="my-3" type="file" name="pic" id="profile_choosefile" accept="image/x-png,image/jpeg,image/jpg" style="display: none;" />
                        </center>
                        <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                        <?php endif; ?>
                        <div class="form-group row mb-4">
                            <label for="firstname" class="col-md-3 col-sm-4 col-form-label logreg-label-txt">ชื่อ </label>
                        <div class="col-md-9 col-sm-8">
                            <input type="text" name="firstname" class="form-control" id="inputforfirstname" value="<?php if(isset($Q_F_Name)){echo $Q_F_Name;} ?>">
                        </div>
                        </div>
                    <div class="form-group row mb-4">
                            <label for="text" class="col-md-3 col-sm-4 col-form-label logreg-label-txt">นามสกุล </label>
                        <div class="col-md-9 col-sm-8">
                            <input type="text" name="lastname" class="form-control" id="inputforlastname" value="<?php if(isset($Q_L_Name)){echo $Q_L_Name;} ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                            <label for="phone" class="col-md-3 col-sm-4 col-form-label logreg-label-txt">เบอร์โทรศัพท์ </label>
                        <div class="col-md-9 col-sm-8">
                            <input type="number" name="phone" class="form-control" id="inputforphone" value="<?php if(isset($Q_Phone)){echo $Q_Phone;} ?>">
                        </div>
                    </div>
                    <br>
                    <center>
                      <button type="submit" class="btn btn-logreg-confirm mt-3 mb-5">บันทึกการเปลี่ยนแปลง</button>
                    </center>
                    </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php require('components/footer.php'); ?>
</body>
</html>
<script>
$(document).ready(function () {
	$('#profile_choosefile').change(function () {
		var i = $(this).prev('label').clone();
		var file = $('#profile_choosefile')[0].files[0].name;
		$(this).prev('label').text(file);
	}); 
});
</script>
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