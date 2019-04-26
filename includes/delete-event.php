<?php
  include_once 'connect.php';

  $id = $_GET['id'];

 $sql = "DELETE from event where id=$id;";
   mysqli_query($conn, $sql);

  header("Location:../admin.php");
 ?>
