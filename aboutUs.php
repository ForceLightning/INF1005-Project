<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap" rel="stylesheet">
        <!-- JQuery JS -->
        <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <script defer src="js/main.js"></script>
        <!-- Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-DmZQ/+gZ+PxmjJqnBU+WmC9yD9XoGJfBTP1lg+J1PX2B0th+ak53M0Hh7EIoehkD"
        crossorigin="anonymous">
        </script>
        <title>About Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body class="d-flex flex-column min-vh-100">
    <?php 
        include "nav.inc.php";
    ?>

<header id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="assets/country_club_home.jpg" alt="home-page-img"/>
      <div class ="hero-text">
        <h1 class="hero-header">About Us</h1>
        <h2 class="hero-subheader">Mandai Country Club</h2>
      </div> 
    </div>

    <div class="carousel-item">
      <img class="img-fluid" src="assets/golf_course.jpg" alt="second-slide">
    </div>

    <div class="carousel-item">
      <img class="img-fluid" src="assets/bowling_alley.jpg" alt="third-slide">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</header>

<main class="container">
    <section id="s1">
        <div class="row">
            <article class="col-sm">
                <h2>The heritage of Mandai Country Club</h2>
                <p class="index-desc">
                    Established in 1988, Mandai Country Club was originally a modest club catering to the needs of the local community. 
                    Over the years, the club has grown and evolved into a world-class destination for sports, recreation, and entertainment. 
                    Today, we are proud to be one of the most popular country clubs in Singapore, offering a wide range of facilities and services for members and guests of all ages.
                </p>                 
            </article>
    </section>

    <div class="row">
    <div class="gallery">
        <img src="assets\heritage.jpg" alt="1969" width="600" height="400">
        <div class="desc">1969</div>
    </div>

    <div class="gallery">
        <img src="assets\heritage2.png" alt="1985" width="600" height="400">
        <div class="desc">1985</div>
    </div>

    <div class="gallery">
        <img src="assets\heritage3.png" alt="1985" width="600" height="400">
        <div class="desc">1999</div>
    </div>

    <div class="gallery">
        <img src="assets\heritage4.png" alt="2023" width="600" height="400">
        <div class="desc">Today</div>
    </div>
    </div>


    <section id="s2">
    <h2 class="section-text">Vision and Mission</h2>       
        <p class="index-desc">
            Our vision at Mandai Country Club is to be the leading leisure and recreational destination in Singapore, known for our commitment to quality, innovation, and sustainability. We strive to provide our members and guests with a welcoming and inclusive environment, where they can relax, socialize, and pursue their passions. 
            Our mission is to create memorable experiences for our members and guests, by offering top-quality facilities, activities, and services that cater to their diverse interests and needs. We are committed to delivering exceptional value and customer satisfaction, while promoting environmental stewardship and social responsibility.
        </p>
    </section>

    <section id="s3">
    <h2 class="section-text">Awards and Accolades</h2>     
    <div class="row justify-content-center mt-2 pb-2" class="award-align">
    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award.jpg" alt="travel agent award" style="width:100%">
      <div class="container">
      <p>2023</p>
      </div>
    </div>
    </div>

    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award4.png" alt="mandai restaurant award" style="width:100%">
      <div class="container">
      <p>2021</p>
      </div>
    </div>
    </div>
    </div>

    <div class="row justify-content-center mt-2 pb-2" class="award-align">
    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award3.png" alt="golf course award" style="width:100%">
      <div class="container">
      <p>2012</p>
      </div>
    </div>
    </div>

    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award2.png" alt="asia's best architecture" style="width:100%">
      <div class="container">
      <p>1999</p>
      </div>
    </div>
    </div>
    </div>
    </section>
</main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>