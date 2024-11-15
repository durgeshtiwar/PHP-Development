<?php
//set the cookies
// setcookie("Name", "Durgesh Tiwari", time() + 3600);
// setcookie("Age", 21, time() + 3600);

//get the cookies
// if($_COOKIE)
// {
//   echo "<pre>";
//   print_r($_COOKIE);
// }

// setcookie("Name", "Durgesh Tiwari", time() - 3600);
// print_r($_COOKIE);

//set cookies in array
// setcookie("cookie[one]","Cookie One");
// setcookie("cookie[two]","Cookie two");
// setcookie("cookie[three]","Cookie three");
// echo"<pre>";
// print_r($_COOKIE['cookie']);
session_start();
$_SESSION['user'] = "Durgesh Tiwari";
echo "<h1>Aaiye Aaiye !</h1><br>";
echo "<h1>3 bar refresh kijiye</h1>";
if (isset($_SESSION['userVisit'])) {
  $_SESSION['userVisit'] += 1;
}else{
  $_SESSION['userVisit'] = 1;
}
echo "Counter".$_SESSION['userVisit'];
if ($_SESSION['userVisit'] == 3) {
  header('location:/durgesh/demo.php');
}
