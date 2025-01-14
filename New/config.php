<?php
$host = "localhost";
$username = "root";
$password = "Durgesh@1419";
$dbname = "college";
$conn = new Mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Database Connection failed".$conn->connect_error);
} else {
  echo"Database connected successfully";
}

$result = $conn->query("select * from students")->fetch_all();
echo"<pre>";
print_r($result);