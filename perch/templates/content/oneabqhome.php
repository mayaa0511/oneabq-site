<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="oneabqhome.css">
</head>
  <body>
    <div class="navBar">
      <header>

        <nav> 
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>


          <div class="oneabqlogo">
            <img src="abqhoriz.png" class="logo">
          </div>
         <div class="menu">
           <ul>
              <li><a href="aboutabq.php" style=font-size:15px;>About</a></li>
              <li><a href="priorities.php" style=font-size:15px;>Priorities</a></li>
              <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>
              <a href="donate.php"><button class="buttonDonate">Donate</button></a>
           </ul>
          </div>
        </nav>
      </header>
    </div>
<div>
<video autoplay muted loop id="myVid">
          <source src="splashpage.mp4" type="video/mp4"> 

        </video>
</div>
<img src="mobilesplash.png" class="mobile">

<div class="logo2">
<img src="abqvert.png" class="splashLogo">
</div>
<img src="mobilegetinvolved.png" class="mobileGetInvolved">
<div class="splashText">
<h1><b>We Are All <br>In This Together</b></h1>
<div class="pSpace">
<p>One Albuquerque is about giving everyone <br>
    a seat at the table to make our communities<br> 
    safer, more innovative, and more inclusive.</p>
</div>
<a href="aboutabq.html"><button class="button1">About Us</button></a>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-3">
        <img src="hand-icon.png" class="handIcon">
        </div>

        <div class="col-md-4">

        <h2 class="getInvolvedHead"><b>Get Involved</b></h2>
        <p> Volunteers will engage residents to address the<br>
            challenges the city faces. After the success of the<br>
            One ABQ: Challenge, we will continue to connect<br>
            those who want to be involved to a volunteer<br> opportunity, making sure that everyone can play a<br>
            role in moving our city forward.
        </p>
        <a href="https://ec.volunteernow.com/custom/1503/index.php"> <button class="volunteerButton"> Volunteer </button></a>
        </div>
    </div>
</div>
<div class="getInvolved">
  <img src="getInvolved.png" class="getInvolved">
  </div>
    <div class="volunteer">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h3 class="housingVouchers"><b>Housing Vouchers<br>For The Holidays</b></h3>
                <p class="housingText"><center>Volunteers will engage residents to address the challenges the city faces. After the success of the One ABQ: Challenge, we will continue to connect</center></p>
                <button class="learnMoreButton">Learn More</button>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <div class="email">
        <div class="row">
            <div class="col-md-4">
            
                <h2 class="stayConnected"><b>Stay Connected</b></h2>
                <p>Sign up with your email to receive updates from<br>
                the City of Albuquerque.</p>
                <div class="emailsignUp">
                <?php perch_content("Email sign up"); ?>
                </div>
            </div>
            <div class="col-md-4">
                <img src="email-icon.png" class="emailIcon">
            </div>

        </div>
    </div>
    <div class="footer">

                    <div style="border-left: solid black; height: 150px; margin-left: -10px;">
                    
       
        <div class="row">
            <div class="col-md-4">

                <div class="contactUs">

                  <p><b>CONTACT US</b></p>
                </div>
            <div class="contactUs2">
                <p>onealbuquerque@cabq.com</p>
                <p>+1.505.768.3000</p>
            </div>
            </div>

            <div class="col-md-4 , footerLogo" >
                <img src="abqhoriz2.png" class="footerLogo"> 
            </div>
            <div class="col-md-4 links">
                <p><b>Home</b></p>
                <a href="aboutabq.html"><p><b>About</b></p></a>
                <a href="priorities.html"><p><b>Priorities</b></p></a>
                <a href="contactpage.html"><p><b>Contact</b></p></a>
                <a href="donate.html"><p><b>Donate</b></p></a>
            </div>
        </div>
       <div class="row">
        <div class="col-md-2"></div>
           <div class="col-md-8 , rights">
            <p>2019 City of Albuquerque | All Rights Reserved | The offical website for the One Albuquerque Fund</p>
       </div> 
        <div class="col-md-2"></div>
        </div>
</div>











  
  <script type="text/javascript">

    $(document).ready(function() {
      $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
      });
    });
  
  
    $(window).on("scroll", function() {
      if($(window).scrollTop()) {
        $("nav").addClass("black");
      }
      else {
         $("nav").removeClass("black");
      }
    })
</script>
<script src="oneabq.js"></script>
  </body>
  </html>