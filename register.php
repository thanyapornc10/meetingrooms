<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="registerst.css">
    <title>Register</title>
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
                <form action="register_post.php" method="post">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <input type="text" name="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="username">Password</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" required>
                        <label for="password">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="phone" required>
                        <label for="phone">Phone</label>
                    </div>
                    <button name="submit">Register</button>
                    <div class="register">
                        <p>You have a account <a href="login.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>