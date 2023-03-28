/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

$(document).ready(function () {
    //getting all facility elements 
    const facilityElements = document.querySelectorAll('.facility-card');
    //getting all timeslot elements
    const timeSlotElements = document.querySelectorAll('.timeslot-white');
    //to store the values to be passed into the database
    const selectedTimeSlots = [];
    const selectedFacility = "";

    const bookingSlots = getBookingSlots(true);
    // TODO: Iterate through the dict that maps location_id => timeslots
    // and add the timeslots to the corresponding facility card


    const form = document.querySelector('#booking-form');
    form.addEventListener('submit', (event) => {
        event.preventDefault(); // prevent the form from submitting normally
        const formData = new FormData(form); // create a FormData object from the form
        formData.append('facility', selectedFacility); // add the selectedFacility value to the form data
        formData.append('timeslot', JSON.stringify(selectedTimeSlots)); // add the selectedTimeSlots array to the form data
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

function displayBookingSlots(bookingSlots) {
    for (let location_id of Object.keys(bookingSlots)) {
        // Get the timeslots for this location
        let timeslots = bookingSlots[location_id]["bookings"];
        // Create a facility card for the location
        let facilityCard = document.createElement("div");
        facilityCard.classList.add("facility-card", "col-lg-4", "col-md-6", "mb-3");
        facilityCard.setAttribute("facility-name", bookingSlots[location_id]["location_name"]);
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
        timeslotContainer.classList.add("timeslot-group", "col-xl-4", "col-lg-6", "col-sm-6", "col-xs-6", "mb-2");
        timeslotContainer.setAttribute("facility-id", location_id);
        // Add the timeslots to the facility card
        for (let timeslot of timeslots) {
            // Create a new timeslot element
            let timeslotElement = document.createElement("div");
            timeslotElement.classList.add("timeslot-white", "d-sm-inline-block", "btn", "btn-sm", "bg-available-status", "w-100");
            let startTime = timeslot["time_start"].split(/[- :]/);
            var start = new Date(startTime[0], startTime[1]-1, startTime[2], startTime[3], startTime[4], startTime[5]);
            let endTime = timeslot["time_end"].split(/[- :]/);
            var end = new Date(endTime[0], endTime[1]-1, endTime[2], endTime[3], endTime[4], endTime[5]);
            var timeslotText = start.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}) + " - " + end.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
            timeslotElement.setAttribute("booking-id", timeslot["booking_id"]);
            timeslotElement.innerHTML = timeslotText;
            // Add the timeslot element to the facility card
            timeslotContainer.appendChild(timeslotElement);
        }
        // add the facility card to the page
        document.getElementById("facility-cards").appendChild(facilityCard);
        document.getElementsByClassName("timeslot-row")[0].appendChild(timeslotContainer);
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

            }
        });
    });

    //add event listeners to the individual timeslots
    timeSlotElements.forEach((element) => {
        element.addEventListener('click', (event) => {

            //visual feedback portion
            const selectionGroup = event.target;
            //toggle an element, for css to reflect the changes
            selectionGroup.classList.toggle('selected');

            //data input portion
            //getting attribute from the clicked button
            const timeSlot = selectionGroup.getAttribute('data-timeslot');
            //checking if the data already exists in the array
            const index = selectedTimeSlots.indexOf(timeSlot);
            if (index === -1) {
                selectedTimeSlots.push(timeSlot); //add to the array if not already selected
                document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
                //timeSlot.setAttribute("value", selectedTimeSlots);
            } else {
                selectedTimeSlots.splice(index, 1); //remove from the array if already selected
                document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
                //timeSlot.setAttribute("value", selectedTimeSlots);
            }
            //console.log(selectedTimeSlots); // test
        });
    });
}