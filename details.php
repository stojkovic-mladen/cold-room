<html lang="en">
<head>
  <title>Cold Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
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
          <a href="index.php" class="animated jello navbar-brand"><img src="img/cold-room-brand2.png" alt="" class="img-responsive"></a>
          <a href="https://www.facebook.com/Cold-Room-DJs-558445684516223/" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php#djs">Dj`s</a></li>
            <li><a href="index.php#equipment">Equipment</a></li>
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
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

          <?php
            if(isset($_GET['profile'])) {

                include('includes/database.php');

                $run_profiles = mysqli_query($con, "SELECT * FROM profiles");
                while($row_profiles = mysqli_fetch_array($run_profiles)) {

                    $profile_id = $row_profiles['profile_id'];
                    $profile_name = $row_profiles['profile_name'];
                    $profile_img = $row_profiles['profile_img'];
                    $img1 = $row_profiles['img1'];
                    $img2 = $row_profiles['img2'];
                    $img3 = $row_profiles['img3'];
                    $img4 = $row_profiles['img4'];
                    $text1 = $row_profiles['text1'];
                    $text2 = $row_profiles['text2'];
                    $text3 = $row_profiles['text3'];
                    $text4 = $row_profiles['text4'];

                }

            }

            echo "


                    <div class='item active peopleCarouselImg'>
                      <img src='imgClients/$img1' alt='dj1' class='img-responsive'>
                      <div class='carousel-caption'>
                        <p class='animated fadeInDownBig'><strong>$text1</strong></p>
                        <br>
                      </div>
                    </div>
                    <div class='item peopleCarouselImg'>
                      <img src='imgClients/$img2' alt='dj2' class='img-responsive'>
                      <div class='carousel-caption'>
                        <p class='animated fadeInDownBig'><strong>$text2</strong></p>
                        <br>
                      </div>
                    </div>
                    <div class='item peopleCarouselImg'>
                      <img src='imgClients/$img3' alt='dj equipment' class='img-responsive'>
                      <div class='carousel-caption'>
                        <p class='animated animated fadeInDownBig'><strong>$text3</strong></p>
                        <br>
                      </div>
                    </div>
                    <div class='item peopleCarouselImg'>
                      <img src='imgClients/$img4' alt='dj equipment' class='img-responsive'>
                      <div class='carousel-caption'>
                        <p class='animated animated fadeInDownBig'><strong>$text4</strong></p>
                        <br>
                      </div>
                    </div>

            ";
          ?>

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
<hr>
<!--START FOOTER SECTION -->
<footer id="contact" class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-6 mail-content">
      <form action="https://formspree.io/stojkovicmladen97@gmail.com" method="POST">
        <h3>Hire Me For Your Event</h3>
        <br>
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
