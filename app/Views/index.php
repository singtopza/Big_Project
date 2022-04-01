<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Van</title>
  <?php require('components/header.php'); ?>
</head>
<body>
  <?php require('components/navbar.php'); ?>
  <div class="backgroundweb">
    <center>
      <div class="container">
        <span class="fontCompany-lg">
          รถตู้โดยสารนครปฐม-กาญจนบุรี<br>
        </span>
        <span class="fontCompany-ms">
          บริษัทกาญจนบุรีเอ็กซ์เพรส
          <br><br>
          <a class="button-seetable" role="button" href="<?php echo base_url('/table'); ?>">ดูตารางรถ</a>
        </span>
      </div>
    </center>
    <div class="tabcard">
      <form action="<?php echo base_url('ReservationController/reservation'); ?>" method="post">
        <div class="row">
          <div class="col-lg-3 col-6">
            <select id="select-start-form" onchange="input_select()" class="form-select form-select-index" name="first_station" ia-label="Default select example">
              <option value="0" class="hide-selected" selected>ต้นทาง</option>
              <?php foreach ($station_getStation_NK as $station_getStation__NK) { ?>
              <option value="<?php echo $station_getStation__NK['Station_ID']; ?>"><?php echo $station_getStation__NK['Station_Name']; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="col-lg-3 col-6">
            <select id="select-end-form" onchange="input_select()" class="form-select form-select-index" name="end_station" aria-label="Default select example">
              <option value="0" class="hide-selected" selected>ปลายทาง</option>
              <?php foreach ($station_getStations as $station_getStation) { ?>
                <option value="<?php echo $station_getStation['Station_ID']; ?>"><?php echo $station_getStation['Station_Name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col-lg-2 col-6">
            <div class="input-group date">
              <input type="date" id="index-date" class="form-control form-control-index" name="date" disabled/>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="input-group time">
              <select id="index-time" class="form-select form-control-index" name="time" disabled>
                <option value="0" class="hide-selected" selected>เวลา</option>
              </select>
            </div>
          </div>
          <div class="col-lg-2 col-12 text-center">
            <button tyle="submit" class="button-seetable1" role="button">ซื้อตั๋ว</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="Topwhy text-center">
    ทำไมถึงต้องจองตั๋วกับ I-VAN ?
    <hr class="inx-mg-hr">
  </div>

  <div class="contain">
    <div class="row">
      <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 inx-div-imgvan">
        <img src="<?php echo base_url('images/kanchanaburi.png'); ?>" class="inx-img-van rounded mx-auto d-block">
      </div>

      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
        <div class="subtopic">
          <div class="row">
            <div class="col-3">
              <img src="<?php echo base_url('images/arrow.png'); ?>" width="100px">
            </div>
            <div class="col-9 inx-middle-txt">
              <span>ราคาเดียวกับหน้าเคาน์เตอร์</span>
            </div>
            <div class="col-3"></div>
            <div class="col-9">
              <p class="subtopic1">ตั๋วมีราคาที่เท่ากันกับหน้าเคาน์เตอร์ แต่สามารถกดจองได้เมื่อต้องการ และทราบเวลาเดินทางที่ชัดเจน</p>
            </div>
            <hr / class="mt-3">
            <div class="col-3">
              <img src="<?php echo base_url('images/arrow.png'); ?>" width="100px">
            </div>
            <div class="col-9 inx-middle-txt">
              <span>ประหยัดเวลา</span>
            </div>
            <div class="col-3"></div>
            <div class="col-9">
              <p class="subtopic1">ไม่ต้องมานั่งรอรถที่สถานี เพื่อทำการจองตั๋วและนั่งรอรถเป็นเวลานาน</p>
            </div>
            <hr / class="mt-3">
            <div class="col-3">
              <img src="<?php echo base_url('images/arrow.png'); ?>" width="100px">
            </div>
            <div class="col-9 inx-middle-txt">
              <span>สะดวก</span>
            </div>
            <div class="col-3"></div>
            <div class="col-9">
              <p class="subtopic1">สามารถเลือกทำการจองตั๋วได้ ทุกที่ทุกเวลาที่เราต้องการ</p>
            </div>
            <hr class="mt-3" />
            <div class="col-3">
              <img src="<?php echo base_url('images/arrow.png'); ?>" width="100px">
            </div>
            <div class="col-9 inx-middle-txt">
              <span>จองล่วงหน้าได้</span>
            </div>
            <div class="col-3"></div>
            <div class="col-9">
              <p class="subtopic1">สามารถทำการจองตั๋วล่วงหน้าได้ 1-2 วันผ่านทางเว็บไซต์ได้ 24 ช.ม.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require('components/footer.php'); ?>
</body>
</html>
<script>
  $(document).ready(function() {
    <?php if (session()->getFlashdata('swel_title')) { ?>
      swal({
        title: "<?= session()->getFlashdata('swel_title') ?>",
        text: "<?= session()->getFlashdata('swel_text') ?>",
        icon: "<?= session()->getFlashdata('swel_icon') ?>",
        button: "<?= session()->getFlashdata('swel_button') ?>",
      });
    <?php } ?>
  });
</script>
<script>
  function input_select() {
    var start = document.getElementById("select-start-form").value;
    var end = document.getElementById("select-end-form").value;
    if (start == 0 || end == 0) {
      document.getElementById("index-time").disabled = true;
      document.getElementById("index-date").disabled = true;
    } else {
      document.getElementById("index-time").disabled = false;
      document.getElementById("index-date").disabled = false;
    }
    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_findtime.php",
      dataType: "html",
      data: {
        id_start: start
      },
      success: function(data) {
        $('#index-time').html(data);
      },
      error() {
        $('#index-time').html('An Error');
      }
    });
  }
</script>
<script>
  $(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var month2 = dtToday.getMonth() + 2;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10 || month2 < 10)
      month = '0' + month.toString();
      month2 = '0' + month2.toString();
    if(day < 10)
      day = '0' + day.toString();
    var minDate = year + '-' + month + '-' + day;
    var maxDate = year + '-' + month2 + '-' + day;
    $('#index-date').attr({
      'max': maxDate,
      'min': minDate
    });
  });
</script>