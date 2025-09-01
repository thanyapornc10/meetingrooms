<?php
// หน้านี้ไว้รับ POST เท่านั้น
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: adminlogin.php');
    exit();
}

if (session_status() === PHP_SESSION_NONE) { session_start(); }
require_once 'connection.php';

$user_name = trim($_POST['user_name'] ?? '');
$Password  = trim($_POST['Password']  ?? '');

// (แนะนำ: ใช้ prepared statement)
$stmt = $conn->prepare("SELECT 1 FROM admindata WHERE user_name = ? AND Password = ?");
$stmt->bind_param("ss", $user_name, $Password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $_SESSION["user_name"] = $user_name;
    header("Location: adminpage.php");
    exit();
} else {
    header('Location: adminlogin.php?msg=Login failed. Invalid username or password!!');
    exit();
}
