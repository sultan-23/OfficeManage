<?php
session_start();

if (!isset($_SESSION['login'])){
  header ("Location: login.php");
}

$id = $_GET['id'];

$name = $_POST['name'];
$Department = $_POST['Department'];
$age = $_POST['age'];
$fid = $_POST['fid'];

$conn = mysqli_connect('localhost' , 'root' , '' , 'employee_dbms');
$sql = "UPDATE employees SET name='$name', Department='$Department', age='$age', fid = '$fid' WHERE id = $id ";

if(mysqli_query($conn, $sql)){
	header("Location: show.php?id=". $id);
} else {
	echo "Not inserted";
}

 ?>