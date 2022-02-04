<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Van</title>
	<?php require('heads/head.php'); ?>
</head>
<body>
<?php require('components/navbar.php'); ?>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 justify-content-md-center px-4">
        <div class=" tabcard_des">
          <h1 class="logreg-txt text-center py-5">สมัครสมาชิก</h1>
          <?php if(isset($validation)): ?>
          <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
          <?php endif; ?>
          <form action="/register/save" method="post">
            <div class="form-group row mb-4">
              <label for="inputfirstname" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">ชื่อ <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
                <input type="text" name="firstname" class="form-control" id="inputfirstname" value="<?= set_value('firstname'); ?>">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputlastname" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">นามสกุล <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
              <input type="text" name="lastname" class="form-control" id="inputlastname" value="<?= set_value('lastname'); ?>">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputphone" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">เบอร์โทรศัพท์ <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
                <input type="text" name="phone" class="form-control" id="inputphone" value="<?= set_value('phone'); ?>">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputemail" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">อีเมล <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
                <input type="email" name="email" class="form-control" id="inputemail" value="<?= set_value('email'); ?>">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputpassword" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">รหัสผ่าน <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
              <input type="password" name="password" class="form-control" id="inputpassword">
              </div>
            </div>
            <div class="form-group row mb-2">
              <label for="inputconfpassword" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">ยืนยันรหัสผ่าน <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
              <input type="password" name="confpassword" class="form-control mb-3" id="inputconfpassword">
                <input type="checkbox" name="acceptrule" id="cb-acceptrule" class="cb-acceptrule">
                <label for="cb-acceptrule" class="cb-acceptrule-txt mb-4">ฉันยอมรับ<a href="#" class="acceptrule-link">นโยบายและข้อตกลง</a>ของเว็บไซต์ทั้งหมด <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label><br/>
              </div>
            </div>
            <center>
              <button type="submit" class="btn btn-logreg-confirm mt-3 mb-5">สมัครสมาชิก</button>
            </center>
                </form>
                </div>
                </div>
            </div>
        </div>
        <?php require('components/footer.php'); ?>
</body>
</html>