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
        <main class="container">
            <section id="s1">
                <div class="row">
                    <article class="col-sm">
                        <h3>Our Story</h3>
                        <p>
                            Established in 1988, Mandai Country Club was originally a modest club catering to the needs of the local community. 
                            Over the years, the club has grown and evolved into a world-class destination for sports, recreation, and entertainment. 
                            Today, we are proud to be one of the most popular country clubs in Singapore, offering a wide range of facilities and services for members and guests of all ages.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Vision and Mission</h3>
                        <p>
                            Our vision at Mandai Country Club is to be the leading leisure and recreational destination in Singapore, known for our commitment to quality, innovation, and sustainability. We strive to provide our members and guests with a welcoming and inclusive environment, where they can relax, socialize, and pursue their passions. 
                            Our mission is to create memorable experiences for our members and guests, by offering top-quality facilities, activities, and services that cater to their diverse interests and needs. We are committed to delivering exceptional value and customer satisfaction, while promoting environmental stewardship and social responsibility.
                        </p>
                    </article>
                </div>
            </section>
            
            <section id="s2">
                <div class="row">
                    <article class="col-sm">
                        <h3>What we offer?</h3>
                        <p>
                            At Mandai Country Club, we offer a wide range of facilities and services for sports, recreation, and entertainment. 
                            Our club features a championship golf course, tennis and squash courts, swimming pools, gymnasium, and a range of fitness and wellness programs. 
                            We also offer a variety of dining options, from casual cafes to fine-dining restaurants, as well as event spaces for weddings, parties, and corporate events. 
                            At Mandai Country Club, we are committed to providing our members and guests with the best possible experience. 
                            Whether you're here to play golf, or relax by the pool with your friends and family, we invite you to come and experience the Mandai difference for yourself.
                        </p>
                    </article>
                </div>
                <link rel="stylesheet" href="css/main.css>
                <script src="script.js"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

                <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                <!DOCTYPE html>
                <html lang="en">

                    <head>
                        <meta charset="utf-8" />
                        <title>Swiper demo</title>
<!--                        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />-->
                        <!-- Link Swiper's CSS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

                    <body>
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/golf_course.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/golf_course.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/golf_course.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/golf_course.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>

                </div>
             

        </main>
        <?php
            include "includes/footer.inc.php";
        ?>
    </body>
</html>