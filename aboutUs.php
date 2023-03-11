<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap" rel="stylesheet">
        <!-- JQuery JS -->
        <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <!-- TODO: Comment this out after writing main.js -->
        <!-- <script defer src="js/main.js"></script> -->
        <title>About Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
            include "nav.inc.php";
        ?>
        
        <header class="jumbotron text-center">
            <h1>About Us</h1>
        </header>
        <main class="container">
            <section id="s1">
                <div class="row">
                    <article class="col-sm">
                        <h3>Our Story</h3>
                        <p>Mandai CC is a vibrant and dynamic hub located in the northern side of Singapore. Established in 1969, the community club has been serving the needs of the residents in the area for over four decades. Today, it is one of the most popular CC in Singapore, offering a wide range of programs and activities that cater to people of all ages and interests.</p>
                    </article>
                    <article class="col-sm">
                        <h3>Vision and Mission</h3>
                        <p>The mission of Mandai CC is to provide a welcoming and inclusive environment where residents can come together, build relationships, and participate in activities that promote personal growth, social cohesion, and community development. Our vision is to be a leading community hub that fosters a sense of belonging and social connectedness among residents in the Mandai area.</p>
                    </article>
                </div>
            </section>
            
            <section id="s2">
                <div class="row">
                    <article class="col-sm">
                        <h3>What we offer?</h3>
                        <p>At Mandai CC, we believe that community is everything. That is why we offer a wide variety of programs and services designed to bring people together and foster a strong sense of belonging. Whether you are interested in sports, the arts, or simply meeting new people, you will definitely find something to love at our CC.</p>
                    </article>
                </div>
                <img src="https://via.placeholder.com/400x250.png?text=Facilities" alt="Facilities">
		</section>
                <br>
            
        </main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>