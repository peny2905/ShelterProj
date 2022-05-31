<?php
	session_start();
	require_once "conn.php"; 
	$message = '';
	$username='';
	$password='';
	$admin = '';
	if($_POST){
		if(isset($_POST['username'])){
			$username = $_POST['username'];
		}
		
		if(isset($_POST['password'])){
			$password = $_POST['password'];
		}	
		
		if($username && $password){
			$query = "SELECT * FROM users 
						WHERE 
						username='$username' 
						AND 
						password='$password' ";
						
						
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

			while($row = mysqli_fetch_assoc($result)){
				$username = $row['username'];
				$password = $row['password'];
				$admin = $row['admin'];
			if($username && $password && $admin == NULL){
				header("location:../index2.php");
			}
			else if ($username && $password && $admin == 1){
				header("location:../index.php");
			}
			else{
		      $message = "Login failed. Please try again or add a new member.";
			}
		}
		}
		
		
		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
<title> Login Form </title>
</head>

<body class="log-body">
<div class="container1">
  <h1> Login Form </h1>
 <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="post">

  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-5">
      <input type="text" name="username" class="form-control" id="username" placeholder="username" value="<?= $username ?>"required >
    </div>
  </div>

  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-5">
      <input type="text" name="password" class="form-control" id="password" placeholder="Password"  value="<?= $password ?>"required >
    </div>
  </div>

	<div class="btn-group"> 

	<div class="submitbtn">
	 <input type="submit" class="btn btn-light btn-rounded" name="button" id="submit" value="Login">
	</div>
     

	<div class="newmemberbtn">
	 <a href="register.php">
	 <input type="button" class="btn btn-dark btn-rounded" name="newmember" id="newmember" value="Add new member">
	 </a>
	</div>
	</div> 
</form>
</div>
    <div id="message"style="font-size:larger;font-weight:bold;margin-right:19%;margin-top:4%"> 
    	<?php print $message ?>
	</div>
	
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>