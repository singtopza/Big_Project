<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/navbar.css'); ?>">
  <!-- <style>
  body{
    background-image: url("https://www.img.in.th/images/e2e5e94872a46f17a9c89df7fbe6e6e2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
  }
</style> -->
</head>
<body>
<?php require('components/navbar.php'); ?>
<div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h1>ลงทะเบียน</h1>
                    <hr>
                    <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
                    <form action="/register/save" method="post">
                    <div class="row mb-3">
                      <div class="col-6">
                        <label for="inputfirstname" class="form-label">ชื่อ</label>
                        <input type="text" name="firstname" class="form-control" id="inputfirstname" value="<?= set_value('firstname'); ?>" placeholder="ชื่อ">
                      </div>
                      <div class="col-6">
                          <label for="inputlastname" class="form-label">นามสกุล</label>
                          <input type="text" name="lastname" class="form-control" id="inputlastname" value="<?= set_value('lastname'); ?>" placeholder="นามสกุล">
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">ที่อยู่อีเมล</label>
                        <input type="email" name="email" class="form-control" id="inputemail" value="<?= set_value('email'); ?>" placeholder="อีเมล">
                    </div>
                    <div class="mb-3">
                        <label for="inputphone" class="form-label">เบอร์ติดต่อ</label>
                        <input type="text" name="phone" class="form-control" id="inputphone" value="<?= set_value('phone'); ?>" placeholder="เบอร์ติดต่อ">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="password" class="form-control" id="inputpassword" placeholder="ระบุรหัสผ่าน">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">ยืนยันรหัสผ่าน</label>
                        <input type="password" name="confpassword" class="form-control" id="inputconfpassword" placeholder="ระบุรหัสผ่านอีกครั้ง">
                    </div>
                    <center><button type="submit" class="btn btn-success" style="width:100px;">ยืนยัน</button>
                    <a href="/Home.php" class="btn btn-danger me-1" style="width:100px;">ยกเลิก</a></center>
                </form>
                </div>
            </div>
        </div>
</body>
</html>