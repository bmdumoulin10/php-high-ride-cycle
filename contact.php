<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact - High Ride Cycle</title>

  <!-- External fonts used on this site -->
  <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <!-- Icons from Materialize CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Personal CSS -->
  <link rel='stylesheet' href='main2.css'>
  <!-- Compiled and minified JQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'>
  </script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <!-- Side Nav Scripting -->
  <script type="text/javascript">
  $(document).ready(function(){
    $(".button-collapse").sideNav();
  });
  </script>
  <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

  <header>
    <nav class='teamNav'>
      <div class='navigationBar'>
        <div>

          <a href="index.php"><img src="images/blackLogoNav.jpg" alt="High Ride Cycle Logo" /></a>
          <a href="#" data-activates="side-menu" class="button-collapse right"><i class="material-icons">menu</i></a>
          <ul id='nav-mobile' class='navList hide-on-med-and-down'>
            <li><a class='navFont' href="index.php">Home</a></li>
            <li><a class='navFont' href="ride.php">Ride With Us</a></li>
            <li><a class='navFont' href="about.php">About</a></li>
            <li><a class='navFont' href="team.php">Team High Ride</a></li>
            <li><a class='navFont' href="contact.php">Contact</a></li>
            <li><a class='navFont' href="faq.php">FAQ</a></li>
          </ul>
          <!-- Hamburger menu for side nav on smaller devices -->
          <ul class="side-nav black" id="side-menu">
            <li><div class='center'>
                <img src="images/blackLogoNav.jpg" alt="High Ride Cycle Logo" />
              </div></li>
            <li><a class='navFont grey-text text-lighten-2' href="index.php">Home</a></li>
            <li><a class='navFont grey-text text-lighten-2' href="ride.php">Ride With Us</a></li>
            <li><a class='navFont grey-text text-lighten-2' href="about.php">About</a></li>
            <li><a class='navFont grey-text text-lighten-2' href="team.php">Team High Ride</a></li>
            <li><a class='navFont grey-text text-lighten-2' href="contact.php">Contact</a></li>
            <li><a class='navFont grey-text text-lighten-2' href="faq.php">FAQ</a></li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <body class='teamBackgroundColor'>
    <div class="contact">
      <div class="questions contactInfo">
        <h2 class='teamHeader'>Contact Information</h3>
        <p class='info'><?php perch_content('Phone'); ?> <br><br>
          Email:<br> <?php perch_content('Email'); ?><br><br>
          Address: (Click for Directions)<br>
          <a href="https://www.google.com/maps/place/4433+W+29th+Ave+%23204,+Denver,+CO+80212/@39.758758,-105.0470387,17z/data=!3m1!4b1!4m5!3m4!1s0x876b876f9b2733cb:0xbf97de3d58088d50!8m2!3d39.758758!4d-105.04485" class='mapLink' target='_blank'><?php perch_content('Address'); ?></a> <br><br>
          Connect With Us On Social Media! <br><br>
          <a href="https://www.facebook.com/HighRideCycle/" target='_blank'><img src="images/facebook.png" class='facebook' alt="Facebook Link"></a>
          <a href="https://www.instagram.com/highridecycle/" target='_blank'><img src="images/instagram.png" class='insta' alt="Instagram Link"></a></p>
      </div>

      <div class="questions contactInfo">
        <?php perch_content('Contact Form'); ?>
      </div>

    </div>
    <div class="mapPic center">

    </div>
  </body>
</html>
