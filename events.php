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
        <!-- TODO: Comment this out after writing main.js -->
        <!-- <script defer src="js/main.js"></script> -->
        <title>Events</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php 
            include "includes/nav.inc.php";
        ?>
<!--        <header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
         Indicators 
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
            <li data-target="#myCarousel" data-slide-to="1" aria-label="Slide 2"></li>
            <li data-target="#myCarousel" data-slide-to="2" aria-label="Slide 3"></li>
        </ol>
         Wrapper for slides 
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/country_club_home.jpg" alt="home-page-img" />
                <div class="hero-text">
                    <h1 class="hero-header">Events</h1>
                    <h2 class="hero-subheader">Mandai Country Club</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/golf_course.jpg" alt="second-slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/bowling_alley.jpg" alt="third-slide" />
            </div>
        </div>
         Left and right controls 
        <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
        <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
    </div>
</header>-->

        <main class="container">
            
            <section id="events-s1">
                <div class="row">
                    <div class="column">
                        <h3 class="events-heading">Pool Party</h3>
                        <p class="events-desc">
                        Join us for a splashing good time at our annual Pool Party at Mandai Country Club! 
                        Get ready to soak up the sun and enjoy a day of swimming, food, drinks, and entertainment with DJ Drew Feig.
                        Our beautifully landscaped pool area will be transformed into a summer oasis, complete with fun inflatables and games for all ages. 
                        You can relax on our luxurious poolside loungers, take a dip in our sparkling pool, or enjoy a refreshing drink from our Mandai Restaurant.
                        Don't forget to bring your sunscreen, towels, and swimsuits! 
                        This is an event you won't want to miss, so mark your calendars and join us for a fun-filled day by the pool.
                        </P>
                        <a href="SwimmingPage.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <a target="_blank" href="assets\pool_party_poster.png">
                    <img class="events-img" src="assets\pool_party_poster.png" width="100%" alt="Pool Party">
                    </a>
                    </div>
                </div>
                
                <div class ="row">
                    <div class="column">
                    <a target="_blank" href="assets\happy_hour_poster.png">
                    <img class="events-img" src="assets\happy_hour_poster.png" width="100%" alt="Happy Hour">
                    </a>
                    </div>
                    <div class="column">
                        <h3 class="events-heading">Happy Hour</h3>
                        <p class="events-desc">
                        Join us for a fun-filled Happy Hour at our Mandai country club Restaurant that is awarded 5 stars rating for its service! 
                        Relax and unwind with your friends and colleagues while enjoying discounted drinks and delicious appetizers. 
                        Whether you're winding down after a long day at work or looking for a fun night out, our Happy Hour has something for everyone.
                        The Happy Hour event will take place from 5 pm to 8 pm every Fridays, and we guarantee that you won't want to miss it. So, gather your friends and come on down to the country club for a night of fun, laughter, and great company. 
                        We can't wait to see you there!
                        </p>
                        <a href="restaurantPage.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                </div>
                
                <div class ="row">
                    <div class="column">
                        <h3 class="events-heading">Family Day at the Zoo</h3>
                        <p class="events-desc">
                        Join us for a family day at the Zoo, brought to you by Mandai Country Club! 
                        We've teamed up with the Mandai Zoo to provide a fun-filled day for members and their families.
                        We'll be offering a free shuttle service to and from the zoo. This means you can sit back, relax, and enjoy the ride to the Mandai Zoo without worrying about traffic or parking.
                        This is a great opportunity to spend quality time with your family and create memories that will last a lifetime. 
                        So don't miss out on this special event – register today and get ready for a wild adventure at the Mandai Zoo!
                        </p>
                        <a href="index.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <a target="_blank" href="assets\zoo_poster.png">
                    <img class="events-img" src="assets\zoo_poster.png" width="100%" alt="Zoo">
                    </a>
                    </div>
                </div>
                
               <div class ="row">
                    <div class="column">
                    <a target="_blank" href="assets\bowling_night_poster.png">
                    <img class="events-img" src="assets\bowling_night_poster.png" width="100%" alt="Happy Hour">
                    </a>
                    </div>
                    <div class="column">
                        <h3 class="events-heading">Bowling Night</h3>
                        <p class="events-desc">
                        We are excited to announce our upcoming event at Mandai Country Club: Bowling Night! Get ready for an evening of friendly competition, good food, and great company.
                        Join us at our Mandai bowling alley where you can show off your skills and enjoy a fun-filled night with family and friends. 
                        Whether you're a seasoned pro or new to the game, there's no better way to spend your evening than bowling with Mandai Country Club.
                        Our bowling alley features the latest technology and is equipped with everything you need to have a great time. 
                        Plus, we'll have delicious food and drinks available to keep you fueled and energized throughout the night.
                        Don't miss out on this exciting event! Make sure to register early to secure your spot. 
                        We can't wait to see you at Mandai Country Club's Bowling Night!
                        </p>
                        <a href="BowlingPage.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                </div>
                
                <div class ="row">
                    <div class="column">
                        <h3 class="events-heading">Hari Raya Bazaar</h3>
                        <p class="events-desc">
                        Welcome to Mandai Country Club's very first Hari Raya event - the Hari Raya Bazaar! 
                        As the holy month of Ramadan draws to a close, we invite Muslims and non-Muslims alike to join us in breaking fast together in the spirit of harmony and unity.
                        Our bazaar will be a lively and festive affair, featuring a wide range of mouth-watering halal delicacies from all over the world. 
                        Come and savour traditional Malay favourites such as ketupat, rendang, and sambal goreng, or treat yourself to a variety of international delights including Turkish kebabs, and Middle Eastern falafel.
                        In addition to the delectable food on offer, we have also lined up a variety of exciting activities and entertainment for the whole family. From traditional Malay dance performances to live music and cultural workshops, there's something for everyone to enjoy.
                        So why not gather your family and friends and come down to Mandai Country Club to celebrate this joyous occasion together? 
                        Our Hari Raya Bazaar promises to be a memorable event that you won't want to miss. 
                        See you there!
                        </p>
                        <a href="index.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <a target="_blank" href="assets\hari_raya_poster.png">
                    <img class="events-img" src="assets\hari_raya_poster.png" width="100%" alt="Zoo">
                    </a>
                    </div>
                </div>
                
            </section>
            
            
                <br>
            
        </main>
        <?php
            include "includes/footer.inc.php";
        ?>
        
    </body>
</html>