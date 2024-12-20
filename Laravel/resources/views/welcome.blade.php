<h1>Form</h1>

<!-- @if($errors->any())
@foreach($errors->all() as $error)
<div style = "color : red">
{{$error}}
</div>
@endforeach
@endif -->

<form action="submit" method="POST">
    @csrf
    <!-- Name Field -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" >
    <span style = "color : red">@error('name'){{$message}}@enderror</span>
    <br><br>

    <!-- Email Field -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" >
    <span style = "color : red">@error('email'){{$message}}@enderror</span>
    <br><br>

    <!-- City Field -->
    <label for="city">City:</label>
    <input type="city" id="city" name="city" placeholder="Enter your city" >
    <span style = "color : red">@error('city'){{$message}}@enderror</span>
    <br><br>


    <!-- Submit Button -->
    <button type="submit">Submit</button>
  </form>