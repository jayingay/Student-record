<?php
	include('../connect.php');
	$id=$_GET['id'];

	$sql = "DELETE FROM student WHERE id = '$id'";
    $con->query($sql) or die ($con->error);

	
	 echo header ("Location: student.php");
?>