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
      <div class="col-md-10 justify-content-md-center px-4">
        <div class=" tabcard_des" style="padding: 20px 10% 20px 10%;">
          <h1 class="logreg-txt text-center py-5">รายงานปัญหา</h1>
          <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
          <?php endif; ?>
          <?php if (session()->getFlashdata('success_report')) { ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success_report'); ?></div>
            <center><a href="<?php echo base_url('/report'); ?>" class="btn btn-logreg-confirm mt-5 mb-5">ย้อนกลับ</a></center>
          <?php } else { ?>
            <form action="<?php echo base_url('/ComplaintController/add_report'); ?>" method="post">
            <div class="row">
              <div class="col-3 mb-4 pe-4 text-end">
                <label class="fs18">ชื่อเรื่อง:</label>
              </div>
              <div class="col-9 mb-4">
                <div class="input-group">
                  <i class="fa fa-edit icon fa-lg icon-heed" style="font-weight: normal;"></i>
                  <input class="input-fieldd form-control fs18" type="text" name="title" pattern="{5,30}" minlength="5" maxlength="30" required>
                </div>
              </div>
              <div class="col-3 mb-4 pe-4 text-end">
                <label class="fs18">ประเภทรายงานปัญหา:</label>
              </div>
              <div class="col-9 mb-4">
                <div class="input-group">
                <!-- <i class="fa fa-edit icon fa-lg icon-heed" style="font-weight: normal;"></i> -->
                <!-- <select name="type" class="form-control selected-gray fs18"> -->
                <select name="type" class="form-select input-fieldd fs18" style="max-width: 50%">
                  <option value="0" class="hide-selected" selected>เลือกประเภทรายงาน</option>
                  <option value="1">เกี่ยวกับคนขับรถตู้โดยสารสาธารณะ</option>
                  <option value="2">เกี่ยวกับพนักงานขายตั๋ว</option>
                  <option value="3">เกี่ยวกับระบบของเว็บไซต์</option>
                  <option value="4">อื่นๆ</option>
                </select>
                </div>
              </div>
              <div class="col-3 mb-4 pe-4 text-end">
                <label class="fs18">ข้อความ:</label>
              </div>
              <div class="col-9 mb-4">
                <div class="input-group">
                  <i class="fa fa-edit icon fa-lg icon-heed" style="font-weight: normal;"></i>
                  <textarea class="form-control input-fieldd fs18" rows="8" id="comment" name="message" pattern="{20,1000}" minlength="20" maxlength="1000" required></textarea>
                </div>
              </div>
            </div>
              <center>
                <button type="submit" class="btn btn-logreg-confirm mt-3 mb-5">ส่งข้อความ</button>
              </center>
            </form>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <?php require('components/footer.php'); ?>
</body>

</html>