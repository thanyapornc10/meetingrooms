<?php
include("connection.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO users (username,password,email,phone) VALUES ('$username','$password','$email','$phone')";
        
     if(mysqli_query($conn, $sql)) {
        header("Location:login.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>