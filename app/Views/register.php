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
          <h1 class="logreg-txt text-center py-5">สมัครสมาชิก</h1>
          <?php if(isset($validation)): ?>
          <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
          <?php endif; ?>
          <form action="/UserController/new" method="post">
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
                <input type="number" name="phone" class="form-control" id="inputphone" onkeydown="javascript: return event.keyCode == 69 ? false : true" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" value="<?= set_value('phone'); ?>" maxlength="10">
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
                <input type="checkbox" name="acceptrule" id="cb-acceptrule" class="cb-acceptrule" required>
                <label for="cb-acceptrule" class="cb-acceptrule-txt mb-4">ฉันยอมรับ<a href="<?php echo base_url('/policy'); ?>" class="acceptrule-link" target="_blank">นโยบายและข้อตกลง</a>ของเว็บไซต์ทั้งหมด <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label><br/>
              </div>
            </div>
            <center>
              <button type="button" class="btn btn-logreg-confirm mt-3 mb-5" data-bs-toggle="modal" data-bs-target="#register_model">สมัครสมาชิก</button>
            </center>

              <!-- Modal -->
              <div class="modal fade" id="register_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog reg-mt-dialog">
                  <div class="modal-content reg-model-content">
                    <div class="modal-header del-hr-model">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <span>ระบบจะทำการจัดเก็บข้อมูลส่วนบุคคลของผู้ใช้บริการในบางส่วน<br/>เพื่อนำไปใช้ในการบันทึกสถิติ ในการพัฒนาระบบต่อไป</span>
                      <button type="submit" class="btn btn-logreg-confirm mt-5">ยืนยันการสมัคร</button>
                    </div>
                  </div>
                </div>
              </div>
                </form>
                </div>
                </div>
            </div>
        </div>
        <?php require('components/footer.php'); ?>
</body>
</html>