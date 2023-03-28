<?php
    require_once "../includes/util.php";
    header("Content-Type: application/json; charset=UTF-8");
    function get_bookings_from_db()
    {
        global $bookings, $branch;
        $success = true;
        $config = parse_ini_file('../../../private/project-db-config.ini', true);
        $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
        if ($conn->connect_error) {
            $error_msg = "Connection failed: " . $conn->connect_error . "<br>";
            $success = false;
        } else {
            $stmt = $conn->prepare("SELECT b.booking_id, b.location_id, b.location_name, b.time_start, b.time_end, b.booked, f.description FROM bookings as b JOIN facilities as f ON b.location_id = f.facility_id WHERE time_end > NOW() AND time_end < NOW() + INTERVAL 7 DAY ORDER BY location_id, time_start ASC");
            if ($stmt->execute()) {
                $success = true;
                $result = $stmt->get_result();
                // create a map of location => bookings
                $bookings = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $booking = array(
                            "booking_id" => $row["booking_id"],
                            "time_start" => $row["time_start"],
                            "time_end" => $row["time_end"],
                            "booked" => $row["booked"]
                        );
                        // add the booking to the array of bookings for the location
                        $bookings[$row["location_id"]]["bookings"][] = $booking;
                        $bookings[$row["location_id"]]["description"] = $row["description"];
                        $bookings[$row["location_id"]]["location_name"] = $row["location_name"];
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
    get_bookings_from_db();
?>