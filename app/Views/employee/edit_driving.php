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
        <div class="g-3 align-items-center">
          <div class="tabcard_em px-4">
            <div class="head-em">
              <h4 class="text-center my-5">แก้ไขข้อมูลการเดินรถ</h4>
            </div>

            <div class="row">
              <div class="col-1"></div>
              <div class="col-2">
                <label for="inputPassword6" class="col-form-label">ID-ของรถ:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-pencil-square-o fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="IDรถ">
                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-2">
                <label for="inputPassword6" class="col-form-label">รอบรถวิ่ง:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-clock-o fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="เวลาที่ออก">
                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-2">
                <label for="inputPassword6" class="col-form-label">ลำดับรอบ:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-clock-o fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="ลำดับรอบ">
                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-2">
                <label for="inputPassword6" class="col-form-label">วันที่:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-calendar fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="เลือกวันที่">

                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <center>
              <button type="button" class="button-edit">แก้ไขข้อมูล</button>
              <button type="button" class="button-delete">ยกเลิก</button>
            </center>
          </div>
        </div>
      </div>
    </div> <!-- END CONTENT -->
  </div> <!-- END Wrapper -->
</body>
</html>