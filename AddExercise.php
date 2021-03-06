<?php

require_once "login.php";
$conn = new mysqli($hn,$un,$pw,$db);

if($conn->connect_error)
 {
   echo "Error in database connection";
  }

else{
// Verify if there is a table "Exercises"

$query = "DESCRIBE exercises";
$result = $conn->query($query);
if(!$result)
{echo "No table, we're creating one for you";

  $query = "CREATE TABLE exercises(name VARCHAR(30),repetitions VARCHAR(2),sets VARCHAR(2))";
  $result = $conn->query($query);
  if(!$result){echo "error creating the table";}
  else {
    echo "Exercise created, want to see it?";
    showExercise($conn);


  }
}
else{echo "There is a table already, see it?";
showExercise($conn);
}
}




function showExercise($conn)
{
  $query = "SELECT * FROM EXERCISES";
  $result = $conn->query($query);
  while($row = $result->fetch_assoc()){
    echo $row["name"], $row["repetitions"],$row["sets"];
  }
  
}





//Defining value of properties as the value of post field
$plank = new Exercise;
$plank->setName($_POST["exerciseNameField"]);
$plank->setRepetition($_POST["numberOfRepetitionsField"]);
$plank->setNumberOfSets($_POST["numberOfSetsField"]);

echo $plank->getName();
echo $plank->getRepetition();
echo $plank->getNumberOfSets();


// Defining the exercise class

class Exercise{

    private $name;
    private $repetition;
    private $numberOfSets;

    function setName($name)
    {
      $this->name = $name;
    }
    function getName()
    {
      return $this->name;
    }
    function setRepetition($repetition)
    {
      $this->repetition = $repetition;
    }
    function getRepetition()
    {
      return $this->repetition;
    }
    function setNumberOfSets($numberOfSets)
    {
      $this->numberOfSets = $numberOfSets;
    }
    function getNumberOfSets()
    {
      return $this->numberOfSets;
    }
    
  }


  
  /*
  class Routine {
    private $name;

    private $exercises = array();
    
    function setExercises($exercises)
    {
      $this->exercises = $exercises;
    }
    function getExercises()
    {
      return $this->exercises;
    }*/
    
?>