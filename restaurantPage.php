<!DOCTYPE html>
<html lang="en">

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
            <img class="img" src="assets/restaurant_hero.jpg" alt="golf-page-img" />
        </div>
        <div class="hero-text">
            <h1 class="hero-header">Mandai Restaurant</h1>
        </div>
    </header>
    <main class="container container-maxheight">
        <h2>Mandai Restaurant</h2>
        <div class="row">
            <article class="col-sm">
                <p class="index-desc">
                    Mandai Restaurant at Mandai Golf Country Club is a dining experience like no other. Boasting a
                    welcoming ambiance and stunning views of the golf course, the restaurant serves up an array of
                    delectable dishes that are sure to satisfy any palate. Using only the freshest ingredients, the
                    culinary team has crafted a menu that features a mix of local and international flavors. Guests
                    can indulge in a variety of dishes, including succulent grilled meats, fresh seafood, and
                    vegetarian options. The restaurant also offers an extensive wine list and a selection of
                    refreshing cocktails, perfect for pairing with any meal. Overall, Mandai Restaurant is the
                    perfect spot for a delicious meal with friends and family, or even a romantic dinner for two.
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
                    Monday to Friday, 8.00 a.m. to 6.00 p.m.<br> <br>
                    Pricing:<br>
                    Children: $30++<br>
                    Adults: $50++<br><br>
                    For reservation: <br>
                    Call: (65)6457 9874 | Email: mandai@cc.com
                </P>
            </div>
            <div class="column">
                <img class="golf-facility-img" src="assets\restaurant1.jpg" alt="golf courses">
            </div>
        </div>
    </section>
    <section id="s2-facilities">
        <h2 class="section-text">Check Out Our Menu Items</h2>
        <div class="swiper mySwiper swiperFacilities">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/food-1.jpg" alt="promo_photo1">
                </div>
                <div class="swiper-slide">
                    <img src="assets/food-2.jpg" alt="promo_photo1">
                </div>
                <div class="swiper-slide">
                    <img src="assets/food-3.jpg" alt="promo_photo1">
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