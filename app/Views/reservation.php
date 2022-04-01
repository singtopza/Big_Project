<!DOCTYPE html>
<html lang="en">

<head>
  <title>I-Van</title>
  <?php require('components/header.php'); ?>
</head>

<body>
  <?php require('components/navbar.php'); ?>
  <center>
    <div class="fontCompany2">
      <h1>จองตั๋วรถตู้</h1>
    </div>
  </center>
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <form action="<?php echo base_url('/ReservationController/addreservation'); ?>" method="post">
        <div class="tabcard3">
          <div class="row">
            <div class="col-3">
              <center>
                <div class="text-center mt-3">
                  <select id="select-start-form" class="form-select class_station" name="first_station" onchange="select_start(this)">
                    <?php if(session()->getFlashdata('first_station_id')): ?>
                      <option value="<?= session()->getFlashdata('first_station_id'); ?>" class="hide-selected" selected><?= session()->getFlashdata('first_station_name'); ?></option>
                    <?php else: ?>
                      <option value="0" class="hide-selected" selected>ต้นทาง</option>
                    <?php endif; foreach ($station_getStation_NK as $station_getStation__NK) { ?>
                      <option value="<?php echo $station_getStation__NK['Station_ID']; ?>"><?php echo $station_getStation__NK['Station_Name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </center>
            </div>
            <div class="col-3">
              <center>
                <div class="text-center mt-3">
                  <select id="select-end-form" class="form-select class_station" name="end_station" onchange="select_end(this)">
                    <?php if(session()->getFlashdata('end_station_id')): ?>
                      <option value="<?= session()->getFlashdata('end_station_id'); ?>" class="hide-selected" selected><?= session()->getFlashdata('end_station_name'); ?></option>
                    <?php else: ?>
                      <option value="0" class="hide-selected" selected>ปลายทาง</option>
                    <?php endif; foreach ($station_getStations as $station_getStation) { ?>
                      <option value="<?php echo $station_getStation['Station_ID']; ?>"><?php echo $station_getStation['Station_Name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </center>
            </div>
            <div class="col-3">
            <?php if (session()->getFlashdata('date')): ?>
              <input class="mt-3 form-control" id="date" onchange="changedate();" type="date" name="date" value="<?= session()->getFlashdata('date') ?>" disabled>
            <?php else: ?>
              <input class="mt-3 form-control" id="date" onchange="changedate();" type="date" name="date" disabled>
            <?php endif; ?>
            </div>
            <div class="col-3">
              <div class="input-group">
                <select id="time" class="form-select mt-3 time form-control-index" name="time" onchange="changetime(this)" disabled>
                  <?php if (session()->getFlashdata('time')): ?>
                    <option value="<?= session()->getFlashdata('time') ?>"><?= session()->getFlashdata('fixtime') ?></option>
                  <?php else : ?>
                    <option value="0" class="hide-selected" selected>เวลา</option>
                  <?php endif; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h6 class="card-title1 text-left">รายละเอียดเส้นทาง</h6>
            <div class="crad1">
              <div class="row">
                <div class="col-4 text-end">
                  <p class="pt-2">เส้นทาง:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left">
                    <span id="id_p_start_station">
                      <?php if (session()->getFlashdata('first_station_name')): ?>
                      <?= session()->getFlashdata('first_station_name') ?>
                      <?php endif; ?>
                    </span>
                    <span id="id_p_end_station">
                    <?php if (session()->getFlashdata('end_station_name')): ?>
                      <?= " - ".session()->getFlashdata('end_station_name') ?>
                    <?php endif; ?>
                    </span>
                  </p>
                </div>
                <div class="col-4 text-end">
                  <p class="pt-2">วันที่เดินทาง:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left" id="id-date-reservation">                    
                  <?php if (session()->getFlashdata('date')): ?>
                    <?= session()->getFlashdata('date') ?>
                  <?php endif; ?>
                  </p>
                </div>
                <div class="col-4 text-end">
                  <p class="pt-2">เวลาที่ออก:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left" id="id-time-reservation">
                  <?php if (session()->getFlashdata('time')): ?>
                    <?= session()->getFlashdata('fixtime') ?> น.
                  <?php endif; ?>
                  </p>
                </div>
                <div class="col-4 text-end">
                  <p class="pt-2">ปลายทางที่ลง:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left" id="id_p_end_station_2">
                  <?php if (session()->getFlashdata('end_station_name')): ?>
                    <?= session()->getFlashdata('end_station_name') ?>
                  <?php endif; ?>
                  </p>
                </div>
                <div class="col-4 text-end">
                  <p class="pt-2">จำนวนที่นั่งทั้งหมด:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left">
                    <span id="totalchair">
                    <?php if (session()->getFlashdata('seats_num')): ?>
                      <?= session()->getFlashdata('seats_num') ?>
                    <?php endif; ?>
                    </span>
                  </p>
                </div>
                <div class="col-4 text-end">
                  <p class="pt-2">ที่นั่งว่าง:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left">
                    <span id="havechair">
                    <?php if (session()->getFlashdata('havechair')): ?>
                      <?= session()->getFlashdata('havechair') ?>
                    <?php endif; ?>
                    </span>
                  </p>
                </div>
                <div class="col-4 text-end">
                  <p class="pt-2">ราคา:</p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                  <p class="pt-2 text-left">
                    <span id="price_per_reservation">
                    <?php if (session()->getFlashdata('ticket_price')): ?>
                      <?= session()->getFlashdata('ticket_price')." บาท" ?>
                    <?php endif; ?>
                    </span><span id="bath"></span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h6 class="card-title2">เลือกจำนวนที่นั่ง</h6>
            <div class="crad2">
              <div class="row">
                <div class="col-5">
                  <p class="pt-4 text-center">กรุณาเลือกจำนวนที่นั่ง</p>
                </div>
                <div class="col-4">
                  <div class="text-center mt-3">
                    <select id="select-chair" class="form-select" name="select-chair">
                      <option value="0" class="hide-selected" selected>จำนวน</option>
                      <?php if (session()->getFlashdata('havechair')){
                        for ($x = 1; $x <= session()->getFlashdata('havechair'); $x++) { ?>
                          <option value="<?php echo $x; ?>"><?php echo $x; ?></option>;
                        <?php } ?>
                      <?php } else {
                        for ($x = 1; $x <= 12; $x++) { ?>
                          <option value="<?php echo $x; ?>"><?php echo $x; ?></option>;
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <h6 class="mt-4 card-title2">ยอดรวมที่ต้องชำระ</h6>
            <div class="crad3">
              <div class="row">
                <div class="col-4">
                  <p class="pt-4 arrow-center text-center">ราคาตั๋ว</p>
                </div>
                <div class="col-3">
                  <p class="pt-4 arrow-center text-left">
                    <span id="chair_reservation"></span>
                  <span id="price_per_reservation_count">
                  <?php if (session()->getFlashdata('ticket_price')): ?>
                    <?= session()->getFlashdata('ticket_price') ?>
                  <?php endif; ?>
                  </span></p>
                </div>
                <div class="col-2">
                  <p class="pt-4 arrow-center text-center">รวม</p>
                </div>
                <div class="col-3">
                  <p class="pt-4 arrow-center text-left"><span id="total_price_reservation"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-1"></div>
    <center>
      <button type="submit" class="nav-link btn-logreg-confirm" style="width:200px;">ยืนยันการจอง</button>
    </center>
  </div>
  </form>
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
  function changetime(selTag) {
    var time = selTag.options[selTag.selectedIndex].text;
    if(time >= 1) {
    document.getElementById("id-time-reservation").innerHTML = time + " น.";
    }
    var date = document.getElementById("date").value;
    if(typeof date.foo !== 'undefined' && date != null) {
      document.getElementById("totalchair").innerHTML = "";
      document.getElementById("havechair").innerHTML = "";
    }
  }

  $('select').change(function() {
    var date = document.getElementById("date").value;
    document.getElementById("id-date-reservation").innerHTML = date;
    var start = document.getElementById("select-start-form").value;
    var go_dock = document.getElementById("time").value;
    var chair = document.getElementById("select-chair").value;
    var price = document.getElementById("price_per_reservation_count").innerHTML;
    var total = chair * price;
    document.getElementById("chair_reservation").innerHTML = chair + " x ";
    document.getElementById("total_price_reservation").innerHTML = total + " บาท";
    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_findchair.php",
      dataType: "html",
      data: {
        id_start: start,
        id_dock: go_dock,
        date: date
      },
      success: function(data) {
        $('#totalchair').html(data);
      },
      error() {
        $('#totalchair').html('An Error');
      }
    });

    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_countchair.php",
      dataType: "html",
      data: {
        id_start: start,
        id_dock: go_dock,
        date: date
      },
      success: function(data) {
        $('#havechair').html(data);
      },
      error() {
        $('#havechair').html('An Error');
      }
    });
  });

  function changedate() {
    var date = document.getElementById("date").value;
    document.getElementById("id-date-reservation").innerHTML = date;
    var start = document.getElementById("select-start-form").value;
    var go_dock = document.getElementById("time").value;
    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_findchair.php",
      dataType: "html",
      data: {
        id_start: start,
        id_dock: go_dock,
        date: date
      },
      success: function(data) {
        $('#totalchair').html(data);
      },
      error() {
        $('#totalchair').html('An Error');
      }
    });

    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_countchair.php",
      dataType: "html",
      data: {
        id_start: start,
        id_dock: go_dock,
        date: date
      },
      success: function(data) {
        $('#havechair').html(data);
      },
      error() {
        $('#havechair').html('An Error');
      }
    });
  };

  function select_start(selTag) {
    var start_station = selTag.options[selTag.selectedIndex].text;
    document.getElementById("id_p_start_station").innerHTML = start_station;
    document.getElementById("id-time-reservation").innerHTML = null;
  }

  function select_end(selTag) {
    var end_station = selTag.options[selTag.selectedIndex].text;
    document.getElementById("id_p_end_station").innerHTML = " - "+end_station;
    document.getElementById("id_p_end_station_2").innerHTML = end_station;
  }

  $( document ).ready(function() {
    var start = document.getElementById("select-start-form").value;
    var end = document.getElementById("select-end-form").value;
    if (start == 0 || end == 0) {
      document.getElementById("time").disabled = true;
      document.getElementById("date").disabled = true;
    } else {
      document.getElementById("time").disabled = false;
      document.getElementById("date").disabled = false;
    }
  });

</script>
<script type="text/javascript">
  $('.class_station').change(function() {
    var start = document.getElementById("select-start-form").value;
    var end = document.getElementById("select-end-form").value;
    if (start == 0 || end == 0) {
      document.getElementById("time").disabled = true;
      document.getElementById("date").disabled = true;
    } else {
      document.getElementById("time").disabled = false;
      document.getElementById("date").disabled = false;
    }
    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_findprice.php",
      dataType: "html",
      data: {
        id_start: start,
        id_end: end
      },
      success: function(data) {
        $('#price_per_reservation').html(data);
        $('#price_per_reservation_count').html(data);
        if (data >= 1) {
          document.getElementById("bath").innerHTML = " บาท";
        }
      },
      error() {
        $('#price_per_reservation').html('An Error');
      }
    });
  });

  $('#time').focus(function() {
    var start = document.getElementById("select-start-form").value;
    document.getElementById("id-time-reservation").innerHTML = null;
    $.ajax({
      type: "POST",
      url: "ajax_query/ajax_findtime.php",
      dataType: "html",
      data: {
        id_start: start
      },
      success: function(data) {
        $('#time').html(data);
      },
      error() {
        $('#time').html('An Error');
      }
    });
  });
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
    $('#date').attr({
      'max': maxDate,
      'min': minDate
    });
  });
</script>