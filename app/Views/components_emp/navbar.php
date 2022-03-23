<nav class="navbar mb-3 navbar-expand-lg navbar-light ps-0">
  <button type="button" id="sidebarCollapse" class="btn btn-warning">
    <i class="fa fa-user-circle-o"></i>
    <span>ซ่อน | แสดง</span>
  </button>
  <div class="navbartip">
    <span class="pe-3">
      <?php
      echo $Q_F_Name . " " . $Q_L_Name;
      ?>
    </span>
    <?php
    if (isset($Q_Picture) && !empty($Q_Picture)) { ?>
      <a href="<?php echo base_url('/profile'); ?>">
        <img src="<?php echo base_url('360/uploads/userProfile/' . $Q_Picture); ?>" class="img-profile" width="100px" height="100px" alt="<?php echo $Q_Picture; ?>">
      </a>
    <?php
    } else { ?>
      <a href="<?php echo base_url('/profile'); ?>">
        <img src="<?php echo base_url('images/no-picture.png') ?>" class="img-profile" width="100px" height="100px" alt="N/A">
      </a>
    <?php } ?>
  </div>
</nav>