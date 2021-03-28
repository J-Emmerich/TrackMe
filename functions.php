<?php

function addExercise($conn)
{
 

$name = $_POST["exerciseNameField"];
$repetitions = $_POST["numberOfRepetitionsField"];
$sets = $_POST["numberOfSetsField"];

$stmt = $conn->prepare("INSERT INTO Exercises (name, repetitions, sets) VALUE(?,?,?)");
 $stmt->bind_param("sss", $name, $repetitions, $sets);

$stmt->execute();
$stmt->close();

}

function deleteTable($conn)
{
  $query = "TRUNCATE TABLE exercises";
    $result = $conn->query("$query");
    $conn->close();
    }




// Show the exercises. 
function showExercise($conn)
{
  $query = "SELECT * FROM EXERCISES";
  $result = $conn->query($query);

  if($result)
  {
      echo "
      <table>
      <tr>
      <th> Exercise </th>
      <th> Repetitions </th>
      <th> Number of Sets</th></tr>";
  
  while($row = $result->fetch_assoc()){
    echo "<tr>";  
   echo "<td>", $row["name"],  "</td>";
   echo "<td>", $row["repetitions"], "</td>";
   echo "<td>", $row["sets"], "</td>"; 
   echo "</tr>";
  }
  echo "</table>";
}
$conn->close();
}