<?php
require_once "../conn.php";
$animalgender='';
$animalbreed = '';
$animalid = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Find your Companion</title>
</head>
<body>
 <style>
.form-group{
    margin-left: 20%;
    margin-top: 5%;
}
.btn2{
    margin-left: 5%;
    margin-top: 7%;
}
.table-form{
    margin-left: 25%;
    margin-top: 5%;
}
.more{
    margin-top: 3%;
}
table{
    margin-top: 4%;
}
body{
    background-color: lightgrey;
}

 </style>

  <div class="container">
 <h3 style="text-align: center; font-weight:bold;">Find your perfect Companion !</h3>
    <form class="row gy-2 gx-3 align-items-center" method="POST">
     <div class="form-group">
         <label class="col-lg-2 control-label"><b>Gender</b></label>
         <div class="col-lg-4">
              <label>
                <input type="radio" name="gender" value="male">Male
              </label>
              <label>
                <input type="radio" name="gender" value="female">Female
              </label>
                    
          </div>
      </div>
    

 <div class="form-group">
  <label class="col-lg-2 control-label"><b>Breed</b></label>
   <div class="col-lg-4">
     <select class="breed" name= "breed">
       <option value="Beagle">Beagle</option>
       <option value="Brit Shorthair">Brit Shorthair</option>
       <option value="Devon Rex">Devon Rex</option>
       <option value="Labrador">Labrador</option>
       <option value="Pembroke Welsh">Pembroke Welsh</option>
       <option value="Poodle">Poodle</option>
       <option value="Scottish Fold">Scottish Fold</option>
     </select>
   </div>
 </div>

 <div class="btn2">
    <input type="submit" class="btn btn-dark btn-rounded" name="submit"value="Search">         
 </div>

  </form>

</div>  
         

<?php
if(isset($_POST['submit'])){
$animalbreed =$_POST['breed'];
if(!empty($_POST['gender'])) {
    $animalgender=$_POST['gender']; 
} 
}
?>


 <div class="table-form">
 <h2> All Guests Found:</h2>
  <table>
     <thead>
        <tr>
            <td><b>Gender</b></td>
            <td><b>Breed</b></td>
        </tr>
    </thead>
  <?php
   $query= "SELECT Admin, Gender, Breed  FROM animals where gender like '$animalgender' and breed like  '$animalbreed'";
   $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
   $queryResults = mysqli_num_rows($result);
   
    if($queryResults >0){
        while($row=mysqli_fetch_assoc($result)){
            $animalid = $row['Admin'];
            print "
            <tbody> 
              <td>".$row['Gender']."</td>
              <td>".$row['Breed']."</td>
            </tbody> 
                ";
            }
        }
            else 
            print"<td>There are</td>
           <td>".$queryResults."results</td>"; 

           session_start();
           $_SESSION['id'] =  $animalid;
           ?>
 </table>

  <div class="more">
	 <input type="submit" onClick="location.href='results.php'"class="btn btn-dark btn-rounded" name="submit" value="More Details">
  </div>

</div>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>