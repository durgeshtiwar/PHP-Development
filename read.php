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
  <td><form  method = 'post'>
  <button name = delete value = ".$std['id']." >Delete</button>
  </form></td>
  <td><a href='dropdown.php? id = ".$std['id']."'>Edit</a></td>
  <tr>";
}
echo"</Table>";
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $getStudent = $conn->prepare("delete from students where id ='$id'");
  if ($getStudent->execute()) {
    echo "<h1>Record Deleted;</h1>";
  }else{
    echo "<h1>Failed</h1>";
  }
}