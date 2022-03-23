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
              <h4 class="text-center my-5">เพิ่มข้อมูลการเดินรถ</h4>
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
                <label for="inputPassword6" class="col-form-label">หมายเลขรถ:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-edit icon fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="หมายเลขรถ">
                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-2">
                <label for="inputPassword6" class="col-form-label">รอบเวลารถ:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-clock-o fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="รอบเวลารถ">
                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-2">
                <label for="inputPassword6" class="col-form-label">เลือกวันที่:</label>
              </div>
              <div class="col-7">
                <div class="input-group">
                  <i class="fa fa-calendar fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="form-control " type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required placeholder="เลือกเวลา">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="margin-left: 5px;">
                  <label style="margin-left: 10px;" for="vehicle1">เลือกทุกวัน</label>
                </div>
              </div>
              <div class="col-1"></div>
            </div>
            <br><br>
            <center>
              <button type="button" class="button-add">เพิ่มข้อมูล</button>
              <button type="button" class="button-delete">ยกเลิก</button>
            </center>
          </div>
        </div>
      </div>
    </div> <!-- END CONTENT -->
  </div> <!-- END Wrapper -->
</body>
</html>
</script>