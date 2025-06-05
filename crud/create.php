<?php
require_once "connect.php";

$sql = "SELECT * FROM users ";
$query = mysqli_query($conn, $sql);

