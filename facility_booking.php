<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<head>
    <!-- jQuery CDN-->
    <!-- defer keyword to allow the browser to load the rest of the webpage first-->
    <script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <!-- css file in local files -->
    <link rel="stylesheet" href="css/facility_booking.css">
    <!-- custom JS, in local files -->
    <script defer src="js/facility_booking.js" ></script> <!-- this line will auto func the document ready function in js-->
</head>

<!-- facility portion -->
<div class="facility-row row">
    <div class="facility-card col-lg-4 col-md-6 mb-3" facility-name="Facility 1">
        <div class="text-black-50  shadow w-100">
            <div class="row">
                <div>
                    <!--<img src="" class="">-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mb-0">
                    <div>Facility 1</div>
                    <hr>
                    <div class="small">
                        Facility 1 Description
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="facility-card col-lg-4 col-md-6 mb-3" facility-name="Facility 2">
        <div class="text-black-50  shadow w-100">
            <div class="row">
                <div>
                    <!--<img src="" class="">-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mb-0">
                    <div>Facility 2</div>
                    <hr>
                    <div class="small">
                        Facility 2 Description
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- timeslot portion  -->
<div class="timeslot-row row">
    <div class="timeslot-group col-xl-4 col-lg-6 col-sm-6 col-xs-6 mb-2 ">
        <div name="timeslot-white" class="timeslot-white d-sm-inline-block btn btn-sm bg-avaiable-status w-100" data-timeslot="1200">
            12:00 - 13:00
        </div>
    </div>
    <div class="timeslot-group col-xl-4 col-lg-6 col-sm-6 col-xs-6 mb-2 ">
        <div name="timeslot-white" class="timeslot-white d-sm-inline-block btn btn-sm bg-avaiable-status w-100" data-timeslot="1300">
            13:00 - 14:00
        </div>
    </div>
    <div class="timeslot-group col-xl-4 col-lg-6 col-sm-6 col-xs-6 mb-2 ">
        <div name="timeslot-white" class="timeslot-white d-sm-inline-block btn btn-sm bg-avaiable-status w-100" data-timeslot="1400"> 
            14:00 - 15:00
        </div>
    </div>
    <div class="timeslot-group col-xl-4 col-lg-6 col-sm-6 col-xs-6 mb-2 ">
        <div name="timeslot-white" class="timeslot-white d-sm-inline-block btn btn-sm bg-avaiable-status w-100" data-timeslot="1500">
            15:00 - 16:00
        </div>
    </div>
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

