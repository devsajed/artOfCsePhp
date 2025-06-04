<?php
require_once "connect.php";

// SELECT FROM DATA BASE 
/*

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

var_dump($result);

while($row = mysqli_fetch_assoc($result)){
  echo "ID : " . $row["id"]  . $row["name" ]  . $row["email" ] . "<br>" ;
  echo "NAME : " . $row["name"] . "<br>";

  var_dump($row);

}
*/

// UPDATE FROM DATA BASE 
/*
$sql = "UPDATE users SET name = 'karim', age=20 ,email='karim@gmail.com', password='12345' WHERE id = 5";
  if(mysqli_query($conn,$sql)){
    echo "updated";
  }else{
    echo"not update";
  };
*/

// DELETE FROM DATA BASE 
/*
$sql = "DELETE FROM  users WHERE id = 4";

if(mysqli_query($conn,$sql)){
  echo "Delete successfully";
};
*/