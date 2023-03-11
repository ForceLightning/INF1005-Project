<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
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
            <h1>Facilities</h1>
        </header>
        <main class="container">
            <section id="s2">
<!--                <div class="row">
                    <article class="col-sm">
                        <h3>What we offer?</h3>
                        <p>At Mandai CC, we believe that community is everything. That is why we offer a wide variety of programs and services designed to bring people together and foster a strong sense of belonging. Whether you are interested in sports, the arts, or simply meeting new people, you will definitely find something to love at our CC.</p>
                    </article>
                </div>-->
                <div class="row">
                <div class="column">
                  <img src="https://via.placeholder.com/350x250.png?text=Facilities" alt="Facilities">
                </div>
                <div class="column">
                  <img src="https://via.placeholder.com/350x250.png?text=Facilities" alt="Facilities">
                </div>
                <div class="column">
                  <img src="https://via.placeholder.com/350x250.png?text=Facilities" alt="Facilities">
                </div>
              </div>
		</section>
            
            <section id="s1">
                <div class="row">
                    <article class="col-sm" style="float: left">
                        <h3>Golf Course</h3>
                        <p>Mandai Country Club provides gold enthusiast with the best golf courses accompanied by a beautiful scenery for your enjoyment. </P>
                    </article>
                    <img src="https://via.placeholder.com/350x200.png?text=Facilities" alt="Facilities">
                </div>
                <div class ="row">
                    <article class="col-sm" style='float: left'>
                        <h3>Swimming Pool</h3>
                        <p>Wanna cool down on a hot day? Mandai Country Club provides one of the best pool facilities in the neighbourhood!</p>
                    </article>
                    <img src="https://via.placeholder.com/350x200.png?text=Facilities" alt="Facilities">

                </div>
            </section>
            
            
                <br>
            
        </main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>