<?php
	include 'database.php';
	$id=$_POST['id'];
	$name=$_POST['name'];
	
	$sql = "UPDATE `users` 
	SET `username`='$name',
	 WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>