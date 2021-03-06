<?php




function newExercise($name)
{
$name = new Exercise;
}

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