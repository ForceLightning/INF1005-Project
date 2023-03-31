<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Golf Course</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include "includes/nav.inc.php";
    ?>

    <header>
        <div class="hero-image">
            <img class="img" src="assets/bowling_alley_hero.jpg" alt="golf-page-img" />
        </div>
        <div class="hero-text">
            <h1 class="hero-header">Mandai Bowling Alley</h1>
        </div>
    </header>
    <main class="container container-maxheight container-fluid">
        <h2>Our Bowling Alley</h2>
        <div class="row">
            <article class="col-sm">
                <p class="index-desc">
                    Mandai Golf Country Club boasts a world-class bowling alley that offers members and guests a
                    unique and enjoyable experience. The alley features state-of-the-art lanes and equipment, as
                    well as a comfortable and stylish lounge area for socializing and relaxing. Whether you are a
                    seasoned bowler or a novice, the club's bowling alley provides a fun and exciting activity for
                    individuals and groups alike. In addition, the club hosts regular bowling tournaments and
                    events, creating a vibrant and engaging community for enthusiasts of the sport. With its
                    exceptional facilities and welcoming atmosphere, Mandai Golf Country Club is the perfect
                    destination for anyone looking to enjoy a game of bowling in style.
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
                    Monday to Friday, 8.00 a.m. to 6.00 p.m.<br>
                    Last Booking ends at 4.00 p.m.<br> <br>
                    For assistance: <br>
                    Call: (65)6457 9874 | Email: mandai@cc.com
                </P>
                <a href="facilities-booking.php">
                    <button type="button" class="facilities-button">Make a Booking</button>
                </a>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid mt-3" src="assets\bowling1_edit.jpg" alt="golf courses">
            </div>
        </div>
    </section>
    <section id="s2-facilities">
        <h2 class="section-text">Check Out Our Bowling Alley</h2>
        <div class="swiper mySwiper swiperFacilities">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="img-fluid" src="assets\bowling2.jpg" alt="pool_photo1">
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" src="assets\bowling3.jpg" alt="pool_photo2">
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" src="assets\bowling4.jpg" alt="pool_photo2">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

    </section>
</main>
</body>
<?php include "includes/footer.inc.php"; ?>
</html>