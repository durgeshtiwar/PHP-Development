<?php
include_once("./config.php");
// $getStudentData = $conn->prepare("select id,name from students");
// $getStudentData->execute();
// $result = $getStudentData->fetchAll();
// echo "<select>";
// echo"<option>Select Name</option>";
// foreach($result as $student)
// {
// echo"<option vlaue = ".$student['id']." >".$student['name']."</option>";
// }
// echo"</select>";
if (isset($_GET['id_'])) {
  $id = $_GET['id_'];
  $getStudentData = $conn->prepare("select * from students where id = $id");
  $getStudentData->execute();
  $result = $getStudentData->fetchAll();
  
  $name = $result[0]['name'];
  $course = $result[0]['course'];
  $batch = $result[0]['batch'];
  $city = $result[0]['city'];
  $year = $result[0]['year'];
}
?>
<form action="" method = "POST">
<label for="name">Name:</label>
  <input type="text"  name="name" value = "<?php echo $name?>" ><br><br>
  <label for="name">Course:</label>
  <input type="text"  name="course" value = "<?php echo $course?>" ><br><br>
  <label for="name">Batch:</label>
  <input type="text"  name="batch" value = "<?php echo $batch?>" ><br><br>
  <label for="name">City:</label>
  <input type="text"  name="city" value = "<?php echo $city?>" ><br><br>
  <label for="name">Year:</label>
  <input type="text"  name="year" value = "<?php echo $year?>" ><br><br>
  <button value = <?php echo $id?> name = 'update' >Update Student Data</button>
</form>
<?php
if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $course = $_POST['course'];
  $batch = $_POST['batch'];
  $city = $_POST['city'];
  $year = $_POST['year'];
  $updateStudentData = $conn->prepare("update students set 
  name = '$name',
  course = '$course',
  batch = '$batch',
  city = '$city',
  year = '$year'
  where id = '$id'");
  if($updateStudentData->execute())
  {
    header("Location:read.php");
  }else{
    echo "<h1>Updated Unsuccessfully;</h1>";
  }
}
?>