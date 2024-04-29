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
$height = $_POST['height'];
$weight = $_POST['weight'];
$milestone = $_POST['milestone'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO growth_data (child_id, date, height, weight, milestone)
        VALUES ('$child_id', '$date', '$height', '$weight', '$milestone')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
