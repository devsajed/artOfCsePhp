<?php
require_once "connect.php";

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
$query= mysqli_query($conn, $sql);

if($query){
  header("Location: index.php");
  exit();
}
