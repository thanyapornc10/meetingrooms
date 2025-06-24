<?php
include "connection.php";

if (isset($_GET["order_num"])) {
  $order_num = $_GET["order_num"];
  $sql = "SELECT * FROM `booking` WHERE `order_num` = $order_num";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
} else {
  echo "ไม่พบรายการที่ต้องการแก้ไข";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>แก้ไขข้อมูล</title>
    
</head>
<body>
  <div class="container">
    <h1>แก้ไขข้อมูล</h1>
    <form method="POST" action="update_post.php">
      <input type="hidden" name="order_num" value="<?php echo $row["order_num"]; ?>">
      <div class="mb-3">
        <label for="nameR" class="form-label">Room</label>
        <input type="text" class="form-control" id="nameR" name="nameR" value="<?php echo $row["nameR"]; ?>">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">User</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $row["username"]; ?>">
      </div>
      <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row["fname"]; ?>">
      </div>
      <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row["lname"]; ?>">
      </div>
      <div class="mb-3">
        <label for="time_start" class="form-label">Start</label>
        <input type="text" class="form-control" id="time_start" name="time_start" value="<?php echo $row["time_start"]; ?>">
      </div>
      <div class="mb-3">
        <label for="time_end" class="form-label">End</label>
        <input type="text" class="form-control" id="time_end" name="time_end" value="<?php echo $row["time_end"]; ?>">
      </div>
      <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
    </form>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>