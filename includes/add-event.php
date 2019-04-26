<?php
  include_once 'connect.php';

  $name = $_POST['event_name'];
  $info = $_POST['event_info'];
  $place = $_POST['event_place'];
  $date = $_POST['event_date'];
  $time = $_POST['event_time'];
  $tickets = $_POST['event_tickets'];
  $type = $_POST['event_type'];
  $image_one = $_POST['event_image_one'];
  $image_two = $_POST['event_image_two'];

  $sql = "INSERT INTO `event`(`name`, `info`, `place`, `main_image`, `detail_image`, `date`, `time`, `tickets`, `type`)
                VALUES ('$name', '$info', '$place', '$image_one', '$image_two', '$date', '$time', '$tickets', '$type' );";
    mysqli_query($conn, $sql);

   header("Location:../admin.php");
 ?>
