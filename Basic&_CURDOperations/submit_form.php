<?php
if (isset($_POST["submit"])) {
  echo "<pre>";
  print_r($_FILES);
  $fileName = $_FILES['filename']['name'];
  $file_temp = $_FILES['filename']['tmp_name'];
  $file_size = $_FILES['filename']['size'];
  $arr = explode('.',$fileName);
  $file_exts = strtolower(end($arr));
}
$arrError = [];
$arrExtn = ['jpg', 'jpeg', 'png'];
if (!in_array($file_exts, $arrExtn)) {
  $arrError[] = "This is not valid extension";
}
if ($file_size>2097152) {
  $arrError[] = "This is oversized file";
}
if (empty($arrError)) {
  $desination = getcwd()."/uploads/".$fileName;
  
  if (move_uploaded_file($file_temp, $desination)) {
    echo "File Uploaded Succesfully";
  }else{
  echo "File Uploaded Unsuccesfully";
  }
}else{
  echo"<pre>";
  print_r($arrError);
}
