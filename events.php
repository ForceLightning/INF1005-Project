<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/header.inc.php"; ?>
        <script defer src="js/events.js"></script>
        <title>Events</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">           
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php 
            include "includes/nav.inc.php";
        ?>
        <!-- Header Image -->
        <header>
            <div class="hero-image">
                  <img class="img" src="assets/event_hero.jpg" alt="home-page-img"/>
            </div>
            <div class ="hero-text">
                <h1 class="hero-header">Events</h1>
            </div>
        </header>
        <!-- End of Header Image -->
        
        <!-- Event Button Months Filter -->
        <div id="myBtnContainer">
          <button class="events-button2 active" onclick="filterSelection('all')"> Show All</button>
          <button class="events-button2" onclick="filterSelection('now')"> On-going</button>
          <button class="events-button2" onclick="filterSelection('april')"> April</button>
          <button class="events-button2" onclick="filterSelection('may')"> May</button>
          <button class="events-button2" onclick="filterSelection('june')"> June</button>
        </div>

        <div class="container">
          <a href="#Drinks"><img class="filterDiv now img-fluid" src="assets\happy_hour_poster.png" alt="happy_hour"/></a>
          <a href="#Bowling"><img class="filterDiv april img-fluid" src="assets\bowling_night_poster.png" alt="bowling_night"/></a>
          <a href="#Bazaar"><img class="filterDiv april img-fluid" src="assets\hari_raya_poster.png" alt="hari_raya"/></a>
          <a href="#Pool"><img class="filterDiv may img-fluid" src="assets\pool_party_poster.png" alt="pool_party"/></a>
          <a href="#Zoo"><img class="filterDiv june img-fluid" src="assets\zoo_poster.png" alt="Zoo"/></a>
        </div>
        <!-- End of Event Button Months Filter -->
        
        <!-- About Events Content -->
        <main class="container">  
            <section id="events-s1">
                <!-- Zoo -->
                <div class ="row" id="Zoo">
                    <div class="col-sm">
                        <h3 class="events-heading">Family Day at the Zoo</h3>
                        <p class="events-desc">
                        Join us for a family day at the Zoo, brought to you by Mandai Country Club! 
                        We've teamed up with the Mandai Zoo to provide a fun-filled day for members and their families.
                        We'll be offering a free shuttle service to and from the zoo. This means you can sit back, relax, and enjoy the ride to the Mandai Zoo without worrying about traffic or parking.
                        This is a great opportunity to spend quality time with your family and create memories that will last a lifetime. 
                        So don't miss out on this special event – register today and get ready for a wild adventure at the Mandai Zoo!
                        </p>
                        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdVuy9VMf1q7QDPX0LFBc43ErzjweIxUd3U3wbQ9icKhFpHBg/viewform?usp=sf_link">
                            <button type="button" class="events-button">Reserve Now</button>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a target="_blank" href="assets\zoo_poster.png">
                        <img class="events-img img-fluid" src="assets\zoo_poster.png" width="100%" alt="Zoo">
                    </a>
                    </div>
                </div>
                <!-- End of Zoo -->
                
                <!-- Happy Hour -->
                <div class ="row" id="Drinks">
                    <div class="col-sm">
                        <a target="_blank" href="assets\happy_hour_poster.png">
                        <img class="events-img img-fluid" src="assets\happy_hour_poster.png" width="100%" alt="Happy Hour">
                    </a>
                    </div>
                    <div class="col-sm">
                        <h3 class="events-heading">Happy Hour</h3>
                        <p class="events-desc2">
                        Join us for a fun-filled Happy Hour at our Mandai country club Restaurant that is awarded 5 stars rating for its service! 
                        Relax and unwind with your friends and colleagues while enjoying discounted drinks and delicious appetizers. 
                        Whether you're winding down after a long day at work or looking for a fun night out, our Happy Hour has something for everyone.
                        The Happy Hour event will take place from 5 pm to 8 pm every Fridays, and we guarantee that you won't want to miss it. So, gather your friends and come on down to the country club for a night of fun, laughter, and great company. 
                        We can't wait to see you there!
                        </p>
                        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfaCz2IdEE34U9bTpbRrs21ub8wCAn7NoS10H61FRY4cc9W5Q/viewform?usp=sf_link">
                            <button type="button" class="events-button">Reserve Now</button>
                        </a>
                    </div>
                </div>
                <!-- End of Happy Hour -->
                
                <!-- Pool Party -->
                <div class="row" id="Pool">
                    <div class="col-sm">
                        <h3 class="events-heading">Pool Party</h3>
                        <p class="events-desc">
                        Join us for a splashing good time at our annual Pool Party at Mandai Country Club! 
                        Get ready to soak up the sun and enjoy a day of swimming, food, drinks, and entertainment with DJ Drew Feig.
                        Our beautifully landscaped pool area will be transformed into a summer oasis, complete with fun inflatables and games for all ages. 
                        You can relax on our luxurious poolside loungers, take a dip in our sparkling pool, or enjoy a refreshing drink from our Mandai Restaurant.
                        Don't forget to bring your sunscreen, towels, and swimsuits! 
                        This is an event you won't want to miss, so mark your calendars and join us for a fun-filled day by the pool.
                        </P>
                        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeoFWgNXgxK4B-Mk5sSlNMdyrhVSqilZUe058Mu6UYsayirAg/viewform?usp=sf_link">
                            <button type="button" class="events-button">Reserve Now</button>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a target="_blank" href="assets\pool_party_poster.png">
                            <img class="events-img img-fluid" src="assets\pool_party_poster.png" width="100%" alt="Pool Party">
                        </a>
                    </div>
                </div>
                <!-- End of Pool Party -->
               
                <!-- Bowling Night -->
               <div class ="row" id="Bowling">
                    <div class="col-sm">
                        <a target="_blank" href="assets\bowling_night_poster.png">
                        <img class="events-img img-fluid" src="assets\bowling_night_poster.png" width="100%" alt="Happy Hour">
                    </a>
                    </div>
                    <div class="col-sm">
                        <h3 class="events-heading">Bowling Night</h3>
                        <p class="events-desc2">
                        We are excited to announce our upcoming event at Mandai Country Club: Bowling Night! Get ready for an evening of friendly competition, good food, and great company.
                        Join us at our Mandai bowling alley where you can show off your skills and enjoy a fun-filled night with family and friends. 
                        Whether you're a seasoned pro or new to the game, there's no better way to spend your evening than bowling with Mandai Country Club.
                        Our bowling alley features the latest technology and is equipped with everything you need to have a great time. 
                        Plus, we'll have delicious food and drinks available to keep you fueled and energized throughout the night.
                        Don't miss out on this exciting event! Make sure to register early to secure your spot. 
                        We can't wait to see you at Mandai Country Club's Bowling Night!
                        </p>
                        <a target="_blank" href="https://forms.gle/hzbxPfVS8A3zZowb6">
                            <button type="button" class="events-button">Reserve Now</button>
                        </a>
                    </div>
                </div>
                <!-- End of Bowling Night -->
                
                <!-- Hari Raya -->
                <div class ="row" id="Bazaar">
                    <div class="col-sm">
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
                        <a target="_blank" href="https://forms.gle/XfHqjXXMonrYmqHN9">
                            <button type="button" class="events-button">Reserve Now</button>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a target="_blank" href="assets\hari_raya_poster.png">
                        <img class="events-img img-fluid" src="assets\hari_raya_poster.png" width="100%" alt="Zoo">
                    </a>
                    </div>
                </div>
                <!-- End of Hari Raya -->
            </section>
            <!-- End of About Events Content -->
            
<!-- Page will scroll to top, when you click it -->


                <br>
            
        </main>
        
        <?php
            include "includes/footer.inc.php";
        ?>   
    </body>
</html>