<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Erroe ocured".$conn->connect_error);
}
echo "<h1>Connection Succesful</h1>";

$result = $conn->query("show tables")->fetch_all();
echo"<pre>";
print_r($result);