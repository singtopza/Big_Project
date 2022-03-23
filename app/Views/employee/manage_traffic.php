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
      <div class="col-md-10">
        <div class="head-em">
          <h4 class="text-center my-5">จัดการการเดินรถ</h4>
          <hr>
        </div>
        <div class="tabcard_em px-4">
          <center>
            <table class="mange-table">
              <tr>
                <th class="mange-th"></th>
                <th class="mange-th">ID</th>
                <th class="mange-th">หมายเลขรถ</th>
                <th class="mange-th">รอบเวลารถ</th>
              </tr>
              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">1<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.2(จ)/81-98<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">07.00 น.<label>
                </td>
              </tr>

              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">2<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.1(ด)/77-56<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">09.00 น.<label>
                </td>
              </tr>

              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">3<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.4(พ)/82-98<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">11.00 น.<label>
                </td>
              </tr>

              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">4<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.2(จ)/81-98<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">13.00 น.<label>
                </td>
              </tr>

              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">5<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.1(ด)/77-56<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">15.00 น.<label>
                </td>
              </tr>

              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">6<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.4(พ)/82-98<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">17.00 น.<label>
                </td>
              </tr>

              <tr>
                <td class="mange-td">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">7<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">ม.2(จ)/81-98<label>
                </td>
                <td class="mange-td">
                  <label class="form-check-label" for="list_b1">18.00 น.<label>
                </td>
              </tr>
            </table>

          </center>
          <br>
          <center>
            <a href="<?php echo base_url('/add-driving'); ?>" class="button-add">เพิ่มข้อมูล</a>
            <a href="<?php echo base_url('/edit-driving'); ?>" class="button-edit">แก้ไขข้อมูล</a>
            <a href="<?php echo base_url('/del-driving'); ?>" class="button-delete">ลบข้อมูล</a>
          </center>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  </div> <!-- END CONTENT -->
</div> <!-- END Wrapper -->
</body>
</html>