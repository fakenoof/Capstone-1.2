<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<div class="container">
    <div class="checkoutLayout">

        
        <div class="returnCart">
            <a href="../Menu/menu.php">keep shopping</a>
            <h1>List Product in Cart</h1>
            <div class="list">

                <div class="item">
                    <img src="image/1.webp">
                    <div class="info">
                        <div class="name">PRODUCT 1</div>
                        <div class="price">$22/1 product</div>
                    </div>
                    <div class="quantity">5</div>
                    <div class="returnPrice">$433.3</div>
                </div>

            </div>
        </div>


        <div class="right">
            <h1>Checkout</h1>

            <div class="form">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name"placeholder="Enter your full name">
                </div>
    
               <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone"placeholder="Enter your phone number">
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
    
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter your Exact address">
                </div>
    
                <div class="group">
                    <label for="occationDate">Select Date</label>
                    <input type="date" name="occationDate" id="occationDate">
                </div>
    
            </div>
            <div class="return">
                <div class="row">
                    <div>Total Quantity</div>
                    <div class="totalQuantity">70</div>
                </div>
                <div class="row">
                    <div>Total Price</div>
                    <div class="totalPrice">$900</div>
                </div>
            </div>
            <button class="buttonCheckout">CHECKOUT</button>
            </div>
    </div>
</div>


<script src="checkout.js"></script>

</body>
</html>