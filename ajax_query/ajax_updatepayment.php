<?php

  require ('database.php');
  
  if (isset($_POST['pay_id'])) {
    $pay_id = $_POST['pay_id'];
    $sql = "UPDATE payment SET Confirm = 'success' WHERE Pay_ID = $pay_id";
    $query = mysqli_query($connect, $sql);
  } else {
    echo '<script type="text/javascript">alert("มีบางอย่างผิดพลาดในการลบข้อมูลการชำระเงิน!")</script>';
  }
?>