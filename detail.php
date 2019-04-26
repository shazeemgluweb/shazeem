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
    <title>detail</title>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet"> 
    <link href="css/content.css" rel="stylesheet">
    <link href="css/formulier.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/location.css" rel="stylesheet">
    <link href="css/detail.css" rel="stylesheet">
  </head>
  <body>
    <footer>
     <div id="shzmheader">
           <div id="shzmlogo">
              <img src="img/detail/shazeem.png" alt="shazeem">
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
    </footer>
      <main>
        <?php  $sql= "SELECT * FROM `event` where id = $id;";
               $result = mysqli_query($conn, $sql);
               $resultCheck = mysqli_num_rows($result);
               if($resultCheck > 0){
                 while($row = mysqli_fetch_assoc($result)){ ?>
      <div id="layerover">
          <div class="slanted_div">
              <div class="head_title"><?php echo $row['name']; ?></div>
          </div>
          <div class="img_under_title">
              <img src="img/detail/mog3.png" alt="Image">
              <div class="img_case">
                  <div class="img_replace" style="background: linear-gradient(90deg, rgba(89, 72, 234, .4), rgba(194, 0, 165, .4)), url(img/detail/mog3.png); background-size: cover;
    background-repeat: no-repeat;
    background-position: inherit;
    position: relative;
    margin: -300px 0 50px 0;">
                  </div>
              </div>
          </div>
      </div>
      <div class="content_t">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet.
          </p>
      </div>
        <div class="leftblock">
            <ul class="list">
                <li class="a">EVENT LOCATION:</li>
                <li class="b">LONDON / TOWER BRIDGE</li>
                <li class="c">Check event</li>
                <li class="d">location on map</li>
                <button class="ticketbutton">GET YOUR TICKET</button>
            </ul>
        </div>
        <div class="border"></div>
        <div class="gmap_canvas"><iframe width="600" height="310" id="gmap_canvas" src="https://maps.google.com/maps?q=England%20of%20Towerbridge&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/%22%3Epureblack.de"></a></div>
      </div>
      <?php }} ?>
    </main>
    </div>
    <div class="content_t">
        <div class="bottom_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Lorem ipsum dolor sit amet.
                    </p>
                </div>

            <div class="bestellen"> 
                <div class="event_info">
                    <div class="info_1 spacing_info">DD/MM/YY</div>
                    <div class="split_2 spacing_info">|</div>
                    <div class="info_3 spacing_info"><span>17:00</span> - <span>21:00</span></div>
                    <div class="split_4 spacing_info">|</div>
                    <div class="info_5 spacing_info">Soort event</div>
                </div>
                <div class="remaining_tix"> 
                    <div class="warning_only">
                        Remaining tickets: <span>99</span>
                    </div>
                </div>
                <div class="fest_name"> 
                    <div class="name_title">
                        Festival name
                    </div>
                </div>
                <div class="fest_button">
                    <form action="form.php?id=<?php echo $id?>" method="post"> 
                    <button id="buynow_btn">
                        Buy now
                    </button>
        </form>
                </div>
            </div>

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
