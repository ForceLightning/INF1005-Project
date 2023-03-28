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
              <img class="img" src="assets/restaurant_hero.jpg" alt="golf-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Mandai Restaurant</h1>
        </div>
        </header>
        <main class="container container-maxheight">
           <section id="s1">
                <h2>Mandai Restaurant</h2>
                <div class="row">
                    <article class="col-sm">
                        <p class="index-desc"> 
                        Mandai Restaurant at Mandai Golf Country Club is a dining experience like no other. Boasting a welcoming ambiance and stunning views of the golf course, the restaurant serves up an array of delectable dishes that are sure to satisfy any palate. Using only the freshest ingredients, the culinary team has crafted a menu that features a mix of local and international flavors. Guests can indulge in a variety of dishes, including succulent grilled meats, fresh seafood, and vegetarian options. The restaurant also offers an extensive wine list and a selection of refreshing cocktails, perfect for pairing with any meal. Overall, Mandai Restaurant is the perfect spot for a delicious meal with friends and family, or even a romantic dinner for two.
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
                            Monday to Sunday, 10.30 a.m. to 9.00 p.m.<br> <br>
                            Pricing:<br>
                            Children: $30++<br>
                            Adults: $50++<br><br>
                            For reservation: <br>
                            Call: (65)6457 9874 | Email: mandai@cc.com
                        </P>
                    </div>
                    <div class="column">
                    <img class="golf-facility-img" src="assets\golf-booking-img.jpg" alt="golf courses">
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