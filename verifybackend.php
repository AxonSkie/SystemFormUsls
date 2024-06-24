<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "systemm";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the POST request
$id = $_POST['id'];

// Check if ID is set and valid
if (isset($id) && is_numeric($id)) {
    // Update the database value
    $sql = "UPDATE users SET Status = 'Verified' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Database value updated successfully";
    } else {
        echo "Error updating database: " . $conn->error;
    }
} else {
    echo "Invalid ID";
}

$conn->close();
?>
