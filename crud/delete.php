<?php
require_once "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
$query= mysqli_query($conn, $sql);

if($query){
  header("Location: index.php");
  exit();
}
