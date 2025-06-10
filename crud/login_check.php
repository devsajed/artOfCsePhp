<?php
require_once "connect.php";
session_start();

$email =$_POST['email'];
$pass =$_POST['password'];

$sql= "SELECT * FROM student_login_data WHERE email='$email' AND password='$pass' ";
$result=mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);

if($rowcount == 1){
 
  $_SESSION['login'] = true;
  header("Location: index.php");
  exit;
}else{
  header("Location: login.php?error=1");
  exit;
 
}

