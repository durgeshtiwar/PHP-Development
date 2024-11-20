<?php
$fileName = "../OOPs/content.txt";
$file = fopen($fileName,"w");
if ($file) {
  $fileContent = "Somthing that is related to php";
  fwrite($file, $fileContent);
  fclose($file);
}else{
  echo "File Opening Error";
}

// $file = fopen($fileName, "r");
// $size = filesize($fileName);
// echo $size;
// $content = fread($file,$size);
// fclose($file);
// echo $content;
// $file = fopen($fileName, "w");
// if ($file) {
//     $fileContent = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod libero provident vitae corporis, consequuntur molestiae doloribus non. Cum debitis impedit aspernatur veniam, non dignissimos nobis doloribus. Tenetur alias accusamus dignissimos.";
//     fwrite($file, $fileContent);
//     fclose($file);
//   }else{
//     echo "File Opening Error";
// }