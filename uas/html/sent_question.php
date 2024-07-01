<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electronix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare SQL statement
$sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters and execute
$stmt->bind_param("sss", $name, $email, $message);

// Check if prepare() succeeded
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

// Execute the statement
if ($stmt->execute()) {
    // Redirect to contact.php upon successful insertion
    echo "Successful!";
    header("Location: contact.php");
    exit(); // Stop further execution after redirection
} else {
    // Handle execution errors
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
