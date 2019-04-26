
<?php
if($_POST['submit']){
    $to = $_POST['field_email'];
};
$subject = 'This is subject';
$message = 'This is body of email';
$from = "From: Nizar Maki <531783@student.glu.nl>";
mail($to,$subject,$message,$from);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Thanks</title>
    <link rel="stylesheet" type="text/css" href="css/thanks.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Play');
    </style>
</head>

<body>
    <div class="headerlogo">
        <img class="logo" src="img/shazeem.png" alt="logo">
    </div>
    <footer>
        <div class="container">
            <div class="background">
                <h1>Thank you for your order.</h1>
                <div class="orderplaced">Your order has been placed. You will receive an e-mail with the details of your order.</div>
                <div class="home"><a class="home" href=""><u>Go to homepage</u></div></a>
            </div>
            <div class="footer">
                <img class="footerlogo" src="img/shazeem.png" alt="shazeem">
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
                    <a href="https://www.facebook.com/"><img class="facebook" src="img/facebook.png" alt="facebook"></a>
                    <a href="https://twitter.com/"><img class="twitter" src="img/twitter.png" alt="twitter"></a>
                    <a href="https://www.instagram.com/"><img class="instagram" src="img/instagram.png" alt="instagram"></a>
                    <a href="https://nl.pinterest.com/"><img class="pinterest" src="img/pinterest.png" alt="pinterest"></a>
                </ul>
                <p class="copyright">© All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>