<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Van</title>
	<?php require('components/header.php'); ?>
</head>
<body>
<?php require('components/navbar.php'); ?>
<div class="container">
<h2 class="text-center my-5">ดูตารางเวลารถ</h2>
<div class="row">
<p class="mb-0">เส้นทาง : นครปฐม(มาลัยแมน) -> กาญจนบุรี(บขส.)</p>
<div class="col-lg-6 col-12 px-3 mt-3">
        <table class="tb-res-table fs17">
          <tr class="tr-color-tbre">
            <th class="tb-res-th"></th>
            <th class="tb-res-th">หมายเลขรถ</th>
            <th class="tb-res-th">รอบเวลารถ</th>
          </tr>
          <?php foreach ($dockcars_kanjanaburi as $dockcar_k) { ?>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio mb-0">
								<input type="radio" id="list_a<?php echo $dockcar_k['Dock_car_id']; ?>" name="carlist_a" value="<?php echo $dockcar_k['Dock_car_id']; ?>">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a<?php echo $dockcar_k['Dock_car_id']; ?>"><?php echo $dockcar_k['Van_Num']; ?></label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a<?php echo $dockcar_k['Dock_car_id']; ?>">
                  <?php 
                    $timeformat = date_create($dockcar_k['Van_Out']);
                    echo date_format($timeformat, "H.i"." น.");
                  ?>
                </label>
							</td>
            </div>
          </tr>
          <?php } ?>
        </table>
</div>
<div class="col-lg-6 col-12 px-3 mt-3"> 
<table class="tb-res-table fs17">
          <tr class="tr-color-tbre">
            <th class="tb-res-th">ปลายทาง</th>
            <th class="tb-res-th">ราคา(บาท)</th>
          </tr>
          <?php foreach ($ticketprice_ntok as $price_ntok) { ?>
          <tr>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1"><?php echo $price_ntok['Station_Name']; ?></label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1"><?php echo $price_ntok['Tic_Price']; ?><label>
							</td>
          </tr>
          <?php } ?>
        </table>
</div>
</div>
<br> <br>
<p>เส้นทาง กาญจนบุรี(บขส.) -> นครปฐม(มาลัยแมน)</p>
<div class="row">
<div class="col-lg-6 col-12 px-3 mt-3"> 
          <table class="tb-res-table fs17">
          <tr class="tr-color-tbre">
            <th class="tb-res-th"></th>
            <th class="tb-res-th">หมายเลขรถ</th>
            <th class="tb-res-th">รอบเวลารถ</th>
          </tr>
          <?php foreach ($dockcars_nakhonpathom as $dockcar_n) { ?>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio mb-0">
								<input type="radio" id="list_b<?php echo $dockcar_n['Dock_car_id']; ?>" name="carlist_a" value="<?php echo $dockcar_n['Dock_car_id']; ?>">
              </div>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b<?php echo $dockcar_n['Dock_car_id']; ?>"><?php echo $dockcar_n['Van_Num']; ?></label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b<?php echo $dockcar_n['Dock_car_id']; ?>">
                  <?php 
                    $timeformat = date_create($dockcar_n['Van_Out']);
                    echo date_format($timeformat, "H.i"." น.");
                  ?>
                </label>
							</td>
          </tr>
          <?php } ?>
        </table>
</div>
<div class="col-lg-6 col-12 px-3 mt-3"> 
<table class="tb-res-table fs17">
          <tr class="tr-color-tbre">
            <th class="tb-res-th">ปลายทาง</th>
            <th class="tb-res-th">ราคา(บาท)</th>
          </tr>
          <?php foreach ($ticketprice_kton as $price_kton) { ?>
          <tr>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1"><?php echo $price_kton['Station_Name']; ?></label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1"><?php echo $price_kton['Tic_Price']; ?></label>
							</div>
							</td>
          </tr>
          <?php } ?>
        </table>
</div>
</div>
<br><br>
<center>
  <div class="btn-group" role="group" aria-label="Basic example">
    <a href="<?php echo base_url('/reservation') ?>" class="button btn-logreg-confirm mb-5">จองตั๋วที่นี่</a>
  </div>
</center>
</div>
<?php require('components/footer.php'); ?>
</body>
</html>