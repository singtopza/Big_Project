<?php

require ('database.php');
    
  if (isset($_POST['id_start'])) {
    $start_ = $_POST['id_start'];
    $sql = "SELECT * FROM dock_car INNER JOIN van ON dock_car.Van_ID = van.Van_ID WHERE Station_ID = $start_ GROUP BY Van_Out ORDER BY Van_Out ASC";
    $query = mysqli_query($connect, $sql);
    echo '<option value="0" class="hide-selected" selected>เวลา</option>';
    foreach ($query as $value) {
      $timeformat = date_create($value['Van_Out']);
      $fixtime = date_format($timeformat, "H.i");
      echo '<option value="'.$value['Dock_car_id'].'">'.$fixtime.'</option>';
    }
  }
?>