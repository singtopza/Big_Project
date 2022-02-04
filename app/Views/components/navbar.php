<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid nav-fix-width">
    <a class="nav-link nav-home logo" href="<?php echo base_url('/Home'); ?>">I-Van</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fontNav" id="navbarNav">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link nav_link_text" href="<?php echo base_url('/Home'); ?>">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_link_text" href="<?php echo base_url('/reservation'); ?>">จองตั๋ว </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_link_text" href="<?php echo base_url('/table_reservation'); ?>">ตารางเวลารถ</a>
				</li>
        <?php
          $checkname = $session->get('ses_cus_id'); 
          $ses_F_Name = $session->get('ses_first_name');
          $ses_L_Name = $session->get('ses_last_name');
          if(isset($checkname)) {
        ?>	
          <li class="nav-item">
            <a class="nav-link nav_link_text" href="<?php echo base_url('/his_reservation'); ?>">ประวัติการจอง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav_link_text" href="<?php echo base_url('/Home'); ?>">ตรวจสอบสถานะการจอง</a>
          </li>
        <?php } else {} ?>
      </ul>
      <?php if(isset($checkname)) { ?>
      <div>
        <center>
          <a href="<?php echo base_url('/profile'); ?>">
            <i class="fas fa-bell text-black"></i>
          </a>
        <center>
      </div>
      <div class="dropdown dropdown-user">
        <center>
          <a href="/profile" class="nav-link dropdown-toggle" role="button" id="id-btn-uname" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo $ses_F_Name." ".$ses_L_Name; ?>
          </a>
        </center>
      <div class="navbar-nav">
        <center>
          <ul class="dropdown-menu-ul dropdown-menu pe-3" aria-labelledby="id-btn-uname" style="text-align:right;">
            <li>
              <a href="<?php echo base_url('/myorder'); ?>" class="usrlist"><font color="#000000">โปรไฟล์</font></a>
            </li>
            <li>
              <a href="<?php echo base_url('/login/logout'); ?>" class="usrlist"><font color="red">ออกจากระบบ</font></a>
            </li>
          </ul>
        </center>
      </div>
    </div>
      <a href="<?php echo base_url('/profile'); ?>" class="nav-link px-0 py-0">
        <img src="<?php echo base_url('images/no-picture.png') ?>" class="img-profile">
      </a>
      <?php } else { ?>
      <center>
				<a href="<?php echo base_url('/login'); ?>" class="nav-link button-login" role="button">เข้าสู่ระบบ</a>
        <a href="<?php echo base_url('/register'); ?>" class="nav-link button-regis" role="button" href="#">สมัครสมาชิก</a>
      </center>
      <?php } ?>
    </div> 
    </div>
  </div>
</nav>