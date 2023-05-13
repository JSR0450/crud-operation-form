<?php

  include 'connect.php';

  $updateid = $_GET['updateid'];
  $updateQuery = "SELECT `user_id`, `first_name`, `last_name`, `email_id`, `city`, `state`, `zip` FROM `data` WHERE user_id=$updateid ";

  $sql = mysqli_query($connection, $updateQuery);

  $row = mysqli_fetch_assoc($sql);

  $fname = $row['first_name'];
  $lname = $row['last_name'];
  $email = $row['email_id'];
  $city = $row['city'];
  $state = $row['state'];
  $zip = $row['zip'];




  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- ta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h1 class="mt-5 mb-4">registration form</h1>
       
<form class="row g-3 needs-validation" action="updatedata.php" method="post">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" name="fname" class="form-control" id="validationCustom01" value="<?=$fname ?>" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" name="lname" class="form-control" id="validationCustom02" value="<?=$lname ?>" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?=$email ?>">
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="validationCustom03"  value="<?=$city ?>">
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" name="state" id="validationCustom04" >
      <option selected="" disabled="" value="<?=$state ?>">Choose...</option>
      <option value="<?=$state ?>">Option 1</option>
      <option value="<?=$state ?>">Option 2</option>
      <option value="<?=$state ?>">Option 3</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" name="zip" class="form-control" id="validationCustom05" value="<?=$zip ?>">
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>

  <input type="hidden" name="id" value="<?= @$_GET['updateid']?>">
  
  <div class="col-12">
    <button class="btn btn-success" type="submit">Update form</button>
  </div>
</form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>