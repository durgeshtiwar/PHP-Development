<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
  </head>
  <body>
    <div class="main">
      <div class="nav">
        <img src="image1.jpeg" alt="" />
      </div>
      <div class="form">
        <h1>Register Here</h1>
        <form action="" method="post">
        <input
          type="text"
          name="firstname"
          id="firstname"
          placeholder="First Name"
          required
        /><br /><br>
        <input
          type="text"
          name="lastname"
          id="lastname"
          placeholder="Last Name"
          required
        /><br /><br>
        <input 
        type="email" 
        name="email" 
        id="email" 
        placeholder="Email" 
        /><br /><br>
        <input
          type="text"
          name="city"
          id="city"
          placeholder="City"
        /><br /><br>
        <input
          type="text"
          name="phone no."
          id="phone no."
          placeholder="Phone no."
        /><br /><br>
        <button type="submit">Register</button>     
        </form>
      </div>
      <div class="message">
        <h3>Already Registered ? <a href="">Please Login</a></h3>
      </div>
    </div>
  </body>
</html>
