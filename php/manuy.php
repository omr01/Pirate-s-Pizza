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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JavaScript Vanilla Shopping Cart Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="..\css\manuy style .css">

	<link rel="stylesheet" href="..\css\manuy domo.css">



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Pizza.css">
 
  
  </head>
<style>
.aaa {
    color: :white;
}
</style>
  <body>

    <nav id="navbar">
        <div id="logo">
            <img src="..\main logo.png" alt="اهلا">
        </div>
        <ul>
            <li><a href="..\index.php">Home</a></li>
            <li><a href="..\Cart.php">Menu</a></li>
            <li><a href="..\offers.php">Offers</a></li>
            <li><a href="..\manuy.php">My Cart</a></li></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><lable class="aaa">Welcome <?php echo $user["firstname"]; ?></lable>
            <li><a href="..\logout.php">Logout</a></li>
            <li><img src="..\pictures\hotLine_english.png"></li>
        </ul>
    </nav>
  

    <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
<div class="cart-modal-overlay">

    <div class="cart-modal">
    
      <i id="close-btn" class="fas fa-times"></i>
    
        <h1 class="cart-is-empty">Cart is empty</h1>
    
        <div class="product-rows">
        
        </div>
        <div class="total">
        
          <h1 class="cart-total">TOTAL</h1>
        
            <span class="total-price">$0</span>
          
              <button class="purchase-btn">PURCHASE</button>
        </div>
      </div>
</div>





      
<!--   end of cart modal -->
  <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>
<!--  products  -->
  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="..\A1.jpg" height="300px" width="100%" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$175</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.05.18.jpg" height="300px" width="100%" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$140</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.06.08.jpg" height="300px" width="100%" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$165</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.07.43.jpg" height="300px" width="100%" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$145</span>
    </div>
  </div>  

  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.07.59.jpg" height="300px" width="100%" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$135</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.08.52.jpg" height="300px" width="100%" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$165</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.10.25.jpg" height="300px" width="100%" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$155</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.23.01.jpg" height="300px" width="100%" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$199</span>
    </div>
  </div>

  
  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.09.46.jpg" height="300px" width="100%" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$185</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.10.52.jpg" height="300px" width="100%" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$125</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.11.24.jpg" height="300px" width="100%" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$165</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="..\projegt\WhatsApp Image 2022-12-04 at 00.12.27.jpg" height="300px" width="100%" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$185</span>
    </div>
  </div>

  <div class="items-container">
    <div class="card-4 card">
      <img class="product-image" src="..\projegt\00c5800ec51b27e9aae145f7ae8defc8_w750_h500.jpg" height="180px" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$40</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="..\projegt\30595286_1673206019433391_9187659804695330816_n.jpg"height="180px" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$30</span>
    </div>
    
    
    <div class="card-3 card">
      <img class="product-image" src="..\projegt\picrTMrJS.jpg" height="180px" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$10</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="..\projegt\Homemade-Honey-Mustard-Sauce-1-1200.jpg" height="180px" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$10</span>
    </div>
  </div>

  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="..\projegt\17966458_1786846531332878_3786159728492127255_o.jpg" height="280px" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$60</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="..\projegt\Ranch-Dip-Recipe-Photo-2.jpg" height="280px" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$10</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="..\projegt\3e726845-3e8e-4413-9e58-caca3f581fd4.jpg" height="280px" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$15</span>
    </div>
    <div class="card-1 card">
      <img class="product-image" src="..\projegt\Cheese-Fondue-1-SpendWithPennies-3.jpg" height="280px" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$11</span>
    </div>
  </div>

  

 </main>
 
 <br>
 <footer id="footer">
  <br>
  <section class="client-container">
  <div id="clinet">
      <div class="client-item">
          <ul>
          <li><a href="..\About us.php">About Us</a></li>
                    <li><a href="..\Careers.php">Job Application</a></li>
                    <li><a href="..\PRIVACY%20POLICY.php">Polices</a></li>
                    <li><a href="..\QUALITY.php#">Quality</a></li>
                    <li><a href="..\Customer Service.php">Customer Service</a></li>
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
  <script>
// open cart modal
const cart = document.querySelector('#cart');
const cartModalOverlay = document.querySelector('.cart-modal-overlay');

cart.addEventListener('click', () => {
  if (cartModalOverlay.style.transform === 'translateX(-200%)'){
    cartModalOverlay.style.transform = 'translateX(0)';
  } else {
    cartModalOverlay.style.transform = 'translateX(-200%)';
  }
})
// end of open cart modal

// close cart modal
const closeBtn = document.querySelector ('#close-btn');

closeBtn.addEventListener('click', () => {
  cartModalOverlay.style.transform = 'translateX(-200%)';
});

cartModalOverlay.addEventListener('click', (e) => {
  if (e.target.classList.contains('cart-modal-overlay')){
    cartModalOverlay.style.transform = 'translateX(-200%)'
  }
})
// end of close cart modal

// add products to cart
const addToCart = document.getElementsByClassName('add-to-cart');
const productRow = document.getElementsByClassName('product-row');

for (var i = 0; i < addToCart.length; i++) {
  button = addToCart[i];
  button.addEventListener('click', addToCartClicked)
}

function addToCartClicked (event) {
  button = event.target;
  var cartItem = button.parentElement;
  var price = cartItem.getElementsByClassName('product-price')[0].innerText;
  
  var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
  addItemToCart (price, imageSrc);
  updateCartPrice()
}

function addItemToCart (price, imageSrc) {
  var productRow = document.createElement('div');
  productRow.classList.add('product-row');
  var productRows = document.getElementsByClassName('product-rows')[0];
  var cartImage = document.getElementsByClassName('cart-image');
  
  for (var i = 0; i < cartImage.length; i++){
    if (cartImage[i].src == imageSrc){
      alert ('This item has already been added to the cart')
      return;
    }
  }
  
  var cartRowItems = `
  <div class="product-row">
        <img class="cart-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <input class="product-quantity" type="number" value="1">
        <button class="remove-btn">Remove</button>
        </div>
        
      `
  productRow.innerHTML = cartRowItems;
  productRows.append(productRow);
  productRow.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem)
  productRow.getElementsByClassName('product-quantity')[0].addEventListener('change', changeQuantity)
  updateCartPrice()
}
// end of add products to cart

// Remove products from cart
const removeBtn = document.getElementsByClassName('remove-btn');
for (var i = 0; i < removeBtn.length; i++) {
  button = removeBtn[i]
  button.addEventListener('click', removeItem)
}

function removeItem (event) {
  btnClicked = event.target
  btnClicked.parentElement.parentElement.remove()
  updateCartPrice()
}

// update quantity input
var quantityInput = document.getElementsByClassName('product-quantity')[0];

for (var i = 0; i < quantityInput; i++){
  input = quantityInput[i]
  input.addEventListener('change', changeQuantity)
}

function changeQuantity(event) {
  var input = event.target
  if (isNaN(input.value) || input.value <= 0){
    input.value = 1
  }
  updateCartPrice()
}
// end of update quantity input

// update total price
function updateCartPrice() {
  var total = 0
  for (var i = 0; i < productRow.length; i += 2) {
    cartRow = productRow[i]
  var priceElement = cartRow.getElementsByClassName('cart-price')[0]
  var quantityElement = cartRow.getElementsByClassName('product-quantity')[0]
  var price = parseFloat(priceElement.innerText.replace('$', ''))
  var quantity = quantityElement.value
  total = total + (price * quantity )
    
  }
  document.getElementsByClassName('total-price')[0].innerText =  '$' + total

document.getElementsByClassName('cart-quantity')[0].textContent = i /= 2
}
// end of update total price

// purchase items
const purchaseBtn = document.querySelector('.purchase-btn');

const closeCartModal = document.querySelector('.cart-modal');

purchaseBtn.addEventListener('click', purchaseBtnClicked)

function purchaseBtnClicked () {
  alert ('Thank you for your purchase');
  cartModalOverlay.style.transform= 'translateX(-100%)';
  
  var totalPrice = document.querySelector('.total-price');
  var items = document.querySelectorAll('.product-row img');
  
  if (totalPrice && items.length > 0) {
    var price = totalPrice.innerText;
    var message = "All orders";
    for (var i = 0; i < items.length; i++) {
      message += items[i].alt + ", ";
    }
    message = message.slice(0, -2);
    
    // send message and price to server-side PHP script
    fetch('add-message.php', {
      method: 'POST',
      body: new URLSearchParams({
        'message': message,
        'price': price
      })
    })
    .then(response => {
      console.log(response);
    })
    .catch(error => {
      console.error(error);
    });
  } else {
    console.log("Cart is empty");
  }
  
  var cartItems = document.getElementsByClassName('product-rows')[0];
  while (cartItems.hasChildNodes()) {
    cartItems.removeChild(cartItems.firstChild);
  }
  
  updateCartPrice();
}
//alert user if cart is empty
</script>
  </body>
</html>
<?php




} else {
  // If the user is not logged in, display a login button
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JavaScript Vanilla Shopping Cart Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="..\css\manuy style .css">

	<link rel="stylesheet" href="..\css\manuy domo.css">



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Pizza.css">
 
  
  </head>
<style>
.aaa {
    color: red;
}
</style>
  <body>

    <nav id="navbar">
        <div id="logo">
            <img src="..\main logo.png" alt="اهلا">
        </div>
        <ul>
             <li><a href="..\index.php">Home</a></li>
            <li><a href="..\Cart.php">Menu</a></li>
            <li><a href="..\offers.php">Offers</a></li>
            <li><a href="..\Cart.php">My Cart</a></li>
            <li><a href="..\login.php">LOG-IN</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <li><img src="..\pictures\hotLine_english.png"></li>
        </ul>
    </nav>
    you need to login to use this service.
  </body>
</html>
<?php
}
?>