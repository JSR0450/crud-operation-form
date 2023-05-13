<?php  

	include "connect.php";

	

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	$insert_query = "INSERT INTO `data`(`first_name`, `last_name`, `email_id`, `city`, `state`, `zip`) VALUES ('$fname','$lname','$email','$city','$state','$zip')";

	$result = mysqli_query($connection , $insert_query);

	if($result){
		header('Location:result.php');
	}else{
		echo "Error";
	}




?>