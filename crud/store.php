<?php
require_once "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
$result = mysqli_query($conn, $sql);
header("Location: index.php");
exit();

?>
