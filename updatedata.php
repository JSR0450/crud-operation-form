<?php 

	include 'connect.php';

	if(isset($_POST['id'])){

	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];


	$delete_query = "UPDATE `data` SET `user_id`='$id',`first_name`='$fname',`last_name`='$lname',`email_id`='$email',`city`='$city',`state`='$state',`zip`='$zip' WHERE user_id= $id";

	$result = mysqli_query($connection, $delete_query);

	if($result){
		header("location:result.php");
	}
	else{
		echo "Error!!";
	}
	// print_r($_POST);
	}

?>
