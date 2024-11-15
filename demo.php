<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="submit_form.php" method="POST">
        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <br><br>
        
        <label for="email">Email:</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
