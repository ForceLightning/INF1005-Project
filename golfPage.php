<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>        
        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap" rel="stylesheet">
        <!-- JQuery JS -->
        <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <!-- TODO: Comment this out after writing main.js -->
        <!-- <script defer src="js/main.js"></script> -->
        <script defer src="js/main.js"></script>
        <title>Golf Course</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php 
            include "includes/nav.inc.php";
        ?>
        
        <header>
            <div class="hero-image">
              <img class="img" src="assets/golf_hero.jpg" alt="golf-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Mandai Golf Course</h1>
        </div>
        </header>
        <main class="container container-maxheight">
           <section id="s1">
                <h2>Our Golf Courses</h2>
                <div class="row">
                    <article class="col-sm">
                        <p class="index-desc"> 
                            Mandai Golf Country Club offers a range of courses designed to improve the golfing skills of players of all levels. The courses are led by experienced instructors and cover various aspects of the game, including putting, chipping, and driving. The club's facilities are world-class and include a driving range, practice greens, and a well-maintained course. Whether you are a beginner or an experienced player, the courses at Mandai Golf Country Club provide an excellent opportunity to enhance your golfing abilities and enjoy the sport in a beautiful setting.
                        </p>
                    </article>
                </div>
            </section>
            <section id="s1">
                <div class="row facilities-info-row">
                    <div class="column">
                        <h3 class="facilities-heading">Information</h3>
                        <hr>
                        <p class="facilities-desc">
                            Opening Hours:<br>
                            Monday to Sunday, 8.00 a.m. to 6.00 p.m.<br>
                            Last Booking ends at 4.00 p.m.<br> <br>
                            Pricing:<br>
                            Weekdays: $40/hr<br>
                            Weekends: $50/hr<br><br>
                            For assistance: <br>
                            Call: (65)6457 9874 | Email: mandai@cc.com
                        </P>
                        <a href="facilities-booking.php">
                            <button type="button" class="facilities-button">Make a Booking</button>
                        </a>
                    </div>
                    <div class="column">
                    <img class="golf-facility-img" src="assets\golf-booking-img.jpg" alt="golf courses">
                    </div>
                </div>
            </section>
            <section id="s2-facilities">
            <h2 class="section-text">Check Out Our Golf Courses</h2>
            <div class="swiper mySwiper swiperFacilities">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/golf-course-1.jpg" alt="promo_photo1">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/golf-course-2.jpg" alt="promo_photo1">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/golf-course-3.jpg" alt="promo_photo1">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             
            </section>
        </main>
        <?php
            include "includes/footer.inc.php";
        ?>
    </body>
</html>