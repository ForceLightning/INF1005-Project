<?php
include_once "includes/util.php";
session_start();

function insert_bookings() {
    global $user_bookings, $branch;
    $success = true;
    $config = parse_ini_file('../../private/project-db-config.ini', true);
    $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
    if ($conn->connect_error) {
        $error_msg[] = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        for ($i = 0; $i < count($user_bookings); $i++) {
            $stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_id = ? AND time_end > NOW() AND time_end < NOW() + INTERVAL 7 DAY AND booked = 0");
            $booking_id = $user_bookings[$i];
            $booking_id = sanitize_input($booking_id);
            // check that all booking_ids are valid
            $conn->begin_transaction();
            try {
                $stmt->bind_param("i", $booking_id);
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    if ($result->num_rows == 0) {
                        $error_msg[] = "Booking " . $user_bookings[$i] . " is no longer valid.";
                        $success = false;
                        break;
                    } 
                } else {
                    $error_msg[] = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error;
                    $success = false;
                    break;
                }
            } catch (mysqli_sql_exception $e) {
                $conn->rollback();
                throw $e;
            }
        }
    }
    // set the bookings
    if ($success) {
        $conn->begin_transaction();
        for ($i = 0; $i < count($user_bookings); $i++) {
            $stmt = $conn->prepare("UPDATE bookings VALUES (booked = 1, member_id = ?, booked_at = NOW()) WHERE booking_id = ?");
            $member_id = $_SESSION["member_id"];
            $booking_id = $user_bookings[$i]["booking_id"];
            try {
                $stmt->bind_param("ii", $member_id, $booking_id);
                if ($stmt->execute()) {
                    $success = true;
                } else {
                    $error_msg[] = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error;
                    $success = false;
                    break;
                }
            } catch (mysqli_sql_exception $e) {
                $conn->rollback();
                throw $e;
            }
        }
    }
    if ($success) {
        $conn->commit();
    } else {
        $conn->rollback();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["booking-slots"])) {
        // decode the booking slots from json format
        $user_bookings = json_decode($_POST["booking-slots"], true);
        foreach ($user_bookings as $booking_id) {
            if (!is_numeric($booking_id)) {
                http_response_code(400);
                exit();
            }
        }
        if (isset($_SESSION["member_id"])) {
            if (count($user_bookings) == 0) {
                http_response_code(400);
                exit();
            }
            insert_bookings();
        } else {
            $_SESSION["temp_bookings"] = $user_bookings;
            header("Location: login.php");
        }
    } else {
        http_response_code(400);
    }
} else {
    http_response_code(405);
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once "includes/header.inc.php"; ?>
    <title>Placeholder</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "includes/nav.inc.php";
    ?>
    <main>
        <?php
        if (isset($error_msg)) {
            echo "<p>" . implode("<br>", $error_msg) . "</p>";
        } else {
            echo "<p>Bookings successful!</p>";
        }
        ?>
    </main>
    <?php
    include "includes/footer.inc.php";
    ?>
</body>

</html>