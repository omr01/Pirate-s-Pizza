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
    <link rel="stylesheet" href="Pizza.css">
    <title>Pirate's Pizza</title>
</head>
<style>
.aaa {
    color:white;
}
</style>
<body background="Background.jpg">
    
    <nav id="navbar">
        <div id="logo">
            <img src="main logo.png" alt="اهلا">
        </div>
        <ul>
        <li><a href="..\index.php">Home</a></li>
            <li><a href="..\Cart.php">Menu</a></li>
            <li><a href="..\offers.php">Offers</a></li>
            <li><a href="..\php\manuy.php">My Cart</a></li></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><lable class="aaa">Welcome <?php echo $user["firstname"]; ?></lable>
            <li><a href="..\logout.php">Logout</a></li>
            <li><img src="..\pictures\hotLine_english.png"></li>
        </ul>
    </nav>

    <section id="home" >
        <h1 class="h-primary">Welcome To Pirate's Pizza. </h1>
        <p>Greatest pizza for greatest prices.</p>
        <img src="main logo.png"  height="300 px" width="400 px">
        
        <a href="Pizza%20main.php">
        <a href="offers.php">
            <br><br><br><br><br>
        <button class="btn">Order Now</button></a><br><br><br><br>
    </section>

    <br><br><br><br><br><br>

    <footer id="footer">
        <a href="https://play.google.com/store/games"target="_blank"><img src="Screenshot (88)(10).png"  width="1263" height="320"></a>
        <br><br>
        <section class="client-container">
        <div id="clinet">
            <div class="client-item">
                <ul>
                    <li><a href="About us.php">About Us</a></li>
                    <li><a href="Careers.php">Job Application</a></li>
                    <li><a href="PRIVACY%20POLICY.php">Polices</a></li>
                    <li><a href="QUALITY.php#">Quality</a></li>
                    <li><a href="Customer Service.php">Customer Service</a></li>
                </ul>
            <br><br>
            <pre>Connect With US</pre>
            <div class="pics">
                <br>
           <a href="https://web.whatsapp.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAA5ZJREFUWEftV1Fy2jAQfTLJAOlH1BOUniDkBCEnCP3sxDThBKUnaHKCJieIM5DpZ9MT1JygyQlqTlD1o5iW4O2ssT3CyFiQfuQjmvEMRtLq+e3u25XAExviieHBM6AyjzyKoVpfthwHuxHQjA8iBIgQ1Ga4V12lyg43za8NKAYhcEJAG4BccahPgDdx1fU6wKwB1T7LhpjhCkBr6QDCMCZIoCmA3dx8QITupKN8G2BWgGo38lQQPmWMEIbkwIMDf/JWBfpB8krKv1toQaBNwEk2R+iFHXVZBqoUUAKGmeExEoTeuKNuywzzPLtXCFwA2ON3AXhjV3VX7V0JaKcv2yTwJTFwX52itUmw7gykp7H1IXQVgzSOQkBJzHxP3HQfumqeSRsOHZQgvCliuRCQZmBUnaKZMsMxMqlgD9sY5eOnDGt9IO8S9wWhq15bp33i+29J5nQnx8rj3wzmzzb4f2bLD111WAZCn39xI5sRgVnnjMzs6muMDNVv5AUI7zmIQ1c10g07fXlGAh/Td0dg//ex4q+2Hhrzd6Gr9vMbzYAGklP5FYCFAKz3pQ+Bg9SIAK7Hrjq1RgNAT5TqFC/zSbIESKc1z0AeEICvoatYsdca9YGk2G2Ew7xgLgHS4yd01cJ8fSB7QCyQIOBXbYrGJjJQTzwgCOfjjjpbGUM6pXlAcYZtI0jKQ1CdYn8jQInrHw2Iv0QHbKO8Jl+mrrcCpLvMFHQxKE15TaDYRu0Bd0XspS4zpf5yDM2r+o+ioMskYLEc+FRBl4VSq30cgLdRBee6gCZa9tM6qHlhbSDZ2K6JUt0FuRrFU9xisGjqfZIKXfUy3acXa6u0542aMC4YM8aDlnkFub8gDZp0GCXDKIxJYZ27rUDi9cN5vTPDWQS0cw3ayBFop2qux2dRgS0srlkhJAzDjlruEgvo4Cxkt0UOgrQG8tKFOrjCZjkggcvwWLEgPmrUB5KbuqOyZDECKsuEdZDFtrZwxS2tTQiYY2jeQ8dta6rW7H84OOCrju1NIokZtjPvGCzYNgLS0pmrPj/5GApIwMMM/uSdim8cWVqzjj3gCALcBWRdpk1yzDEbRqqkhqlR0pbkp/hSyE/WO2ULCEPHQc+2b1rZfsS3DMCPBPz0yhNLQoQeEU4Nd7AYB3cCDqs0wbO9j6UfUNR+NKmC27KemcHhAQ04aAiCJELcPa4LQqe79F62Tkb9j7XPgMpYfHIM/QPRS+A0twANvgAAAABJRU5ErkJggg=="/></a>
           <a href="https://www.facebook.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAV9JREFUWEftmMFRg0AUhv+HB3MzVmA6ELSApAMxxJnVi9iBHZhUYm5ySJxYgWlA1nSAHXj1AM/hEIesJIDIyoy7V2D5+N7b3fcgtGxQy3hggIoikmvIu5QuM46LHq5znQhRvI+nxdR5z87zDWgopE/g+zovK/0s0fn8wVnsBBqJlzGD7kpPWuNGAk9mwen43wKtALwSOGJCl5lsAmwAB2sjugytCHQ7C5ylGs2hCJcE9HUCvcUdstWVswbQDsSgm8fAmW7Lc+1AcYcOs3ZcIXsWcJ0JkQ+gpy1k8+BkY1/zRJjuMWfbjDWe1CqQGiIVzABpN5SnfNdJ4okwAnDUWFL/AIg3z61fPsuqAF1cSTtJWLYGaCTkgMHPjQKp+WKWfVEtZgwZQ6mBOkW+yaE/yaE6jWLVkKFMo+j6srv3gQFxkrYslYba9KUfZyH5KlmzkyWworz62/z9KFJuDBUZ+gS0/UE0QMXsrAAAAABJRU5ErkJggg=="/></a>
           <a href="https://twitter.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAkRJREFUWEftl81x20AMhT8wE17tDsIOYlcQpYKkg9AVWL5I41OSk01dbHcgVxCmgqgEqYIoHdhXZ8LNgBzKsrjL3WV+xgfhygX27QMeAArPzOSZ4WEPyJeRPUP/n6GZOaLilIQMwwhYAgsqbjiX9QbQlTnkJxkT0e8b66bswmS8YMRE5r7XdL4XZgxcOf2EE36xJuEdkFNx/AQkWFTWBlXnGFCFeQ98iXjEGVO53j3fZagwC+BNfTAUlNL/wHfgMAiQYY6wRjjmJTlnctf6dQHNTImpKW2tJOVk28mSqlh2NMQ9UpeGp4bsdaAvGDOVWysDhfkEfAxipzm0Qsh3wTRJ2bULMyLhmyP4HYaShJsnwS7NNcJpBKDPTEUf0TF7YyyMKuxDwAVLhCb/jcRDzVrQdoZULSkLHig3xR16Tei5ireci4ongKHHotaXh6kmFEh7LgpQfIHGwoGpOGeovVMndU/5NyZ8ZSLaJqzmKupYGceAdxa0vajb0DOTY1Bgr2Ju85y9JyXra7LufUj7kXCA1KCO/hIoZ/9p4/cDcjfIIfi87PSnTL+GN0g/wMBB7V9ht6e//1qXdHqVte3kB6Snm/mmo0Hl+joS14qUUe+2sBUwDFCTPi1uHaAx3TsKjL+GdD82NSMKJotk5paUcSgzdpU1qdHLD/5A6j+oyF3D0/co++gQxvUC1QALtRUwt+3JoQH8KXss5nbXaXZt3fio9yD9rVlSUe7+PcSAiFfZ0OgD/MJVNiD4EJc9IB9re4Z8DP0Gp9KnJXhvpdgAAAAASUVORK5CYII="/></a>
           <a href="https://www.youtube.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAYRJREFUWEftl+1NwzAURc+bANiADWADYAIYgQ1gA2ACyghMAEwA3YARygZlAqPbOMENSRw3iVWhPCk/osb28X2fNfbMbM94mIFiHpkV+l8KOTgEToJbHQN6Uuwj/Nhg2bW4MYYc3AM3FEBT2ApYGDzVN/8D5OAVuJyComHPZ4PrmoK/rw7OgfdMMOUxFwaVW7cU8q66ywz0YEWIbKwOJNKzzEBLKzwzCpAyZugFOoHWwEFfhQzMFUG5SFlX239tcNSmkOsL4/29cbmvV7fATvGni40KVG7miqIptZLKxmRAAZiCVGBhlW8VPxfQI3DaJwQmA/IuE8hVH5AgbsaNIR/U6n0K7OT+N6pCPu2VXalTQCnQlwVrh1ZqVfaqyqa4Kfh21Eq9I8PWsk4gpapiIad1Nldlx0tOGqB9/PBtIGfHf7NaiWiaGJW2Sl89vRttoqrfvpJrjFVDryz6v8xPkeUCwfaqvsEZOvAzeF8ZaKZutChQ4s0Hfz4DxSScFZoViikQ+/0HBttTJd4rcMMAAAAASUVORK5CYII="/></a>
        </div>
    </div>
    </div>  
    <br>
    <pre class="footp">Copyright &copy; www.PiratePizza.com All Rights Reserved.</pre>
    <br><br>
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
    <link rel="stylesheet" href="Pizza.css">
    <title>Pirate's Pizza</title>
</head>
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
            <li><a href="login.php">LOG-IN</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><img src="pictures\hotLine_english.png"></li>
        </ul>
    </nav>

    <section id="home" >
        <h1 class="h-primary">Welcome To Pirate's Pizza. </h1>
        <p>Greatest pizza for greatest prices.</p>
        <img src="main logo.png"  height="300 px" width="400 px">
        
        <a href="Pizza%20main.php">
        <a href="offers.php">
            <br><br><br><br><br>
        <button class="btn">Order Now</button></a><br><br><br><br>
    </section>

    <br><br><br><br><br><br>

    <footer id="footer">
        <a href="https://play.google.com/store/games"target="_blank"><img src="Screenshot (88)(10).png"  width="1263" height="320"></a>
        <br><br>
        <section class="client-container">
        <div id="clinet">
            <div class="client-item">
                <ul>
                    <li><a href="About us.php">About Us</a></li>
                    <li><a href="Careers.php">Job Application</a></li>
                    <li><a href="PRIVACY%20POLICY.php">Polices</a></li>
                    <li><a href="QUALITY.php#">Quality</a></li>
                    <li><a href="Customer Service.php">Customer Service</a></li>
                </ul>
            <br><br>
            <pre>Connect With US</pre>
            <div class="pics">
                <br>
           <a href="https://web.whatsapp.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAA5ZJREFUWEftV1Fy2jAQfTLJAOlH1BOUniDkBCEnCP3sxDThBKUnaHKCJieIM5DpZ9MT1JygyQlqTlD1o5iW4O2ssT3CyFiQfuQjmvEMRtLq+e3u25XAExviieHBM6AyjzyKoVpfthwHuxHQjA8iBIgQ1Ga4V12lyg43za8NKAYhcEJAG4BccahPgDdx1fU6wKwB1T7LhpjhCkBr6QDCMCZIoCmA3dx8QITupKN8G2BWgGo38lQQPmWMEIbkwIMDf/JWBfpB8krKv1toQaBNwEk2R+iFHXVZBqoUUAKGmeExEoTeuKNuywzzPLtXCFwA2ON3AXhjV3VX7V0JaKcv2yTwJTFwX52itUmw7gykp7H1IXQVgzSOQkBJzHxP3HQfumqeSRsOHZQgvCliuRCQZmBUnaKZMsMxMqlgD9sY5eOnDGt9IO8S9wWhq15bp33i+29J5nQnx8rj3wzmzzb4f2bLD111WAZCn39xI5sRgVnnjMzs6muMDNVv5AUI7zmIQ1c10g07fXlGAh/Td0dg//ex4q+2Hhrzd6Gr9vMbzYAGklP5FYCFAKz3pQ+Bg9SIAK7Hrjq1RgNAT5TqFC/zSbIESKc1z0AeEICvoatYsdca9YGk2G2Ew7xgLgHS4yd01cJ8fSB7QCyQIOBXbYrGJjJQTzwgCOfjjjpbGUM6pXlAcYZtI0jKQ1CdYn8jQInrHw2Iv0QHbKO8Jl+mrrcCpLvMFHQxKE15TaDYRu0Bd0XspS4zpf5yDM2r+o+ioMskYLEc+FRBl4VSq30cgLdRBee6gCZa9tM6qHlhbSDZ2K6JUt0FuRrFU9xisGjqfZIKXfUy3acXa6u0542aMC4YM8aDlnkFub8gDZp0GCXDKIxJYZ27rUDi9cN5vTPDWQS0cw3ayBFop2qux2dRgS0srlkhJAzDjlruEgvo4Cxkt0UOgrQG8tKFOrjCZjkggcvwWLEgPmrUB5KbuqOyZDECKsuEdZDFtrZwxS2tTQiYY2jeQ8dta6rW7H84OOCrju1NIokZtjPvGCzYNgLS0pmrPj/5GApIwMMM/uSdim8cWVqzjj3gCALcBWRdpk1yzDEbRqqkhqlR0pbkp/hSyE/WO2ULCEPHQc+2b1rZfsS3DMCPBPz0yhNLQoQeEU4Nd7AYB3cCDqs0wbO9j6UfUNR+NKmC27KemcHhAQ04aAiCJELcPa4LQqe79F62Tkb9j7XPgMpYfHIM/QPRS+A0twANvgAAAABJRU5ErkJggg=="/></a>
           <a href="https://www.facebook.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAV9JREFUWEftmMFRg0AUhv+HB3MzVmA6ELSApAMxxJnVi9iBHZhUYm5ySJxYgWlA1nSAHXj1AM/hEIesJIDIyoy7V2D5+N7b3fcgtGxQy3hggIoikmvIu5QuM46LHq5znQhRvI+nxdR5z87zDWgopE/g+zovK/0s0fn8wVnsBBqJlzGD7kpPWuNGAk9mwen43wKtALwSOGJCl5lsAmwAB2sjugytCHQ7C5ylGs2hCJcE9HUCvcUdstWVswbQDsSgm8fAmW7Lc+1AcYcOs3ZcIXsWcJ0JkQ+gpy1k8+BkY1/zRJjuMWfbjDWe1CqQGiIVzABpN5SnfNdJ4okwAnDUWFL/AIg3z61fPsuqAF1cSTtJWLYGaCTkgMHPjQKp+WKWfVEtZgwZQ6mBOkW+yaE/yaE6jWLVkKFMo+j6srv3gQFxkrYslYba9KUfZyH5KlmzkyWworz62/z9KFJuDBUZ+gS0/UE0QMXsrAAAAABJRU5ErkJggg=="/></a>
           <a href="https://twitter.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAkRJREFUWEftl81x20AMhT8wE17tDsIOYlcQpYKkg9AVWL5I41OSk01dbHcgVxCmgqgEqYIoHdhXZ8LNgBzKsrjL3WV+xgfhygX27QMeAArPzOSZ4WEPyJeRPUP/n6GZOaLilIQMwwhYAgsqbjiX9QbQlTnkJxkT0e8b66bswmS8YMRE5r7XdL4XZgxcOf2EE36xJuEdkFNx/AQkWFTWBlXnGFCFeQ98iXjEGVO53j3fZagwC+BNfTAUlNL/wHfgMAiQYY6wRjjmJTlnctf6dQHNTImpKW2tJOVk28mSqlh2NMQ9UpeGp4bsdaAvGDOVWysDhfkEfAxipzm0Qsh3wTRJ2bULMyLhmyP4HYaShJsnwS7NNcJpBKDPTEUf0TF7YyyMKuxDwAVLhCb/jcRDzVrQdoZULSkLHig3xR16Tei5ireci4ongKHHotaXh6kmFEh7LgpQfIHGwoGpOGeovVMndU/5NyZ8ZSLaJqzmKupYGceAdxa0vajb0DOTY1Bgr2Ju85y9JyXra7LufUj7kXCA1KCO/hIoZ/9p4/cDcjfIIfi87PSnTL+GN0g/wMBB7V9ht6e//1qXdHqVte3kB6Snm/mmo0Hl+joS14qUUe+2sBUwDFCTPi1uHaAx3TsKjL+GdD82NSMKJotk5paUcSgzdpU1qdHLD/5A6j+oyF3D0/co++gQxvUC1QALtRUwt+3JoQH8KXss5nbXaXZt3fio9yD9rVlSUe7+PcSAiFfZ0OgD/MJVNiD4EJc9IB9re4Z8DP0Gp9KnJXhvpdgAAAAASUVORK5CYII="/></a>
           <a href="https://www.youtube.com/"target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAYRJREFUWEftl+1NwzAURc+bANiADWADYAIYgQ1gA2ACyghMAEwA3YARygZlAqPbOMENSRw3iVWhPCk/osb28X2fNfbMbM94mIFiHpkV+l8KOTgEToJbHQN6Uuwj/Nhg2bW4MYYc3AM3FEBT2ApYGDzVN/8D5OAVuJyComHPZ4PrmoK/rw7OgfdMMOUxFwaVW7cU8q66ywz0YEWIbKwOJNKzzEBLKzwzCpAyZugFOoHWwEFfhQzMFUG5SFlX239tcNSmkOsL4/29cbmvV7fATvGni40KVG7miqIptZLKxmRAAZiCVGBhlW8VPxfQI3DaJwQmA/IuE8hVH5AgbsaNIR/U6n0K7OT+N6pCPu2VXalTQCnQlwVrh1ZqVfaqyqa4Kfh21Eq9I8PWsk4gpapiIad1Nldlx0tOGqB9/PBtIGfHf7NaiWiaGJW2Sl89vRttoqrfvpJrjFVDryz6v8xPkeUCwfaqvsEZOvAzeF8ZaKZutChQ4s0Hfz4DxSScFZoViikQ+/0HBttTJd4rcMMAAAAASUVORK5CYII="/></a>
        </div>
    </div>
    </div>  
    <br>
    <pre class="footp">Copyright &copy; www.PiratePizza.com All Rights Reserved.</pre>
    <br><br>
        </section>
    </footer>
</body>
</html>

<?php
}
?>
