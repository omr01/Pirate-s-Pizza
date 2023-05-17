<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION["email"])) {
  header("Location: login.php");
  exit();
}

$conn = mysqli_connect("localhost", "root", "", "mydb");

// Check if the message ID was provided
if (!isset($_GET["id"])) {
  header("Location: messages.php");
  exit();
}

$message_id = $_GET["id"];

// Check if the message exists in the database
$sql = "SELECT * FROM messages WHERE id='$message_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
  header("Location: admin.php");
  exit();
}

// Delete the message from the database
$sql = "DELETE FROM messages WHERE id='$message_id'";
mysqli_query($conn, $sql);

// Redirect back to the messages page
header("Location: admin.php");
exit();
?>
