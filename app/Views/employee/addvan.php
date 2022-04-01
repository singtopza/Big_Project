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
      <div class="col-md-10 justify-content-md-center px-4">
      <h1 class="logreg-txt text-center py-5">เพิ่มข้อมูลรถ</h1>
        <div class=" tabcard_des">
          <form action="/addcar/save" method="post">
            <div class="input-report">
              <label class="fs20">รหัสรถ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
              <input class="input-fieldd" type="text" placeholder="รหัสรถ" name="title"></textarea>
            </div>
            <div class="input-report">
              <label class="fs20">หมายเลขรถ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
              <input class="input-fieldd" type="text" placeholder="หมายเลขรถ" name="title"></textarea>
            </div>
            <div class="input-report">
              <label class="fs20">หมายเลขทะเบียนรถ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
              <input class="input-fieldd" type="text" placeholder="หมายเลขทะเบียนรถ" name="name-surname"></textarea>
            </div>
            <div class="input-report">
              <label class="fs20">ชื่อผู้ขับ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
              <input class="input-fieldd" type="text" placeholder="ชื่อผู้ขับ" name="email"></textarea>
            </div>

            <div class="input-report">
              <label class="fs20">จำนวนที่รองรับ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
              <input class="input-fieldd" type="text" placeholder="จำนวนที่รองรับ" name="tel"></textarea>
            </div>
            <center>
              <button class="btn btn-success">เพิ่มข้อมูล</button>&nbsp; &nbsp; &nbsp;
              <button class="btn btn-outline-danger">ยกเลิก</button>
            </center>
          </form>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div> <!-- END CONTENT -->
</div> <!-- END Wrapper -->
</body>
</html>