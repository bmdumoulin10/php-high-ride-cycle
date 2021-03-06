<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>About - High Ride Cycle</title>

  <!-- External fonts used on this site -->
  <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <!-- Icons from Materialize CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Personal CSS -->
  <link rel='stylesheet' href='main5.css'>
  <!-- Daily Deal Widget for 3rd Party -->
  <script type="text/javascript">
    (function() {
      var zen = document.createElement("script");
      zen.type = "text/javascript";
      zen.async = true;
      zen.src = 'https://widget.zenrez.com/business/59fa4ea3c912590011af0124';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(zen, s);
    })();
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-103114969-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-103114969-1');
  </script>
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

  <body>
    <div id="aboutBackground">
      <div class="aboutTextBox">
        <h1 class='teamHeader aboutHeading'>About</h1>
        <p class='paraFont'><?php perch_content('About'); ?></p>
        <h1 class='priceHeader'>Pricing</h1>
        <ul>
          <?php perch_content('Price1'); ?>
          <?php perch_content('Price2'); ?>
          <?php perch_content('Price3'); ?>
          <?php perch_content('Price4'); ?>
          <?php perch_content('Price5'); ?>
          <?php perch_content('Price6'); ?>
          <?php perch_content('Price7'); ?>
          <?php perch_content('Price8'); ?>
          <?php perch_content('Price9'); ?>
          <?php perch_content('Price10'); ?>
        </ul>
      </div>

    </div>
  </body>
</html>
