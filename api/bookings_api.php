<?php
    require "../vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
    $dotenv->load();
    $branch = $_ENV['BRANCH'];
    header("Content-Type: application/json; charset=UTF-8");
    function get_bookings_from_db()
    {
        global $bookings, $branch;
        $config = parse_ini_file('../../../private/project-db-config.ini', true);
        $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
        if ($conn->connect_error) {
            $error_msg = "Connection failed: " . $conn->connect_error . "<br>";
            $success = false;
        } else {
            $stmt = $conn->prepare("SELECT booking_id, location_name, time_start, time_end, booked FROM bookings WHERE time_end > NOW() AND time_end < NOW() + INTERVAL 7 DAY ORDER BY time_start ASC");
            if ($stmt->execute()) {
                $success = true;
                $result = $stmt->get_result();
                // create a map of bookings
                $bookings = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $booking = array(
                            "location_name" => $row["location_name"],
                            "time_start" => $row["time_start"],
                            "time_end" => $row["time_end"],
                            "booked" => $row["booked"]
                        );
                        $bookings[$row["booking_id"]] = $booking;
                    }
                    echo json_encode($bookings);
                } else {
                    echo json_encode(array(
                        "error" => "No bookings found."
                    ));
                }
            } else {
                $error_msg = "Execute Failed: (" . $stmt->errno . ") " . $stmt->error . "<br>";
                $success = false;
            }
            $stmt->close();
        }
        $conn->close();
        if (!$success) {
            $error = array(
                "error" => $error_msg
            );
            echo json_encode($error);
        }
    }
?>