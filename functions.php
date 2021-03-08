<?php

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
      <td> Name of the Exercise </td>
      <td> Number of Repetitions </td>
      <td> Number of Sets to Complete Routine </td></tr>";
  
  while($row = $result->fetch_assoc()){
    echo "<tr>";  
   echo "<td>", $row["name"],  "</td>";
   echo "<td>", $row["repetitions"], "</td>";
   echo "<td>", $row["sets"], "</td>"; 
   echo "</tr>";
  }
  echo "</table>";
}
}