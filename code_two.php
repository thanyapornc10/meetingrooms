<?php
include("connection.php");
require("login_post.php");

session_start();
    

if(isset($_POST['save_datetime']))
{
    $username = $_SESSION["username"];
    $order_num = $_POST['order_num'];
    $nameR = $_POST['nameR'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $use_for = $_POST['use_for'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];

    $query = "INSERT INTO booking(order_num,nameR,username,fname,lname,use_for,time_start,time_end) 
    VALUES 
    ('order_num','Room 2','$username','$fname','$lname','$use_for','$time_start','$time_end')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Booking Sucessfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Booking fales";
        header("Location: index.php");
    }
}
?>