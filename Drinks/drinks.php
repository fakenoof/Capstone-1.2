<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
           
    
          
    
           * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   }
   .c {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
   }
   .navbar {
    background-color: #ffffff;
    border-bottom: 1px solid #dddfe2;
    display: flex;
    justify-content: space-around;
    padding: 10px;
    background-color: white;
    border-top: 1px solid #ccc;
   }
   
   
   .navbar .nav-links {
    display: flex;
    text-align: center;
    list-style-type: none;
   }
   
   .navbar .nav-links li {
    margin-right: 15px;
   }
   
   .navbar .nav-links a {
    text-decoration: none;
    color: rgb(33, 8, 8);
    font-size: 25px;
    padding: 10px;
   }
   
   .navbar .nav-links a.active {
    border-bottom: 3px solid #1877f2;
    font-weight: bold;
   }

   .navbar .dropdown {
            position: relative;
        }
        .navbar .dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            z-index: 1000;
        }
        .navbar .dropdown-content a {
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
            font-size: 16px;
        }
        .navbar .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .navbar .dropdown:hover .dropdown-content {
            display: block;
    
        }
 
         
         
     </style>
</head>
<body class="c">

    <div class="container">
        <header>
        <div class="navbar">
                   <ul class="nav-links">
                       <li><a href="../index.php" >Home</a></li>
                       <li><a href="../About/about.php">About</a></li>
                       <li class="dropdown">
                        <a href="../Menu/menu.php" >Menus</a>
                        <div class="dropdown-content">
                        <a href="../Menu/menu.php" >Menu</a>
                        <a href="../Dessert/dessert.php" >Dessert</a>
                        <a href="../Drinks/drinks.php" class="active">Drinks</a>
                        <a href="../Decoration/design.php">Decoration</a>
                        </div><br>
                        
                   </ul>
                   <div class="iconCart">
                        <img src="../image/icon.png">
                        <div class="totalQuantity">0</div>
                       <br>
                    </div>
               </div>
                   
            </div>
        </header
    <br>
        <div class="menu" id="Menu">
            <h1>Our<span>Drinks</span></h1>
        </div>
    </div>

        <div class="listProduct">

            <div class="item">
                <img src="../image/drinks/coke.jpg" alt="">
                <h2>CoPilot / Black / Automatic</h2>
                <div class="price">₱550</div>
                <button>Add To Cart</button>
            </div>

        </div>
    </div>
    <div class="cart">
        <h2>
            CART
        </h2>

        <div class="listCart">


            <div class="item">
                <img src="../image/drinks/coke.jpg">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">₱550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>
         

        </div>

        <div class="buttons">
            <div class="close">
                CLOSE
            </div>
            <div class="checkout">
                <a href="/checkout/checkout.html">CHECKOUT</a>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
    
</body>
</html>