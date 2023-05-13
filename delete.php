<?php 

	include 'connect.php';

	if(isset($_GET['deleteid'])){
		$id = $_GET['deleteid'];

		$delete_query = "DELETE FROM `data` WHERE user_id = $id";

		$result = mysqli_query($connection, $delete_query);

		if($result){
			header('Location:result.php');		}
		}
		else{
			echo "Error";
		}
	

?>