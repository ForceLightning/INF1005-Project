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
        
        <header class="jumbotron text-center">
            <h1>Events</h1>
        </header>
        <main class="container">
            
            <section id="s1">
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
                        <a href="golfPage.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <img class="events-img" src="assets\pool_party_poster.png" width="100%" alt="Pool Party">
                    </div>
                </div>
                <div class ="row">
                    <div class="column">
                    <img class="events-img" src="assets\happy_hour_poster.png" width="100%" alt="Happy Hour">
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
                        <a href="swimmingPage.php">
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
                        <a href="bowlingPage.php">
                            <button type="button" class="events-button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <img class="events-img" src="assets\zoo_poster.png" width="100%" alt="Zoo">
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