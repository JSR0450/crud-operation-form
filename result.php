<?php 
	include "connect.php";

	$record =mysqli_query($connection, "SELECT `user_id`, `first_name`, `last_name`, `email_id`, `city`, `state`, `zip` FROM `data` WHERE 1");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head> 
  <body>
  	<div class="container ">

  		<button type="button" class="btn btn-primary mt-5"><a href="home.php" class="text-white text-decoration-none">+Add</a></button>
  		<div class="table-responsive">
  <table class="table mt-4 borderd">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First name</th>
        <th scope="col">last name</th>
        <th scope="col">email</th>
        <th scope="col">city</th>
        <th scope="col">state</th>
        <th scope="col">zip</th>
        <th scope="col">Action</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>


      	<?php 
      	$counter = 1;		
      while($row = mysqli_fetch_assoc($record)){

        $id= $row['user_id'];

      			echo '
      			<tr>
      			<td scope="row">'.($counter++).'</td>
      			<td scope="row">'.($row['first_name']).'</td>
      			<td scope="row">'.($row['last_name']).'</td>
      			<td scope="row">'.($row['email_id']).'</td>
      			<td scope="row">'.($row['city']).'</td>
      			<td scope="row">'.($row['state']).'</td>
      			<td scope="row">'.($row['zip']).'</td>
      			
      			<td scope="row">
      				<button type="button" class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-decoration-none text-white">Update</a></button>


					<button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-white">Delete</a></button>
      			</td>

      			</tr>';
		        
      		}

      	?>

        <a href=""></a>
      </tr>
      
    </tbody>
  </table>
</div>
  	</div>
    
  </body>
</html>	