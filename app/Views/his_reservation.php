<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Van</title>
	<?php require('components/header.php'); ?>
</head>
<body>
<?php require('components/navbar.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="tabcard_des px-4">
        <h2 class="text-center my-5">ประวัติการจองรถตู้</h2>
        <center>
          <table class="his-res-table">
            <tr>
              <th class="his-res-th">ลำดับ</th>
              <th class="his-res-th">วันที่จอง</th>
              <th class="his-res-th">จำนวนที่นั่ง</th>
              <th class="his-res-th">รหัสตั๋ว</th>
            </tr>
            <?php foreach ($history as $history_){?>
            <tr>
              <td class="his-res-td">
                <label class="form-check-label" for="list_b1">1</label>
              </td>
              <td class="his-res-td">
                <label class="form-check-label" for="list_b1"><?php echo $history_['Go_Date']; ?><label>
              </td>
              <td class="his-res-td">
                <label class="form-check-label" for="list_b1">ทำการจองที่นั่ง จำนวน <?php echo $history_['Re_Seate']; ?> ที่นั่งสำเร็จ<label>
              </td>
              <td class="his-res-td">
                <label class="form-check-label" for="list_b1"><?php echo $history_['Tick_Code']; ?><label>
              </td>
            </tr>
            <?php } ?>
          </table>
        </center>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php require('components/footer.php'); ?>
</body>
</html>
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