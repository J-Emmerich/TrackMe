<?php

if(isset($_POST['isDeleted']))
{
    require_once "dbh.inc.php";
    define('PATH', dirname(__DIR__, "1"));
require_once(PATH . '/functions.php');

    deleteTable($conn);
    header("location: ../dashboard.php?Deleted=success");
    exit();
}else{
    echo "isset error";
}