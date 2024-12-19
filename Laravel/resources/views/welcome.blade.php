<h1>Form</h1>

<form action="submit" method="POST">
    @csrf
    <!-- Name Field -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>
    <br><br>

    <!-- Email Field -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
    <br><br>

    <!-- Submit Button -->
    <button type="submit">Submit</button>
  </form>