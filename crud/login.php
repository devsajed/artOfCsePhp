<?php
// session_start();
require_once "connect.php";

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
      <div class="col-md-8 mx-auto">

        <h3>login </h3>
        <hr>
        <form action="login_check.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Your password" required>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">Login</button>
            <span class="mx-2 "> Don't have an account?</span><a href="register.php" class="btn btn-success">Create a new account</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</body>

</html>