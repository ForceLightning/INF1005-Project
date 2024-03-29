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
            <img class="img" src="assets/golf_hero.jpg" alt="golf-page-img" />
        </div>
        <div class="hero-text">
            <h1 class="hero-header">Mandai Golf Course</h1>
        </div>
    </header>
    <main class="container container-maxheight">
        <div class="row">
            <article class="col-sm">
                <h2>Our Golf Courses</h2>
                <p class="index-desc">
                    Mandai Golf Country Club offers a range of courses designed to improve the golfing skills of
                    players of all levels. The courses are led by experienced instructors and cover various aspects
                    of the game, including putting, chipping, and driving. The club's facilities are world-class and
                    include a driving range, practice greens, and a well-maintained course. Whether you are a
                    beginner or an experienced player, the courses at Mandai Golf Country Club provide an excellent
                    opportunity to enhance your golfing abilities and enjoy the sport in a beautiful setting.
                </p>
            </article>
        </div>
        <div id="s1">
            <div class="row facilities-info-row">
                <div class="col-sm-6">
                    <h3 class="facilities-heading">Information</h3>
                    <hr>
                    <P class="facilities-desc">
                        Opening Hours:<br>
                        Monday to Friday, 8.00 a.m. to 6.00 p.m.<br>
                        Last Booking ends at 4.00 p.m.<br> <br>
                        For assistance: <br>
                        Call: (65)6457 9874 | Email: mandai@cc.com
                    </P>
                    <button type="button" onclick="location.href='/facility_booking.php'" class="facilities-button">Make
                        a Booking</button>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid mt-3" src="assets/golf-booking-img.jpg" alt="golf courses">
                </div>
            </div>
        </div>
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
            </div>
        </section>
        <?php include_once "includes/topButton.inc.php"; ?>
    </main>
    <?php include "includes/footer.inc.php"; ?>
</body>

</html>