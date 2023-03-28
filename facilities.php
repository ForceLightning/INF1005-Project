<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- swiper js cdn link -->
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
        <script defer src="js/main.js"></script>
        <title>Facilities</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100"></body>
    <?php
    include "includes/nav.inc.php";
    ?>

    <header>
        <div class="hero-image">
            <img class="img-fluid" src="assets/facilities_hero_golf.jpg" alt="home-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Facilities</h1>
        </div>
    </header>

    <main class="container container-maxheight">
<!--        <section id="s2">
             Slideshow container 
            <div class="slideshow-container">

                 Full-width images with number and caption text 
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://via.placeholder.com/650x250.png?text=Facilities" alt="Facilities" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://via.placeholder.com/650x250.png?text=Facilities" alt="Facilities" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="https://via.placeholder.com/650x250.png?text=Facilities" alt="Facilities" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                 Next and previous buttons 
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

             The dots/circles 
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>-->
        
        <main class="container container-maxheight">
            <section id="s1">
                <h2>WORLD'S CLASS FACILITIES AT MANDAI COUNTRY CLUB</h2>
                <div class="row">
                    <article class="col-sm">
                        <p class="index-desc">Mandai Country's Club cater to a diverse range of interests, including a pristine golf course suitable for golfers of all levels, state-of-the-art bowling alleys, a luxurious swimming pool, and world-class dining options. The staff is highly professional and dedicated to meeting the needs of visitors, providing a memorable experience that includes everything from booking tee times to dinner reservations.</p>
                        <p class="index-desc">The club is committed to being the premier destination for leisure and entertainment, confident that visitors will return time and again for its exceptional facilities and services.</p>
        <!-- facilities -->
         <section class = "facilitiesmain sec-width" id = "rooms">
            <div class = "facilitiesmain-container">
                <!-- single room -->
                <article class = "facility">
                    <div class = "facility-image">
                        <img src = "assets/golf_course.jpg" alt = "facility image">
                    </div>
                    <div class = "facility-text">
                        <h3>Golf Course</h3>
                        <p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Competitions
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Pet Friendly
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Wide Range of Golf Courses
                            </p>
                        </p>
                        <p>
                        <p>For golf enthusiasts seeking a top-quality golfing experience, Mandai Country Club is the ultimate destination. Nestled in a peaceful setting surrounded by scenic landscapes, the club offers challenging courses suitable for players of all skill levels. With its state-of-the-art facilities, expert coaching, and regular events and tournaments, Mandai Country Club is the perfect place to improve your game and meet like-minded golfers. </p>
                        <p>Whether you're a seasoned pro or just starting out, the club's serene atmosphere and top-notch amenities make it an unforgettable destination for golfers looking for an exceptional golfing experience.</p>
                        <a href="golfPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "facility">
                    <div class = "facility-image">
                        <img src = "assets/swimming_pool.jpg" alt = "facility image">
                    </div>
                    <div class = "facility-text">
                        <h3>Swimming Pool</h3>
                        <p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Sun Deck
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Poolside Bar
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Water Slides
                            </p>
                        </p>
                        <p>If you're looking for a refreshing way to escape the heat, Mandai Country Club has got you covered with one of the best pool facilities in the neighborhood. The club's beautifully landscaped pool area offers a serene oasis for members to relax and recharge. Whether you're looking to swim laps, lounge on a deck chair, or soak up the sun, the pool area provides the perfect setting.</p>
                        <p>With its tranquil atmosphere, top-notch facilities, and attentive staff, Mandai Country Club is the ultimate destination for anyone looking to beat the heat and enjoy a day of relaxation.</p>
                        <a href="swimmingPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "facility">
                    <div class = "facility-image">
                        <img src = "assets/bowling_alley.jpg" alt = "facility image">
                    </div>
                    <div class = "facility-text">
                        <h3>Bowling Alley</h3>
                        <p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Nightly Events
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Cosmic Bowling
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Arcade Games
                            </p>
                        </p>
                        <p>
                        <p>Located within the beautiful grounds of Mandai Country Club, the bowling alley is a popular spot for both casual and competitive bowlers. With state-of-the-art facilities and a friendly atmosphere, the club's bowling alley offers a fun and exciting experience for bowlers of all skill levels. Whether you're looking to join a league or just play a few games with friends, the alley is the perfect place to hone your skills and enjoy a fun night out. </p>
                        <p>With affordable rates, great amenities, and excellent service, Mandai Country Club's bowling alley is a must-visit for anyone looking for a great bowling experience.</p>
                        <a href="bowlingPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "facility">
                    <div class = "facility-image">
                        <img src = "assets/restaurant.jpg" alt = "facility image">
                    </div>
                    <div class = "facility-text">
                        <h3>Restaurant</h3>
                        <p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Live Music
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Cocktail Bar
                            </p>
                            <p>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Private Rooms
                            </p>
                        </p>
                        <p>Mandai Country Club's restaurant is a culinary gem, serving up an array of delectable dishes in a charming and welcoming setting. With a focus on quality ingredients and innovative cooking techniques, the restaurant offers a diverse menu that caters to a wide range of tastes and preferences. Whether you're in the mood for a hearty steak, fresh seafood, or a flavorful vegetarian dish, you'll find something to satisfy your cravings. </p>
                        <p>The restaurant's warm and inviting atmosphere, attentive service, and impressive wine list make it the perfect place to celebrate a special occasion or enjoy a relaxing meal with friends and family.</p>
                        <a href="restaurantPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                </article>
                <!-- end of single room -->
                
            </div>
        </section>
  
                

                <!-- gallery -->
                <section class="gallery" id="gallery">

                    <h1 class="heading">our gallery</h1>

                    <div class="swiper gallery-slider">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_food.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_flower.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_wine.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_pool.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_golf.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_couple.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_swimmingpool.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                            <div class="swiper-slide slide">
                                <img src="assets/galleryimg_girl.jpg" alt="">
                                <div class="icon">
                                    <i class="fas fa-magnifying-glass-plus"></i>
                                </div>
                            </div>

                        </div>

                    </div>

                </section>
                </div>
            </section>


            <br>

            </main>
            <?php
            include "includes/footer.inc.php";
            ?>
            </body>
            </html>