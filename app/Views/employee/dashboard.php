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
    <div class="row mx-0 px-0">
      <div class="col-1 ps-0"></div>
      <div class="col-10">
        <center>
          <div class="row">
            <div class="col-6">
              <div class="tabcard-user">
                <h5>
                  จำนวนผู้ใช้บริการ
                </h5>
                <br>
                <div class="text-user">
                  790
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="tabcard-user">
                <h5>
                  จำนวนการจองตั๋ว
                </h5>
                <br>
                <div class="text-user">
                  67
                </div>
              </div>
            </div>
          </div>
        </center>
        <div class="tabcard-showuser">
          <h3>
            &nbsp;&nbsp;&nbsp;
            User
          </h3>
          <table class="tb-dash-table">
            <tr>
              <th class="tb-dash-th"></th>
              <th class="tb-dash-th">ชื่อ</th>
              <th class="tb-dash-th">Email</th>
              <th class="tb-dash-th">User ID</th>
            </tr>
            <?php foreach ($userdata as $value) { ?>
            <tr>
              <td class="tb-dash-td">
                <div class="form-check tb_rs_fix_radio">
                  <input type="checkbox" id="list_a1" name="carlist_a" value="1">
              </td>
              <td class="tb-dash-td">
                <label class="form-check-label" for="list_a1">
                  <?= $value['F_Name']." ".$value['L_Name']; ?>
                </label>
              </td>
              <td class="tb-dash-td">
                <label class="form-check-label" for="list_a1">
                <?= $value['Email']; ?>
                  <label>
              </td>
              <td class="tb-dash-td">
                <label class="form-check-label" for="list_a1">
                <?= $value['User_ID']; ?>
                <label>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="col-1 pe-0"></div>
    </div>
    </div> <!-- END CONTENT -->
</div> <!-- END Wrapper -->
</body>

</html>
<script>
  $(document).ready(function() {
    <?php if (session()->getFlashdata('swel_title_emp')) { ?>
      swal({
        title: "<?= session()->getFlashdata('swel_title_emp') ?>",
        text: "<?= session()->getFlashdata('swel_text_emp') ?>",
        icon: "<?= session()->getFlashdata('swel_icon_emp') ?>",
        button: "<?= session()->getFlashdata('swel_button_emp') ?>",
      });
    <?php } ?>
  });
</script>