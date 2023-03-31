<?php
require_once __DIR__ . "/includes/util.php";
session_start();
function validate_input()
{
    global $email, $pwd, $error_msg, $success;
    $success = true;
    // Validate email
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_msg .= "Invalid email format.<br>";
            $success = false;
        } else {
            $email = sanitize_input($email);
        }
    }
    // Validate password
    if (empty($pwd)) {
        $error_msg .= "Password is required.<br>";
        $success = false;
    }
}
function check_login()
{
    global $email, $pwd, $error_msg, $success, $branch, $member_id;
    $config = parse_ini_file('../../private/project-db-config.ini', true);
    $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
    if ($conn->connect_error) {
        $error_msg = "Connection failed: " . $conn->connect_error . "<br>";
        $success = false;
    } else {
        $stmt = $conn->prepare("SELECT * FROM membership WHERE email = ?");
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($pwd, $row['password'])) {
                    $success = true;
                    $member_id = $row['member_id'];
                } else {
                    $error_msg = "Email and Password do not match.<br>";
                    $success = false;
                }
            } else {
                $error_msg = "Email and Password do not match.<br>";
                $success = false;
            }
        } else {
            $error_msg = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            $success = false;
        }
        $stmt->close();
    }
}
$email = $pwd = $error_msg = "";
$success = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    validate_input();
    if ($success) {
        check_login();
        if ($success) {
            $_SESSION['email'] = $email;
            $_SESSION['member_id'] = $member_id;
            if (isset($_SESSION["temp_bookings"])) {
                header("Location: process_facility_booking.php");
            } else {
                header("Location: index.php");
            }
        }
    }
}
?>

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
        if (!$success) {
            echo "<section>";
            echo "<h4>Login Failed</h4>";
            echo "<h2>The following errors were detected:</h2>";
            echo "<p>" . $error_msg . "</p>";
            echo "<a href='login.php' class='btn btn-primary'>Back to Login</a>";
            echo "</section>";
        }
        ?>
    </main>
</body>
<?php include "includes/footer.inc.php"; ?>
</html>