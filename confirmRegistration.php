<?php
	session_start();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$cpass = $_POST['cpassword'];

	if ($pass != $cpass){
		$_SESSION['error_msg'] = "Password and Confirm Password didn't match";
		header("Location: registration.php");
	}

	$conn = mysqli_connect('localhost' , 'root' , '' , 'employee_dbms');

	$sql = "SELECT * FROM `users` WHERE `email`= '$email';";
	$result = mysqli_query($conn, $sql);
	$rowcount = mysqli_num_rows($result);

	if ($rowcount == 1){
		$_SESSION['error_msg'] = "Account already exist please login";
		header("Location: registration.php");

	}else {
		$sql = "INSERT INTO users VALUES(NULL, '$name', '$email', '$pass')";

	if (mysqli_query($conn, $sql)){
		$_SESSION['reg_msg'] = "Registration Successfully. Please Login";
		header("Location: login.php");
	}

	}
?>