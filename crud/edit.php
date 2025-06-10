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
        <h3>Update Student Informations</h3>
        <hr>
        <form action="update.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $std['id']; ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $std['name']; ?>" placeholder=" Enter Your Name" required>
          </div>
          <div class="mb-3">
            <label for="roll" class="form-label">Roll</label>
            <input type="number" class="form-control" name="roll" value="<?php echo $std['roll'];?>" placeholder="Enter Your Roll" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $std['email']; ?>" placeholder=" Enter Your Email" required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" value="<?php echo $std['age']; ?>" placeholder=" Enter Your Age" required>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</body>

</html>