
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form method="POST" action = "submit_form.php" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" id="file" name="filename" required>
        <button type="submit" name = "submit" value = "SUBMIT" >Upload</button>
    </form>
</body>
</html>
