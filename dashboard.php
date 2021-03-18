<?php
session_start();

if(isset($_SESSION['userId']))
{
    require_once "includes/dbh.inc.php";
    require_once "functions.php";
    
    echo '<div>
    <form action="includes/logout.inc.php" method="POST">
    <button type="submit" name="logout-submit">Logout</button>
    </form>
    </div>';
    
    showExercise($conn);
    echo ' <form action="includes/addExercise.php" method="POST">
    Name it: <input type="text" placeholder="What\'s the name of the exercise?" name="exerciseNameField">
    Repetitions: <input type="text" placeholder="How many repetitions?" name="numberOfRepetitionsField">
    Full set: <input type="text" placeholder="Hoy many sets of repetitions?" name="numberOfSetsField">
    <input type="submit" name="submit-exercise" value="Añadir ejercicio">
    </form>';

echo '
    <p>Quieres eliminar toda la tabla?</p>
<form action="includes/delete.inc.php" method="POST">
    <input type="submit" name="isDeleted" value="Delete all">
</form> ';

}else{
    header("location: index.php?login=DashboardAccess");
    exit();
}