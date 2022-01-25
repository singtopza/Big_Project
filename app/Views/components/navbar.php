<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-navbar">
<div class="container-fluid">
  <a class="nav-link nav-home" href="/Home">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
    <?php $checkname = $session->get('ses_cus_id'); ?>
    <!-- if(isset($checkname)) { ?>
    <li class="nav-item">
        <a class="nav-link " href="/result">ผลการลงทะเบียน</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/adddata">กรอกแบบฟอร์ม</a>
    </li>
    (else)
    <li class="nav-item">
      <a class="nav-link" onclick="alertmsg();" style="cursor: pointer;">ผลการลงทะเบียน</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" onclick="alertmsg();" style="cursor: pointer;">กรอกแบบฟอร์ม</a>
    </li>
    (}) -->
    </ul>
    <form class="d-flex">
      <?php
      if(isset($checkname)) {
        $ses_F_Name = $session->get('ses_first_name');
        $ses_L_Name = $session->get('ses_last_name');
        ?>
      
        <a href="/username" class="nav-link pe-4" style="color:white; text-decoration:none;"><?php echo $ses_F_Name." ".$ses_L_Name; ?></a>
        <a href="/Login/logout" class="btn btn-outline-light my-2 my-sm-0">ออกจากระบบ</a>
      <?php } else { ?>
        <a href="/login" class="btn btn-outline-light my-2 my-sm-0 me-2">เข้าสู่ระบบ</a>
        <a href="/register" class="btn btn-outline-light my-2 my-sm-0">สมัครสมาชิก</a>
      <?php } ?>
    </form>
  </div>
  </div>
</nav>
<script>
  function alertmsg() {
    alert("โปรดลงชื่อเข้าใช้ เพื่อกรอกแบบฟอร์มลงทะเบียนวิ่ง");
  }
</script>