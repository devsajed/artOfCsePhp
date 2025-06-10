<?php
require_once "connect.php";
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

$id = $_POST['id'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "UPDATE users SET name='$name',roll='$roll', email='$email', age='$age' WHERE id=$id";
$result = mysqli_query($conn, $sql);
// var_dump($result);
if ($result) {
  header("Location: index.php");
} else {
  echo "Update failed oops!";
}
