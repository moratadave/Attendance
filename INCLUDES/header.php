<?php 
include_once "INCLUDES\session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' href='CSS/site.css'> 
    <title>ATTENDANCE - <?php echo $title ?></title>
  </head>
  <body>
  <div class = 'container'>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="index.php">IT CONFERENCE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
         </button>
    <div class="collapse navbar-collapse mr-auto" id="navbarNav" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewrecords.php">View Attendees</a>
        </li>
    </div>    
        <div class="collapse navbar-collapse ml-auto" id="navbarNav" >
           <li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
            </li>    
      
         </div>
  
  </nav><br>