<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header.inc.php"; ?>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
$fname = $lname = $email = $msg = $errorMsg = "";
$success = true;

require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$branch = $_ENV['BRANCH'];

function save_contact_form_to_db()
{
    global $fname, $lname, $email, $message, $errorMsg, $success, $branch;
    $config = parse_ini_file('../../private/project-db-config.ini', true);
    $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error . "<br>";
        $success = false;
    } else {
        $stmt = $conn->prepare("INSERT INTO contact_us (fname, lname, email, msg, submission_id) VALUES (?, ?, ?, ?, NULL)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $message);
        if ($stmt->execute()) {
            $success = true;
        } else {
            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            $success = false;
        }
        $stmt->close();
    }
    $conn->close();

}

# Process only if the form has been submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # If first name is empty, user will still be able to proceed
    if (!empty($_POST["fname"])) {
        $fname = sanitize_input($_POST["fname"]);
    }
    # If last name is empty, user will not be able to proceed
    if (empty($_POST["lname"])) {
        $errorMsg .= "Last name is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_input($_POST["lname"]);
    }
    # If email is empty, user will not be able to proceed
    if (empty($_POST["email"])) {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    } else {
        $email = sanitize_input($_POST["email"]);

        // Additional check to make sure e-mail address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }
    # If message is empty, user will not be able to proceed
    if (empty($_POST["message"])) {
        $errorMsg .= "Message is required.<br>";
        $success = false;
    } else {
        // not sure if santiize_input is needed here
        $message = sanitize_input($_POST["message"]);
    }
} else {
    echo "<h2>This page is not meant to run directly.<h2>";
    exit();
}

// Helper function that checks input for malicious or unwanted content
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
save_contact_form_to_db();
?>

<body class="d-flex flex-column min-vh-100"></body>
<?php
include "includes/nav.inc.php"
    ?>
<main class="container">
    <hr>
    <?php
    if ($success) {
        if (!empty($fname)) {
            $name = $fname . " " . $lname;
        } else {
            $name = $lname;
        }
        echo "<h3>Your submission is successful!</h3>";
        echo "<h4>Thank you for contacting us, " . $name . "</h4>";
        echo "<button onclick='history.go(-1)' class='contact-button'>Back</button>";


    } else {
        echo "<h2>Oops!</h2>";
        echo "<h4>The following errors were detected:</h4>";
        echo "<p>" . $errorMsg . "</p>";
        echo "<button onclick='history.go(-1)' class='contact-button'>Return</button>";
    }
    ?>
</main>
<br>

<?php
include "includes/footer.inc.php";
?>


</body>

</html>