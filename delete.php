<?php
session_start();

if (!isset($_SESSION['login'])){
  header ("Location: login.php");
}

$id = $_GET['id'];
$conn = mysqli_connect('localhost' , 'root' , '' , 'employee_dbms');

$sql = "DELETE FROM employees WHERE id = $id";
if(mysqli_query($conn, $sql)){
	header("Location: index.php");
}else{
	echo "No Deleted";
}

?>
