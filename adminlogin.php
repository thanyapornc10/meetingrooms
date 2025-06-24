<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="adminst.css">
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style type="text/css">
        body {
            background-image: url('wallpaper2.jpg');
            background-position: center;
            background-size: cover;
        }
        
    </style>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="admin_post.php" method="post">
                    <h2>Admin Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button name="submit">Log in</button>
                    <div class="register">
                        <p>Don't have a account <a href="register.php">Register</a></p>
                    </div>
                    <div class="register">
                        <p>You have a account <a href="login.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>