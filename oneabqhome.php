<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=.7, minimum-scale=.7, maximum-scale=.7">
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
      <li><a href="priorities.php" style=font-size:15px;>Initiatives</a></li>
      <a href="donate.php"><div id="cpa1989e5448" style="margin: 37px 0px" class="rounded-div" onclick="document.getElementById('pay_now_form_d66ec123ef').submit()"><form action="https://checkout.globalgatewaye4.firstdata.com/pay" id="pay_now_form_d66ec123ef" method="post"><input type="hidden" name="x_login" value="WSP-ONE-A-PjgeagDGNw" /><input type="hidden" name="x_show_form" value="PAYMENT_FORM" /><input type="hidden" name="x_fp_sequence" value="15738680973699013222" /><input type="hidden" name="x_fp_hash" value="PNB-1.0-b74016462aa610f6cb8f20a75da91c090ea3cd77" /><input type="hidden" name="x_amount" /><input type="hidden" name="x_currency_code" value="USD" /><input type="hidden" name="x_test_request" value="FALSE" /><input type="hidden" name="x_relay_response" value="" /><input type="hidden" name="donation_prompt" /><input type="hidden" name="button_code" value="Pay Now One Albuquerque Fund" /><button type="button">Donate</button></div></form></div></a>
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
  <div class="splashText">
    <?php perch_content('splashHeading'); ?>
    <?php perch_content('splashText'); ?>
    <a href="aboutabq.php"><button class="aboutButton">About Us</button></a>
  </div>
  <div class="content container-fluid">
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
  </div>
  <div class="volunteer container-fluid">
    <div class="row">
      <div class="col-md-4">
      </div>
    <div class="col-md-4">
      <h3 class="housingVouchers"><b>Homelessness &<br>Housing</b></h3>
      <button class="learnMoreButton"><a href="https://www.cabq.gov/one-abq-housing-fund">Learn More</a></button>
    </div>
  <div class="col-md-4">
  </div>
    </div>
  </div>
  <div class="email container-fluid">
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
  <div class="footer container-fluid">
    <div style="border-left: solid black; height: 84%; margin-left: -10px;">
      <div class="row">
        <div class="col-md-4">
          <div class="contactUs">
            <p><b>CONTACT US</b></p>
          </div>
        <div class="contactUs2">
          <p><b>Steve Fitzer, Development Director<br></b>
          +1.505.633.6813<br>
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
        <a href="priorities.php"><p><b>Initiatives</b></p></a>
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
  <script src="oneabq.js"></script>
</body>
</html>
