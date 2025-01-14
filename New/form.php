<?php
include_once("request.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
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
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam tempore accusantium corrupti officia eos qui.
      </p>
      <h3>Connect with us:</h3>
      <div class="icons">
      <a><i class="fa-brands fa-facebook"></i></a>
      <a><i class="fa-brands fa-twitter"></i></a>
      <a><i class="fa-brands fa-instagram"></i></a>
      <a><i class="fa-brands fa-linkedin"></i></a>
      </div>
      <div class="footer">
      <h3>Made with <i class="fa-solid fa-heart"></i> by Learning Page</h3>
      </div>
    </div>
    <div class="contect">
      <h3>Contect Us</h3>
      <form action="request.php" method="post">
      <input type="text" placeholder="Enter Your name" name="name" required><br><br>
      <input type="email" placeholder="Enter Your email" name="email" required><br><br>
      <input type="text" placeholder="Enter Your phone" name="phone no." required><br><br>
      <textarea name="message" placeholder="Enter messages here....."></textarea><br><br>
      <button type="submit">SignUP</button>
      </form>
    </div>
  </div>
</body>
</html>