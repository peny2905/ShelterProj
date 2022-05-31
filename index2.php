<?php
require_once "conn.php";
$query="SELECT * FROM animals";
$result= mysqli_query($conn, $query)or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>THE RESCUE EFFECT</title>
    <div class="row">
    <a href="index.php">
        <img class="logo"src="images/logo.jpg" alt="animal_shelter_logo">
    </a>
<div class="social">
<a style="color: #3b5998;" href="https://www.facebook.com/" role="button">
  <i class="fab fa-facebook-f fa-sm"></i>
  <img src="images/fb.png" style="width: 60px; height:60px">
</a>
<a style="color: #55acee;" href="https://twitter.com/?lang=en" role="button">
  <i class="fab fa-twitter fa-lg"></i>
  <img src="images/twitter.png" style="width: 60px; height:60px;">
</a>
<a style="color: #ac2bac;" href="https://www.instagram.com/?hl=en" role="button">
  <i class="fab fa-instagram fa-lg"></i>
  <img src="images/insta.jpg" style="width: 60px; height:60px">
</a>
</div>
</div>
</head>

<body class="indexbody">
  <header class="h-body"> 
    
    <p> THE RESCUE EFFECT</p>
  </header>

 <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class = "btn-grp">

  <button  type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" 
  aria-controls="navbarMenu" aria-expanded="false"> 
         <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
  <ul class="navbar-nav">
      <li class="nav-item">
          <a href="about.html" class="nav-link" target="self">ABOUT</a>
    </li>
      <li class="nav-item">
          <a href="./search/search.php" class="nav-link" target="self">SEARCH</a>
    </li>
    
    <li class="nav-item">
          <a href="./browse/browse.php" class="nav-link" target="self">BROWSE</a>
    </li>

      <li class="nav-item">
          <a href="contact.html" class="nav-link" target="self">CONTACT</a>
    </li>
      <li class="nav-item">
          <a href="login/login.php" class="nav-link" target="self">LOGIN</a>
    </li>
  </ul>
  </div>
  </div>
  </nav>

 <div class="card-deck">
  <div class="card" style="height: 10%;">
    <a href="https://www.nationalgeographic.com/animals/article/why-animal-shelters-are-facing-a-new-crisis">
    <img class="card-img-top" src="images/crisis.jpg" alt="Card image cap"> </a>
    <div class="card-body">
      <h5 class="card-title">Why animal shelters are facing a new crisis</h5>
      <p class="card-text">Buddha, Atlas, and Adonis peer out of a kennel at the Fulton County animal shelter in Atlanta, Georgia, on August 11. The shelter was built to hold 120 animals, but it currently houses 300. It’s one of many across North America that is overcrowded—a result of pandemic-relat....</p>
    </div>
  </div>
  <div class="card">
    <a href="https://time.com/6047307/pet-adoption-history/">
    <img class="card-img-top" src="images/rescue.jpg" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-title">How the Pandemic Pet-Adoption Boom Fits Into the Long History of Rescuing Animals</h5>
      <p class="card-text">More than 12 million American households have gotten a pet in the time since COVID-19 was declared a pandemic in March 2020, according to the American Pet Products Association. The growth in pandemic-era pet adoption continues the trend of Americans turning to their pets for companionship in tough times.</p>
    </div>
  </div>
  <div class="card" style="height: 30%;">
    <a href="https://www.humanesociety.org/resources/top-reasons-adopt-pet">
    <img class="card-img-top" src="images/reasons.jpg" alt="Card image cap"> </a>
    <div class="card-body">
      <h5 class="card-title">Here are 10 reasons to adopt your new best friend.</h5>
      <p class="card-text">The number of euthanized animals could be reduced dramatically if more people adopted pets instead of buying them. </p>
    </div>
  </div>
</div>

   



 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
</body>
</html>