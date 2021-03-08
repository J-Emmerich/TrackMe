<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackMe - Your Gym Companion</title>
</head>
<body>
    
<a href="CreateExercise.html">Crie un ejercicio</a>
<p> O segui la rotina que hiciste</p>
<?php
  include_once "login.php";
 include_once "functions.php";
 if(!@$_POST['isDeleted'])
 {

     showExercise($conn);
 }
?>
<p>Quieres eliminar toda la tabla?</p>
<form action="index.php" method="POST">
    <input type="submit" name="isDeleted" value="Delete all">
</form>

<?php 
if (@$_POST['isDeleted'])
{
    $query = "TRUNCATE TABLE exercises";
    $result = $conn->query("$query");
    if($result){
        
        echo "Todos los ejercicios fueron eliminados correctamente";
    }

}
$conn->close();
?>



</body>
</html>