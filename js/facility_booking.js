/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

let selectedTimeSlots = [];
let selectedFacility = "";
$(document).ready(function () {
//getting all facility elements 
    const facilityElements = document.querySelectorAll('.facility-card');
    //getting all timeslot elements
    const timeSlotElements = document.querySelectorAll('.timeslot-white');
    //to store the values to be passed into the database
    const bookingSlots = getBookingSlots(true);
    // TODO: Iterate through the dict that maps location_id => timeslots
    // and add the timeslots to the corresponding facility card
//    let jsonString = ' "bookings" : [' +
//        '{ "booking_id" : [' + ___ + ']},' +
//        '{ "member_id" : [' + ___ + ']},' +
//        '{ "facility" : [' + selectedFacility + ']},' +
//        '{ "timeslots" : [' + selectedTimeSlots + ']} ]}';
//        
//    let bookingAvailability = JSON.stringify(inputJSON);  
//    let obj = JSON.parse(bookingAvailability);


//    "booking_id": booking_id
//    "member_id": member_id // if you can do this
//}

    const form = document.querySelector('#booking-form');
    form.addEventListener('submit', (event) => {
        event.preventDefault(); // prevent the form from submitting normally
        const formData = new FormData(event.target, event.submitter); // create a FormData object from the form
        // formData.append('facility', selectedFacility); // add the selectedFacility value to the form data
        formData.append('booking-slots', JSON.stringify(selectedTimeSlots)); // add the selectedTimeSlots array to the form data
        fetch('process_facility_booking.php', {
            method: 'POST',
            body: formData
        })
                .then(response => {
                    if (response.ok) {
                        console.log('Form data submitted successfully');
                        // do something here, such as redirect to a thank you page
                        window.location.href = 'process_facility_booking.php';
                    } else {
                        console.error('Error submitting form data');
                    }
                })
                .catch(error => {
                    console.error(error);
                });
    });
});

function getBookingSlots(debug) {
    const url = debug ? "api/bookings_api.json" : "api/bookings_api.php";
    let bookingSlots = {};
    $.get(url, function (data) {
        bookingSlots = data;
        console.log(bookingSlots);
        displayBookingSlots(bookingSlots);
        //getting all facility elements 
        const facilityElements = document.querySelectorAll('.facility-card');
        //getting all timeslot elements
        const timeSlotElements = document.querySelectorAll('.timeslot-white');
        addListeners(facilityElements, timeSlotElements);
    });
    return bookingSlots;
}

function bookingSlot(date, availability) {
    this.date = date;
    this.availability = availability;
}

function displayBookingSlots(bookingSlots) {
    for (let location_id of Object.keys(bookingSlots)) {
        // Get the timeslots for this location
        let timeslots = bookingSlots[location_id]["bookings"];
        // Create a facility card for the location
        let facilityCard = document.createElement("div");
        facilityCard.classList.add("facility-card", "col-lg-4", "col-md-6", "mb-3");
        facilityCard.setAttribute("facility-name", bookingSlots[location_id]["location_name"]);
        facilityCard.setAttribute("location-id", location_id);
        facilityCard.innerHTML = `
            <div class="text-black-50">
            <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 mb-0">
            <div>` + bookingSlots[location_id]["location_name"] + `</div>
            <hr>
            <div>` + bookingSlots[location_id]["description"] + `</div>
            </div>
            </div>
            </div>
        `;
        let timeslotContainer = document.createElement("div");
        timeslotContainer.classList.add("timeslot-group", "col-xl-4", "col-lg-6", "col-sm-6", "col-xs-6", "mb-2", "d-none");
        timeslotContainer.setAttribute("facility-id", location_id);
        // Add the timeslots to the facility card
        for (let timeslot of timeslots) {
            // Create a new timeslot element
            let timeslotElement = document.createElement("div");
            timeslotElement.classList.add("timeslot-white", "d-sm-inline-block", "btn", "btn-sm", "bg-available-status", "w-100");
            let startTime = timeslot["time_start"].split(/[- :]/);
            var start = new Date(startTime[0], startTime[1] - 1, startTime[2], startTime[3], startTime[4], startTime[5]);
            let endTime = timeslot["time_end"].split(/[- :]/);
            var end = new Date(endTime[0], endTime[1] - 1, endTime[2], endTime[3], endTime[4], endTime[5]);
            var timeslotText = start.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) + " - " + end.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            timeslotElement.setAttribute("booking-id", timeslot["booking_id"]);
            timeslotElement.innerHTML = timeslotText;
            // Add the timeslot element to the facility card
            timeslotContainer.appendChild(timeslotElement);
        }

        //getting the blueprint section
        let test = document.getElementById("timeslotBlueprint");
        //clone
        let testPrime = test.cloneNode(true);
        //change the class to make it appear
        testPrime.setAttribute("class", "");
        let timeslotgroup = testPrime.childNodes[1].children;
        startTimeList = [];
        endTimeList = [];
        // Add the timeslots to the facility card
        for (let timeslot of timeslots) {
// Create a new timeslot element
// /           let timeslotElement = document.createElement("div");
//            timeslotElement.classList.add("timeslot-white", "d-sm-inline-block", "btn", "btn-sm", "bg-available-status", "w-100");
            let startTime = timeslot["time_start"].split(/[- :]/);
            var start = new bookingSlot(new Date(startTime[0], startTime[1] - 1, startTime[2], startTime[3], startTime[4], startTime[5]), timeslot["booked"]);
            startTimeList.push(start);
            let endTime = timeslot["time_end"].split(/[- :]/);
            var end = new Date(endTime[0], endTime[1] - 1, endTime[2], endTime[3], endTime[4], endTime[5]);
            var start = new bookingSlot(new Date(endTime[0], endTime[1] - 1, endTime[2], endTime[3], endTime[4], endTime[5]), timeslot["booked"]);
            endTimeList.push(start);
//            var timeslotText = start.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}) + " - " + end.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
//            timeslotElement.setAttribute("booking-id", timeslot["booking_id"]);
//            timeslotElement.innerHTMLx = timeslotText;
//            // Add the timeslot element to the facility card
//            timeslotContainer.appendChild(timeslotElement);
        }
        //console.log(timeslotgroup.length);
        for (let i = 0; i < timeslotgroup.length; i++) {
            //if its booked, change the class to not be able to be selected? or make it disappear?
            if (startTimeList[i].availability === 0) {
                //timeslotgroup[i].setAttribute("class", "d-none");
                //timeslotgroup[i].classList.toggle("d-none");
                timeslotgroup[i].children[0].setAttribute("disabled", "");
                timeslotgroup[i].children[0].classList.toggle("disabled");
            }
        }

        // add the facility card to the page
        document.getElementById("facility-cards").appendChild(facilityCard);
        document.getElementsByClassName("timeslot-row")[0].appendChild(timeslotContainer);
        document.getElementsByClassName("timeslot-row")[0].appendChild(testPrime);

        // $("[facility-id=" + location_id + "]").toggleClass("d-none");
    }
}

function addListeners(facilityElements, timeSlotElements) {

    //add event listeners to the facility cards
    facilityElements.forEach((element) => {
        //element.classList.toggle('selected');
        element.addEventListener('click', (event) => {
            //check if the clicked element is a child of the facility card element
            if (event.target.closest('.facility-card')) {
                facilityElements.forEach((card) => {
                    if (card.classList.contains('selected') && card !== element) {
                        card.classList.remove('selected');
                    }
                });
                //visual feedback portion
                const selectionGroup = event.target.closest('.facility-card');
                //toggle an element, for css to reflect the changes
                selectionGroup.classList.toggle('selected');
                //store the value of the facility
                selectedFacility = selectionGroup.getAttribute('facility-name');
                document.getElementById('selectedFacility').value = selectedFacility;
                $(".timeslot-group").filter("[facility-id!=" + selectionGroup.getAttribute('location-id') + "]").addClass("d-none");
                $("[facility-id=" + selectionGroup.getAttribute('location-id') + "]").toggleClass("d-none");
            }
        });
    });
    //add event listeners to the individual timeslots
    timeSlotElements.forEach((element) => {
        if (!element.hasAttribute("disabled")) {

            element.addEventListener('click', (event) => {

                //visual feedback portion
                const selectionGroup = event.target;
                //toggle an element, for css to reflect the changes
                selectionGroup.classList.toggle('selected');
                //data input portion
                //getting attribute from the clicked button
                const timeSlot = selectionGroup.getAttribute('data-timeslot');
                //checking if the data already exists in the array
                // const index = selectedTimeSlots.indexOf(timeSlot);
                if (index === -1) {
                    //selectedTimeSlots.push(timeSlot); //add to the array if not already selected
                    //document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
                    //timeSlot.setAttribute("value", selectedTimeSlots);
                } else {
                    //selectedTimeSlots.splice(index, 1); //remove from the array if already selected
                    //document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
                    //timeSlot.setAttribute("value", selectedTimeSlots);
                }
                //console.log(selectedTimeSlots); // test
            });
        }
        //data input portion
        //getting attribute from the clicked button
        const booking_id = selectionGroup.getAttribute('booking-id');
        //checking if the data already exists in the array
        const index = selectedTimeSlots.indexOf(booking_id);
        if (index === -1) {
            selectedTimeSlots.push(booking_id); //add to the array if not already selected
            document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
            //timeSlot.setAttribute("value", selectedTimeSlots);
        } else {
            selectedTimeSlots.splice(index, 1); //remove from the array if already selected
            document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
            //timeSlot.setAttribute("value", selectedTimeSlots);
        }
        //console.log(selectedTimeSlots); // test
    });

}