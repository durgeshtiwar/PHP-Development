<?php
// $var_1 = NULL;
// $Var_2 = null;
// var_dump ($var_1 == $Var_2);
// var_dump ($var_1 === $Var_2);
//var_dump($var_1);

//$var_1 = true && false;
// $var_1 = true and false;
// var_dump($var_1);


// function chechNum($num)
// {
//   if ($num<1) {
//     return false;
//   }
//   for ($i=2; $i<$num/2 ; $i++) { 
//     if ($num%$i == 0) {
//       return false;
//     }
//   }
//   return true;
// }
// if (chechNum(12)) {
//   echo "prime no.";
// } else {
//   echo "Not a Prime no.";
// }

// Patterns 
$row = 4;
for ($i= 1; $i <= $row ; $i++) { 
  for ($j=1,$a = 0, $b = 0; $j <=7 ; $j++) { 
    if ($j>= $i && $j<= 8- $i) {
      if ($b<4) {
        $a = $a+1;
        echo $a; 
      }else{
        $a = $a - 1;
        echo $a;
      }
    }else{
      echo "&nbspj";
      $b = $b + 1;
    }
  }
  echo "<br>";
}
?>
