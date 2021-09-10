<?php
session_start();

if (!isset($_SESSION['login'])){
  header ("Location: login.php");
}

$id = $_GET['id'];
$conn = mysqli_connect('localhost' , 'root' , '' , 'employee_dbms');

$sql = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($conn, $sql);

$emp = mysqli_fetch_assoc($result);
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
          <a class="btn btn-primary" href="index.php" title="">Employee</a>

        </div>
        <div class="col-md-9">
          <h2 class="text-center">Employee Information</h2>
          <hr>
          <table class="table">
            <tr>
              <th width="100" class="text-right"> Name: </th>
              <td> <?php echo $emp['name']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right"> Department: </th>
              <td> <?php echo $emp['Department']; ?> </td>
            </tr>
            <tr>
              <th class="text-right"> Age: </th>
              <td> <?php echo $emp['age']; ?> </td>
            </tr>
            <tr>
              <th class="text-right"> ID: </th>
              <td> <?php echo $emp['fid']; ?> </td>
            </tr>
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