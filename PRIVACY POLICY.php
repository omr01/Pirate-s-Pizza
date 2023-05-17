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
<html>
<head>
<title>PRIVACY POLICY</title>

<link rel="stylesheet" href="QUALITY.css">

</head>
<style>
.aaa {
    color:white;
}
</style>
<body>
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
<br>
<center><h1>PRIVACY POLICY</h1></center>
<br>
<pre>
    <h2> privacy is important to us.</h2>
    Safeguarding your privacy and the security of your personal information is important to us. Please take a few minutes to read the following policy
    so that you understand how we treat your personal information. As we continuously improve and expand our services, this policy might change.
    So please check it out periodically. If you have questions about our policy, please click on our customer feedback page to contact
    us via our electronic feedback form.
    How we collect information about you. We collect information in three ways :
    
    We collect information that our customers supply to us.
    We collect information from emails and other contacts sent to us by our customers and users of our website.
    We collect information electronically on all users of our website, including customers, by means of cookies.
    
     <h2 >Further details are provided below.</h2>
    What personal information we collect from our users.
    
    When email us through the contact information on the "Customer Feedback/Customer Service" page, you are required to provide us with 
    your full legal name, email address, full street address including city and telephone number.
    
    Every time you use our service, we collect information about the Pirates pizza restaurants you select and the orders you place.
    
    <h2>Children's Privacy</h2>
    
    Customer feedback pages of this website are directed toward and designed for use by persons aged 13 or older. We do not establish or maintain
    registrations for any child whom we know to be under the age of 13. We do not solicit or knowingly collect personally identifiable information
    from children under the age of 13. If we discover that we have received personally identifiable information from an individual who indicates
    that he or she is, or whom we otherwise have reason to believe is, under the age of 13, we will delete such information from our systems.
    
    We collect additional information about how you use our website and service.
    
    If you contact us by letter, phone, or email through the contact information on the "Customer Feedback" page, we will collect your sender
    information and may collect the other information you voluntarily disclose to us.
    
    <h2>Our use of cookies.</h2>
    
    Like many websites on the Internet, our website uses cookies. Cookies are small strings of data placed on users' personal computer hard drives
    during the exchange of data that happens when your browser points to our website. Cookies enable a website to identify a user's browser as a
    previous visitor by means of a unique string of numbers assigned on a previous visit. Our cookies assist us in collecting information on what
    pages of our website you access or visit, and in recording any preferences you indicate on our website. We also use cookies to make your 
    experience on Pirates pizza.com more personalized, and convenient.
    
    The site analytics cookie information may be examined in concert with data 
    from online ads served through the DoubleClick for Advertisers platform. 
    This is to help us understand how anonymous users interact with the website after seeing advertisements online,
    and this data may be used to optimize ad campaigns.
    
    <h2>How we store the information we collect.</h2>
    
    We store the information you provide to us and the information we collect electronically in our computer databases.
    Access to our computer servers is controlled by firewalls.
    
    <h2>How we use the information we collect.</h2>
    
    We use the personal information about you stored in our customer database through telephone and other non-online orders in various ways.
    Each time you place an order, we will call up your information from our database to make processing your order faster and easier. 
    We also may keep track of your food preferences and restaurant choices and analyze that information in order to be able mail to you
    special advertisements, offers and notices regarding foods and restaurants that seem to fit with your preferences. We may also use
    the information to contact you concerning your level of satisfaction with our products and services, to verify incomplete orders,
    rectify problems or delays with your order or otherwise communicate with you concerning your transactions with us.
    
    We aggregate information about how our ordering service is used (without specific identification to any particular user)
    to be able to improve our service and make it more responsive to our customers' preferences. We also make such aggregate information 
    (without identification to any specific individual) available to our restaurant affiliates and other affiliates in order to obtain
    information about products, services, offers and notices which we believe will be useful and informative to our website users.
    
    Third party vendors, including Google, use cookies to serve ads based on users prior visits to Pirates pizza.com.
    
    <h2>You can control how information about you is used.</h2>
    
    You can also limit our communications directly to you. If you do not want to receive emails from us telling you about great eDeals,
    Contests or other promotional offers in the future, please let us know. You can opt out of receiving emails from us, at any time 
    (except when you are in the process of placing an order) by clicking on Unsubscribe link provided at the bottom of the email.
    Our emails to you will stop within 5 business days and we will not thereafter provide other merchants the means to contact you
    by e-mail about their Contests or other offers.
    
    <h2>Our policies may change.</h2>
    
    This is our current privacy and security policy, but we reserve the right to change our website and this policy at any time.
    You should check this privacy policy periodically. If our policies regarding collection, storage and use of your information change,
    the information collected under prior policies will continue to be governed by those policies, unless we obtain your consent to use 
    that information in new ways.
    
    <h1>You can access your information.</h1>
    
    Upon your request, we will provide you with access to your unique account-related information and information from contacts that 
    we maintain about you. In your request,
    please provide us with your current specific contact information so that we can accurately check our records.

</pre>
    
<footer id="footer"><br>
    <section class="client-container">
    <div id="clinet">
        <div class="client-item">
            <ul>
                <li><a href="About%20us.php">About Us</a></li>
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
<html>
<head>
<title>PRIVACY POLICY</title>

<link rel="stylesheet" href="QUALITY.css">

</head>
<style>
.aaa {
    color: red;
}
</style>
<body>
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
<br>
<center><h1>PRIVACY POLICY</h1></center>
<br>
<pre>
    <h2> privacy is important to us.</h2>
    Safeguarding your privacy and the security of your personal information is important to us. Please take a few minutes to read the following policy
    so that you understand how we treat your personal information. As we continuously improve and expand our services, this policy might change.
    So please check it out periodically. If you have questions about our policy, please click on our customer feedback page to contact
    us via our electronic feedback form.
    How we collect information about you. We collect information in three ways :
    
    We collect information that our customers supply to us.
    We collect information from emails and other contacts sent to us by our customers and users of our website.
    We collect information electronically on all users of our website, including customers, by means of cookies.
    
     <h2 >Further details are provided below.</h2>
    What personal information we collect from our users.
    
    When email us through the contact information on the "Customer Feedback/Customer Service" page, you are required to provide us with 
    your full legal name, email address, full street address including city and telephone number.
    
    Every time you use our service, we collect information about the Pirates pizza restaurants you select and the orders you place.
    
    <h2>Children's Privacy</h2>
    
    Customer feedback pages of this website are directed toward and designed for use by persons aged 13 or older. We do not establish or maintain
    registrations for any child whom we know to be under the age of 13. We do not solicit or knowingly collect personally identifiable information
    from children under the age of 13. If we discover that we have received personally identifiable information from an individual who indicates
    that he or she is, or whom we otherwise have reason to believe is, under the age of 13, we will delete such information from our systems.
    
    We collect additional information about how you use our website and service.
    
    If you contact us by letter, phone, or email through the contact information on the "Customer Feedback" page, we will collect your sender
    information and may collect the other information you voluntarily disclose to us.
    
    <h2>Our use of cookies.</h2>
    
    Like many websites on the Internet, our website uses cookies. Cookies are small strings of data placed on users' personal computer hard drives
    during the exchange of data that happens when your browser points to our website. Cookies enable a website to identify a user's browser as a
    previous visitor by means of a unique string of numbers assigned on a previous visit. Our cookies assist us in collecting information on what
    pages of our website you access or visit, and in recording any preferences you indicate on our website. We also use cookies to make your 
    experience on Pirates pizza.com more personalized, and convenient.
    
    The site analytics cookie information may be examined in concert with data 
    from online ads served through the DoubleClick for Advertisers platform. 
    This is to help us understand how anonymous users interact with the website after seeing advertisements online,
    and this data may be used to optimize ad campaigns.
    
    <h2>How we store the information we collect.</h2>
    
    We store the information you provide to us and the information we collect electronically in our computer databases.
    Access to our computer servers is controlled by firewalls.
    
    <h2>How we use the information we collect.</h2>
    
    We use the personal information about you stored in our customer database through telephone and other non-online orders in various ways.
    Each time you place an order, we will call up your information from our database to make processing your order faster and easier. 
    We also may keep track of your food preferences and restaurant choices and analyze that information in order to be able mail to you
    special advertisements, offers and notices regarding foods and restaurants that seem to fit with your preferences. We may also use
    the information to contact you concerning your level of satisfaction with our products and services, to verify incomplete orders,
    rectify problems or delays with your order or otherwise communicate with you concerning your transactions with us.
    
    We aggregate information about how our ordering service is used (without specific identification to any particular user)
    to be able to improve our service and make it more responsive to our customers' preferences. We also make such aggregate information 
    (without identification to any specific individual) available to our restaurant affiliates and other affiliates in order to obtain
    information about products, services, offers and notices which we believe will be useful and informative to our website users.
    
    Third party vendors, including Google, use cookies to serve ads based on users prior visits to Pirates pizza.com.
    
    <h2>You can control how information about you is used.</h2>
    
    You can also limit our communications directly to you. If you do not want to receive emails from us telling you about great eDeals,
    Contests or other promotional offers in the future, please let us know. You can opt out of receiving emails from us, at any time 
    (except when you are in the process of placing an order) by clicking on Unsubscribe link provided at the bottom of the email.
    Our emails to you will stop within 5 business days and we will not thereafter provide other merchants the means to contact you
    by e-mail about their Contests or other offers.
    
    <h2>Our policies may change.</h2>
    
    This is our current privacy and security policy, but we reserve the right to change our website and this policy at any time.
    You should check this privacy policy periodically. If our policies regarding collection, storage and use of your information change,
    the information collected under prior policies will continue to be governed by those policies, unless we obtain your consent to use 
    that information in new ways.
    
    <h1>You can access your information.</h1>
    
    Upon your request, we will provide you with access to your unique account-related information and information from contacts that 
    we maintain about you. In your request,
    please provide us with your current specific contact information so that we can accurately check our records.

</pre>
    
<footer id="footer"><br>
    <section class="client-container">
    <div id="clinet">
        <div class="client-item">
            <ul>
                <li><a href="About%20us.php">About Us</a></li>
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