<?php
include_once("./Student.php");
include_once("./Teacher.php");
$std = new Student\Details();
$tch = new Teacher\Details();
$std->admissionDates()->passoutDates();
echo"<br/>";
$tch->joiningDates();