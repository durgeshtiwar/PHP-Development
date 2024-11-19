<form action="" method = "POST">
<label for="name">Name:</label>
  <input type="text"  name="name" placeholder="Enter your name" required><br><br>
  <label for="name">Course:</label>
  <input type="text"  name="course" placeholder="Enter your course" required><br><br>
  <label for="name">Batch:</label>
  <input type="text"  name="batch" placeholder="Enter your batch" required><br><br>
  <label for="name">City:</label>
  <input type="text"  name="city" placeholder="Enter your city" required><br><br>
  <label for="name">Year:</label>
  <input type="text"  name="year" placeholder="Enter year" required><br><br>
  <button>Submit</button>
</form>
<?php
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $course = $_POST['course'];
  $batch = $_POST['batch'];
  $city = $_POST['city'];
  $year = $_POST['year'];
  include_once("./config.php");
  $student = $conn->prepare(
  "INSERT INTO `students`(`id`,`name`,`course`,`batch`,`city`,`year`) VALUES (NULL,'$name','$course','$batch','$city','$year')");
  $result = $student->execute();
  if ($result) {
    echo"<h1>Data Inserted Successfully;</h1>";
  }else{
    echo"<h1>Data Not Inserted ;</h1>";
  }
}
