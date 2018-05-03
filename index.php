<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cold Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Bungee+Inline|Kumar+One+Outline" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
  <header class="main-header">
    <nav class="animated bounceIndown navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="animated jello navbar-brand"><img src="img/cold-room-brand2.png" alt="" class="img-responsive"></a>
          <a href="https://www.facebook.com/Cold-Room-DJs-558445684516223/" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#djs">Dj`s</a></li>
            <li><a href="#equipment">Equipment</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <header class="intro-header">
    <!-- START SLIDER -->
    <div id="myCarousel" class="animated bounceInUp carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active mainPageSlides">
          <img src="img/1.jpg" alt="dj1" class="img-responsive">
          <div class="carousel-caption main-caption">
            <p class="animated bounceInUp"><strong>Are u in middle east?<br>do you need Dj<br>for your event?</strong></p>
          </div>
        </div>
        <div class="item mainPageSlides">
          <img src="img/2.jpg" alt="dj2" class="img-responsive">
          <div class="carousel-caption main-caption">
            <p class="animated bounceInUp"><strong>Cold Room is<br>company for<br>dj bookings</strong></p>
          </div>
        </div>
        <div class="item mainPageSlides">
          <img src="img/3.jpg" alt="dj equipment" class="img-responsive">
          <div class="carousel-caption main-caption">
            <p class="animated bounceInUp"><strong>We are providing<br>professional<br>dj equipment</strong></p>
          </div>
        </div>
      </div>
        <!-- START SLIDER CONTROLS -->
        <a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

        </a>
        <a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
        <!-- END SLIDER CONTROLS -->
    </div>
      <!-- END SLIDER -->
</header>

<!-- START DJ CONTAINER -->
<section>
    <div id="djs" class="container-fluid text-center">
      <h2>COLD ROOM DJ's</h2>
      <hr>
      <div class="row">

      <?php
      include("includes/database.php");

      $run_profiles = mysqli_query($con, "SELECT * FROM profiles");


      while($row_profiles = mysqli_fetch_array($run_profiles)) {
          $profile_id = $row_profiles['profile_id'];
          $profile_name = $row_profiles['profile_name'];
          $profile_img = $row_profiles['profile_img'];

         echo "
         <div class='animated revealIn fadeInUp col-lg-3 col-md-3 col-sm-4 col-xs-12'>
           <div class='djBox'>
             <img src='imgClients/$profile_img' class='img-responsive' alt='DJ IMG'>
             <h3>$profile_name</h3>
             <ul>
               <li><a href='details.php?profile=$profile_id'><p>click for more</p></a></li>
             </ul>
           </div>
         </div>

         ";

      }


      ?>

        </div>

      </div>
    </div>
</section>
<!-- END DJ CONTAINER -->

<!--START DJ EQUIPMENT SECTION -->
<section>
  <h2 class="text-center">DJ EQUIPMENT FOR RENT</h2>
  <hr>
    <div id="equipment" class="container text-center">
      <div class="row">
        <div class="animated revealIn fadeInUp col-lg-12 col-xs-12">
          <h2>COLD ROOM</h2>
          <h3>PROVIDING PROFESSIONAL DJ EQUIPMENT FOR ALL YOUR EVENTS</h3>
        <section class='equipment-container option1'>
                <div class="banner-content text-center">
                  <h3 class="banner-heading black mb-20">Option 1</h3>
                  <h3>Players: Pioneer CDJ 2000 NEXUS 2</h3>
                  <h3>Mixer : Pioneer DJM 900 NEXUS 2 & DJM 800</h3>
                  <div class="page-scroll">
                    <a href="equipment1.html" class="page-scroll btn btn-mod-black btn-medium"><span>click for more</span></a>
                  </div>
                </div>
          </section>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="animated revealIn fadeInUp col-lg-12 col-xs-12">
        <section class='equipment-container option2'>
                <div class="banner-content text-center">
                  <h3 class="banner-heading black mb-20">Option 2</h3>
                  <h3>Turntables: Technics SL 1210</h3>
                  <h3>Analog Mixer: Vestax VMC 004</h3>
                  <div class="page-scroll">
                    <a href="equipment2.html" class="page-scroll btn btn-mod-black btn-medium"><span>click for more</span></a>
                  </div>
                </div>

          </section>
        </div>
    </div>
</section>
<!--END DJ EQUIPMENT SECTION -->

<!--START ABOUT SECTION -->
<section>
    <h2 class="text-center">ABOUT</h2>
    <hr>
    <div id="about" class="container text-center">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <section class='about-container'>
            <div class="about-content text-center">
              <h2 class="about-heading">COLD ROOM DJ's</h2>
              <h3>Cold Room is group of professionals who are focused on providing DJ services in the Gulf region for most demanding clientele including local and international DJ's.</h3>
            </div>
            <div class="about-img">
              <img src="img/about.jpg" alt="aboutimg" class="img-responsive">
            </div>
          </section>
        </div>
      </div>
    </div>
</section>
<!--END ABOUT SECTION -->
<hr>
<!--START FOOTER SECTION -->
      <footer id="contact" class="container-fluid text-center">
        <div class="row">
          <div class="col-sm-6 mail-content">
            <form action="https://formspree.io/stojkovicmladen97@gmail.com" method="POST">

              <label><span>Your Name</span>
              <input type="text" name="name"></label>

              <label><span>Your Email</span>
              <input type="email" name="_replyto"></label>

              <label><span>Date of event</span>
              <input type="text" name="date"></label>

              <label><span>Location of event</span>
              <input type="text" name="name"></label>

              <label><span>More about your event</span>
              <input type="text" name="name"></label>
              <div class="btn">
                <input type="submit" value="SEND">
              </div>
            </form>
          </div>
            <div class="col-sm-6 logo">
              <h2>Contact Us</h2>
              <a href="https://www.facebook.com/Cold-Room-DJs-558445684516223/" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
                <br>
                <br>
              <div class="logo">
              <img src="img/cold-room-brand2.png" alt="logo" class="img-responsive" >
              </div>
            </div>
          </div>
      </footer>
<!--END FOOTER SECTION -->
</body>
</html>
