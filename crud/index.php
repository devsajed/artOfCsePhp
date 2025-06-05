<?php
require_once "connect.php";
include_once "create.php";
// include_once "view.php";



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
      <div class="col-md-8">
        <h3>Student list</h3>
        <hr>
        <table class="table table-primary">
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td>
                  <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-success d-inline-block ">View</a>
                  <a href="edit.php" class="btn btn-warning d-inline-block m-2">Edit</a>
                  <a href="delete.php" class=" btn btn-danger d-inline-block" onclick="return confirm('Are you sure?') ">Delete</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>