<?php
require_once "connect.php";

// SELECT FROM DATA BASE 
// echo "ID : " . $row["id"]  . $row["name"]  . $row["email"] . "<br>";
// echo "NAME : " . $row["name"] . "<br>";
// $result = var_dump($result);
// var_dump($row);

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <table class="table-primary table table-dark table-hover" >
    <tr>
      <th class="col">ID</th>
      <th class="col">NAME</th>
      <th class="col">AGE</th>
      <th class="col">EMAIL</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['age'] ?></td>
        <td><?php echo $row['email'] ?></td>

      </tr>


    <?php  } ?>
  </table>
</body>

</html>


<?php


// UPDATE FROM DATA BASE
/*
$sql = "UPDATE users SET name = 'karim', age=20 ,email='karim@gmail.com', password='12345' WHERE id = 5";
$query = mysqli_query($conn, $sql);
if($query){
echo "updated";
}else{
echo"not update";
};
*/

// DELETE FROM DATA BASE
/*
$sql = "DELETE FROM users WHERE id = 10";
$query = mysqli_query($conn, $sql);
if($query){
echo "Delete successfully";
};
*/