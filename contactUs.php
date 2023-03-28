<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body onload="initMap()">

    <?php
    include "includes/nav.inc.php";
    ?>

    <main class="container contactUs">
        <div class="row">
            <div class="col-lg-6">
                <br><br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.503888590922!2d103.8091387!3d1.4007913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3c3b81e04209%3A0x99a688cdca67ea90!2sMandai%20Executive%20Golf%20Course!5e0!3m2!1sen!2ssg!4v1679038851154!5m2!1sen!2ssg"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Map of Mandai Executive Golf Course, Singapore"></iframe>

            </div>
            <div class="col-lg-6">
                <h1>Contact Us</h1>
                <p> Please fill out the form below to get in touch with us.</p>

                <form action="process_contactUs.php" method="post">

                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" placeholder="Enter first name" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" placeholder="Enter last name" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter email" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" placeholder="Enter your message here" class="form-control"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="contact-button">Submit</button>
                    </div>
                </form>
    </main>
    <?php
    include "includes/footer.inc.php";
    ?>
</body>

</html>