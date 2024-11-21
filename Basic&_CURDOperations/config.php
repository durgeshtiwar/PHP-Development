<?php
// $host = "localhost";
// $username = "root";
// $password = null;
// $database = "college";

// $conn = new mysqli($host, $username, $password, $database);
// if ($conn->connect_error) {
//   die("Erroe ocured".$conn->connect_error);
// }
// echo "<h1>Connection Succesful</h1>";

// $result = $conn->query("show tables")->fetch_all();
// echo"<pre>";
// print_r($result);


$host = "localhost";
$username = "root";
$password = "Durgesh@1419";

try {
  $conn = new PDO("mysql:host=$host; dbname=college",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //echo "<h1>Connection done Successfully</h1>";
} catch (PDOException $err) {
  echo "Connection Faild". $err->getMessage();
}
// $result = $conn->query('SHOW TABLES');
// while ($row = $result->fetch(PDO::FETCH_NUM)) {
//   print_r($row);
// }