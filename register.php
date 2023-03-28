<?php
require_once "includes/util.php";
session_start();
if (isset($_SESSION["member_id"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="d-flex flex-column min-vh-100">
    <?php include "includes/nav.inc.php"; ?>

    <main class="container2">
        <h1>Member Registration</h1>
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
                <input class="form-control" type="password" id="pwd_confirm" name="pwd_confirm"
                    placeholder="Confirm password">
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
    include "includes/footer.inc.php";
    ?>
</body>

</html>