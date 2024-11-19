<form action="" method="post">
  <input type="text" name="search" placeholder="Search Name..." />
  <button type="submit">Search</button>
</form>
<?php
include_once("./config.php");
if (isset($_POST['search'])) {
  $search = $_POST['search'];
 // $getStudent = $conn->prepare("Select * from students where name = '$search'");
  $getStudent = $conn->prepare("Select * from students where name like '%$search%'");
  $getStudent->execute();
  $result = $getStudent->fetchAll();
  echo"<Table border = '1'>";
echo"<tr>
<td>Name</td>
<td>Course</td>
<td>Batch</td>
<td>City</td>
<td>Year</td>
</tr>";
foreach($result as $std)
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
}
?>