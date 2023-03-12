<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    include "nav.inc.php";
    ?>
    <main class="container2">
        <body class="unique-background-1">
            <h1>Member Login</h1>
            <p>
                For new members, please go to the
                <a href="register.php">Register page</a>.
            </p>
            <form action="process_login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" required placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" type="password" id="pwd" name="pwd" required placeholder="Enter password">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Log In</button>
                </div>

            </form>
    </main>
    <?php
    include "footer.inc.php";
    ?>
</body>

</html>