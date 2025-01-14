<?php
include_once("request.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Task</title>
</head>
<body>
  <div class="container">
    <div class="content">
      <h1>Let's Get in Touch</h1>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Architecto voluptatem impedit velit magnam fugit iste optio, 
        reprehenderit possimus? Amet quo ratione qui iste animi ab 
        veritatis dicta quibusdam? Excepturi, incidunt.
      </p>
      <h3>Connect with us:</h3>
      <div>
        <p>icons......</p>
      </div>
      <h3>Page by html and CSS</h3>
    </div>
    <div class="contect">
      <h3>Contect Us</h3>
      <form action="request.php" method="post">
      <input type="text" placeholder="Enter Your name" name="name" required><br><br>
      <input type="email" placeholder="Enter Your email" name="email" required><br><br>
      <input type="text" placeholder="Enter Your phone" name="phone no." required><br><br>
      <textarea name="message"></textarea><br><br>
      <input type="submit" name="signup"></input>
      </form>
    </div>
  </div>
</body>
</html>