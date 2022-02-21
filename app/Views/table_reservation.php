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
<p>เส้นทาง : นครปฐม(มาลัยแมน) -> กาญจนบุรี(บขส.)</p>
<div class="col-6 pe-5"> 
        <table class="tb-res-table">
          <tr>
            <th class="tb-res-th"></th>
            <th class="tb-res-th">หมายเลขรถ</th>
            <th class="tb-res-th">รอบเวลารถ</th>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a1" name="carlist_a" value="1">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a1">ม.2(จ)/81-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a1">07.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a2" name="carlist_a" value="2">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a2">ม.1(ด)/77-56</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a2">09.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a3" name="carlist_a" value="3">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a3">ม.2(จ)/81-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a3">11.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a4" name="carlist_a" value="4">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a4">ม.4(พ)/82-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a4">13.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a5" name="carlist_a" value="5">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a5">ม.1(ด)/77-56</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a5">15.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a6" name="carlist_a" value="6">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a6">ม.4(พ)/82-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a6">17.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_a7" name="carlist_a" value="7">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a7">ม.2(จ)/81-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_a7">18.00 น.<label>
							</div>
							</td>
          </tr>
        </table>
</div>
<div class="col-6 ps-5"> 
<table class="tb-res-table">
          <tr>
            <th class="tb-res-th">ปลายทาง</th>
            <th class="tb-res-th">ราคา(บาท)</th>
           
          </tr>
          <tr>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1">บ้านโป่ง</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1">40<label>
							</div>
							</td>
          </tr>
          <tr>
							
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b2">ลูกแก</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b2">45<label>
							</div>
							</td>
          </tr>
          <tr>
							
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b3">ท่าเรือ</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b3">50<label>
							</div>
							</td>
          </tr>
          <tr>
							
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b4">ท่ามะกา</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b4">55<label>
							</div>
							</td>
          </tr>
          <tr>
						
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b5">ท่าม่วง</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b5">60<label>
							</div>
							</td>
          </tr>
          <tr>
						
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b6">กาญจนบุรี(บขส.)</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b6">70<label>
							</div>
							</td>
          </tr>
        </table>
</div>
</div>
<br> <br>
<p>เส้นทาง กาญจนบุรี(บขส.) -> นครปฐม(มาลัยแมน)</p>
<div class="row">
<div class="col-6 pe-5"> 
        <center><table class="tb-res-table">
          <tr>
            <th class="tb-res-th"></th>
            <th class="tb-res-th">หมายเลขรถ</th>
            <th class="tb-res-th">รอบเวลารถ</th>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b1" name="carlist_b" value="1">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1">ม.2(จ)/81-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1">06.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b2" name="carlist_b" value="2">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b2">ม.1(ด)/77-56</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b2">08.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b3" name="carlist_b" value="3">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b3">ม.2(จ)/81-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b3">10.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b4" name="carlist_b" value="4">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b4">ม.4(พ)/82-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b4">12.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b5" name="carlist_b" value="5">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b5">ม.1(ด)/77-56</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b5">14.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b6" name="carlist_b" value="6">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b6">ม.4(พ)/82-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b6">16.00 น.<label>
							</div>
							</td>
          </tr>
          <tr>
							<td class="tb-res-td">
							<div class="form-check tb_rs_fix_radio">
								<input type="radio" id="list_b7" name="carlist_b" value="7">
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b7">ม.2(จ)/81-98</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b7">18.00 น.<label>
							</div>
							</td>
          </tr>
        </table></center>
</div>
<div class="col-6 ps-5"> 
<table class="tb-res-table">
          <tr>
            <th class="tb-res-th">ปลายทาง</th>
            <th class="tb-res-th">ราคา(บาท)</th>
          </tr>
          <tr>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1">บ้านโป่ง</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b1">60<label>
							</div>
							</td>
          </tr>
          <tr>
							
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b2">ลูกแก</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b2">55<label>
							</div>
							</td>
          </tr>
          <tr>
							
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b3">ท่าเรือ</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b3">50<label>
							</div>
							</td>
          </tr>
          <tr>
							
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b4">ท่ามะกา</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b4">45<label>
							</div>
							</td>
          </tr>
          <tr>
						
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b5">ท่าม่วง</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b5">40<label>
							</div>
							</td>
          </tr>
          <tr>
						
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b6">นครปฐม(มาลัยแมน)</label>
							</td>
							<td class="tb-res-td">
								<label class="form-check-label" for="list_b6">70<label>
							</div>
							</td>
          </tr>
        </table>
</div>
</div>
<br><br>
<center>
<div class="btn-group" role="group" aria-label="Basic example">
          <a href="<?php echo base_url('/reservation') ?>" class="button btn-tb-reser-1 mb-5">จองตั๋วที่นี่</a>
        </div></center>
</div>
<?php require('components/footer.php'); ?>
</body>
</html>