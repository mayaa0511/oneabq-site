<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  <PHP><link rel="stylesheet" type="text/css" href="newsletter.css"><PHP>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="oneabqhome.css?v=<?php echo time(); ?>">
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
              <a href="donate.php"><button class="buttonDonate">Donate</button></a>
              <li><a href="sponsorspage.php" style=font-size:15px;>Sponsors</a></li>
              <li><a href="outcomes.php" style=font-size:15px;>Outcomes</a></li>
              <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>
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
<?php perch_content('splashHeading'); ?>
<?php perch_content('splashText'); ?>
<a href="aboutabq.php"><button class="aboutButton">About Us</button></a>
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
                <h3 class="housingVouchers"><b>Housing Vouchers<br>For The Homeless</b></h3>
                <button class="learnMoreButton"><a href="https://www.cabq.gov/one-abq-housing-fund">Learn More</a></button>
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

                    <div style="border-left: solid black; height: 84%; margin-left: -10px;">
                    
       
        <div class="row">
            <div class="col-md-4">

                <div class="contactUs">

                  <p><b>CONTACT US</b></p>
                </div>
            <div class="contactUs2">
              <p><b>Steve Fitzer, Development Director<br></b>
              +1.505.270.4079<br>
              stevefitzer@onealbuquerque.org<br>
              PO BOX 25125<br>
              Albuquerque NM 87125-5125</p>
            </div>
            </div>

            <div class="col-md-4 , footerLogo" >
                <img src="abqhoriz2.png" class="footerLogo"> 
            </div>
            <div class="col-md-4 links">
                <p><b>Home</b></p>
                <a href="aboutabq.php"><p><b>About</b></p></a>
                <a href="priorities.php"><p><b>Priorities</b></p></a>
                <a href="sponsorspage.php"><p><b>Sponsors</b></p></a>
                <a href=""><p><b>Outcomes</b></p></a>
                <a href="donate.php"><p><b>Donate</b></p></a>
                <a href="contactpage.php"><p><b>Contact</b></p></a>
            </div>
        </div>
       <div class="row">
        <div class="col-md-2"></div>
           <div class="col-md-8 , rights">
            <p>2019 City of Albuquerque Foundation | All Rights Reserved | The offical website for the One Albuquerque Fund</p>
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
