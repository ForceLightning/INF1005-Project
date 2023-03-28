<!DOCTYPE html>
<html>
    <head>
        <?php include "includes/header.inc.php"; ?>
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
              <img class="img" src="assets/swimming_pool_hero.jpg" alt="golf-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Mandai Swimming Pool</h1>
        </div>
        </header>
        <main class="container container-maxheight container-fluid">
           <section id="s1">
                <h2>Our Pools</h2>
                <div class="row">
                    <article class="col-sm">
                        <p class="index-desc"> 
                        The swimming pool at Mandai Golf Country Club is a top-notch facility that caters to both recreational and competitive swimmers. With crystal clear waters and well-maintained surroundings, the pool provides a refreshing escape from the hustle and bustle of city life. Members can enjoy a variety of activities, including swimming lessons, water aerobics, and lap swimming. The pool area is also equipped with loungers and umbrellas, perfect for lounging and soaking up the sun. Overall, the swimming pool at Mandai Golf Country Club is a must-visit destination for anyone seeking a relaxing and enjoyable swimming experience.                        
                        </p>
                    </article>
                </div>
            </section>
            <section id="s1">
                <div class="row facilities-info-row">
                    <div class="col-sm-6">
                        <h3 class="facilities-heading">Information</h3>
                        <hr>
                        <p class="facilities-desc">
                            Opening Hours:<br>
                            Monday to Sunday, 8.00 a.m. to 6.00 p.m.<br>
                            Last Booking ends at 4.00 p.m.<br> <br>
                            For assistance: <br>
                            Call: (65)6457 9874 | Email: mandai@cc.com
                        </P>
                        <a href="facilities-booking.php">
                            <button type="button" class="facilities-button">Make a Booking</button>
                        </a>
                    </div>
                    <div class="col-sm-6">
                    <img class="img-fluid mt-3" src="assets\swimming.jpg" alt="golf courses">
                    </div>
                </div>
            </section>
            <section id="s2-facilities">
            <h2 class="section-text">Check Out Our Pool Side</h2>
            <div class="swiper mySwiper swiperFacilities">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/swimming-pool-1.jpg" alt="pool_photo1">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/swimming-pool-2.jpg" alt="pool_photo2">
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