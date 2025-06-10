<?php
require_once "connect.php";
session_start(); // Start session at the very top
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);

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
        <a href="newAdd.php" class="btn btn-primary d-inline-block mb-2"> + New Student</a>
      </div>
      <div class="col-sm-12 col-md-8">
        <a href="logout.php" class="btn btn-warning text-end">Logout</a>
        <?php if (isset($_SESSION['success'])): ?>
          <div class="alert alert-success" role="alert">
            <strong>Success</strong> added successfully.
          </div>
        <?php endif; ?>
        <h3>Student list</h3>
        <hr>
        <div class="table-responsive">
          <table class="table table-primary ">
            <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Roll</th>
              <th>Email</th>
              <th>Age</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['roll'] ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td>
                    <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-success d-inline-block ">View</a>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning d-inline-block m-2">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class=" btn btn-danger d-inline-block" onclick="return confirm('Are you sure ?') ">Delete</a>
                  </td>
                </tr>
              <?php };
              unset($_SESSION['success']);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>