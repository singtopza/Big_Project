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
          <h1 class="logreg-txt text-center py-5">รายงานปัญหา</h1>
          <form action="/report/save" method="post">
            <div class="form-group row mb-4">
              <label for="inputfirstname" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">ชื่อเรื่อง <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
                <input type="text" name="firstname" class="form-control" id="inputfirstname">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputlastname" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">ข้อความ <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
              <input type="text" name="lastname" class="form-control" id="inputlastname">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputpassword" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">ชื่อ-นามสกุล <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
              <input type="password" name="password" class="form-control" id="inputpassword">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label for="inputemail" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">อีเมล <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
                <input type="email" name="email" class="form-control" id="inputemail">
              </div>
            </div>
            <div class="form-group row mb-4">
            <label for="inputphone" class="col-md-3 col-sm-4 col-form-label logreg-label-txt pe-0">เบอร์โทรศัพท์ <font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;*</font></label>
              <div class="col-md-9 col-sm-8">
                <input type="text" name="phone" class="form-control" id="inputphone">
              </div>
            </div>
            <center>
              <button type="submit" class="btn btn-logreg-confirm mt-3 mb-5">ส่งข้อความ</button>
            </center>
                </form>
                </div>
                </div>
            </div>
        </div>
        <?php require('components/footer.php'); ?>
</body>
</html>