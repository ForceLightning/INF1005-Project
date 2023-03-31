<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include "includes/nav.inc.php";
    ?>

    <header>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                </li>
                <li data-target="#myCarousel" data-slide-to="1" aria-label="Slide 2"></li>
                <li data-target="#myCarousel" data-slide-to="2" aria-label="Slide 3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="header_contrast">
                        <img class="d-block w-100" src="assets/promo_photo1.jpg" alt="home-page-img" />
                    </div>
                    <div class="hero-text">
                        <h1 class="hero-header">About Us</h1>
                        <h2 class="hero-subheader"><a href="#TH" class='a-about'>The Heritage</a></h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="header_contrast">
                        <img class="d-block w-100" src="assets/promo_photo2.jpg" alt="second-slide" />
                    </div>
                    <div class="hero-text">
                        <h1 class="hero-header">About Us</h1>
                        <h2 class="hero-subheader"><a href="#VM" class='a-about'>Vision & Mission</a></h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="header_contrast">
                        <img class="d-block w-100" src="assets/promo_photo3.jpg" alt="third-slide" />
                    </div>
                    <div class="hero-text">
                        <h1 class="hero-header">About Us</h1>
                        <h2 class="hero-subheader"><a href="#AA" class='a-about'>Awards & Accolades</a></h2>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </button>

            <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </header>

    <main class="container container-maxheight" id="TH">
        <section id="s1">
            <div class="row">
                <article class="col-sm">
                    <h2>The heritage of Mandai Country Club</h2>
                    <p class="index-desc">
                        Established in 1988, Mandai Country Club was originally a modest club catering to the needs of
                        the local community.
                        Over the years, the club has grown and evolved into a world-class destination for sports,
                        recreation, and entertainment.
                        Today, we are proud to be one of the most popular country clubs in Singapore, offering a wide
                        range of facilities and services for members and guests of all ages.
                    </p>
                </article>
        </section>

        <div class="row">
            <div class="gallery">
                <img src="assets\heritage.png" alt="1969" width="600" height="400">
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
            <h2 class="section-text" id="VM">Vision and Mission</h2>
            <p class="index-desc">
                Our vision at Mandai Country Club is to be the leading leisure and recreational destination in
                Singapore, known for our commitment to quality, innovation, and sustainability. We strive to provide our
                members and guests with a welcoming and inclusive environment, where they can relax, socialize, and
                pursue their passions.
                Our mission is to create memorable experiences for our members and guests, by offering top-quality
                facilities, activities, and services that cater to their diverse interests and needs. We are committed
                to delivering exceptional value and customer satisfaction, while promoting environmental stewardship and
                social responsibility.
            </p>
        </section>
        <section id="s3">
            <h2 class="section-text" id="AA">Awards and Accolades</h2>
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
    </main>

    <!-- <button onclick="topFunction()" id="scroll-button" title="Go to top">Top</button> -->

    <?php
    include "includes/footer.inc.php";
    ?>
</body>

</html>