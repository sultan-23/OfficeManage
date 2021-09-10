<?php
session_start();

if (!isset($_SESSION['login'])){
  header("Location: login.php");
}

$conn = mysqli_connect('localhost' , 'root' , '' , 'employee_dbms');

$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Office Management</title>
  </head>
  <body>
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-primary" href="insert.php" title="">New Employee</a>

        </div>
        <div class="col-md-9">

          <?php if(isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
              <strong>Success!!</strong>Added Successfully.
            </div>
          <?php } ?>

          <h2 class="text-center">Employee List</h2>

          <a class="btn btn-outline-danger btn-md float-right" href="logout.php">Logout</a>

          <hr>
          <table class="table">
            <thead>
              <th>SL</th>
              <th>Name</th>
              <th>Department</th>
              <th>Age</th>
              <th>ID</th>
              <th>Actions</th>
            </thead>
            <tbody>
              <?php while($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['Department']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['fid']?></td>
                <td>
                  <a class="btn btn-info btn-sm" href="show.php?id=<?php echo $row['id'];?>" title=""> View </a>
                  <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $row['id']; ?>" title=""> Edit </a>
                  <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id'];?>" title=""> Delete </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php unset($_SESSION['success']); ?>