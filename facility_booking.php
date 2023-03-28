<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/facility_booking.css">
    <?php include_once "includes/header.inc.php"; ?>
    <!-- custom JS, in local files -->
    <script src="js/facility_booking.js"></script>
    <!-- this line will auto func the document ready function in js-->
    <title>Bookings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once "includes/nav.inc.php"; ?>
    <main class="container">
        <section>
            <!-- facility portion -->
            <div class="facility-row row" id="facility-cards">
            </div>
        </section>
        <!-- timeslot portion  -->
        <section id="timeslots">
            <div class="timeslot-row row">
            </div>

            <form id="booking-form" action="process_facility_booking.php" method="post" id="" novalidate>
                <!--used to pass in the array of timings selected in js into process_facility_booking-->
                <!-- hidden input fields to store selected facility and timeslot -->
                <div class="form-group">
                    <input class="form-control" type="hidden" name="facility" id="selectedFacility" value="1000">
                </div>

                <div class="form-group">
                    <input class="form-control" type="hidden" name="timeslot" id="selectedTimeSlots" value="1200">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </form>
        </section>
    </main>
    <?php include_once "includes/footer.inc.php"; ?>
</body>

</html>
