/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

let selectedTimeSlots = [];
let selectedFacility = "";
let selectedDate = "";

let startTimeList = [];
let endTimeList = [];
$(document).ready(function () {
//getting all facility elements 
    const facilityElements = document.querySelectorAll('.facility-card');
    //getting all timeslot elements
    const timeSlotElements = document.querySelectorAll('.timeslot-white');
    //getting all date elements
    const dateCardElements = document.querySelectorAll('.date-card');

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
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
        console.log(formData);
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
        //getting all date elements
        const dateCardElements = document.querySelectorAll('.date-card');
        addListeners(facilityElements, timeSlotElements, dateCardElements);
    });
    return bookingSlots;
}

function bookingSlot(date, availability, booking_id) {
    this.date = date;
    this.availability = availability;
    this.booking_id = booking_id;
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
            <div>
                <img src="` + bookingSlots[location_id]["image_url"] + `" class="img">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-0">
            <div>` + bookingSlots[location_id]["location_name"] + `</div>
            <hr>
            <div>` + bookingSlots[location_id]["description"] + `</div>
            </div>
            </div>
            </div>
        `;

//        let timeslotContainer = document.createElement("div");
//        timeslotContainer.classList.add("timeslot-group", "col-xl-4", "col-lg-6", "col-sm-6", "col-xs-6", "mb-2", "d-none");
//        timeslotContainer.setAttribute("facility-id", location_id);
//        // Add the timeslots to the facility card
//        for (let timeslot of timeslots) {
//            // Create a new timeslot element
//            let timeslotElement = document.createElement("div");
//            timeslotElement.classList.add("timeslot-white", "d-sm-inline-block", "btn", "btn-sm", "bg-available-status", "w-100");
//            let startTime = timeslot["time_start"].split(/[- :]/);
//            var start = new Date(startTime[0], startTime[1] - 1, startTime[2], startTime[3], startTime[4], startTime[5]);
//            let endTime = timeslot["time_end"].split(/[- :]/);
//            var end = new Date(endTime[0], endTime[1] - 1, endTime[2], endTime[3], endTime[4], endTime[5]);
//            var timeslotText = start.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}) + " - " + end.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
//            timeslotElement.setAttribute("booking-id", timeslot["booking_id"]);
//            timeslotElement.innerHTML = timeslotText;
//            // Add the timeslot element to the facility card
//            timeslotContainer.appendChild(timeslotElement);
//        }
//
//        //getting the blueprint section
//        let test = document.getElementById("timeslotBlueprint");
//        //clone
//        let testPrime = test.cloneNode(true);
//        //change the class to make it appear
//        testPrime.setAttribute("class", "");
//        //let timeslotgroup = testPrime.children[1].children;
//        let timeslotgroup = testPrime.getElementsByClassName("timeslot-row")[0].children;

        // Add the timeslots to the facility card
        for (let timeslot of timeslots) {
            // Create a new timeslot element
            // /let timeslotElement = document.createElement("div");
            // timeslotElement.classList.add("timeslot-white", "d-sm-inline-block", "btn", "btn-sm", "bg-available-status", "w-100");
            let startTime = timeslot["time_start"].split(/[- :]/);
            var start = new bookingSlot(new Date(startTime[0], startTime[1] - 1, startTime[2], startTime[3], startTime[4], startTime[5]), timeslot["booked"], timeslot["booking_id"]);
            startTimeList.push(start);

//            if (i < timeslotgroup.length) {
//                if (timeslot["booked"] === 0) {
//                    if (!timeslotgroup[i].children[0].classList.contains("available")) {
//                        timeslotgroup[i].children[0].classList.toggle("available");
//                    }
//                    timeslotgroup[i].children[0].setAttribute("data-timeslot", timeslot["booking_id"]);
//
//                } else if (timeslot["booked"] === 1) {
//                    timeslotgroup[i].children[0].setAttribute("disabled", "");
//                    if (!timeslotgroup[i].children[0].classList.contains("disabled")) {
//                        timeslotgroup[i].children[0].classList.toggle("disabled");
//                    }
//                    timeslotgroup[i].children[0].setAttribute("data-timeslot", timeslot["booking_id"]);
//
//                }
//            }

//            let endTime = timeslot["time_end"].split(/[- :]/);
//            var end = new Date(endTime[0], endTime[1] - 1, endTime[2], endTime[3], endTime[4], endTime[5]);
//            var start = new bookingSlot(new Date(endTime[0], endTime[1] - 1, endTime[2], endTime[3], endTime[4], endTime[5]), timeslot["booked"], timeslot["booking_id"]);
//            endTimeList.push(start);
//            var timeslotText = start.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}) + " - " + end.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
//            timeslotElement.setAttribute("booking-id", timeslot["booking_id"]);
//            timeslotElement.innerHTMLx = timeslotText;
//            // Add the timeslot element to the facility card
//            timeslotContainer.appendChild(timeslotElement);
        }
//        console.log(i);

//        //console.log(timeslotgroup.length);
//        for (let i = 0; i < timeslotgroup.length; i++) {
//            //if its booked, change the class to not be able to be selected? or make it disappear?
//            if (startTimeList[i].availability === 1) {
//                //timeslotgroup[i].setAttribute("class", "d-none");
//                //timeslotgroup[i].classList.toggle("d-none");
//                //to access the timeslot-white class underneath
//                timeslotgroup[i].children[0].setAttribute("disabled", "");
//                if (!timeslotgroup[i].children[0].classList.contains("disabled")) {
//                    timeslotgroup[i].children[0].classList.toggle("disabled");
//                }
//            }
//            else{
//                if (!timeslotgroup[i].children[0].classList.contains("available")) {
//                    timeslotgroup[i].children[0].classList.toggle("available");
//                }
//            }
//                
//        }

        // add the facility card to the page
        document.getElementById("facility-cards").appendChild(facilityCard);
//        document.getElementsByClassName("timeslot-row")[0].appendChild(timeslotContainer);
//        document.getElementsByClassName("timeslot-row")[0].appendChild(testPrime);

        // $("[facility-id=" + location_id + "]").toggleClass("d-none");
    }

}

function updateTimeslots(parentNode, facilityID, day) {
    let offset = 0;
    let iter = 0;
    console.log(day);
    if (parseInt(day) === 1) {
        let now = new Date();
        //-8 static value, as that is the start of the day 
        let offset = now.toLocaleTimeString('en-US', {hour12: false}).split(/[- :]/)[0] - 8;
        offset = Math.max(0, offset);
        offset = Math.floor(offset / 2);
        let blueprint = document.getElementById("timeslotBlueprint");
        blueprint.setAttribute("class", "");
        let timeslotRow = blueprint.children[1];
        let timeslotGroup = timeslotRow.children;
        for (let i = 0; i < 5; i++) {
            let trav = iter + i;
            //unselect it
            if (timeslotGroup[i].children[0].classList.contains("selected")) {
                timeslotGroup[i].children[0].classList.toggle("selected");
            }
            if (i < offset) { //if i less than offset, cfm disable it
                //remove any possible avail codes
                if (timeslotGroup[i].children[0].classList.contains("available")) {
                    timeslotGroup[i].children[0].classList.toggle("available");
                }
                timeslotGroup[i].children[0].setAttribute("disabled", "");
                //set to disabled
                if (!timeslotGroup[i].children[0].classList.contains("disabled")) {
                    timeslotGroup[i].children[0].classList.toggle("disabled");
                }

                timeslotGroup[i].children[0].setAttribute("data-timeslot", startTimeList[trav].booking_id);
            } else { //normal checking
                if (startTimeList[trav].availability === 0) {
                    //remove any possible disabled codes
                    if (timeslotGroup[i].children[0].classList.contains("disabled")) {
                        timeslotGroup[i].children[0].classList.toggle("disabled");
                    }
                    timeslotGroup[i].children[0].removeAttribute("disabled");

                    //set to avail
                    if (!timeslotGroup[i].children[0].classList.contains("available")) {
                        timeslotGroup[i].children[0].classList.toggle("available");
                    }
                    timeslotGroup[i].children[0].setAttribute("data-timeslot", startTimeList[trav].booking_id);

                } else if (startTimeList[trav].availability === 1) {
                    //remove any possible avail codes
                    if (timeslotGroup[i].children[0].classList.contains("available")) {
                        timeslotGroup[i].children[0].classList.toggle("available");
                    }
                    timeslotGroup[i].children[0].setAttribute("disabled", "");
                    //set to disabled
                    if (!timeslotGroup[i].children[0].classList.contains("disabled")) {
                        timeslotGroup[i].children[0].classList.toggle("disabled");
                    }
                    timeslotGroup[i].children[0].setAttribute("data-timeslot", startTimeList[trav].booking_id);

                }
            }
        }
        parentNode.appendChild(blueprint);
    } else {

        //calculate based off the day and facility to obtain array position
        iter = (facilityID - 1) * 30 + (day - 1) * 5;
        let blueprint = document.getElementById("timeslotBlueprint");
        blueprint.setAttribute("class", "");
        let timeslotRow = blueprint.children[1];
        let timeslotGroup = timeslotRow.children;

        for (let i = 0; i < 5; i++) {
            let trav = iter + i;
            //unselect it
            if (timeslotGroup[i].children[0].classList.contains("selected")) {
                timeslotGroup[i].children[0].classList.toggle("selected");
            }
            if (startTimeList[trav].availability === 0) {
                //remove any possible disabled codes
                if (timeslotGroup[i].children[0].classList.contains("disabled")) {
                    timeslotGroup[i].children[0].classList.toggle("disabled");
                }
                timeslotGroup[i].children[0].removeAttribute("disabled");

                //set to avail
                if (!timeslotGroup[i].children[0].classList.contains("available")) {
                    timeslotGroup[i].children[0].classList.toggle("available");
                }
                timeslotGroup[i].children[0].setAttribute("data-timeslot", startTimeList[trav].booking_id);

            } else if (startTimeList[trav].availability === 1) {
                //remove any possible avail codes
                if (timeslotGroup[i].children[0].classList.contains("available")) {
                    timeslotGroup[i].children[0].classList.toggle("available");
                }
                timeslotGroup[i].children[0].setAttribute("disabled", "");
                //set to disabled
                if (!timeslotGroup[i].children[0].classList.contains("disabled")) {
                    timeslotGroup[i].children[0].classList.toggle("disabled");
                }
                timeslotGroup[i].children[0].setAttribute("data-timeslot", startTimeList[trav].booking_id);

            }
        }
        parentNode.appendChild(blueprint);
    }

}

function addListeners(facilityElements, timeSlotElements, dateCardElements) {

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
                //$(".timeslot-group").filter("[facility-id!=" + selectionGroup.getAttribute('location-id') + "]").addClass("d-none");
                //$("[facility-id=" + selectionGroup.getAttribute('location-id') + "]").toggleClass("d-none");
                //$(".form-group").filter("[facility-id!=" + selectionGroup.getAttribute('location-id') + "]").addClass("d-none");
                //$("[facility-id=" + selectionGroup.getAttribute('location-id') + "]").toggleClass("d-none");
                console.log(selectionGroup.parentNode);
                //if the timeslots is currently not under the selected facility
                if (selectionGroup.querySelector("#timeslotBlueprint") === null) {
                    //update the timeslots
                    updateTimeslots(selectionGroup, selectionGroup.getAttribute('location-id'), 1);
                    unselectDays();
                } else { //if the timeslots are currently under the selected facility
                    //if it is invisible
                    if (selectionGroup.querySelector("#timeslotBlueprint").classList.contains("d-none")) {
                        //update the timeslots
                        updateTimeslots(selectionGroup, selectionGroup.getAttribute('location-id'), 1);
                        //make it appear
                        selectionGroup.querySelector("#timeslotBlueprint").classList.remove("d-none");
                        unselectDays();


                    } else { //if it is currently visible
                        //update the timeslots
                        updateTimeslots(selectionGroup, selectionGroup.getAttribute('location-id'), 1);
                        //hide the timeslots
                        selectionGroup.querySelector("#timeslotBlueprint").classList.toggle("d-none");
                        unselectDays();
                    }
                }
                console.log(selectionGroup.querySelector("#timeslotBlueprint").querySelector(".date-row").children);
            }
        });
    });
    //add event listeners to the individual timeslots
    timeSlotElements.forEach((element) => {
        if (!element.hasAttribute("disabled")) {

            element.addEventListener('click', (event) => {

                event.stopPropagation();
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
                    selectedTimeSlots.push(parseInt(timeSlot)); //add to the array if not already selected
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



//        //data input portion
//        //getting attribute from the clicked button
//        const booking_id = selectionGroup.getAttribute('booking-id');
//        //checking if the data already exists in the array
//        const index = selectedTimeSlots.indexOf(booking_id);
//        if (index === -1) {
//            selectedTimeSlots.push(booking_id); //add to the array if not already selected
//            document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
//            //timeSlot.setAttribute("value", selectedTimeSlots);
//        } else {
//            selectedTimeSlots.splice(index, 1); //remove from the array if already selected
//            document.getElementById('selectedTimeSlots').value = selectedTimeSlots.join(",");
//            //timeSlot.setAttribute("value", selectedTimeSlots);
//        }
//        //console.log(selectedTimeSlots); // test
    });

    dateCardElements.forEach((element) => {
        element.addEventListener('click', (event) => {
            event.stopPropagation();
            //check if the clicked element is a child of the facility card element
            dateCardElements.forEach((card) => {
                if (card.classList.contains('selected') && card !== element) {
                    card.classList.remove('selected');
                }
            });
            //visual feedback portion
            const selectionGroup = event.target.closest('.date-card');
            //toggle an element, for css to reflect the changes
            selectionGroup.classList.toggle('selected');
            //store the value of the facility
            selectedDate = selectionGroup.getAttribute('date-data');
            console.log(selectionGroup.parentNode);
            updateTimeslots(selectionGroup.parentNode.parentNode.parentNode.parentNode,
                    selectionGroup.parentNode.parentNode.parentNode.parentNode.getAttribute('location-id'),
                    selectionGroup.getAttribute('day'));
            //document.getElementById('selectedFacility').value = selectedFacility;
            //$(".form-group").filter("[facility-id!=" + selectionGroup.getAttribute('location-id') + "]").addClass("d-none");
            //$("[facility-id=" + selectionGroup.getAttribute('location-id') + "]").toggleClass("d-none");
        });
    });
}

function unselectDays() {
    //set all the days to unselected
    for (let i = 0; i < document.querySelector("#timeslotBlueprint").querySelector(".date-row").children.length; i++) {
        let element = document.querySelector("#timeslotBlueprint").querySelector(".date-row").children[i];
        //if the 1st element isnt selected, make it selected, default to selected
        if (i === 0) {
            if (!element.children[0].classList.contains("selected")) {
                console.log(element.children[0]);
                element.children[0].classList.toggle("selected");
            }

        } else {
            if (element.children[0].classList.contains("selected")) {
                element.children[0].classList.remove("selected");
            }
        }
    }
}

