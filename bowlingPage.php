<!DOCTYPE html>
<html>
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
              <img class="img" src="assets/bowling_alley_hero.jpg" alt="golf-page-img"/>
        </div>
        <div class ="hero-text">
            <h1 class="hero-header">Mandai Bowling Alley</h1>
        </div>
        </header>
        <main class="container">
            <section id="s1">
                <div class="row">
                    <article class="col-sm">
                        <h3>Our Story</h3>
                        <p>
                            Established in 1988, Mandai Country Club was originally a modest club catering to the needs of the local community. 
                            Over the years, the club has grown and evolved into a world-class destination for sports, recreation, and entertainment. 
                            Today, we are proud to be one of the most popular country clubs in Singapore, offering a wide range of facilities and services for members and guests of all ages.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Vision and Mission</h3>
                        <p>
                            Our vision at Mandai Country Club is to be the leading leisure and recreational destination in Singapore, known for our commitment to quality, innovation, and sustainability. We strive to provide our members and guests with a welcoming and inclusive environment, where they can relax, socialize, and pursue their passions. 
                            Our mission is to create memorable experiences for our members and guests, by offering top-quality facilities, activities, and services that cater to their diverse interests and needs. We are committed to delivering exceptional value and customer satisfaction, while promoting environmental stewardship and social responsibility.
                        </p>
                    </article>
                </div>
            </section>
            
            <section id="s2">
                <div class="row">
                    <article class="col-sm">
                        <h3>What we offer?</h3>
                        <p>
                            At Mandai Country Club, we offer a wide range of facilities and services for sports, recreation, and entertainment. 
                            Our club features a championship golf course, tennis and squash courts, swimming pools, gymnasium, and a range of fitness and wellness programs. 
                            We also offer a variety of dining options, from casual cafes to fine-dining restaurants, as well as event spaces for weddings, parties, and corporate events. 
                            At Mandai Country Club, we are committed to providing our members and guests with the best possible experience. 
                            Whether you're here to play golf, or relax by the pool with your friends and family, we invite you to come and experience the Mandai difference for yourself.
                        </p>
                    </article>
                </div>
            </section>
            
            <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
                <img src="https://via.placeholder.com/650x250.png?text=Facilities" alt="Facilities" style="width:100%">
            <div class="text">Facilities</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
                <img src="https://via.placeholder.com/650x250.png?text=Facilities" alt="Events" style="width:100%">
            <div class="text">Events</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
                <img src="https://via.placeholder.com/650x250.png?text=Facilities" alt="Facilities" style="width:100%">
            <div class="text">Facilities</div>
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
            
           
        </main>
        <?php
            include "includes/footer.inc.php";
        ?>
    </body>
</html>