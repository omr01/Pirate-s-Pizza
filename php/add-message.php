<?php
// retrieve message and price from client-side JavaScript
$message = $_POST['message'];
$price = $_POST['price'];

// connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert message and price into database table
$sql = "INSERT INTO messages (subject, message) VALUES ('$price', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message added successfully";
} else {
  echo "Error adding message: " . $conn->error;
}

$conn->close();
?>
