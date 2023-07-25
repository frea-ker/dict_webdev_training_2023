<?php
	include "../connection/connection.php";
	date_default_timezone_set("Asia/Manila");
	session_start();

	if (isset($_POST['submitLogin'])){
		//check if user is in database
		$email = $_POST['email'];
		$pword = $_POST['pword'];

		$sql = "SELECT * FROM `accounts` WHERE username = '".$email."' AND password = '".$pword."'";
		echo $sql;
		$result = mysqli_query($db_con, $sql);


		if (mysqli_num_rows($result)){
			$getresult = mysqli_fetch_array($result);
			$_SESSION['idOfUser'] = $getresult['id'];
			header("location: ../admin/dashboard.php");
		}
	}else{
		echo "string";
	}
?>