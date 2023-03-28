<!DOCTYPE html>
<html>

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Mandai Country Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include "includes/nav.inc.php";
    ?>

    <header>
        <div class="hero-image">
              <img class="img img-fluid" src="assets/country_club_home.jpg" alt="home-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Mandai Country Club</h1>
        </div>
    </header>
    <main class="container container-maxheight">
        <section id="s1">
            <h2>History of Mandai Country Club</h2>
            <div class="row">
                <article class="col-sm">
                    <p class="index-desc">Mandai Country Club is a sprawling oasis nestled in the heart of a bustling city. Its verdant greenery and tranquil surroundings make it an ideal place for business retreats, corporate events, and even private functions. With state-of-the-art facilities and impeccable service, the club boasts an impressive array of amenities, including a championship golf course, swimming pools, tennis courts, and fine dining restaurants. Whether you're looking to unwind after a long day at work or seeking a venue for your next big event, Mandai Country Club is the perfect choice for those who demand nothing but the best.</p>
                </article>
            </div>
        </section>
        
        <section id="s2">
            <h2 class="section-text">Our Offers</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/promo_photo1.jpg" alt="promo_photo1">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/promo_photo2.jpg" alt="promo_photo1">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/promo_photo3.jpg" alt="promo_photo1">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section id="s3">
            <h2 class="section-text facilities">Facilities</h2>
                <div class="row facilities-container">
                    <div class="column-home">
                        <div class="overlay">
                        <h2 class="facilities-text-home">Swimming Pool</h2>
                        <a class="home-findout-button" href="swimmingPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                        </div>
                        <img src="assets/swimming_pool.jpg" alt="swimming-pool-img" class="img"/>
                    </div>
                    <div class="column-home">
                        <div class="overlay">
                        <h2 class="facilities-text-home">Golf Course</h2>
                        <a class="home-findout-button" href="golfPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                        </div>
                        <img src="assets/golf_course.jpg" alt="golf-course-img" class="img"/>
                    </div>
                </div>
                <div class="row facilities-container mt-2 pb-2">
                    <div class="column-home">
                        <div class="overlay">
                        <h2 class="facilities-text-home">Bowling Alley</h2>
                        <a class="home-findout-button" href="bowlingPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                        </div>
                        <img src="assets/bowling_alley.jpg" alt="bowling_alley-img" class="img"/>
                    </div>   
                    <div class="column-home">
                        <div class="overlay">
                        <h2 class="facilities-text-home">Restaurant</h2>
                        <a class="home-findout-button" href="restaurantPage.php">
                            <button class="button-top" type="button">Find Out More</button>
                        </a>
                        </div>
                        <img src="assets/restaurant.jpg" alt="restaurant-img" class="img"/>
                    </div>
                </div>
        </section>
    </main>
        <button onclick="topFunction()" id="scroll-button" title="Go to top">Top</button>

    <?php
    include "includes/footer.inc.php";
    ?>
</body>

</html>