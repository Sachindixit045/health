<?php
// Database connection parameters
$servername = "webhost";
$username = "sachindixit";
$password = "1234";
$dbname = "child_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$child_id = $_POST['child_id'];
$date = $_POST['date'];
$nap_start = $_POST['nap_start'];
$nap_end = $_POST['nap_end'];
$nighttime_start = $_POST['nighttime_start'];
$nighttime_end = $_POST['nighttime_end'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO sleep_data (child_id, date, nap_start, nap_end, nighttime_start, nighttime_end)
        VALUES ('$child_id', '$date', '$nap_start', '$nap_end', '$nighttime_start', '$nighttime_end')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
