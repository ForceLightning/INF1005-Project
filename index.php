<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- JQuery JS -->
        <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <!-- TODO: Comment this out after writing main.js -->
        <!-- <script defer src="js/main.js"></script> -->
        <title>Mandai Country Club</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
            include "nav.inc.php";
        ?>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src ='images/petshop.png' alt="Logo" width="50">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#dogs">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cats">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cats">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cats">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cats">Login</a>
                </li>
            </ul>
        </nav>
        <header class="jumbotron text-center">
            <h1>Mandai Country Club</h1>
            <h2>People come here to have fun</h2>
        </header>
        <main class="container">
            <section id="s1">
                <h2>Section 1</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Article header</h3>
                        <p>Article content</p>
                    </article>
                </div>
            </section>
        </main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>