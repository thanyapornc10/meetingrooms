<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $order_num = $_POST["order_num"];
  $nameR = $_POST["nameR"];
  $username = $_POST["username"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $time_start = $_POST["time_start"];
  $time_end = $_POST["time_end"];

  $sql = "UPDATE `booking` SET `nameR`='$nameR', `username`='$username', `fname`='$fname', `lname`='$lname', `time_start`='$time_start', `time_end`='$time_end' WHERE `order_num`='$order_num'";

  if (mysqli_query($conn, $sql)) {
    echo '<script>
            window.location.href = "adminpage.php";
            alert("Update success fully!!")
        </script>';
  } else {
    echo "เกิดข้อผิดพลาดในการอัปเดตข้อมูล: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>