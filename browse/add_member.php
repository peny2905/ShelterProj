<?php
	
	require_once "../conn.php";
	
	$message = '';  
  $name    = ''; 
	$age     = ''; 
	$gender  = ''; 
	$breed   = ''; 
	$colors  = ''; 
	$health  = '';

		if($_POST){
            $name   = $_POST['name'];
            $age    = $_POST['age'];
            $gender = $_POST['gender'];
            $breed  = $_POST['breed'];
            $colors = $_POST['colors'];
            $health = $_POST['health'];

		$query ="INSERT INTO  animals
					(Name, Age, Gender, Breed, Colors, Health)
					VALUES
					('$name', '$age', '$breed', '$gender', '$colors', '$health')";
					
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$message  =  "RECORD ADDED SUCCESFULLY!";
    print $message;
    header('location:browse.php');
		
	} 
	
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title> ADD MEMBER FORM </title>
</head>

<body>
<section class="vh-160" style="background-color: #557C55;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">ADD MEMBER</h2>
	
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

     <div class="form-outline mb-4">
      <label class="form-label"for="form3Example1cg">Name</label>
      <input type="text" name="name" id="form3Example1cg"class="form-control form-control-lg" value="<?= $name ?>">
     </div>

     <div class="form-outline mb-4">
      <label class="form-label"for="form3Example3cg">Age</label>
      <input type="text" name="age" id="form3Example3cg"class="form-control form-control-lg" value="<?= $age ?>">
     </div>

     <div class="form-outline mb-4">
      <label class="form-label" for="form3Example4cg">Gender</label>
      <input type="text" name="gender" id="form3Example4cg"class="form-control form-control-lg" value="<?= $gender ?>">
     </div>
     
     <div class="form-outline mb-4">
      <label class="form-label"for="form3Example3cg">Breed</label>
      <input type="text" name="breed" id="form3Example3cg"class="form-control form-control-lg" value="<?= $breed?>">
     </div>

     <div class="form-outline mb-4">
      <label class="form-label"for="form3Example3cg">Colors</label>
      <input type="text" name="colors" id="form3Example3cg"class="form-control form-control-lg" value="<?= $colors ?>">
     </div>

     <div class="form-outline mb-4">
      <label class="form-label"for="form3Example3cg">Health</label>
      <input type="text" name="health" id="form3Example3cg"class="form-control form-control-lg" value="<?= $health ?>">
     </div>

	  <br>

      <div class="d-flex justify-content-center">
      <input class="btn btn-light btn-lg" data-mdb-ripple-color="dark" style="background-color:#557C55;"type="submit" name="submit" id="submit" value="ADD">
      </div>

    </form>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br>
<div align="center"> <?= $message ?></div>
<br><br>
<div class="d-flex justify-content-center">
<a href="browse.php" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" style="background-color:#557C55;"type="submit" name="submit" id="submit" value="Update">Go to browse</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>