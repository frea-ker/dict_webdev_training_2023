<?php
	include "../connection/connection.php";
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$mobileNo = $_POST['mobileNo'];
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
	echo $bodyTemp;
	echo "<br>";
	echo $covDiagnosed;
	echo "<br>";
	echo $covEncounter;
	echo "<br>";
	echo $covVacinated;
	echo "<br>";
	echo $nationality;

	$sqlAddDeclaration = "INSERT INTO `healthdeclaration`(`name`, `gender`, `age`, `mobileNo`, `bodyTemp`, `covDiagnosed`, `covEncounter`, `covVacinated`, `nationality`) VALUES ('".$name."', '".$gender."', '".$age."', '".$mobileNo."', '".$bodyTemp."', '".$covDiagnosed."', '".$covEncounter."', '".$covVacinated."', '".$nationality."')";
	if($runsqlAddDeclaration = mysqli_query($db_con, $sqlAddDeclaration)){
		header("location: ../index.php");
	}
	
?>