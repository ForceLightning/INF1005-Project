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
    
    //add event listeners to the facility cards
    facilityElements.forEach((element) => {
        //element.classList.toggle('selected');
        element.addEventListener('click', (event) => {
            //check if the clicked element is a child of the facility card element
            if (event.target.closest('.facility-card')) {
                facilityElements.forEach((card) => {
                    if(card.classList.contains('selected') && card !== element){
                        card.classList.remove('selected');
                    }
                });

                //visual feedback portion
                const selectionGroup = event.target.closest('.facility-card');
                //toggle an element, for css to reflect the changes
                selectionGroup.classList.toggle('selected');
                //store the value of the facility
                selectedFacility = selectionGroup.getAttribute('facility-name');
                
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
            } else {
                selectedTimeSlots.splice(index, 1); //remove from the array if already selected
            }
            //console.log(selectedTimeSlots); // test
        });
    });
});
