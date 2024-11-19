<?php
include_once("./config.php");
$getStudentData = $conn->prepare("select id,name from students");
$getStudentData->execute();
$result = $getStudentData->fetchAll();
echo "<select>";
echo"<option>Select Name</option>";
foreach($result as $student)
{
echo"<option vlaue = ".$student['id']." >".$student['name']."</option>";
}
echo"</select>";