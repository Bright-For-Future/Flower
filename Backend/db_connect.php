<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flower";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstName, $lastName, $gender);

// $stmt->execute();

// if ($stmt->affected_rows > 0) {
//     echo "Registration successful!";
// } else {
//     echo "Registration failed!";
// }
// $stmt->close();
// $conn->close();
?>