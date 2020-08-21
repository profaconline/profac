
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Learn English through Whatsapp. Easy learning without direct grammar and tenses studies but learn with real world examples">

  <!-- Load Bootstrap3 and JQuery  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- Load custom CSS sheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Load different fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500&display=swap" rel="stylesheet">
  
  <!-- Load favicon SVG -->
  <link rel="icon" type="image/svg+xml" href="images/favicon.svg">
              <!--
              <link rel="alternate icon" href="images/favicon.ico">
            -->
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ff8a01">


  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Js load for hamburger menu -->
  <script src="jscript.js"></script>

</head>
<body>
<header>






<!-- Menu for Mobile View -->
  <div class="hamburger">
  <!-- Top Navigation Menu -->
      <div class="topnav">
          <a href="index.php" class="active-m">
              <div class="logo-mob">
                  <?php include 'logo.php'; ?>
              </div>
          </a>
        <!-- Navigation links (hidden by default) -->
          <div id="myLinks">
              <a href="index.php" class="pos-link">Home</a>
              <a href="index.php?#courses" class="pos-link">Courses</a>
              <a href="contact.php" class="pos-link">Contact</a>
              <a href="about.php" class="pos-link">About</a>
          </div>
          <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars" ></i>
          </a>
      </div>
  </div>


<!-- Menu for Desktop View -->
  <div class="topmenu">
    <div class="logo-desk">
    <?php include 'logo_main.php'; ?>
    </div>
      <div class="menubar">
        
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php?#courses">Courses</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="about.php">About</a></li>

              <span id="share" class="text-right">
                <p class="text-center" style="margin:1px;">Stay Connected</p>
              <a href="https://www.facebook.com/Profac-109049430887564" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google"></a>
              <a href="#" class="fa fa-linkedin"></a>
              <a href="#" class="fa fa-instagram"></a>
            </span>


            </ul>

          </nav>
      </div>
  </div>



  <script>

      var wdt  = $(window).width();
      $( document ).ready(function() {
          if(wdt<=720){
            document.getElementsByClassName("hamburger")[0].style.display="block";
            document.getElementsByClassName("topmenu")[0].style.display="none";
            document.getElementsByClassName("slider-status")[0].style.display="none";
          }else{
            document.getElementById("share-m").style.display="none";
          }
      });

      $(window).resize(function() {
        wdt = $(window).width();

        if(wdt<=720){
            document.getElementsByClassName("hamburger")[0].style.display="block";
            document.getElementsByClassName("topmenu")[0].style.display="none";
            document.getElementsByClassName("slider-status")[0].style.display="none";
            document.getElementById("share-m").style.display="block";
          }else{
            document.getElementsByClassName("hamburger")[0].style.display="none";
            document.getElementsByClassName("topmenu")[0].style.display="block";
            document.getElementsByClassName("slider-status")[0].style.display="block";
            document.getElementById("share-m").style.display="none";
          }

      });



  
 
    
  
</script>
