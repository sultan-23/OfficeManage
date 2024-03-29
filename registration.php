<?php
session_start();
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
        
        <div class="col-md-offset-3 col-md-6">

          <?php if(isset($_SESSION['error_msg'])) { ?>
            <div class="alert alert-warning">
              <strong>Warning!!</strong> <?php echo $_SESSION['error_msg'];?>
            </div>
          <?php } ?>

          <h2 class="text-center">Create an Account</h2>
          <hr>

          <form action="confirmRegistration.php" method="POST">
            <div class="form-group">
              <label for="name">Name: </label>
                <input required type="name" class="form-control" name="name"placeholder="Your Name">
            </div>
            <div class="form-group">
              <label for="Email">Email: </label>
                <input required type="email" class="form-control" name="email"placeholder="email">
            </div>
            <div class="form-group">
              <label for="Password">Password: </label>
                <input required type="password" class="form-control" name="password"placeholder="password">
            </div>
            <div class="form-group">
              <label for="Confirm Password">Confirm Password: </label>
                <input required type="password" class="form-control" name="cpassword"placeholder="Confirm password">
            </div>
            <br>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            Already have an account
            <a class="btn btn-link" href="login.php">Login</a>
          </form>
          
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
<?php unset($_SESSION['error_msg']); ?>