<?php


$hn = "localhost";
$un = "John";
$pw = "804315";
$db = "trackme";

$conn = new mysqli($hn,$un, $pw, $db);
if(!$conn){
    die ("Could not connect: ".mysqli_connect_error());
}


?>