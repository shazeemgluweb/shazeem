<?php
session_start();

if(empty($_SESSION['customerID'])){
header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet"> 
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/formulier.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="blok">
        <div class="login-blok">
          <div class="titel">Add event</div>
          <form action="includes/add-event.php" method="post">
              <label class="label" for="field_firstname">Name event:</label>
                <input type="text" name="event_name" class="input-field" required>
              <label class="label" for="field_firstname">Info event:</label>
                <input type="text" name="event_info" class="input-field" required>
              <label class="label" for="field_place">Place event:</label>
                <input type="text" name="event_place" class="input-field" required>
              <label class="label-half" for="event_date">Date event:</label>
              <label class="label-half" for="event_time">Time event:</label>
                  <input type="date" name="field_date" class="input-field-half" required>
                  <input type="time" name="field_time" class="input-field-half" required>
              <label class="label-half" for="field_date">Tickets limit:</label>
            <input type="text" name="event_tickets" class="input-field" required>
              <select class="input-field" name="event_type">
                <option value="volvo">Type event</option>
                <option value="Music">Music</option>
                <option value="Theme events">Theme events</option>
                <option value="ekke dingen">gekke dingen</option>
                <option value="Weddings">Weddings</option>
              </select>
              <label class="label-half" for="field_main_image">Main image:</label>
            <label class="label-half" for="field_side_image">Side image:</label>
        <input type="file" name="event_image_one" class="input-field-half" >
          <input type="file" name="event_image_two" class="input-field-half">
            <input type="submit" class="submit-button" name="submit" value="Buy ticket">
          </form>
        </div>
    </div><br><br>
    <div class="vieuw-event-blok">View events</div>
    <div id="event-block">
    <?php  include_once 'includes/connect.php';
                $sql= "SELECT * FROM `event`;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                  while($row = mysqli_fetch_assoc($result)){ ?>
    <div class="vieuw-event">
    <div class="vieuw-info"><div class="vieuw-event-info">Name: </div><div class="view-data"><?php echo $row['name'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Info: </div><div class="view-data"><?php echo $row['info'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Place: </div><div class="view-data"><?php echo $row['place'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Date: </div><div class="view-data"><?php echo $row['date'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Time: </div><div class="view-data"><?php echo $row['time'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Tickets: </div><div class="view-data"><?php echo $row['tickets'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Event Type: </div><div class="view-data"><?php echo $row['type'];?></div></div>
    <a href="includes/delete-event.php?id=<?php echo $row ['id'];?>" class="delete-product">Delete Product</a>
  </div><br>
    <?php }} ?>
  </div>
    <div class="vieuw-event-blok">View Customers</div>
    <div id="order-block">
    <?php  include_once 'includes/connect.php';
            $sql= "SELECT * FROM order_event
                INNER JOIN event ON order_event.eventID = event.id
                INNER JOIN customer ON order_event.customerID = customer.id"; // ORDER BY order_event.id DESC";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
    <div class="vieuw-event">
    <div class="vieuw-info"><div class="vieuw-event-info">Customer name: </div><div class="view-data"><?php echo $row['firstname'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Event name: </div><div class="view-data"><?php echo $row['name'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">email: </div><div class="view-data"><?php echo $row['email'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">phone number: </div><div class="view-data"><?php echo $row['phone'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">country: </div><div class="view-data"><?php echo $row['country'];?></div></div>
    <div class="vieuw-info-big"><div class="vieuw-event-info">postcode: </div><div class="view-data"><?php echo $row['postcode'];?></div></div>
    </div><br>
    <?php }} ?>
  </div>
    <div class="vieuw-event-blok">View ticket orders</div>
    <div id="customer-block">
    <?php  include_once 'includes/connect.php';
            $sql= "SELECT * FROM `customer`;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
    <div class="vieuw-event">
    <div class="vieuw-info"><div class="vieuw-event-info">Firstname: </div><div class="view-data"><?php echo $row['firstname'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Middlename: </div><div class="view-data"><?php echo $row['middlename'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Lastname: </div><div class="view-data"><?php echo $row['lastname'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">email: </div><div class="view-data"><?php echo $row['email'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Age: </div><div class="view-data"><?php echo $row['age'];?></div></div>
    <div class="vieuw-info"><div class="vieuw-event-info">Password: </div><div class="view-data"><?php echo $row['password'];?></div></div>
    </div><br>
    <?php }} ?>
  </div>
  </main>
  </body>
</html>
<script>

</script>
