<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        $_SESSION['userVisit'] = 1;
        echo "<h1>Aaiye Aaiye !</h1>";
        echo "<h1>".$_SESSION['user']." Bhai Form to bher do</h1>";
    }
    ?>
    <h2>Upload a File</h2>
    <form method="POST" action = "submit_form.php" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" id="file" name="filename" required>
        <button type="submit" name = "submit" value = "SUBMIT" >Upload</button>
    </form>
</body>
</html>
