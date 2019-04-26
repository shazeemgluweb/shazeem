<?php
  if(isset($_GET['id']) && is_numeric($_GET['id'])){
  require_once 'includes/connect.php';
  session_start();
  $id = (int)mysqli_real_escape_string($conn,$_GET['id']);
  }

 if(empty($_SESSION['customerID'])){
  header("Location:login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet"> 
    <meta charset="utf-8">
    <link href="css/formulier.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <title>form</title>
  </head>
  <body>
    <main>
    <div class="blok">
      <div class="login-blok">
        <div class="titel">Factuuradres</div>
        <form action="bedankt.php?id=<?php echo $id?>" method="post">
          <label class="label-half" for="field_firstname">Firstname:</label>
          <label class="label-half" for="field_lastname">Lastname</label>
            <input type="text" name="field_firstname" class="input-field-half" required>
            <input type="text" name="field_lastname" class="input-field-half" required>
          <label for="field_email">E-mailadres:</label>
            <input type="email" name="field_email" class="input-field" required>
          <label for="field_tel">Telefoonnummer:</label>
            <input type="tel" name="field_tel" class="input-field" required>
          <label class="label-half" for="field_street">Streetname:</label>
          <label class="label-half" for="field_house">House num:</label>
            <input type="text" name="field_street" class="input-field-half" required>
            <input type="text" name="field_house" class="input-field-half" required>
          <label class="label-half" for="field_postcode">Postcode:</label>
          <label class="label-half" for="field_country">Country:</label>
            <input type="text" name="field_postcode" class="input-field-half" required>
            <select class="input-field-half" name="field_country">
              <option value="volvo">Netherlands</option>
              <option value="saab">Belgium</option>
              <option value="opel">France</option>
              <option value="audi">Germany</option>
            </select>
          <input type="submit" class="submit-button" name="submit" value="Buy ticket">
        </form>
      </div>
    </div>
  </main>
  </body>
</html>
