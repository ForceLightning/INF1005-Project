<?php
ob_start();
include_once "includes/util.php";
session_start();

function insert_bookings() {
    global $user_bookings, $branch, $bookings, $error_msg;
    $success = true;
    $bookings = array();
    $config = parse_ini_file('../../private/project-db-config.ini', true);
    $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
    if ($conn->connect_error) {
        $error_msg[] = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        for ($i = 0; $i < count($user_bookings); $i++) {
            $stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_id = ? AND time_end > NOW() AND time_end < NOW() + INTERVAL 7 DAY AND booked = 0");
            $booking_id = $user_bookings[$i];
            // check that all booking_ids are valid
            $stmt->bind_param("i", $booking_id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows == 0) {
                    $error_msg[] = "Booking " . $user_bookings[$i] . " is no longer valid.";
                    $success = false;
                    break;
                } else {
                    for ($j = 0; $j < $result->num_rows; $j++) {
                        $start_time = new DateTime($result->fetch_assoc()["time_start"]);
                        $end_time = new DateTime($result->fetch_assoc()["time_end"]);
                        $date = $start_time->format("Y-m-d");
                        $start_time = $start_time->format("H:i");
                        $end_time = $end_time->format("H:i");
                        $bookings[] = array(
                            "facility_name" => $result->fetch_assoc()["facility_name"],
                            "booking_id" => $result->fetch_assoc()["booking_id"],
                            "date" => $date,
                            "start_time" => $start_time,
                            "end_time" => $end_time

                        );
                    }
                }
            } else {
                $error_msg[] = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error;
                $success = false;
                break;
            }
        }
    }
    // set the bookings
    if ($success) {
        $conn->begin_transaction();
        for ($i = 0; $i < count($user_bookings); $i++) {
            $stmt = $conn->prepare("UPDATE bookings SET booked = 1, member_id = ?, booked_at = NOW() WHERE booking_id = ?");
            $member_id = $_SESSION["member_id"];
            $booking_id = $user_bookings[$i];
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
            if (isset($_SESSION["temp_bookings"])) {
                $user_bookings = array_merge($user_bookings, $_SESSION["temp_bookings"]);
                unset($_SESSION["temp_bookings"]);
            }
            if (count($user_bookings) == 0) {
                http_response_code(400);
                exit();
            }
            insert_bookings();
        } else {
            $_SESSION["temp_bookings"] = $user_bookings;
            if (headers_sent()) {
                die("cannot redirect; headers already sent (output).");
            }
            header("Location: login.php");
            exit();
        }
    } else {
        http_response_code(400);
    }
} else if (isset($_SESSION["temp_bookings"]) && isset($_SESSION["member_id"])) {
    $user_bookings = $_SESSION["temp_bookings"];
    insert_bookings();
    unset($_SESSION["temp_bookings"]);
} else {
    http_response_code(405);
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once "includes/header.inc.php"; ?>
    <title>Bookings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "includes/nav.inc.php";
    ?>
    <main>
        <?php
        echo "<section>";
        echo "<h2>Booking Summary</h2>";
        if (isset($error_msg)) {
            echo "<h4>Booking failed!</h4>";
            echo "<p>" . implode("<br>", $error_msg) . "</p>";
            echo "<a href='facility_booking.php' class='btn btn-primary'>Back to bookings</a>";
        } else {
            echo "<h4>Bookings successful!</h4>";
            for ($i = 0; $i < count($bookings); $i++) {
                echo "<p>" . $bookings[$i]["facility_name"] . " on " . $bookings[$i]["date"] . " from " . $bookings[$i]["start_time"] . " to " . $bookings[$i]["end_time"] . "</p>";
            }
            // var_dump($bookings);
        }
        echo "</section>";
        ?>
    </main>
    <?php
    include "includes/footer.inc.php";
    ?>
</body>

</html>