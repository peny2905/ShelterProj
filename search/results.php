<?php
require_once "../conn.php";
session_start();
$id =  $_SESSION['id'];
$qNAME='';
$qAGE='';
$qGENDER='';
$qBREED='';
$qCOLORS='';
$qHEALTH='';
$qPHOTO='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Results</title>
    <a href="../index.php">
        <img class="logo"src="../images/logo.jpg" alt="animal_shelter_logo">
    </a>
</head>
<body>
<style>
.logo{
    width: 220px; 
    height: 220px;
    margin-right: 50%;
}
tbody{
  color: coral;
}
td{
  font-size: 19px;
  width:10px;
}
.container{
  padding-left: 5%;
  padding-right: 5%;
}



</style>
<?php

$query= "SELECT * FROM animals where Admin = $id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$queryResults = mysqli_num_rows($result);

if($queryResults>0)
{
while($row=mysqli_fetch_assoc($result))
{
    $qNAME=$row['Name'];
    $qAGE=$row['Age'];
    $qGENDER=$row['Gender'];
    $qBREED=$row['Breed'];
    $qCOLORS=$row['Colors'];
    $qHEALTH=$row['Health'];
    $qPHOTO=$row['Photo'];
  }
}

?>
<div class="container">
  <h2>Your Results</h2>
  
<table class="table">
     <thead>
        <tr>
            <td> NAME   </td>
            <td> AGE    </td>
            <td> GENDER </td>
            <td> BREED  </td>
            <td> COLORS </td>
            <td> HEALTH </td>
            <td> PHOTO </td>
        </tr>
    </thead>
    <tbody>
      <tr class="info">
      <td><?php print $qNAME ?></td>
      <td><?= $qAGE ?></td>
      <td><?= $qGENDER ?></td>
      <td><?= $qBREED ?></td>
      <td><?= $qCOLORS ?></td>
      <td><?= $qHEALTH ?></td>
      <td>
	         <img src="images/<?= $qPHOTO?>" width="150px">
			</td>
      </tr>
    </tbody>
      </table>
    </body>
</html>


