<?php
	session_start();
	include "../../../connection/connection.php";

	$id = $_POST['id'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$mobileNo = $_POST['mobileNo'];
	$email = $_POST['email'];
	$bodyTemp = $_POST['bodyTemp'];
	$covDiagnosed = $_POST['covDiagnosed'];
	$covEncounter = $_POST['covEncounter'];
	$covVacinated = $_POST['covVacinated'];
	$nationality = $_POST['nationality'];

	echo $name;
	echo "<br>";
	echo $gender;
	echo "<br>";
	echo $age;
	echo "<br>";
	echo $mobileNo;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $bodyTemp;
	echo "<br>";
	echo $covDiagnosed;
	echo "<br>";
	echo $covEncounter;
	echo "<br>";
	echo $covVacinated;
	echo "<br>";
	echo $nationality;

	echo "<br><br><br>";

	$sql = "UPDATE `healthdeclaration` SET `name`='".$name."',`gender`='".$gender."',`age`='".$age."',`mobileNo`='".$mobileNo."',`email`='".$email."',`bodyTemp`='".$bodyTemp."',`covDiagnosed`='".$covDiagnosed."',`covEncounter`='".$covEncounter."',`covVacinated`='".$covVacinated."',`nationality`='".$nationality."' WHERE id=".$id."";

	echo $sql;

	if(mysqli_query($db_con, $sql)){
		echo "O.K";
		header("location: ../../dashboard.php");
	}else{
		echo "UPDATE FAILED";
	}
?>