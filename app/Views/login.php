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
                    <h1 class="logreg-txt text-center py-5">เข้าสู่ระบบ</h1>
                    <?php if(session()->getFlashdata('msg')): ?>
                      <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                    <?php endif; ?>
                    <form action="/login/auth" method="post">
                    <div class="form-group row mb-4">
                    <label for="staticEmail" class="col-md-3 col-sm-4 col-form-label logreg-label-txt">อีเมล</label>
                    <div class="col-md-9 col-sm-8">
                    <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                  <label for="inputPassword" class="col-md-3 col-sm-4 col-form-label logreg-label-txt">รหัสผ่าน</label>
                  <div class="col-md-9 col-sm-8">
                  <input type="password" name="password" class="form-control mb-3" id="inputforpassword">
                  <input type="checkbox" name="rememberme" id="cb-rememberme" class="cb-rememberme">
                  <label for="cb-rememberme" class="cb-rememberme-txt mb-4">จดจำฉัน</label><br/>
                  <label for="cb-rememberme" class="unaccount-txt">ยังไม่มีบัญชี <a href="" class="unaccount-link">คลิกที่นี่</a></label>
                  </div>
                </div>
                    <center>
                      <div class="mt-5"><a href="" class="forgot-pwd-txt">ลืมรหัสผ่าน?</a></div>
                      <button type="submit" class="btn btn-logreg-confirm mt-3 mb-5">เข้าสู่ระบบ</button>
                    </center>
                </form>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
        </div>
<?php require('components/footer.php'); ?>
</body>
</html>