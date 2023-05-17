<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: login.php");
  exit;
}

// Connect to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "mydb");

// Get the user's information from the database
$email = $_SESSION["email"];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<h1>Welcome <?php echo $user["firstname"]; ?>!</h1>
<p>Your email is <?php echo $user["email"]; ?>.</p>
<p><a href="logout.php">Log out</a></p>
<p><a href="index.php">Back to home page</a></p>
