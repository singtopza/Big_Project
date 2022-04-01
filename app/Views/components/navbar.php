<?php $session = session(); ?>
<nav class="navbar navbar-expand-xxl navbar-light bg-light">
  <div class="container-fluid nav-fix-width">
    <a class="nav-link nav-home logo" href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('ivanicon.png'); ?>" height="50px" class="pe-3"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fontNav" id="navbarNav">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link nav_link_text" href="<?php echo base_url('/'); ?>">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_link_text" href="<?php echo base_url('/reservation'); ?>">จองตั๋ว </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_link_text" href="<?php echo base_url('/table'); ?>">ตารางเวลารถ</a>
				</li>
        <?php
          $ses_userid = $session->get('ses_id');
          $ses_Pos_ID = $session->get('ses_pos_id');
          if(isset($ses_userid)) {
        ?>	
          <li class="nav-item">
            <a class="nav-link nav_link_text" href="<?php echo base_url('/history'); ?>">ประวัติการจอง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav_link_text" href="<?php echo base_url('/checking'); ?>">ตรวจสอบสถานะการจอง</a>
          </li>
        <?php } ?>
      </ul>
      <?php if(isset($ses_userid)) { ?>
      <div>
        <center>
          <a href="<?php echo base_url('/profile'); ?>">
            <i class="fas fa-bell text-black"></i>
          </a>
        <center>
      </div>
      <div class="dropdown dropdown-user">
        <center>
          <a href="/profile" class="nav-link dropdown-toggle" role="button" id="id-btn-uname" data-bs-toggle="dropdown" aria-expanded="false"> <?php if (isset($Q_F_Name)) { echo $Q_F_Name ." ".$Q_L_Name; } else { echo "N/A"; }; ?>
          </a>
        </center>
      <div class="navbar-nav">
        <center>
          <ul class="dropdown-menu-ul dropdown-menu" aria-labelledby="id-btn-uname" style="text-align:left;">
            <li>
              <a href="<?php echo base_url('/profile'); ?>" class="usrlist ps-3"><font color="#000000">โปรไฟล์</font></a>
            </li><hr class="my-1"/>
            <?php if(isset($ses_Pos_ID) && $ses_Pos_ID >= 4) { ?>
              <!-- Admin -->
              <li>
                <a href="<?php echo base_url('/usermanager'); ?>" class="usrlist ps-3"><font color="#44B3F7">จัดการเว็บไซต์</font></a>
              </li>
            <?php } if (isset($ses_Pos_ID) && $ses_Pos_ID >= 3) { ?>
              <!-- Officer -->
              <li>
                <a href="<?php echo base_url('/EmployeeController/manager'); ?>" class="usrlist ps-3"><font color="#44B3F7">การจัดการ</font></a>
              </li>
            <?php } if (isset($ses_Pos_ID) && $ses_Pos_ID >= 2) { ?>
              <!-- Driver -->
              <li>
                <a href="<?php echo base_url('/drivermanager'); ?>" class="usrlist ps-3"><font color="#44B3F7">พนักงานขับ</font></a>
              </li>
              <li>
                <a href="<?php echo base_url('/'); ?>" class="usrlist ps-3"><font color="#44B3F7">กลับสู่เมนูหลัก</font></a>
              </li><hr class="my-1"/>
            <?php } ?>
            <li>
              <a href="<?php echo base_url('/history'); ?>" class="usrlist ps-3"><font color="#000000">การจองของฉัน</font></a>
            </li>
            <li>
              <a href="<?php echo base_url('/report'); ?>" class="usrlist ps-3"><font color="#000000">ร้องเรียน</font></a>
            </li><hr class="my-1"/>
            <li>
              <a href="<?php echo base_url('/UserController/logout'); ?>" class="usrlist ps-3"><font color="red">ออกจากระบบ</font></a>
            </li>
          </ul>
          
        </center>
      </div>
    </div>
    <?php 
      if (isset($Q_Picture) && !empty($Q_Picture)) { ?>
        <a href="<?php echo base_url('/profile'); ?>" class="nav-link px-0 py-0">
          <img src="<?php echo base_url('360/uploads/userProfile/'.$Q_Picture); ?>" class="img-profile" width="100px" height="100px" alt="<?php echo $Q_Picture; ?>">
        </a>
    <?php 
      } else { ?>
        <a href="<?php echo base_url('/profile'); ?>" class="nav-link px-0 py-0">
          <img src="<?php echo base_url('images/no-picture.png') ?>" class="img-profile" width="100px" height="100px" alt="N/A">
        </a>
    <?php }
    } else { 
      ?>
      <center>
				<a href="<?php echo base_url('/login'); ?>" class="nav-link button-login" role="button">เข้าสู่ระบบ</a>
        <a href="<?php echo base_url('/register'); ?>" class="nav-link button-regis" role="button" href="#">สมัครสมาชิก</a>
      </center>
      <?php } ?>
    </div> 
    </div>
  </div>
</nav>