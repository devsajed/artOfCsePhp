<?php
require_once "connect.php";
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];

// Hash the password
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
$sql = "INSERT INTO student_login_data (name, email, password, confirm_pass) VALUES ('$name', '$email', '$pass', '$confirm_pass')";
$result = mysqli_query($conn, $sql);

if ($result) {
  $_SESSION['login'] = true;
  header("Location: login.php");
  exit;
} else {
  header("Location: register.php?error=sql_error");
  exit;
}
