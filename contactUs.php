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
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            #map {
                    height: 400px;
                    width: 100%;
		}
	</style>

<!--	 <script type="text/javascript">
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 1.404770, lng: 103.794741},
                             zoom: 16
                    });
                    var marker = new google.maps.Marker({
                        position: {lat: 1.404770, lng: 103.794741},
                                   map: map
                    });
            }
	</script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>-->
    </head>
    <body onload="initMap()">
	
        <?php 
            include "nav.inc.php";
        ?>
        
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
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>