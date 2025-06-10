<?php
require_once "connect.php";
  session_start();
  if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
  }
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
        <a href="index.php" class="btn btn-primary d-inline-block mb-2 ms-2"> <- Back</a>
      </div>
      <div class="col-md-8">
        <?php if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-warning" role="alert">
            <strong>Error</strong> somthing wrong!.
          </div>
        <?php }; 
        unset($_SESSION['error']);
        ?>
        <h3>Add New Student </h3>
        <hr>
        <form action="store.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
          </div>
          <div class="mb-3">
            <label for="roll" class="form-label">Roll</label>
            <input type="number" class="form-control" name="roll" placeholder="Enter Your Roll" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" placeholder="Enter Your Age" required>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</body>

</html>