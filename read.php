<?php
include_once("./config.php");
$getStudent = $conn->prepare("SELECT * FROM students ");
$getStudent->execute();
$students = $getStudent->fetchALL();

echo"<Table border = '1'>";
echo"<tr>
<td>Name</td>
<td>Course</td>
<td>Batch</td>
<td>City</td>
<td>Year</td>
</tr>";
foreach($students as $std)
{
  echo"<tr>
  <td>".$std['name']."</td>
  <td>".$std['course']."</td>
  <td>".$std['batch']."</td>
  <td>".$std['city']."</td>
  <td>".$std['year']."</td>
  
  </tr>";
}
echo"</Table>";