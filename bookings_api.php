<?php
    require "vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $branch = $_ENV['BRANCH'];
    function get_bookings_from_db()
    {
        // TODO: Get bookings from database
        global $bookings;
        $config = parse_ini_file('../../private/project-db-config.ini', true);
        $conn = new mysqli($config[$branch]['servername'], $config[$branch]['username'], $config[$branch]['password'], $config[$branch]['dbname']);
        if ($conn->connect_error) {
            $error_msg = "Connection failed: " . $conn->connect_error . "<br>";
            $success = false;
        } else {
            $stmt = $conn->prepare("SELECT (booking_id, location_name, time_start, time_end, booked) FROM BOOKINGS WHERE time_end > NOW() AND time_end < NOW() + INTERVAL 7 DAY ORDER BY time_start ASC");
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
?>