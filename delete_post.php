<?php
include "connection.php";

if (isset($_GET["order_num"])) {
  $order_num = $_GET["order_num"];

  $sql = "DELETE FROM `booking` WHERE `order_num`='$order_num'";

  if (mysqli_query($conn, $sql)) {
    '<script>
            window.location.href = "adminpage.php";
            alert("Delete success fully!!")
        </script>';;
  } else {
    echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>