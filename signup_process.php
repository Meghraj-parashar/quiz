<?php
// signup_process.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user already exists
    $check_sql = "SELECT * FROM sign_up WHERE email = ? OR name = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $email, $name);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "User already exists!";
    } else {
        // Insert new user
        $sql = "INSERT INTO sign_up (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);
        
        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: login.html");
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $check_stmt->close();
}

$conn->close();
?>
