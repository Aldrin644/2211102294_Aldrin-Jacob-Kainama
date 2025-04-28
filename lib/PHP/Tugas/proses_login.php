<?php
session_start();
$valid_username = "Ald";
$valid_password = "2294";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Login Gagal!'); window.location.href='login.php';</script>";
}
?>
