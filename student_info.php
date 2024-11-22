<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Register</title>
  <style>
    body {
      background-color: rgb(184, 184, 118);
      font-family: arial;
    }
    .field {
      background-color: rgb(144, 233, 12);
    }
  </style>
</head>
<body>
<div>
  <h1>Register for Academy</h1>
  <p>Fill the form where required</p>
</div>
  <fieldset class="field">
<legend><h1>Student's info</h1></legend>
<form action="student_info.php" method="POST">


    <label for="first">Enter your first name</label><br>
    <input type="text" placeholder="First name" name="first"><br>
    <label for="last">Enter your last name</label><br>
    <input type="text" placeholder="Second name" name="second"><br>
    <label for="email">Enter your email here</label><br>
    <input type="email" placeholder="Email" name="email"><br>
    <label for="last">Enter your password</label><br>
    <input type="password" placeholder="password" name="password"><br>
    <label for="">Enter your telephone here</label><br>
    <input type="tel" placeholder="Telephone" name="telephone"><br>
    <label for="first">Enter your school here</label><br>
    <input type="text" placeholder="School" name="school"><br>
    <label for="">Select your sex</label><br>
    <input type="radio" name="gender"><label for="">Male</label><br>
    <input type="radio" name="gender"><label for="">Female</label><br>


    <label for="">Enter your class here</label><br>
  <select name="" id="" name="class">
    <option value=""><label for="">year 1A</label></option>
    <option value=""><label for="">year 1B</label></option>
    <option value=""><label for="">year 1C</label></option>
    <option value=""><label for="">year 2A</label></option>
    <option value=""><label for="">year 2B</label></option>
    <option value=""><label for="">year 2C</label></option>
    <option value=""><label for="">year 2D</label></option>
    <option value=""><label for="">year 3A</label></option>
    <option value=""><label for="">year 3B</label></option>
    <option value=""><label for="">year 3C</label></option>
    <option value=""><label for="">year 3D</label></option>
  </select><br>


  <label for="">Enter your age here</label><br>
  <input type="number" max="30" min="10" name="age"><br>


  <label for="">Select your favourite subjects</label><br>
  <input type="checkbox"><label for="">Mathematics</label><br>
  <input type="checkbox"><label for="">Physics</label><br>
  <input type="checkbox"><label for="">Embedded systems</label><br>
  <input type="checkbox"><label for="">WUI</label><br>
  <input type="checkbox"><label for="">JavaScript</label><br>
  <input type="checkbox"><label for="">PHP</label><br>
  <label for="">Which level do you like it </label><br>
  <input type="range"><br>


  <label for="">Upload your profile image here</label><br>
  <input type="file"><br>


  <label for="">Enter your comment here or your request</label><br>
  <textarea class="textarea"></textarea><br>


  <label for=" ">Enter the date</label><br>
<input type="date"><br>
<label for="">Enter the time of survey</label><br>
<input type="time"><br>

  <input type="submit">


  </fieldset>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']==='POST') {
$first_name= $_POST['first'] ?? 'N/A';
$second_name= $_POST['second'] ?? 'N/A';
$email= $_POST['email'] ?? 'N/A';
$telephone= $_POST['telephone'] ?? 'N/A';
$school_name= $_POST['school'] ?? 'N/A';
$class= $_POST['class'] ?? 'N/A';

echo "<p><b>The Students Info are:</b></p>
          <table border='1' cellspacing='0'>
            <tr>
              <th>Info</th>
              <th>Value</th>
            </tr>
            <tr>
              <th>First Name</th>
              <td>$first_name</td>
            </tr>
            <tr>
              <th>Second Name</th>
              <td>$second_name</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>$email</td>
            </tr>
            <tr>
              <th>Telephone</th>
              <td>$telephone</td>
            </tr>
            <tr>
              <th>School Name</th>
              <td>$school_name</td>
            </tr>
            <tr>
              <th>Class</th>
              <td>$class</td>
            </tr>
            <tr>
              <th>Comment</th>
              <td>$comment</td>
            </tr>
          </table>
          <p>Thanks for registering.</p>";
}


?>


