<?php
session_start();
require_once("../db.php");



//If user clicked register button
if(isset($_POST)) {

	//Escape Special Characters In String First
	//$id_jobpost = mysqli_real_escape_string($conn, $_POST['id_jobpost']);
	$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
	$maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
	$experiencerequired = mysqli_real_escape_string($conn, $_POST['experiencerequired']);
	$qualificationrequired = mysqli_real_escape_string($conn, $_POST['qualificationrequired']);
	

	

		$sql = "INSERT INTO job_post(jobtitle, description, minimumsalary, maximumsalary ,experiencerequired ,qualificationrequired) 
		VALUES
		('$jobtitle', '$description', '$minimumsalary', '$maximumsalary' ,'$experiencerequired', '$qualificationrequired' )";

		if($conn->query($sql)===TRUE) {
			$_SESSION['JobPostSuccess'] = true;
			header("Location: dashboard.php");
			exit();
		} else {
			echo "Error " . $sql . "<br>" . $conn->error;
		}
	
	     $conn->close();
}
          else {
	        header("Location: dashboard.php");
	         exit();
           }
		   
