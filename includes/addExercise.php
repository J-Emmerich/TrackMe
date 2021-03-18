<?php

if(isset($_POST['submit-exercise'])){

require_once "dbh.inc.php";
define('PATH', dirname(__DIR__, "1"));
require_once(PATH . '/functions.php');

addExercise($conn);
header("location: ../dashboard.php?AddExercise=success");
exit();

}else{
    header("location: ../dashboard.php?error=notCorrect");
    exit();
}