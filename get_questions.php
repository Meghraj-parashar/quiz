<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "quiz_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, question_text, option1, option2, option3, option4, correct_option FROM questions";
$result = $conn->query($sql);

$questions = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}
$conn->close();

header('Content-Type: application/json');
echo json_encode($questions);
?>
