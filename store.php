<?php
session_start();

if (!isset($_SESSION['login'])){
  header ("Location: login.php");
}

$name = $_POST['name'];
$Department = $_POST['Department'];
$age = $_POST['age'];
$fid = $_POST['fid'];

$conn = mysqli_connect('localhost' , 'root' , '' , 'employee_dbms');

$sql = "INSERT INTO employees VALUES(NULL, '$name', '$Department', $age, $fid)";

if(mysqli_query($conn, $sql)){
	$_SESSION['success'] = 1;
	header("Location: index.php?success=1");
} else {
	$_SESSION['error'] = 1;
	header("Location: insert.php?error=1");
}
 ?>