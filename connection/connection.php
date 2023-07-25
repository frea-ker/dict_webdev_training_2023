<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "dict_webdevtraining";
	$db_con = mysqli_connect($host,$user,$password);
	mysqli_select_db($db_con, $db);
?>