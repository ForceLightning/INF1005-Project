/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

let selectedTimeSlots = [];
let selectedFacility = "";
let selectedDate = "";

let startTimeList = [];
let endTimeList = [];

let timeslotBlueprint;

$(document).ready(function () {
    //getting all facility elements 
    const facilityElements = document.querySelectorAll('.facility-card');
    //getting all timeslot elements
    const timeSlotElements = document.querySelectorAll('.timeslot-white');
    //getting all date elements
    const dateCardElements = document.querySelectorAll('.date-card');
    timeslotBlueprint = document.querySelector("#timeslotBlueprint");
    //to store the values to be passed into the database
    const bookingSlots = getBookingSlots(false);
    const form = document.querySelector('#booking-form');
    form.addEventListener('submit', (event) => {
        // add the selected timeslots to the form
        const timeslotInput = document.querySelector('#booking-slots');
        timeslotInput.value = JSON.stringify(selectedTimeSlots);
    });
});

function getBookingSlots(debug) {
    const url = debug ? "api/bookings_api.json" : "api/bookings_api.php";
    let bookingSlots = {};
    $.get(url, function (data) {
        bookingSlots = data;
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
            <div class="col">
            <div>
                <img src="` + bookingSlots[location_id]["image_url"] + `" class="img" alt=` + bookingSlots[location_id]["image_url"] + `>
            </div>
            <div>
            <div>` + bookingSlots[location_id]["location_name"] + `</div>
            <hr class="facility-card">
            <div>` + bookingSlots[location_id]["description"] + `</div>
            </div>
            </div>
            </div>
            <br>
        `;
        // Add the timeslots to the facility card
        for (let timeslot of timeslots) {
            // Create a new timeslot element
            let startTime = timeslot["time_start"].split(/[- :]/);
            var start = new bookingSlot(new Date(startTime[0], startTime[1] - 1, startTime[2], startTime[3], startTime[4], startTime[5]), timeslot["booked"], timeslot["booking_id"]);
            startTimeList.push(start);
        }
        // add the facility card to the page
        document.getElementById("facility-cards").appendChild(facilityCard);
    }

}

function updateTimeslots(parentNode, facilityID, day) {
    let offset = 0;
    let iter = 0;

    if (parseInt(day) === 1) {
        let now = new Date();
        //-8 static value, as that is the start of the day 
        let offset = now.toLocaleTimeString('en-US', { hour12: false }).split(/[- :]/)[0] - 8;
        offset = Math.max(0, offset);
        offset = Math.floor(offset / 2);
        var blueprint = timeslotBlueprint;
        blueprint.setAttribute("class", "");
        //updating the row dates
        let dateRow = blueprint.children[0];

        for (let i = 0; i < 6; i++) {
            const dayOfMonth = startTimeList[i * 5].date.getDate(); // get the day of the month as a number
            const monthsOfYear = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const monthOfYear = monthsOfYear[startTimeList[i * 5].date.getMonth()];
            const formattedDate = `${dayOfMonth} ${monthOfYear}`; // concatenate the numbers in the desired format
            dateRow.children[i].children[0].innerHTML = formattedDate;
        }
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
        let blueprint = timeslotBlueprint;
        blueprint.setAttribute("class", "");
        //updating the row dates
        let dateRow = blueprint.children[0];
        for (let i = 0; i < 6; i++) {
            const dayOfMonth = startTimeList[i * 5].date.getDate(); // get the day of the month as a number
            const monthsOfYear = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const monthOfYear = monthsOfYear[startTimeList[i * 5].date.getMonth()];
            const formattedDate = `${dayOfMonth} ${monthOfYear}`; // concatenate the numbers in the desired format
            dateRow.children[i].children[0].innerHTML = formattedDate;
        }
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
                //if the timeslots is currently not under the selected facility
                if (selectionGroup.querySelector("#timeslotBlueprint") === null) {
                    //update the timeslots
                    updateTimeslots(selectionGroup, selectionGroup.getAttribute('location-id'), 1);
                    unselectDays();
                } else { //if the timeslots are currently under the selected facility
                    //if it is invisible
                    if (timeslotBlueprint.classList.contains("d-none")) {
                        //update the timeslots
                        updateTimeslots(selectionGroup, selectionGroup.getAttribute('location-id'), 1);
                        //make it appear
                        timeslotBlueprint.classList.remove("d-none");
                        unselectDays();


                    } else { //if it is currently visible
                        //update the timeslots
                        updateTimeslots(selectionGroup, selectionGroup.getAttribute('location-id'), 1);
                        //hide the timeslots
                        timeslotBlueprint.classList.toggle("d-none");
                        unselectDays();
                    }
                }
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
            });
        }
    });

    dateCardElements.forEach((element) => {
        element.addEventListener('click', (event) => {
            event.stopPropagation();

            var same = true;
            //check if the clicked element is a child of the facility card element
            dateCardElements.forEach((card) => {
                //if the element clicked was already clicked previously, do not unselect the options selected
                if (same === true) {
                    if (card.classList.contains('selected') && card !== element) {
                        same = false;
                    }
                }
                card.classList.remove('selected');

            });
            //visual feedback portion
            const selectionGroup = event.target.closest('.date-card');
            //toggle an element, for css to reflect the changes
            selectionGroup.classList.toggle('selected');
            //store the value of the facility
            selectedDate = selectionGroup.getAttribute('date-data');
            //console.log(selectionGroup.parentNode);
            if (same === false) {
                updateTimeslots(selectionGroup.parentNode.parentNode.parentNode.parentNode,
                    selectionGroup.parentNode.parentNode.parentNode.parentNode.getAttribute('location-id'),
                    selectionGroup.getAttribute('day'));
            }
        });
    });
}

function unselectDays() {
    //set all the days to unselected
    for (let i = 0; i < timeslotBlueprint.querySelector(".date-row").children.length; i++) {
        let element = timeslotBlueprint.querySelector(".date-row").children[i];
        //if the 1st element isnt selected, make it selected, default to selected
        if (i === 0) {
            if (!element.children[0].classList.contains("selected")) {
                element.children[0].classList.toggle("selected");
            }

        } else {
            if (element.children[0].classList.contains("selected")) {
                element.children[0].classList.remove("selected");
            }
        }
    }
    //reset the booking ids stored
    document.querySelector("#selectedTimeSlots").setAttribute("value", "");
}
