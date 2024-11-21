<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$name = $_POST['name'];
$password = $_POST['password'];

// Prepare and execute query
$sql = "SELECT * FROM sign_up WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    echo "User exists.";
    header("Location: ndex.php");
} else {
    echo "User does not exist.";
}

$stmt->close();
$conn->close();
?> 