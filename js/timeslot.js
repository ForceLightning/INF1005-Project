/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

$(document).ready(function () {
    //making the timeslot element change colour when clicked on
    const timeSlotElements = document.querySelectorAll('.time-slot-white');
    timeSlotElements.forEach((element) => {
        element.addEventListener('click', (event) => {
            const selectionGroup = event.target;
            selectionGroup.classList.toggle('selected');
        });
    });

});
