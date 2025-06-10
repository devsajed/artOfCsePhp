<?php
require_once "connect.php";
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id ";
$query = mysqli_query($conn, $sql);

$std = mysqli_fetch_assoc($query);
// var_dump($std);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Student</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-2">
        <a href="index.php" class="btn btn-primary d-inline-block mb-2"> Home</a>
      </div>
      <div class="col-md-8">
        <h3>Student list</h3>
        <hr>
        <table class="table table-primary">

          <tr>
            <th width="80">Name: </th>
            <td><?php echo $std['name']; ?></td>
          </tr>
          <tr>
            <th width="80">Roll: </th>
            <td><?php echo $std['roll']; ?></td>
          </tr>
          <tr>
            <th>Email :</th>
            <td><?php echo $std['email']; ?></td>
          </tr>
          <tr>
            <th>Age :</th>
            <td><?php echo $std['age']; ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>