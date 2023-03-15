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
        <script defer src="js/main.js"></script>
        <title>Facilities</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
            include "nav.inc.php";
        ?>
        
        <header class="jumbotron text-center">
            <h1>Facilities</h1>
        </header>
        <main class="container">
            <section id="s2">
<!--                <div class="row">
                    <article class="col-sm">
                        <h3>What we offer?</h3>
                        <p>At Mandai CC, we believe that community is everything. That is why we offer a wide variety of programs and services designed to bring people together and foster a strong sense of belonging. Whether you are interested in sports, the arts, or simply meeting new people, you will definitely find something to love at our CC.</p>
                    </article>
                </div>-->
                <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
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

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
		</section>
            
            <section id="s1">
                <div class="row">
                    <div class="column">
                        <h3>Golf Course</h3>
                        <p class="facilities-desc">Mandai Country Club provides gold enthusiast with the best golf courses accompanied by a beautiful scenery for your enjoyment. </P>
                        <a href="golfPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <img class="facilities-img" src="https://via.placeholder.com/350x200.png?text=Facilities" alt="Facilities">
                    </div>
                </div>
                <div class ="row">
                    <div class="column">
                        <h3>Swimming Pool</h3>
                        <p class="facilities-desc">Wanna cool down on a hot day? Mandai Country Club provides one of the best pool facilities in the neighbourhood!</p>
                        <a href="swimmingPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <img class="facilities-img" src="https://via.placeholder.com/350x200.png?text=Facilities" alt="Facilities">
                    </div>
                </div>
                <div class ="row">
                    <div class="column">
                        <h3>Bowling Center</h3>
                        <p class="facilities-desc">Have a fun family bonding at our bowling alley! </p>
                        <a href="bowlingPage.php">
                            <button type="button">Find Out More</button>
                        </a>
                    </div>
                    <div class="column">
                    <img class="facilities-img" src="https://via.placeholder.com/350x200.png?text=Facilities" alt="Facilities">
                    </div>
                </div>
            </section>
            
            
                <br>
            
        </main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>