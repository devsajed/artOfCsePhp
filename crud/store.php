<?php
require_once "connect.php";
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


$name = $_POST['name'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, roll, email, age) VALUES ('$name','$roll', '$email', $age)";
$result = mysqli_query($conn, $sql);

if($result){
  $_SESSION['success'] = 1;

  header("Location: index.php");
  exit;
}else{
  $_SESSION['error'] = 1;
  header("Location: newAdd.php");
  exit;
}
session_destroy();
?>
