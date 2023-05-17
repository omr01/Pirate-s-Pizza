<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    #container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
    h1, h2 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    th, td {
      padding: 10px;
      text-align: left;
      vertical-align: top;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    td button {
      background-color: #26d741;
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
      cursor: pointer;
    }
    td button:hover {
      background-color: #0cf32f;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    // Check if the user is logged in
    if (isset($_SESSION["email"])) {
      // If the user is logged in, display their name
      $conn = mysqli_connect("localhost", "root", "", "mydb");
      $email = $_SESSION["email"];
      $sql = "SELECT * FROM users WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($result);

      // Display welcome message
      echo "<h1>Welcome " . $user["firstname"] . "!</h1>";

      // If the user is an admin, display all messages with delete button
      if ($user["rank"] == "admin") {
        $sql = "SELECT * FROM messages";
        $result = mysqli_query($conn, $sql);

        // Display all messages in a table with delete button
        echo "<h2>All orders:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Price</th><th>Order</th><th></th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["subject"] . "</td>";
          echo "<td>" . $row["message"] . "</td>";
          echo "<td><button onclick=\"deleteMessage(" . $row["id"] . ")\">Accept</button></td>";
          echo "</tr>";
        }
        echo "</table>";
      } else {
        // If the user is not an admin, display a message informing them
        echo "<p>You do not have permission to view all orders.</p>";
      }
    } else {
      // If the user is not logged in, display a login button
      echo '<h1>You are not login yet.</h1>';
      echo '<p>Please <a href="login.php">log in</a> as admin to use this services.</p>';
    }
    ?>
  </div>
  
  <!-- Script to handle message deletion -->
  <script>
    function deleteMessage(id) {
      if (confirm('Are you sure you want to accept this order?')) {
        window.location.href = 'delete_message.php?id=' + id;
      }
    }
  </script>
</body>
</html>
