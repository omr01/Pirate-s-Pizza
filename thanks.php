<?php
session_start();
if (isset($_SESSION["email"])) {
  // If the user is logged in, display their name
  // Connect to the MySQL database
  $conn = mysqli_connect("localhost", "root", "", "mydb");

  // Get the user's information from the database
  $email = $_SESSION["email"];
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thanks.css">
    <title>Pirate's Pizza</title>
</head>
<style>
.aaa {
    color: red;
}
</style>
<body background="Background.jpg">
    
    <nav id="navbar">
        <div id="logo">
            <img src="main logo.png" alt="اهلا">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Cart.php">Menu</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="php/manuy.php">My Cart</a></li>
            <li><lable class="aaa">Welcome <?php echo $user["firstname"]; ?></lable></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><a href="logout.php">Logout</a></li>
            <li><img src="pictures\hotLine_english.png"></li>
        </ul>
    </nav>
    
    <div class="frame">
        <div class="title">
            Complaint received
        </div>
        <div class="form">
           <div class="inputfield">
              <pre>
 You will be dealt with by a customer service
 representative within four hours
Thank you for waiting</pre>
           </div>  
            
           
        </div>
    </div>

    <footer id="footer">
        <a href="https://play.google.com/store/games"target="_blank"><img src="\Screenshot (88)(10).png"  width="1263" height="320"></a>
        <br><br>
        <section class="client-container">
        <div id="clinet">
            <div class="client-item">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="Careers.php">Job Application</a></li>
                    <li><a href="#">Polices</a></li>
                    <li><a href="#">Nutrition</a></li>
                    <li><a href="Customer Service.php">Customer Service</a></li>
                </ul>
            <br><br>
            <p>Connect With US</p>
            <div class="pics">
                <br>
           <a href="https://www.instagram.com/"target="_blank"><img src="\inasta.png"  width="50"></a>
           <a href="https://www.facebook.com/"target="_blank"><img src="\facebook.png"  width="50"></a>
           <a href="https://twitter.com/"target="_blank"><img src="\twitter.png"  width="50"></a>
           <a href="https://www.youtube.com/"target="_blank"><img src="\youtube.png"  width="50"></a>
        </div>
    </div>
    </div>  
    <br>
    <p class="footp">Copyright &copy; www.PiratePizza.com All Rights Reserved.</p>
    <br><br>
    </footer>
</section>
</body>
</html>
<?php
} else {
  // If the user is not logged in, display a login button
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thanks.css">
    <title>Pirate's Pizza</title>
</head>
<body background="Background.jpg">
    
    <nav id="navbar">
        <div id="logo">
            <img src="main logo.png" alt="اهلا">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu pizza.php">Menu</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="Customer Service.php">Customer Service</a></li>
            <li><a href="index.php">My Cart</a></li>
            <li><a href="login.php">LOG-IN</a></li>
        </ul>
    </nav>
    
    <div class="frame">
        <div class="title">
            Complaint received
        </div>
        <div class="form">
           <div class="inputfield">
              <pre>
 You will be dealt with by a customer service
 representative within four hours
Thank you for waiting</pre>
           </div>  
            
           
        </div>
    </div>

    <footer id="footer">
        <a href="https://play.google.com/store/games"target="_blank"><img src="\Screenshot (88)(10).png"  width="1263" height="320"></a>
        <br><br>
        <section class="client-container">
        <div id="clinet">
            <div class="client-item">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="Careers.php">Job Application</a></li>
                    <li><a href="#">Polices</a></li>
                    <li><a href="#">Nutrition</a></li>
                    <li><a href="Customer Service.php">Customer Service</a></li>
                </ul>
            <br><br>
            <p>Connect With US</p>
            <div class="pics">
                <br>
           <a href="https://www.instagram.com/"target="_blank"><img src="\inasta.png"  width="50"></a>
           <a href="https://www.facebook.com/"target="_blank"><img src="\facebook.png"  width="50"></a>
           <a href="https://twitter.com/"target="_blank"><img src="\twitter.png"  width="50"></a>
           <a href="https://www.youtube.com/"target="_blank"><img src="\youtube.png"  width="50"></a>
        </div>
    </div>
    </div>  
    <br>
    <p class="footp">Copyright &copy; www.PiratePizza.com All Rights Reserved.</p>
    <br><br>
    </footer>
</section>
</body>
</html>
<?php
}
?>
