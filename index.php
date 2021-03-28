<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Me - Your Rock Gym Companion</title>
    
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet"> 
</head>

<body>

<?php
include "header.php";
?>

<main>

<?php
 if (!isset($_SESSION['userId']))
 {
     echo '<div class="form-container">
<div class="form-wrapper">
     <h1>Not a Member yet? Sign Up</h1>
     <div class="form-signup-wrapper">
     
     <form action="includes/signup.inc.php" method="POST">
     <input type="text" name="username" placeholder="Choose your username">
     <input type="text" name="useremail" placeholder="whats your email?">
     <input type="password" name="userpwd" placeholder="Your Password Here">
     <input type="password" name="userpwd-repeat" placeholder="Repeat our password">
     <button type="submit" name="signup-submit">Sign Up</button>
     </form>
     </div>
     </div>
     </div>';
    }
    else{
        include "dashboard.php";
    }
?>

<p> 
</p>

</main>    
</body>
</html>