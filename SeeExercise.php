<?php

require_once "login.php";

$conn = new mysqli($hn, $un,$pw, $db);
if ($conn->connect_error) die ("could not connect to db");

$query = "DESCRIBE exercises";
$result = $conn->query($query);
if (!$result) {
    echo "No exercise yet, do you want to make one?";
echo <<<End__
<a href="CreateExercise.html">Create Exercise</a>
End__;
}
    else {
    $query = "SELECT * FROM exercises";
    $result = $conn->query($query);

}
