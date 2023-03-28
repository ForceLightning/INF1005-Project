<!DOCTYPE html>
<html>
    <head>
        <?php include "includes/header.inc.php"; ?>
        <title>About Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style type="text/css">
            #map {
                    height: 400px;
                    width: 100%;
		}
	</style>
    </head>
<body class="d-flex flex-column min-vh-100" onload="initMap()">
    <?php 
        include "includes/nav.inc.php";
    ?>

<header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
            <li data-target="#myCarousel" data-slide-to="1" aria-label="Slide 2"></li>
            <li data-target="#myCarousel" data-slide-to="2" aria-label="Slide 3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/country_club_home.jpg" alt="home-page-img" />
                <div class="hero-text">
                    <h1 class="hero-header">About Us</h1>
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
        <!-- Left and right controls -->
        <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
        <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
    </div>
</header>

<main class="container container-maxheight">
    <section id="s1">
        <div class="row">
            <article class="col-sm">
                <h2>The heritage of Mandai Country Club</h2>
                <p class="index-desc">
                    Established in 1988, Mandai Country Club was originally a modest club catering to the needs of the local community. 
                    Over the years, the club has grown and evolved into a world-class destination for sports, recreation, and entertainment. 
                    Today, we are proud to be one of the most popular country clubs in Singapore, offering a wide range of facilities and services for members and guests of all ages.
                </p>                 
            </article>
    </section>

    <div class="row">
    <div class="gallery">
        <img src="assets\heritage.jpg" alt="1969" width="600" height="400">
        <div class="desc">1969</div>
    </div>

    <div class="gallery">
        <img src="assets\heritage2.png" alt="1985" width="600" height="400">
        <div class="desc">1985</div>
    </div>

    <div class="gallery">
        <img src="assets\heritage3.png" alt="1985" width="600" height="400">
        <div class="desc">1999</div>
    </div>

    <div class="gallery">
        <img src="assets\heritage4.png" alt="2023" width="600" height="400">
        <div class="desc">Today</div>
    </div>
    </div>


    <section id="s2">
    <h2 class="section-text">Vision and Mission</h2>       
        <p class="index-desc">
            Our vision at Mandai Country Club is to be the leading leisure and recreational destination in Singapore, known for our commitment to quality, innovation, and sustainability. We strive to provide our members and guests with a welcoming and inclusive environment, where they can relax, socialize, and pursue their passions. 
            Our mission is to create memorable experiences for our members and guests, by offering top-quality facilities, activities, and services that cater to their diverse interests and needs. We are committed to delivering exceptional value and customer satisfaction, while promoting environmental stewardship and social responsibility.
        </p>
    </section>

    
    
    <section id="s3">
    <h2 class="section-text">Awards and Accolades</h2>     
    <div class="row justify-content-center mt-2 pb-2">
    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award.jpg" alt="travel agent award" style="width:100%">
      <div class="container">
      <p>2023</p>
      </div>
    </div>
    </div>

    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award4.png" alt="mandai restaurant award" style="width:100%">
      <div class="container">
      <p>2021</p>
      </div>
    </div>
    </div>
    </div>

    <div class="row justify-content-center mt-2 pb-2">
    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award3.png" alt="golf course award" style="width:100%">
      <div class="container">
      <p>2012</p>
      </div>
    </div>
    </div>

    <div class="col-4">
    <div class="polaroid">
      <img src="assets\award2.png" alt="asia's best architecture" style="width:100%">
      <div class="container">
      <p>1999</p>
      </div>
    </div>
    </div>
    </div>
    </section>
    
    
<!--     <section id="s3">
            <h2 class="section-text facilities">Awards & Accolades</h2>
                <div class="row facilities-container">
                    <div class="column-home">
                        <img src="assets/award.jpg" alt="swimming-pool-img" class="award-img"/>
                    </div>
                    <div class="column-home">
                        <img src="assets/award2.png" alt="golf-course-img" class="award-img"/>
                    </div>
                </div>
                <div class="row facilities-container mt-2 pb-2">
                    <div class="column-home">
                        <img src="assets/award3.png" alt="bowling_alley-img" class="award-img"/>
                    </div>   
                    <div class="column-home">
                        <img src="assets/award4.png" alt="restaurant-img" class="award-img"/>
                    </div>
                </div>
        </section>-->
    
            <main class="container contactUs">
            <div class="row">
            <div class="col-lg-6">
                <br><br>
<!--                <div id="map"></div>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.503888590922!2d103.8091387!3d1.4007913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3c3b81e04209%3A0x99a688cdca67ea90!2sMandai%20Executive%20Golf%20Course!5e0!3m2!1sen!2ssg!4v1679038851154!5m2!1sen!2ssg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-6">
            <h1>Contact Us</h1>
            <p> Please fill out the form below to get in touch with us.</p>

            <form action="process_contactUs.php" method="post">
            
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter first name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter last name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter email" class="form-control" required>
                    </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Enter your message here" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="contact-button">Submit</button>
                </div>
              
                
            </form>
            </main>
    
</main>
        <?php
            include "includes/footer.inc.php";
        ?>
    </body>
</html>