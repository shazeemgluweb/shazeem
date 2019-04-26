<?php
  require_once 'includes/connect.php';
  session_start();
  if(isset($_POST['submit'])){
    $email = $_POST['field_name'];
    $password = $_POST['field_password'];

    $sql = "SELECT * FROM customer WHERE email == '$email' AND pwd == '$password'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    if($rows == 1){
      while($row = $result->fetch_assoc()) {
        $_SESSION['customerID'] = $row['id'];
      }
        header("location: index.php");
        echo "<script>console.log('ingelogd');</script>";

        if (($email == "admin@admin.com")&&( $password == "admin")) {
          header("location:admin.php");
        }else{
          header("location: index.php");
        }
      }
    else{
      echo "<script>console.log('deze gebruiker bestaat niet');</script>";
    }
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
        <div class="titel">Login</div>
        <form method="post">
          <label for="login">E-mailadres:</label>
          <input type="email" name="field_name" class="input-field" placeholder="Email" required><br>
          <label for="passwd">Wachtwoord:</label>
          <input type="password" name="field_password" class="input-field" placeholder="Password" required><br>
          <input type="submit" class="submit-button" name="submit" value="Login">
        </form>
      </div>
        <div class="button-blok">
          <div class="button-tekst">Already member?</div>
          <a class="button" href="signup.php">Signup</a>
        </div>
      </div>
    </main>
  </body>
</html>
