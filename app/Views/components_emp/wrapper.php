<nav id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <h3 class="text-center">I-VAN</h3>
  </div>
  <ul class="list-unstyled">
    <p class="listboxpfh fs20">Dashboard</p>
    <li>
      <a href="<?php echo base_url('/dashboard'); ?>" id="wrapper-1" class="listboxpf ps-5 fs16">หน้าหลัก</a>
    </li>
    <li>
      <a href="<?php echo base_url('/dashboard'); ?>" id="wrapper-2" class="listboxpf ps-5 fs16">จัดการลูกค้า</a>
    </li>
    <li>
      <a href="<?php echo base_url('/dashboard'); ?>" id="wrapper-3" class="listboxpf ps-5 fs16">ตรวจสอบการชำระเงิน</a>
    </li>
    <li>
      <a href="<?php echo base_url('/manage-traffic'); ?>" id="wrapper-4" class="listboxpf ps-5 fs16">จัดการการเดินรถ</a>
    </li>
    <li>
      <a href="<?php echo base_url('/dashboard'); ?>" id="wrapper-5" class="listboxpf ps-5 fs16">พิมพ์เอกสาร</a>
    </li>
    <li>
      <a href="<?php echo base_url('/manage-van'); ?>" id="wrapper-6" class="listboxpf ps-5 fs16">จัดการข้อมูลรถ</a>
    </li>
    <p class="listboxpfh fs20">Customer</p>
    <li>
      <a href="<?php echo base_url('/'); ?>" class="listboxpf ps-5 fs16">กลับไปหน้าลูกค้า</a>
    </li>
    <li>
      <a href="<?php echo base_url('/UserController/logout'); ?>" class="listboxpf ps-5 fs16 text-danger">ออกจากระบบ</a>
    </li>
  </ul>
</nav>
<script type="text/javascript">
  $(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar').toggleClass('active');
    });
    if (window.location.href == "<?php echo base_url('/dashboard'); ?>") {
      document.getElementById("wrapper-1").style.background = "#FFB000";
    }
    else if (window.location.href == "<?php echo base_url('/dashboard'); ?>") {
      document.getElementById("wrapper-2").style.background = "#FFB000";
    }
    else if (window.location.href == "<?php echo base_url('/dashboard'); ?>") {
      document.getElementById("wrapper-3").style.background = "#FFB000";
    }
    else if (window.location.href == "<?php echo base_url('/manage-traffic'); ?>") {
      document.getElementById("wrapper-4").style.background = "#FFB000";
    }
    else if (window.location.href == "<?php echo base_url('/dashboard'); ?>") {
      document.getElementById("wrapper-5").style.background = "#FFB000";
    }
    else if (window.location.href == "<?php echo base_url('/manage-van'); ?>") {
      document.getElementById("wrapper-6").style.background = "#FFB000";
    }
  });
</script>