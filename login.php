<?php
include_once "includes/util.php";
session_start();
if (isset($_SESSION['member_id'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Login</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    include "includes/nav.inc.php";
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
                    <input class="form-control" type="password" id="pwd" name="pwd" required
                        placeholder="Enter password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Log In</button>
                </div>
            </form>
            <?php include_once "includes/topButton.inc.php"; ?>
    </main>
    <?php include "includes/footer.inc.php"; ?>
</body>

</html>