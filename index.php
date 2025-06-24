<?php
include("connection.php");
require("login_post.php");
// session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <meta charset="utf-8" />
    <title>Infinite Card Slider JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <script src="script.js" defer></script>
</head>
<header class="header">
    <a href="index.php" class="logo">Meeting Rooms</a>
    <nav class="navbar">
        <a href="#"><?php echo $_SESSION["username"]; ?></a>
        <a href="logout.php" class="botton">Log out</a>
    </nav>
</header>

<body>
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
            <li class="card">
                <div class="img">
                    <a href="room_one.php"><img src="images/room5.jpg" alt="img" draggable="false" /></a>
                </div>
                <h2>Room 1</h2>
                <span>ห้องประชุม</span>
            </li>
            <li class="card">
                <div class="img">
                    <a href="room_two.php"><img src="images/room1.jpg" alt="img" draggable="false" /></a>
                </div>
                <h2>Room 2</h2>
                <span>ห้องประชุม</span>
            </li>
            <li class="card">
                <div class="img">
                    <a href="room_three.php"><img src="images/room2.jpg" alt="img" draggable="false" /></a>
                </div>
                <h2>Room 3</h2>
                <span>ห้องประชุม</span>
            </li>
            <li class="card">
                <div class="img">
                    <a href="room_four.php"><img src="images/room3.jpg" alt="img" draggable="false" /></a>
                </div>
                <h2>Room 4</h2>
                <span>ห้องประชุม</span>
            </li>
            <li class="card">
                <div class="img">
                    <a href="room_five.php"><img src="images/room4.jpg" alt="img" draggable="false" /></a>
                </div>
                <h2>Room 5</h2>
                <span>ห้องประชุม</span>
            </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
</body>

</html>