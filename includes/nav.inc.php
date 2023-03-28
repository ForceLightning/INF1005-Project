<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap"
    rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="assets/mandaicc_logo.png" alt="Logo" width="150" height="32.25">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutUs.php">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropbtn" href="facilities.php" onmouseover="Dropdown()">FACILITIES</a>
                <div id="myDropdown" class="dropdown-content" onmouseleave="HideDropdown()">
                    <a class="nav-link" href="golfPage.php">Golf Course</a>
                    <a class="nav-link" href="bowlingPage.php">Bowling Alley</a>
                    <a class="nav-link" href="swimmingPage.php">Swimming Pool</a>
                    <a class="nav-link" href="restaurantPage.php">Restaurant</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events.php">EVENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactUs.php">CONTACT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="facility_booking.php">FACILITY BOOKING</a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</nav>