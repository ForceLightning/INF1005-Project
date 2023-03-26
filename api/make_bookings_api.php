<?php 
require_once "../includes/util.php";
header("Content-Type: application/json; charset=UTF-8");
session_start();

function insert_bookings() {
    global $user_bookings, $branch;
    $success = true;
    $config = parse_ini_file('../../../private/project-db-config.ini', true);
    $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
    if ($conn->connect_error) {
        $error_msg[] = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        // check all bookings are valid
        for ($i = 0; $i < count($user_bookings); $i++) {
            $stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_id = ? AND time_end > NOW() AND time_end < NOW() + INTERVAL 7 DAY AND booked = 0");
            $booking_id = $user_bookings[$i]["booking_id"];
            $booking_id = sanitize_input($booking_id);
            $stmt->bind_param("i", $booking_id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows == 0) {
                    $error_msg[] = "Booking " . $user_bookings[$i] . " is no longer valid.";
                    $success = false;
                    break;
                } 
            } else {
                $error_msg = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error;
                $success = false;
                break;
            }
            $stmt->close();
        }
    }
    // set the bookings
    if ($success) {
        for ($i = 0; $i < count($user_bookings); $i++) {
            $stmt = $conn->prepare("UPDATE bookings VALUES (booked = 1, member_id = ?, booked_at = NOW()) WHERE booking_id = ?");
            $member_id = sanitize_input($user_bookings[$i]["member_id"]);
            $booking_id = sanitize_input($user_bookings[$i]["booking_id"]);
            $stmt->bind_param("ii", $member_id, $booking_id);
            if ($stmt->execute()) {
                $success = true;
            } else {
                $error_msg[] = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error;
                $success = false;
                break;
            }
            $stmt->close();
        }
    }
    // return the result
    if ($success) {
        // 200 OK
        http_response_code(200);
        echo json_encode(array(
            "success" => "Bookings made successfully."
        ));
    } else {
        // 500 Internal Server Error
        http_response_code(500);
        echo json_encode(array(
            "error" => $error_msg
        ));
    }
}

// check if the user is logged in
if (isset($_SESSION["member_id"])) {
    // check if it is a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // check if the request body is not empty
        if (!empty(file_get_contents("php://input"))) {
            // get the request body
            $data = json_decode(file_get_contents("php://input"), true);
            // check if the request body is valid
            if (isset($data["bookings"])) {
                // get the user's bookings
                $user_bookings = $data["bookings"];
                // insert the bookings
                insert_bookings();
            } else {
                // 400 Bad Request
                http_response_code(400);
                echo json_encode(array(
                    "error" => "Invalid request body."
                ));
            }
        } else {
            // 400 Bad Request
            http_response_code(400);
            echo json_encode(array(
                "error" => "Request body is empty."
            ));
        }
    } else {
        // 405 Method Not Allowed
        http_response_code(405);
        echo json_encode(array(
            "error" => "Method not allowed."
        ));
    }
} else {
    // 401 Unauthorized
    http_response_code(401);
    echo json_encode(array(
        "error" => "Unauthorized."
    ));
}

?>