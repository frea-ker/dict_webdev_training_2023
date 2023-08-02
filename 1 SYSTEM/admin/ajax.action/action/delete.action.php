<?php
	session_start();
	include "../../../connection/connection.php";

	$id = $_POST['id'];
	echo $id;

	$sql = "DELETE FROM `healthdeclaration` WHERE id=".$id."";
	echo $sql;

	if(mysqli_query($db_con, $sql)){
		echo "O.K";
		header("location: ../../dashboard.php");
	}else{
		echo "UPDATE FAILED";
	};
?>