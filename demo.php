<?php
$arr_1 = array("durgesh", 4, "Aditya", true);
echo "<pre>";
print_r($arr_1);
$arr_2 = [
  "durgesh" => 4,
  "durgesh-1" => 5,
  "durgesh-2" => 48,
  "durgesh-3" => 40,
  "durgesh-4" => 43,
];
echo "<pre>";
print_r($arr_2);
foreach($arr_2 as $num=>$numvalue)
{
  echo $num."=>".$numvalue, "\n";
}