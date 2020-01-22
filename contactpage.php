<?php include("perch/runtime.php")?>
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
            <a href="oneabqhome.php"><img src="abqhoriz.png" class="logo"></a>
          </div>
         <div class="menu">
           <ul>
              <li><a href="aboutabq.php" style=font-size:15px;>About</a></li>
              <li><a href="priorities.php" style=font-size:15px;>Priorities</a></li>
              <li class="activeNav"><a href="sponsorspage.php"style=font-size:15px>Sponsors</a></li>
              <li class="activeNav"><a href="outcomespage.php"style=font-size:15px>Outcomes</a></li>
              <li class="activeNav"><a href="contactpage.php" style=font-size:15px><font color="red";>Contact</font></a></li>
              <a href="donate.php"><button class="buttonDonate">Donate</button></a>
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
<div class="masthead">
  <?php perch_content("Contact form"); ?>
</div>
<div class="fill">
  <div><br><br></div>
  </div>


  <div class="footer">

                    <div style="border-left: solid black; height: 81.5%; margin-left: -10px;">
                    
       
        <div class="row">
            <div class="col-md-4">

                <div class="contactUs">

                  <p><b>CONTACT US</b></p>
                </div>
            <div class="contactUs2">
              <p style="line-height:1.2"><b>Steve Fitzer, Development Director<br></b>
              +1.505.270.4079<br>
              stevefitzer@onealbuquerque.org<br>
              PO BOX 25125<br>
              Albuquerque NM 87125-5125</p>
            </div>
            </div>

            <div class="col-md-4 , footerLogo" >
                <img src="abqhoriz2.png" class="footerLogo"> 
            </div>
            <div class="col-md-4 , links">
                <a href="oneabqhome.html"><p><b>Home</b></p></a>
                <p><b>About</b></p>
                <a href="priorities.php"><p><b>Priorities</b></p></a>
                <a href="contactpage.php"><p><b>Sponsors</b></p></a>
                <a href="contactpage.php"><p><b>Outcomes</b></p></a>
                <a href="donate.php"><p><b>Donate</b></p></a>
                <a href="contactpage.php"><p><b>Contact</b></p></a>
            </div>
        </div>
       <div class="row">
        <div class="col-md-2"></div>
           <div class="col-md-8 , rights">
            <p>2019 City of Albuquerque Foundation| All Rights Reserved | The offical website for the One Albuquerque Fund</p>
       </div> 
        <div class="col-md-2"></div>
        </div>
</div>
     






<script src="oneabq.js"></script>

</body>
</html>
