<?php
	session_start();
	require_once "conn.php"; 
  require_once "functions.php";
    	
    
	$message  = ''; 
	$username = '';
	$password = '';
  $repassword ='';
  $name     = '';
	$sirname  = '';
	$email    = '';
	$phone    = '';
	$address  = '';
	$country  = '';
  $city     = '';
  $photo    ='';
  $pic_tag  = '';
		
	
	if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword =$_POST['password'];
        $name     = $_POST['name'];
        $sirname  = $_POST['sirname'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $address  = $_POST['address'];
        $country  = $_POST['country'];
        $city     = $_POST['city'];
		if($photo){
			$pic_tag = "<img src='$photo' class='pic'>";
		}
		
          $message  .= " - USER IMAGE FAILED TO UPLOAD.";
          if(isset($_FILES['photo']))   {
            $img_path="./pics/";
            $posted='photo'; // to onoma tou pediou tis formas
            if ($_FILES[$posted]['name']){	
              //the path  that function 'upload' returns after upload-move-rename procedure		
              $uploaded_file=upload($posted, $img_path); 
              if ($uploaded_file){ 
                $query ="INSERT INTO  users 
                (username,password,firstname,lastname,email,phone,address,country,city,pic)
                VALUES
                ('$username','$password','$name','$sirname','$email','$phone','$address',
                          '$country','$city','$photo')";
                 $result = mysqli_query($conn, $query) or die(mysqli_error($conn));   
                 $message  =  "RECORD ADDED SUCCESFULLY!";	
              }
            }		
          }
          else if (!isset($_FILES['photo']))
          {
            print $message;
            $photo = '';
            $query ="INSERT INTO  users 
            (username,password,firstname,lastname,email,phone,address,country,city,pic)
            VALUES
            ('$username','$password','$name','$sirname','$email','$phone','$address',
                      '$country','$city','$photo')";
             $result = mysqli_query($conn, $query) or die(mysqli_error($conn));   
             $message  =  "RECORD ADDED SUCCESFULLY!";	
          }
          //header("location:login.php");
        
    
  }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"enctype="multipart/form-data">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Sign Up Form</title>
</head>

<body class="regbody" >
   
    <h1 class="regtitle">Sign Up</h1>
    

    <div class ="signup">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

<div class="form-group">
<div class="username">
  <input type="text" name="username" id="username" value="<?= $username ?>">
  <label class="form-label-username" for="username"><b>Username</b></label>
</div>

<div class="password">
 <input type="text" name="password" id="password" value="<?= $password ?>">
 <label class="form-label-password" for="password"><b>Password</b></label>
</div>

<div class="re-password">
 <input type="text" name="re-password" id="re-password" value="<?= $repassword ?>">
 <label class="form-label-re-password" for="re-password"><b>Confirm Password</b></label>
</div>

<div class="name">
 <input type="text" name="name" id="formname" value="<?= $name ?>">
 <label class="form-label-name" for="name"><b>Name</b></label>   
</div>

<div class="sirname">
 <input type="text" name="sirname" id="formsirname" value="<?= $sirname ?>">
 <label class="form-label-sirname" for="sirname"><b>Sirname</b></label>
</div>

<div class="e-mail">
 <input type="text" name="email" id="email" value="<?= $email ?>">
 <label class="form-label-e-mail" for="email"><b>E-mail</b></label>   
</div>

<div class="phone">
 <input type="text" name="phone" id="phone" value="<?= $phone ?>">
 <label class="form-label-phone" for="phone"><b>Phone</b></label>   
</div>

<div class="address">
 <input type="text" name="address" id="address" value="<?= $address ?>">
 <label class="form-label-address" for="address"><b>Address</b></label> 
</div>

<div class="country">
 <input type="text" name="country" id="country" value="<?= $country ?>">
 <label class="form-label-country" for="country"><b>Country</b></label>  
</div>

<div class="city">
 <input type="text" name="city" id="city" value="<?= $city ?>">
 <label class="form-label-city" for="city"><b>City</b></label>  
</div>


<div class="photo">
 <label class="form-label-photo" for="photo"><b>Photo</b></label>
 <input type="file" id="photo" name="photo" accept="image/*" onchange="loadFile(event)">
		<br>
		<div id="preview"></div>
		<img id="output" style="width: 130px;">
</div>


<div class="form-check d-flex justify-content-center mb-5">
<input
    class="form-check-input me-2"
    type="checkbox"
    value=""
    id="form2Example3c"/>
  <label class="form-check-label" for="form2Example3"><br>
    I agree all statements in <a href="termsofservice.html">Terms of service</a>
  </label>
  
</div>

<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  <button type="submit" class="btn btn-primary btn-md"  name="button">Register</button>
</div>

</form>
</div>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <script>
  var loadFile = function(event) {
	 document.getElementById('preview').innerHTML = "Photo preview";
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  };
</script>
</body>
</html>