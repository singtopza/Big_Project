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
          <!-- Coding Here!!! -->
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