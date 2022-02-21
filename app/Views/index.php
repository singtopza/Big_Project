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
						<a class="button-seetable" role="button" href="<?php echo base_url('/table_reservation'); ?>">ดูตารางรถ</a>
						</span>
					</div>
			</center>
				<div class="tabcard">
					<div class="row">
						<div class="col-3">
							<div class="fontuser dropdowncard drop1 text-center">
								<input id="text-box-1" type="text" placeholder="ต้นทาง" readonly>
								<div class="options">
									<div onclick="show1('')">กาญจนบุรี</div>
									<div onclick="show1('')">นครปฐม</div>
								</div>
							</div>
						</div>
						<div class="col-1 text-center">
							<p class="pt-4 arrow-center text-center">----></p>
						</div>
						<div class="col-3">
							<div class="fontuser dropdowncard drop2 text-center">
								<input id="text-box-2" type="text" placeholder="ปลายทาง" readonly>
								<div class="options">
									<div onclick="show2('')">กาญจนบุรี</div>
									<div onclick="show2('')">นครปฐม</div>
								</div>
							</div>
						</div>
						</div>
				</div>
				<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
				<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
			</div>
					<div class="Topwhy text-center">
						ทำไมถึงต้องจองตั๋วกับ I-VAN ?
						<hr class="inx-mg-hr">
					</div>
					
				<div class="contain">
					<div class="row">
						<div class="col-7 inx-div-imgvan">
						<img src="<?php echo base_url('images/kanchanaburi.png'); ?>" class="inx-img-van rounded mx-auto d-block">
						</div>

						<div class="col-5">
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
									<hr/ class="mt-3">
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
									<hr/ class="mt-3">
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
									<hr/ class="mt-3">
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
				<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
				<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
				<?php require('components/footer.php'); ?>
</body>
</html>

<script>
	function show1(value) {
  document.querySelector("#text-box-1").value = value;
	}
	function show2(value) {
  document.querySelector("#text-box-2").value = value;
	}

let dropdown1 = document.querySelector(".drop1")
dropdown1.onclick = function() {
	dropdown1.classList.toggle("active")
}

let dropdown2 = document.querySelector(".drop2")
dropdown2.onclick = function() {
	dropdown2.classList.toggle("active")
}
</script>
