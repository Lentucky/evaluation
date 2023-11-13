<?php 

    include('config/constants.php'); 
    include('partials-front/login-check.php');
?>


<html>
    <head>
        <title>Evaluation</title>

        <link rel="stylesheet" href="css/index.css">
    </head>
    
    <body>
<div class="menu">
  <div class="wrapper">
  <!-- <div class="container"> -->
    <ul>
      <li><a href="index.php">Home</a>
      
      <a href="profile.php">Profile</a>
      
      <?php
        // Display evaluate tab if evaluator
        if (isset($_SESSION['evaluator']) && $_SESSION['evaluator'] == 'Yes') {
          echo "<a href='evaluate.php'>Evaluate</a>";
        }
      ?>
      
      <a href="logout.php">Logout</a></li>
      
    </ul>
  </div>
</div>
<!-- </div> -->