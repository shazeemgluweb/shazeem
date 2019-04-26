<?php
  require_once('includes/connect.php');
  if(isset($_POST['submit'])) {
    $firstname = $_POST['field_firstname'];
    $middlename = $_POST['field_middlename'];
    $lastname = $_POST['field_lastname'];
    $age = $_POST['field_age'];
    $email = $_POST['field_email'];
    $password = $_POST['field_password'];
    $sql = "INSERT INTO customer (`firstname`, `middlename`, `lastname`, `age`, `email`, `date`, `pwd`)
            VALUES('$firstname', '$middlename', '$lastname', '$age', '$email', NOW(), '$password')";
            if($conn->query($sql) === TRUE){
              header('location: login.php');
            } else{
              echo "<br>error: " . $sql . "-" . $conn->error;
            }
    $conn->close();
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet"> 
    <link href="css/formulier.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="blok">
      <div class="login-blok">
        <div class="titel">Signup</div>
        <form method="post">
          <label for="login">Firstname:</label>
          <input type="text" name="field_firstname" class="input-field" placeholder="Firstname" required>
            <label for="login">Middlename:</label>
            <input type="text" name="field_middlename" class="input-field" placeholder="Middlename">
          <label for="login">Lastname:</label>
        <input type="text" name="field_lastname" class="input-field" placeholder="Lastname" required>
            <label for="login">Age:</label>
            <input type="text" name="field_age" class="input-field" placeholder="Age" required>
          <label for="login">E-mailadres:</label>
          <input type="email" name="field_email" class="input-field" required>
            <label for="login">Password:</label>
          <input type="password" name="field_password" class="input-field" required>
          <input type="submit" class="submit-button" name="submit" value="Signup">
        </form>
      </div>
        <div class="button-blok">
          <div class="button-tekst">Not member yet?</div>
          <a class="button" href="login.php">Login</a>
        </div>
      </div>
    </main>
  </body>
</html>
