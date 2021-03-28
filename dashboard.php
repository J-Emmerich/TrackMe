<?php


if(isset($_SESSION['userId']))
{
    require_once "includes/dbh.inc.php";
    require_once "functions.php";
    
   
    
    
    echo '<div class="form-container">
    <div class="form-wrapper">
    <div class="form-add-exercise">';
    showExercise($conn);
echo    '<form action="includes/addExercise.php" method="POST">
    Name it: <input type="text" name="exerciseNameField"><br>
    Repetitions: <input type="text" name="numberOfRepetitionsField"><br>
    Full set: <input type="text" name="numberOfSetsField"><br>
    <input type="submit" name="submit-exercise" value="Añadir ejercicio">
    </form>
   </div>
   </div>
    </div>';

echo '
<div class="form-container">
    <div class="form-wrapper">
    <div class="form-eliminar">
    <p>Quieres eliminar toda la tabla?</p>
<form action="includes/delete.inc.php" method="POST">
    <input type="submit" name="isDeleted" value="Delete all">
</form>
</div>
</div>
</div>
 ';

}else{
    header("location: index.php?login=DashboardAccess");
    exit();
}