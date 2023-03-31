<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Mandai Country Club</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include "includes/nav.inc.php"; ?>
    <main class="container">
        <?php
        require __DIR__ . "/includes/util.php";
        function save_member_info_to_db()
        {
            global $fname, $lname, $email, $pwd_hashed, $error_msg, $success, $branch;
            $config = parse_ini_file('../../private/project-db-config.ini', true);
            $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
            if ($conn->connect_error) {
                $error_msg = "Connection failed: " . $conn->connect_error . "<br>";
                $success = false;
            } else {
                $stmt = $conn->prepare("INSERT INTO membership (fname, lname, email, password) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $fname, $lname, $email, $pwd_hashed);
                if ($stmt->execute()) {
                    $success = true;
                } else {
                    $error_msg = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error . "<br>";
                    $success = false;
                }
                $stmt->close();
            }
            $conn->close();
        }
        function validate_input()
        {
            global $fname, $lname, $email, $pwd, $pwd_confirm, $error_msg, $success;
            $success = true;
            // Validate name charset
            // firstly, check fname
            if (!empty($fname)) {
                if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
                    $error_msg .= "Only letters and white space allowed for first name.<br>";
                    $success = false;
                } else {
                    $fname = sanitize_input($fname);
                }
            }
            // check if lname is empty
            if (empty($lname)) {
                $error_msg = "Last name cannot be empty.<br>";
                $success = false;
            } else {
                // check if lname contains only letters
                if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
                    $error_msg .= "Only letters and white space allowed for last name.<br>";
                    $success = false;
                } else {
                    $lname = sanitize_input($lname);
                }
            }
            // Validate email
            if (empty($email)) {
                $error_msg .= "Email cannot be empty.<br>";
                $success = false;
            } else {
                // check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_msg .= "Invalid email format.<br>";
                    $success = false;
                } else {
                    $email = sanitize_input($email);
                }
            }
            // Validate password
            if (empty($pwd) || empty($pwd_confirm)) {
                $error_msg .= "Password cannot be empty.<br>";
                $success = false;
            } else if ($pwd != $pwd_confirm) {
                $error_msg .= "Password and password confirmation do not match.<br>";
                $success = false;
            } else {
                // check if password is valid
                // make sure the password has at least 12 characters, 1 uppercase, 1 lowercase, 1 number.
                if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{12,}$/", $pwd)) {
                    $error_msg .= "Password must be at least 12 characters long, and contain at least 1 uppercase, 1 lowercase, and 1 number.<br>";
                    $success = false;
                }
            }
        }
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwd_confirm = $_POST["pwd_confirm"];
        validate_input();
        if ($success && $_SERVER["REQUEST_METHOD"] == "POST") {
            $pwd_hashed = password_hash($pwd, PASSWORD_DEFAULT);
            save_member_info_to_db();
            echo "<section>";
            echo "<h4>Registration successful!</h4>";
            echo "<p>Email: " . $email . "</p>";
            echo "<a href='login.php' class='btn btn-success' role='button' aria-disabled='true'>Return to login</a>";
            echo "</section>";
        } else {
            echo "<section>";
            echo "<h4>Oops!</h4>";
            echo "<h2>The following errors were detected:</h2>";
            echo "<p>" . $error_msg . "</p>";
            echo "<a href='register.php' class='btn btn-danger' role='button' aria-disabled='true'>Return to registration</a>";
            echo "</section>";
        }
        ?>
        <?php include_once "includes/topButton.inc.php"; ?>
    </main>
    <?php include_once "includes/footer.inc.php"; ?>
</body>

</html>