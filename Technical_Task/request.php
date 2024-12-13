<?php
include_once("config.php");

// Check if form data is submitted
if (isset($_POST['insert']) ) {

  $name = $_POST['fullname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $role = $_POST['role'];
  $designation = $_POST['designation'];
  $gender = $_POST['gender'];
  $status = $_POST['status'];
  $age = $_POST['age'];
  $marital_status = $_POST['marital_status'];
  $dob = $_POST['dob'];

  // for file upload
  if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $fileName = $_FILES['file']['name'];
    $file_temp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $arr = explode('.',$fileName);
    $file_exts = strtolower(end($arr));
    $arrError = [];
    $arrExtn = ['jpg', 'jpeg', 'png'];
    if (!in_array($file_exts, $arrExtn)) {
      $arrError[] = "This is not valid extension";
    }
    if ($file_size>2097152) {
      $arrError[] = "This is oversized file";
    }
    if (empty($arrError)) {
      $desination = getcwd()."/upload/".$fileName;
      if (move_uploaded_file($file_temp, $desination)) {
          // Prepare and bind
          $stmt = $conn->prepare("INSERT INTO user_details 
          (name, mobile, email, address, role, designation, gender, status, age, marital_status, dob, file) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssssssisss", 
          $name, $mobile, $email, $address, $role, $designation, $gender, $status, $age, $marital_status, $dob, $fileName);

          //Execute the statement
          if ($stmt->execute()) {
            header("Location:index.php");
          } else {
              echo "Error: " . $stmt->error;
          }
      }
      else{
      echo "File Uploaded Unsuccesfully";
      }
    }
    else{
      echo"<pre>";
      print_r($arrError);
    }
  }
    // Close the statement and connection
    // $stmt->close();
    // $conn->close();
}

// Update data 
if (isset($_POST['update'])) {
  $name = $_POST['fullname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $role = $_POST['role'];
  $designation = $_POST['designation'];
  $gender = $_POST['gender'];
  $status = $_POST['status'];
  $age = $_POST['age'];
  $marital_status = $_POST['marital_status'];
  $dob = $_POST['dob'];

  // file uploade
  if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $fileName = $_FILES['file']['name'];
    $file_temp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $arr = explode('.',$fileName);
    $file_exts = strtolower(end($arr));
    $arrError = [];
    $arrExtn = ['jpg', 'jpeg', 'png'];
    if (!in_array($file_exts, $arrExtn)) {
      $arrError[] = "This is not valid extension";
    }
    if ($file_size>2097152) {
      $arrError[] = "This is oversized file";
    }
    if (empty($arrError)) {
      $desination = getcwd()."/upload/".$fileName;
      if (move_uploaded_file($file_temp, $desination)) {
          // Prepare and bind
          $stmt = $conn->prepare("UPDATE user_details 
                SET name = ?, 
                mobile = ?, 
                email = ?, 
                address = ?, 
                role = ?, 
                designation = ?, 
                gender = ?, 
                status = ?, 
                age = ?, 
                marital_status = ?, 
                dob = ? ,
                file = ?
            WHERE name = ?");
          $stmt->bind_param("ssssssssissss", 
          $name, $mobile, $email, $address, $role, $designation, $gender, $status, $age, $marital_status, $dob, $fileName,$name);

          //Execute the statement
          if ($stmt->execute()) {
            header("Location:index.php");
          } else {
              echo "Error: " . $stmt->error;
          }
      }
      else{
      echo "File Uploaded Unsuccesfully";
      }
    }
    else{
      echo"<pre>";
      print_r($arrError);
    }
  }
}


?>

