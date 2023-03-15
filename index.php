<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <title>Mandai Country Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include "nav.inc.php";
    ?>

    <header>
        <div class = "hero-image">
              <img src="assets/country_club_home.jpg" alt="home-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Mandai Community Club</h1>
            <h2 class="hero-subheader">People come here to have fun</h2>
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
        <section id="s3">
            <h2 class="section-text">Facilities</h2>
                <div class="facilities-container">
                    <div class="column-home">
                        <div class="overlay">
                        <h2 class="facilities-text-home">Swimming Pool</h2>
                        </div>
                        <img src="assets/swimming_pool.jpg" alt="swimming-pool-img"/>
                    </div>
                    
                </div>
                </article>
            </div>
        </section>
    </main>
    <?php
    include "footer.inc.php";
    ?>
</body>

</html>