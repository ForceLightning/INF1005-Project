//let slideIndex = 1;
//showSlides(slideIndex);
//
//function plusSlides(n) {
//  showSlides(slideIndex += n);
//}
//
//function currentSlide(n) {
//  showSlides(slideIndex = n);
//}
//
//function showSlides(n) {
//  let i;
//  let slides = document.getElementsByClassName("mySlides");
//  let dots = document.getElementsByClassName("dot");
//  if (n > slides.length) {slideIndex = 1}    
//  if (n < 1) {slideIndex = slides.length}
//  for (i = 0; i < slides.length; i++) {
//    slides[i].style.display = "none";  
//  }
//  for (i = 0; i < dots.length; i++) {
//    slides[i].classList.remove("show", "fade");
//    slides[i].classList.add("fade");
//    dots[i].className = dots[i].className.replace(" active", "");
//  }
//  slides[slideIndex-1].classList.remove("fade");
//  slides[slideIndex-1].classList.add("show", "fade");
//  slides[slideIndex-1].style.display = "block";  
//  dots[slideIndex-1].className += " active";
//}

var swiper = new Swiper('.gallery-slider', {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 3
        },
        991: {
            slidesPerView: 4
        },
    },
});

var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    


function Dropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function HideDropdown() {
  document.getElementById("myDropdown").classList.remove("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
/*Event months filter*/
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
/*End of event months filter*/