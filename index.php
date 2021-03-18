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
</head>

<body>

<?php
include "header.php";
?>

<main>

    <?php
    if(!isset($_SESSION['userId']))
    {
        echo '
        <div class="main-wrapper">
        <div class="form-wrapper">

        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="username" placeholder="Choose your username">
        <input type="text" name="useremail" placeholder="whats your email?">
        <input type="password" name="userpwd" placeholder="Your Password Here">
        <input type="password" name="userpwd-repeat" placeholder="Repeat our password">
        <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        </div>
        <div class="form-wrapper"></div>
        <h1>Login</h1>
        <form action="includes/signin.inc.php" method="POST">
        <input type="text" name="username" placeholder="Your Username">
        <input type="password" name="userpwd" placeholder="Your Password">
        <button type="submit" name="login-submit">LogIn</button>
        </form>
        </div>
';
    }
    else{
 echo '
        <div>
            <form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
';
    }
    ?>

</main>    
</body>
</html>