<!DOCTYPE html>
<html>
<head>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap" rel="stylesheet">
    
    <title>My Footer</title>
    <!-- Include icon library link -->
    <?php echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">' ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <footer class="py-3 mt-auto bg-light">
	<div class="container">
            <div class="row">
		<div class="col-md-4">
                    <h5 class="mb-3">Navigation</h5>
			<ul class="list-unstyled">
                            <li><a href="index.php" class="link-text">Home</a></li>
                            <li><a href="aboutUs.php" class="link-text">About Us</a></li>
                            <li><a href="facilities.php" class="link-text">Facilities</a></li>
                            <li><a href="events.php" class="link-text">Events</a></li>
			</ul>
		</div>
		<div class="col-md-4">
                    <h5 class="mb-3">Connect with us</h5>
			<ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#" class="link-text"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="link-text"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="link-text"><i class="fab fa-instagram"></i></a></li>
			</ul>
                    
		</div>
		<div class="col-md-4">
                    <h5 class="mb-3"><a href="contactUs.php" class="link-text">Contact Us</a></h5>
			<p class=" mb-3">444 Mandai Road, Singapore 779564</p>
			<p class=" mb-3">Phone: 6457 9874</p>
			<p class=" mb-3">Email: mandai@cc.com</p>
		</div>
            </div>
            <div class="row mt-3">
		<div class="col-md-12" >
                    <p class="text-center mb-3">&copy; 2023 Mandai CC. All rights reserved.</p>
		</div>
            </div>
        </div>
    </footer>
</body>
</html>