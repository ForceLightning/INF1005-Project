<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap"
        rel="stylesheet">
    <!-- JQuery JS -->
    <script defer src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <!-- TODO: Comment this out after writing main.js -->
    <script defer src="js/main.js"></script>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
$fname = $lname = $email = $msg = $errorMsg = "";
$success = true;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$branch = $_ENV['BRANCH'];

function save_contact_form_to_db() {
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
    echo"<h2>This page is not meant to run directly.<h2>";
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
include "nav.inc.php"
    ?>
<main class="container">
    <hr>
    <?php
    if ($success) {
        if(!empty($fname)) {
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
include "footer.inc.php";
?>


</body>

</html>