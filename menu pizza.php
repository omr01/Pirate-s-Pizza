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
    <title>Pirate's Pizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="menu pizza.css">
</head>
<style>
.aaa {
    color: red;
}
<body >
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
      <div id="menu" class="w3-container w3-white w3-xxlarge w3-padding-64">
    
    <div class="w3-row w3-center w3-border w3-orange">
    <a href="#pizza"><div class="w3-third w3-padding-large w3-vivid-orange-yellow">Pizza</div></a>
    <a href="#starters"><div class="w3-third w3-padding-large w3-hover-lime">Starters</div></a>
    <a href="#Salad"><div class="w3-third w3-padding-large w3-hover-lime">Salad</div></a>
    </div>
    <div id="pizza" class="w3-container w3-white w3-padding-32">
  <div class="w3-row-padding w3-margin-top">
    <div class="w3-container w3-deep-purple">
      <h2><center> pizza </center></h2>
      </div>
      <br>
  <div class="w3-third">
  <div class="w3-card">
  <img src="WhatsApp Image 2022-12-04 at 00.04.17.jpg" style="width:100%">
  <div class="w3-container">
  <h4>Pepperoni And Veggies Pizza<br>EGB 174.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
  </div>
  </div>
  </div>
  
  <div class="w3-third">
    <div class="w3-card">
    <img src="WhatsApp Image 2022-12-04 at 00.05.18.jpg" style="width:100%">
    <div class="w3-container">
    <h4>Heart Shaped Pepperoni Pizza<br>EGB 139.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
    </div>
    </div>
    </div>

    <div class="w3-third">
      <div class="w3-card">
      <img src="WhatsApp Image 2022-12-04 at 00.06.08.jpg" style="width:100%">
      <div class="w3-container">
      <h4> Veggie Pizza<br>EGB 164.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
      </div>
      </div>
      </div>
  </div>
  
  <div class="w3-row-padding w3-margin-top">
  
    <div class="w3-third">
    <div class="w3-card">
    <img src="WhatsApp Image 2022-12-04 at 00.07.43.jpg" style="width:100%">
    <div class="w3-container">
    <h4>Mushroom And Veggies Pizza<br>EGB 144.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
    </div>
    </div>
    </div>
    
    <div class="w3-third">
      <div class="w3-card">
      <img src="WhatsApp Image 2022-12-04 at 00.07.59.jpg" style="width:100%">
      <div class="w3-container">
      <h4> Italian Classic Pizza<br>EGB 134.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
      </div>
      </div>
      </div>
  
      <div class="w3-third">
        <div class="w3-card">
        <img src="WhatsApp Image 2022-12-04 at 00.08.52.jpg" style="width:100%">
        <div class="w3-container">
        <h4>Stuffed Crust Pepperoni Pizza<br>EGB 164.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
        </div>
        </div>
        </div>
    </div>

    <div class="w3-row-padding w3-margin-top">
  
      <div class="w3-third">
        <div class="w3-card">
        <img src="WhatsApp Image 2022-12-04 at 00.10.25.jpg" style="width:100%">
        <div class="w3-container">
        <h4>pepperoni Pizza<br>EGB 154.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
        </div>
        </div>
        </div>
    
        <div class="w3-third">
          <div class="w3-card">
          <img src="WhatsApp Image 2022-12-04 at 00.23.01.jpg" style="width:100%">
          <div class="w3-container">
          <h4>Shrimp Pizza<br>EGB 199.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>

          <div class="w3-third">
      <div class="w3-card">
      <img src="WhatsApp Image 2022-12-04 at 00.09.46.jpg" style="width:100%">
      <div class="w3-container">
      <h4>Pizza Cardinali<br>EGB 184.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
      </div>
      </div>
      </div>

      </div>
      <br>

      <div class="w3-container w3-deep-purple">
      <h2><center>Dessert Pizza</center></h2>
      </div>
      <div class="w3-row-padding w3-margin-top">
  
        <div class="w3-third">
        <div class="w3-card">
        <img src="WhatsApp Image 2022-12-04 at 00.10.52.jpg" style="width:100%">
        <div class="w3-container">
        <h4>Blueberry And Strawberry Pizza<br>EGB 124.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
        </div>
        </div>
        </div>
        
        <div class="w3-third">
          <div class="w3-card">
          <img src="WhatsApp Image 2022-12-04 at 00.11.24.jpg" style="width:100%">
          <div class="w3-container">
          <h4>Marshmallow Chocolate Pizza<br>EGB 164.90 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>
      
          <div class="w3-third">
            <div class="w3-card">
            <img src="WhatsApp Image 2022-12-04 at 00.12.27.jpg" style="width:100%">
            <div class="w3-container">
            <h4> Raspberry Chocolate Pizza<br>EGB 184.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
            </div>
            </div>
            </div>

        </div>

      </div>

        <div id="starters" class="w3-container w3-white w3-padding-32">
          <div class="w3-container w3-deep-purple">
            <h2><center> starters</center></h2>
            </div>
            <div class="w3-row-padding w3-margin-top">

          <div class="w3-third">
          <div class="w3-card">
          <img src="\Cheese-Fondue-1-SpendWithPennies-3.jpg" style="width:100%">
          <div class="w3-container">
          <h4>Cheese Fondue Sauce<br>EGB 11.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>

          <div class="w3-third">
            <div class="w3-card">
            <img src="\Ranch-Dip-Recipe-Photo-2.jpg" style="width:100%">
            <div class="w3-container">
            <h4> Ranch Sauce<br>EGB 9.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
            </div>
            </div>
            </div>

            <div class="w3-third">
            <div class="w3-card">
            <img src="\3e726845-3e8e-4413-9e58-caca3f581fd4.jpg" style="width:100%">
            <div class="w3-container">
            <h4> Garlic Bread Supreme<br>EGB 24.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
            </div>
            </div>
            </div>

            </div>
        
              <div class="w3-row-padding w3-margin-top">

                <div class="w3-third">
                  <div class="w3-card">
                  <img src="\17966458_1786846531332878_3786159728492127255_o.jpg" style="width:100%">
                  <div class="w3-container">
                  <h4> Trio<br>EGB 99.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
                  </div>
                  </div>
                  </div>

                  <div class="w3-third">
                    <div class="w3-card">
                    <img src="\30595286_1673206019433391_9187659804695330816_n.jpg" style="width:100%">
                    <div class="w3-container">
                    <h4> Potato Wedges<br>EGB 39.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                    </div>
                    </div>
                    </div>

                     <div class="w3-third">
                  <div class="w3-card">
                  <img src="\picrTMrJS.jpg" style="width:100%">
                  <div class="w3-container">
                  <h4> Thai Chili Sauce <br>EGB 9.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
                  </div>
                  </div>
                  </div>
          </div>
          <div class="w3-row-padding w3-margin-top">
                 
                  <div class="w3-third">
                    <div class="w3-card">
                    <img src="\Homemade-Honey-Mustard-Sauce-1-1200.jpg" style="width:100%">
                    <div class="w3-container">
                    <h4>Honey Mustard Sauce<br>EGB 10.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                    </div>
                    </div>
                    </div>
                  <div class="w3-third">
                    <div class="w3-card">
                    <img src="\00c5800ec51b27e9aae145f7ae8defc8_w750_h500.jpg" style="width:100%">
                    <div class="w3-container">
                    <h4> Fire Wings<br>EGB 49.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                    </div>
                    </div>
                    </div>
            

              <div class="w3-third">
                <div class="w3-card">
                <img src="\20161202170922alarab87598.webp" style="width:100%">
                <div class="w3-container">
                <h4> Chicken BBQ Spin Rolls<br>EGB 54.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                </div>
                </div>
                </div>
        </div>
  </div>
  <div id="Salad" class="w3-container w3-white w3-padding-32">
    <div class="w3-container w3-deep-purple">
      <h2><center> Salad </center></h2>
      </div>
      <div class="w3-row-padding w3-margin-top">



          <div class="w3-third">
            <div class="w3-card">
            <img src="\Garden-Salad_47-SQ.webp" style="width:100%">
            <div class="w3-container">
            <h4>  Garden Salad <br>EGB 39.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
            </div>
            </div>
            </div>

            <div class="w3-third">
              <div class="w3-card">
              <img src="\web-neu-1500x1500-core-italienischer-salat-1-1024x1024.png" style="width:100%">
              <div class="w3-container">
              <h4> Italienischer Salat <br>EGB 29.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
              </div>
              </div>
              </div>

        <div class="w3-third">
          <div class="w3-card">
          <img src="\ggg.jpg" style="width:100%">
          <div class="w3-container">
          <h4> Greek Pasta Salad<br>EGB 64.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>

      </div>
  </div>
      </div>
  <footer id="footer">
    <section class="client-container">
    <div id="clinet">
        <div class="client-item">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Polices</a></li>
                <li><a href="#">Nutrition</a></li>
                <li><a href="Customer Service.php">Customer Service</a></li>
            </ul>
        <br>
        <p>Connect With US</p>
        <div class="pics">
            <br>
       <a href="https://www.instagram.com/"target="_blank"><img src="\inasta.png"  width="70"></a>
       <a href="https://www.facebook.com/"target="_blank"><img src="\facebook.png"  width="70"></a>
       <a href="https://twitter.com/"target="_blank"><img src="\twitter.png"  width="70"></a>
       <a href="https://www.youtube.com/"target="_blank"><img src="\youtube.png"  width="70"></a>
    </div>
</div>
</div>  
<br>
<p class="footp">Copyright &copy; www.PiratePizza.com All Rights Reserved.</p>
<br>
</section>
</footer>
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
    <title>Pirate's Pizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="menu pizza.css">
</head>
<style>
.aaa {
    color: red;
}
<body >
  <nav id="navbar">
    <div id="logo">
        <img src="main logo.png" alt="اهلا">
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
            <li><a href="Cart.php">Menu</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="php/manuy.php">My Cart</a></li>
            <li><a href="login.php">LOG-IN</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><img src="pictures\hotLine_english.png"></li>
    </ul>
</nav>
      <div id="menu" class="w3-container w3-white w3-xxlarge w3-padding-64">
    
    <div class="w3-row w3-center w3-border w3-orange">
    <a href="#pizza"><div class="w3-third w3-padding-large w3-vivid-orange-yellow">Pizza</div></a>
    <a href="#starters"><div class="w3-third w3-padding-large w3-hover-lime">Starters</div></a>
    <a href="#Salad"><div class="w3-third w3-padding-large w3-hover-lime">Salad</div></a>
    </div>
    <div id="pizza" class="w3-container w3-white w3-padding-32">
  <div class="w3-row-padding w3-margin-top">
    <div class="w3-container w3-deep-purple">
      <h2><center> pizza </center></h2>
      </div>
      <br>
  <div class="w3-third">
  <div class="w3-card">
  <img src="WhatsApp Image 2022-12-04 at 00.04.17.jpg" style="width:100%">
  <div class="w3-container">
  <h4>Pepperoni And Veggies Pizza<br>EGB 174.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
  </div>
  </div>
  </div>
  
  <div class="w3-third">
    <div class="w3-card">
    <img src="WhatsApp Image 2022-12-04 at 00.05.18.jpg" style="width:100%">
    <div class="w3-container">
    <h4>Heart Shaped Pepperoni Pizza<br>EGB 139.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
    </div>
    </div>
    </div>

    <div class="w3-third">
      <div class="w3-card">
      <img src="WhatsApp Image 2022-12-04 at 00.06.08.jpg" style="width:100%">
      <div class="w3-container">
      <h4> Veggie Pizza<br>EGB 164.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
      </div>
      </div>
      </div>
  </div>
  
  <div class="w3-row-padding w3-margin-top">
  
    <div class="w3-third">
    <div class="w3-card">
    <img src="WhatsApp Image 2022-12-04 at 00.07.43.jpg" style="width:100%">
    <div class="w3-container">
    <h4>Mushroom And Veggies Pizza<br>EGB 144.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
    </div>
    </div>
    </div>
    
    <div class="w3-third">
      <div class="w3-card">
      <img src="WhatsApp Image 2022-12-04 at 00.07.59.jpg" style="width:100%">
      <div class="w3-container">
      <h4> Italian Classic Pizza<br>EGB 134.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
      </div>
      </div>
      </div>
  
      <div class="w3-third">
        <div class="w3-card">
        <img src="WhatsApp Image 2022-12-04 at 00.08.52.jpg" style="width:100%">
        <div class="w3-container">
        <h4>Stuffed Crust Pepperoni Pizza<br>EGB 164.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
        </div>
        </div>
        </div>
    </div>

    <div class="w3-row-padding w3-margin-top">
  
      <div class="w3-third">
        <div class="w3-card">
        <img src="WhatsApp Image 2022-12-04 at 00.10.25.jpg" style="width:100%">
        <div class="w3-container">
        <h4>pepperoni Pizza<br>EGB 154.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
        </div>
        </div>
        </div>
    
        <div class="w3-third">
          <div class="w3-card">
          <img src="WhatsApp Image 2022-12-04 at 00.23.01.jpg" style="width:100%">
          <div class="w3-container">
          <h4>Shrimp Pizza<br>EGB 199.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>

          <div class="w3-third">
      <div class="w3-card">
      <img src="WhatsApp Image 2022-12-04 at 00.09.46.jpg" style="width:100%">
      <div class="w3-container">
      <h4>Pizza Cardinali<br>EGB 184.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
      </div>
      </div>
      </div>

      </div>
      <br>

      <div class="w3-container w3-deep-purple">
      <h2><center>Dessert Pizza</center></h2>
      </div>
      <div class="w3-row-padding w3-margin-top">
  
        <div class="w3-third">
        <div class="w3-card">
        <img src="WhatsApp Image 2022-12-04 at 00.10.52.jpg" style="width:100%">
        <div class="w3-container">
        <h4>Blueberry And Strawberry Pizza<br>EGB 124.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
        </div>
        </div>
        </div>
        
        <div class="w3-third">
          <div class="w3-card">
          <img src="WhatsApp Image 2022-12-04 at 00.11.24.jpg" style="width:100%">
          <div class="w3-container">
          <h4>Marshmallow Chocolate Pizza<br>EGB 164.90 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>
      
          <div class="w3-third">
            <div class="w3-card">
            <img src="WhatsApp Image 2022-12-04 at 00.12.27.jpg" style="width:100%">
            <div class="w3-container">
            <h4> Raspberry Chocolate Pizza<br>EGB 184.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
            </div>
            </div>
            </div>

        </div>

      </div>

        <div id="starters" class="w3-container w3-white w3-padding-32">
          <div class="w3-container w3-deep-purple">
            <h2><center> starters</center></h2>
            </div>
            <div class="w3-row-padding w3-margin-top">

          <div class="w3-third">
          <div class="w3-card">
          <img src="\Cheese-Fondue-1-SpendWithPennies-3.jpg" style="width:100%">
          <div class="w3-container">
          <h4>Cheese Fondue Sauce<br>EGB 11.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>

          <div class="w3-third">
            <div class="w3-card">
            <img src="\Ranch-Dip-Recipe-Photo-2.jpg" style="width:100%">
            <div class="w3-container">
            <h4> Ranch Sauce<br>EGB 9.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
            </div>
            </div>
            </div>

            <div class="w3-third">
            <div class="w3-card">
            <img src="\3e726845-3e8e-4413-9e58-caca3f581fd4.jpg" style="width:100%">
            <div class="w3-container">
            <h4> Garlic Bread Supreme<br>EGB 24.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
            </div>
            </div>
            </div>

            </div>
        
              <div class="w3-row-padding w3-margin-top">

                <div class="w3-third">
                  <div class="w3-card">
                  <img src="\17966458_1786846531332878_3786159728492127255_o.jpg" style="width:100%">
                  <div class="w3-container">
                  <h4> Trio<br>EGB 99.99<div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
                  </div>
                  </div>
                  </div>

                  <div class="w3-third">
                    <div class="w3-card">
                    <img src="\30595286_1673206019433391_9187659804695330816_n.jpg" style="width:100%">
                    <div class="w3-container">
                    <h4> Potato Wedges<br>EGB 39.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                    </div>
                    </div>
                    </div>

                     <div class="w3-third">
                  <div class="w3-card">
                  <img src="\picrTMrJS.jpg" style="width:100%">
                  <div class="w3-container">
                  <h4> Thai Chili Sauce <br>EGB 9.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
                  </div>
                  </div>
                  </div>
          </div>
          <div class="w3-row-padding w3-margin-top">
                 
                  <div class="w3-third">
                    <div class="w3-card">
                    <img src="\Homemade-Honey-Mustard-Sauce-1-1200.jpg" style="width:100%">
                    <div class="w3-container">
                    <h4>Honey Mustard Sauce<br>EGB 10.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                    </div>
                    </div>
                    </div>
                  <div class="w3-third">
                    <div class="w3-card">
                    <img src="\00c5800ec51b27e9aae145f7ae8defc8_w750_h500.jpg" style="width:100%">
                    <div class="w3-container">
                    <h4> Fire Wings<br>EGB 49.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                    </div>
                    </div>
                    </div>
            

              <div class="w3-third">
                <div class="w3-card">
                <img src="\20161202170922alarab87598.webp" style="width:100%">
                <div class="w3-container">
                <h4> Chicken BBQ Spin Rolls<br>EGB 54.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
                </div>
                </div>
                </div>
        </div>
  </div>
  <div id="Salad" class="w3-container w3-white w3-padding-32">
    <div class="w3-container w3-deep-purple">
      <h2><center> Salad </center></h2>
      </div>
      <div class="w3-row-padding w3-margin-top">



          <div class="w3-third">
            <div class="w3-card">
            <img src="\Garden-Salad_47-SQ.webp" style="width:100%">
            <div class="w3-container">
            <h4>  Garden Salad <br>EGB 39.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
            </div>
            </div>
            </div>

            <div class="w3-third">
              <div class="w3-card">
              <img src="\web-neu-1500x1500-core-italienischer-salat-1-1024x1024.png" style="width:100%">
              <div class="w3-container">
              <h4> Italienischer Salat <br>EGB 29.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button> </h4>
              </div>
              </div>
              </div>

        <div class="w3-third">
          <div class="w3-card">
          <img src="\ggg.jpg" style="width:100%">
          <div class="w3-container">
          <h4> Greek Pasta Salad<br>EGB 64.99 <div class="w3-container"><button class="w3-button w3-teal">Add</button></h4>
          </div>
          </div>
          </div>

      </div>
  </div>
      </div>
  <footer id="footer">
    <section class="client-container">
    <div id="clinet">
        <div class="client-item">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Polices</a></li>
                <li><a href="#">Nutrition</a></li>
                <li><a href="Customer Service.php">Customer Service</a></li>
            </ul>
        <br>
        <p>Connect With US</p>
        <div class="pics">
            <br>
       <a href="https://www.instagram.com/"target="_blank"><img src="\inasta.png"  width="70"></a>
       <a href="https://www.facebook.com/"target="_blank"><img src="\facebook.png"  width="70"></a>
       <a href="https://twitter.com/"target="_blank"><img src="\twitter.png"  width="70"></a>
       <a href="https://www.youtube.com/"target="_blank"><img src="\youtube.png"  width="70"></a>
    </div>
</div>
</div>  
<br>
<p class="footp">Copyright &copy; www.PiratePizza.com All Rights Reserved.</p>
<br>
</section>
</footer>
    </body>
    
    
</html>
<?php
}
?>