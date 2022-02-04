<!DOCTYPE html>
<html lang="en">
<head>
	<title>I-Van</title>
	<?php require('heads/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/champ.css'); ?>">
</head>
<body>
<?php require('components/navbar.php'); ?>
<div class="back2">

	<center>
	<div class="fontCompany2">
        <div class="col-lg-6 col-md-5 col-sm-3">
            <h1>จองตั๋วรถตู้</h1>
		</div>
	</div>
	</center>
		<div class="tabcard3">
			<div class="row">
				<div class="col-3">
					<center>
						<div class="fontuser dropdowncard drop01 text-center">
							<input id="text-box-01" type="text" placeholder="ต้นทาง" readonly><i class="fa fa-map-marker fa-lg"></i>
								<div class="options">
									<div onclick="show01('')">กาญจนบุรี</div>
									<div onclick="show01('')">นครปฐม</div>
								</div>
							</div>
					</center>
						</div>
						<div class="col-1">
							<p class="pt-4 arrow-center text-center">----></p>
						</div>
						<div class="col-3">
							<center>
							<div class="fontuser dropdowncard drop02 text-center">
								<input id="text-box-02" type="text" placeholder="ปลายทาง" readonly><i class="fa fa-map-marker fa-lg"></i>
								<div class="options">
                                    <div onclick="show02('')">บ้านโป่ง</div>
                                    <div onclick="show02('')">ลูกแก</div>
                                    <div onclick="show02('')">ท่าเรือ</div>
                                    <div onclick="show02('')">ท่ามะกา</div>
                                    <div onclick="show02('')">ท่าม่วง</div>
								</div>
							</div>
							</center>
				</div>
                        <div class="col-2">
							<p class="pt-4 arrow-center text-center">ราคา</p>
						</div>
                        <div class="col-1">
							<p class="pt-4 arrow-center text-center">70</p>
						</div>
                        <div class="col-2">
							<p class="pt-4 arrow-center text-center">บาท</p>
						</div>
			</div>
		</div>
			
<div class="mul-col">
<div class="fluid1">

	<div class="crad1">
		<div class="row">	
					<h6 class="card-title1">รายละเอียดเส้นทาง</h6>
					<div class="col-4"> 
						<p class="pt-4 arrow-center text-center">เส้นทาง :</p>
					</div>
					<div class="col-4">
						<p class="pt-4 arrow-center text-left">นครปฐม(มาลัยแมน)</p>
					</div>
					<div class="col-1">
						<p class="pt-4 arrow-center text-left">-</p>
					</div>
					<div class="col-1">
						<p class="pt-4 arrow-center text-left">กาญจนบุรี(บขส.)</p>
					</div>

					<div class="col-4">
						<p class="pt-4 arrow-center text-center">วันที่เดินทาง :</p>
					</div>
					<div class="col-8">
						<p class="pt-4 arrow-center text-left">2 กุมภาพันธ์ 2564 </p>
					</div>

					<div class="col-4">
						<p class="pt-4 arrow-center text-center">เวลาที่ออก :</p>
					</div>
					<div class="col-5">
						<p class="pt-4 arrow-center text-left">09.00 น.</p>
					</div>

					<div class="col-4">
						<p class="pt-4 arrow-center text-center">ปลายทางที่ลง : </p>
					</div>
					<div class="col-5">
						<p class="pt-4 arrow-center text-left">กาญจนบุรี(บขส.)</p>
					</div>

					<div class="col-4">
						<p class="pt-4 arrow-center text-center">จำนวนที่นั่งทั้งหมด :</p>
					</div>
					<div class="col-8">
						<p class="pt-4 arrow-center text-left">12 ที่นั่ง</p>
					</div>

					<div class="col-4">
						<p class="pt-4 arrow-center text-center">ที่นั่งว่าง : </p>
					</div>
					<div class="col-8">
						<p class="pt-4 arrow-center text-left">10 ที่นั่ง</p>
					</div>

					<div class="col-4">
						<p class="pt-4 arrow-center text-center">ราคา </p>
					</div>
					<div class="col-8">
						<p class="pt-4 arrow-center text-left">70 บาท/ใบ</p>
					</div>
			
		</div>
	</div>
</div>
<div class="fluid2">
	<div class="crad2">
		<div class="row">	
			<h6 class="card-title1">เลือกจำนวนที่นั่ง</h6>
			<div class="col-5"> 
				<p class="pt-4 arrow-center text-center">กรุณาเลือกจำนวนที่นั่ง</p>
			</div>
			<div class="col-4"> 
				<div class="fontuser2 dropdowncard drop03 text-center">
					<input id="text-box-03" type="text" placeholder="จำนวน :" readonly><i class="fa fa-map-marker fa-lg"></i>
						<div class="options">
                        	<div onclick="num2('')">1</div>
                        	<div onclick="num2('')">2</div>
                        	<div onclick="num2('')">3</div>
                        	<div onclick="num2('')">4</div>
                        	<div onclick="num2('')">5</div>
						</div>
				</div>
			</div>																						
		</div>				
	</div>
	<div class="crad3">
		<div class="row">
		<h6 class="card-title1">ยอดรวมที่ต้องชำระ</h6>
			<div class="col-4">
				<p class="pt-4 arrow-center text-center">ราคาตั๋ว </p>
			</div>
			<div class="col-1">
				<p class="pt-4 arrow-center text-left">2x70 </p>
			</div>
			<div class="col-3">
				<p class="pt-4 arrow-center text-center">รวม </p>
			</div>
			<div class="col-4">
				<p class="pt-4 arrow-center text-left">120 บาท</p>
			</div>
		</div>
	<div class="crad4">
		<div class="row">
		<h6 class="card-title1">ข้อมูลผู้จอง</h6>

		<form action="/action_page.php">
			<br>
  			<label for="fullname">ชื่อ - นามสกุล : </label>
			<input type="text" id="fullname" name="fullname"><br><br>
			<label for="phone">เบอร์โทรศัพท์ :</label>
			<input type="number" id="phone" name="phone"><br><br>
			<label for="email">อีเมลล์ :</label>
			<input type="email" id="email" name="email"><br><br>
		</form>
		</div>
	</div>

	
</div>
</div>



</div>
<center>
	<button type="submit" class="nav-link button-submit" style="width:200px;">ยืนยันการจอง</button>
	<a href="/Home" class="nav-link button-cancel" style="width:200px;">ยกเลิกการจอง</a>
</center>
</div>
</body>
</html>

<script>
	function show01(value1) {
  document.querySelector("#text-box-01").value1 = value2;
	}
	function show02(value2) {
  document.querySelector("#text-box-02").value2 = value1;
	}

let dropdown01 = document.querySelector(".drop01")
dropdown01.onclick = function() {
	dropdown01.classList.toggle("active")
}

let dropdown02 = document.querySelector(".drop02")
dropdown02.onclick = function() {
	dropdown02.classList.toggle("active")
}
</script>

