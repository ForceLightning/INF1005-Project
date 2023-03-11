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
    <!-- JQuery JS -->
    <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <!-- TODO: Comment this out after writing main.js -->
    <!-- <script defer src="js/main.js"></script> -->
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <?php include "nav.inc.php"; ?>

    <main class="container">
        <h2>Member Registration</h2>
        <p>
            For existing members, please go to the
            <a href="login.php">Login page</a>.
        </p>
        <form action="process_register.php" method="post" novalidate>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="pwd_confirm">Confirm Password:</label>
                <input class="form-control" type="password" id="pwd_confirm" name="pwd_confirm" placeholder="Confirm password">
            </div>
            <div class="form-check">
                <label>
                    <input type="checkbox" name="agree">
                    Agree to terms and conditions.
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </main>
    <?php
    include "footer.inc.php";
    ?>
</body>

</html>