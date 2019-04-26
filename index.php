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
    <title>Home</title>
    <link href="css/content.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/blok1.css" rel="stylesheet">
    <link href="css/blok2.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div id="shzmtop">
          <div id="layerover">
              <div id="shzmheader">
                  <div id="shzmlogo">
                      <img src="img/header/shazeem.png" alt="shazeem">
                  </div>
                  <div id="shzmnav">
                      <ul style="list-style-type: none;">
                          <li>
                              <a href="#" class="lione">
                              Home
                              </a>
                          </li>

                          <li>
                              <a href="#" class="litwo">
                              Main event
                              </a>
                          </li>

                          <li>
                              <a href="#" class="lithree">
                              Contact
                              </a>
                          </li>

                          <li>
                              <a href="#" class="lifour">
                              Logout
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div id="shzmquote">
                  <p>There are as many festivals as there are mosquitoes after a rain.</p>
              </div>
          </div>
      </div>
  	</header>
    <main>

         <div class='container_1'>
            <div class='overlay_1'>
               <!-- Container voor de tekst -->
               <div class='info_vak'>
                  <!-- Div voor de titel -->
                  <div class='vak_1'>
                     <div class='text_1'>TITLEINO</div>
                  </div>
                  <!-- De tekst onder de titel -->
                  <div class='vak_2'>
                     <div class='text_2'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur nulla eu risus posuere ornare. Nunc varius elementum dui a suscipit. Duis dapibus arcu sed justo accumsan facilisis. Aliquam mi elit, sodales dignissim egestas et, fringilla a erat. Donec et porttitor est, vel mollis augue. Phasellus fermentum, nulla in facilisis consectetur, tellus ante malesuada nunc, sit amet sollicitudin libero ipsum at sem. Donec viverra orci id urna fringilla, sit amet aliquam lorem eleifend. Donec interdum diam dolor, suscipit cursus ligula tempor in.
                     </div>
                  </div>
               </div>
               <!-- Hier zit de foto -->
               <div class='pic_blok_1'>
                  <img src="img/content/event.png">
               </div>
            </div>
         </div>
         <div class="imgcontainer">
         <?php  $sql= "SELECT * FROM `event`;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){ ?>
          <a class="event-foto" href="detail.php?id=<//?//php echo $row ['id'];?>">
                <img src="img/content/mog.jpg" alt="Event foto missing">
              </a>
              <div id ="img-overlay">
              </div>
              <div id ="img-overlay-2">
                <div class="foto-titel-pos">Foto titel</div>
                  <div class="twobars">
                     <div class="inbars">
                        <div class="foto-date-pos">DD</div>
                        <div class="foto-month-pos">MM</div>
                     </div>
                        <div class="divider">
                          -
                        </div>
                     <div class="inbars2">
                        <div class="foto-date-pos2">DD</div>
                        <div class="foto-month-pos2">MM</div>
                     </div>
                  </div>
              </div>
          </a>
        <?php }} ?>
    </div>

        <div class='container_2'>
        	<div class='overlay_2'>
        		<div class='info_vak_2'>
        		<div class='vak_1_2'>
        			<div class='text_1_2'>TITLEINO</div>
        		</div>
        		    <div class='vak_2_2'>
                    <div class='text_2_2'>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur nulla eu risus posuere ornare. Nunc varius elementum dui a suscipit. Duis dapibus arcu sed justo accumsan facilisis. Aliquam mi elit, sodales dignissim egestas et, fringilla a erat. Donec et porttitor est, vel mollis augue. Phasellus fermentum, nulla in facilisis consectetur, tellus ante malesuada nunc, sit amet sollicitudin libero ipsum at sem. Donec viverra orci id urna fringilla, sit amet aliquam lorem eleifend. Donec interdum diam dolor, suscipit cursus ligula tempor in.
                    </div>
                 </div>
              </div>
        	</div>
        </div>
    </main>
    <footer>
      <div class="footer">
          <img class="footerlogo" src="img/footer/shazeem.png" alt="shazeem">
          <ul class="links">
              <li><a href="">ABOUT US</a></li>
              <li><a href="">PRESS</a></li>
              <li><a href="">CAREERS</a></li>
              <li><a href="">BUSINESS OPPORTUNITIES</a></li>
          </ul>
          <ul class="links">
              <li><a href="">TERMS AND CONDITIONS</a></li>
              <li><a href="">INFRINGEMENT</a></li>
              <li><a href="">CONTACT US</a></li>
          </ul>
          <ul class="intouch">
              <li>STAY IN TOUCH</li>
              <li>SUBSCRIBE TO GET EXCLUSIVE INVITES, AND MORE!</li>
              <button class="subscribe">SUBSCRIBE</button>
              <a href="https://www.facebook.com/"><img class="facebook" src="img/footer/facebook.png" alt="facebook"></a>
              <a href="https://twitter.com/"><img class="twitter" src="img/footer/twitter.png" alt="twitter"></a>
              <a href="https://www.instagram.com/"><img class="instagram" src="img/footer/instagram.png" alt="instagram"></a>
              <a href="https://nl.pinterest.com/"><img class="pinterest" src="img/footer/pinterest.png" alt="pinterest"></a>
          </ul>
          <p class="copyright">© All Rights Reserved</p>
        </div>
      </footer>
    </div>
  </body>
</html>
