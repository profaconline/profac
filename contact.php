<?php $title="Profac | Contact us , Learn English through Whatsapp. Easy learning without direct grammar and tenses studies but with real world examples."; ?>
<?php include "header.php"; ?>
 
</header>

<div class="container">

<h2 style="font-weight:bold;"> Contact us</h2>
          <hr size="5" width="120" align="left" style="border:2px solid #a31010;border-radius:5px;margin:5px 0px 10px 1px;">
           


    <?php

      $course = "Different Courses.";
          if(isset($_GET['course'])){
            if($_GET['course']=="prelims"){
              $course = "Preliminary Level Course.";
            }elseif($_GET['course']=="basics"){
              $course = "Basic Level Course.";
            }elseif($_GET['course']=="intermeds"){
              $course = "Intermediate Level Course.";
            }elseif($_GET['course']=="advanced"){
              $course = "Advanced Level Course.";
            }
          }

          echo '<div class="well alert-primary h4"> Please fill-up the form below to get more Information on <strong class="text-danger">'.$course.'</strong></div>';
      ?>

     
      <div class="progress" id="pgb1">
        <div class="progress-bar progress-bar-striped progress-bar-success bg-success active" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:70%">
      
        </div>
      </div>

    


    <div class="container-iframe"> 
      <iframe class="responsive-iframe" frameborder="0" scrolling="no" src="https://docs.google.com/forms/d/e/1FAIpQLSfqTviom2FAoGc9_yT0yrtlyON49i-A12XYclTEjJfibtx1CQ/viewform?embedded=true">Loading…</iframe>
    </div>
</div>


<footer>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>