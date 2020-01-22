<?php include("perch/runtime.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  <link rel="stylesheet" href="contactpage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <div class="navBar">
      <header>

        <nav> 
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>


          <div class="oneabqlogo">
            <a href="oneabqhome.html"><img src="abqhoriz.png" class="logo"></a>
          </div>
         <div class="menu">
           <ul>
              <li><a href="#">About</a></li>
              <li><a href="priorities.html">Priorities</a></li>
              <li class="active"><a href="contactpage.html">Contact</a></li>
              <button class="buttonDonate">Donate</button>
           </ul>
          </div>
        </nav>
      </header>
    </div>
<div class="splashPage">
    <h1 class="heading">Contact Us</h1>
    <p class="text">We are turning government inside out and are eager<br>
    to hear your thoughts and be in touch with you. See<br>
    our team and contact us directly below.</p>
</div>
<div class="contactForms">
  <?php perch_content("Contactform"); ?>
    <div class="row">
        <div class="col-md-4">
            <h2 class="getIn">Get In Touch</h2>
            <br>
            <form class="contact-form" action="contactpage.php" method="POST">
            <input type="text" id="firstName" name="name" placeholder="First Name"> <input type="text" id="lastName" name="lastName" placeholder="Last Name"><br>
            <br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <br>
            <input type="tel" id="phoneNumber" name="phone" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required><br>
            <br>
            <textarea id="message" name="message" placeholder="Message"></textarea>
    <button type="submit">Send</button>
    </form>
    </div>
    </div>
</div>

<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$number = $_POST["phone"]
$email = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "3bearg3@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}
?>
<div class="footer">
    <div class="row">
        <div class="col-md-4">
            <h4>CONTACT US</h4>
            <p>onealbuquerque@cabq.com</p>
            <p>+1.505.768.3000</p>
        </div>
        <div class="col-md-4">
            <img src="abqhoriz.png" class="footerLogo"> 
        </div>
        <div class="col-md-4 , links">
            <ul>
                <li><a href="oneabqhome.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="priorities.html">Priorities</a></li>
                <li><a href="contactpage.html">Contact</a></li>
                <li><a href="donate.html">Donate</a></li>
            </ul>
        </div>
    </div>
        <p class="rights">2019 City of Albuquerque | All Rights Reserved | The offical website for the One Albuquerque Fund</p>
</div>





<script src="oneabq.js"></script>

</body>
</html>