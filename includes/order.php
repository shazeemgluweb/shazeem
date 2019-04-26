<?php
  include_once 'connect.php';
  session_start();

  $firstname = $_POST['field_firstname'];
  $lastname = $_POST['field_lastname'];
  $email = $_POST['field_email'];
  $phone = $_POST['field_tel'];
  $street = $_POST['field_street'];
  $house_num = $_POST['field_house'];
  $postcode = $_POST['field_postcode'];
  $country = $_POST['field_country'];
  $customerID = $_SESSION['customerID'];
  $eventID = (int)mysqli_real_escape_string($conn,$_GET['id']);

  $sql = "INSERT INTO `order_event`(`customerID`, `eventID`, `firstname`, `lastname`, `email`, `phone`, `street`, `house_num`, `postcode`, `country`)
              VALUES ('$customerID', '$eventID', '$firstname', '$lastname', '$email', '$phone', '$street', '$house_num', '$postcode', '$country');";
    mysqli_query($conn, $sql);

   header("Location:../thanks.html");
 ?>
