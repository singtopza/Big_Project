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
                    <h1>ลงชื่อเข้าใช้</h1>
                    <hr>
                    <?php if(session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                    <?php endif; ?>
                    <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">อีเมล</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>" placeholder="ระบุที่อยู่อีเมล">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword" placeholder="ระบุรหัสผ่าน">
                    </div>
                    <center><br><button type="submit" class="btn btn-success" style="width:100px;">ยืนยัน</button>
                    <a href="/Home" class="btn btn-danger me-1" style="width:100px;">ยกเลิก</a>
                </form>
                </div>
            </div>
        </div>
</body>
</html>