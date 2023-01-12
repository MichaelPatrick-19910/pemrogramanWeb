<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MikeStrore | Ecommerce Website </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/56a878bc83.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="header">
    <div class="container">
        <div class="navbar">
        <div class="logo">
            <img src="foto/LOGO.jpg.jpg" width="100px" height="50px">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.html">HOME</a></li>
                <li><a href="aboutUs.php">ABOUT</a></li>
                <li><a href="contactUs.html">CONTACT US</a></li>
                <li><a href="">SIGN IN</a></li>
                <li><a href="product.html">CATALOG</a></li>
            </ul>
        </nav>
            <img src="foto/shopping_cart_80px.png" width="28px" height="30px">
            <img src="foto/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
    <div class="row">
        <div class="col-2">
            <h1>Sport Can Be Fun</h1>
                <p> Other than education<br>
                 you would need good health<br>
                 To have a good health<br>
                 you need to play sports</p>
                <a href="" class="btn">Explore Now &#10132</a>
        </div>
        <div class="col-2">
            <img src="foto/imagesport (2).png">
            </div>
        </div>
    </div>
</div>
<!-- ---------featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
            <div class="col-3">
                <img src="foto/category-1.jpg" >
            </div>
            <div class="col-3">
                <img src="foto/category-2.jpg">
            </div>
            <div class="col-3">
                <img src="foto/category-3.jpg">
            </div>
        </div>  
        </div>
    </div>
<!-- featured product -->
    
<?php
        $dbhost = "localhost:3306";
        $dbuser = "root";
        $dbpass = "password";
        $dbname = "programin_web_db";
        
        $conn = new mysqli($dbhost, $dbuser)
            or die('Error connecting to mysql');

        $db = mysqli_select_db($conn, $dbname);
        $sql = "select * from products";
        $query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) {
    echo $row['id'], "", $row['name'];

    ?>
    <div class="small-container">
        <h2 class="title">Featured Product</h2>
        <div class="row">
            <div class="col-4">
                <img src="foto/product-1.jpg">
                <h4 class="text-center"><?php echo $row['name'];?></h4>
                <div class="text-center">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="priceFeatured">RP.120.000</p>
            </div>
            <div class="col-4">
                <img src="foto/product-2.jpg">
                <h4 class="text-center">Nike Air Max Excee</h4>
                <div class="text-center">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p class="priceFeatured">RP.1.939.000</p>
            </div>
            <div class="col-4">
                <img src="foto/product-3.jpg">
                <h4 class="text-center">Celana Training Hitam</h4>
                <div class="text-center">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="priceFeatured">RP.430.000</p>
            </div>
            <div class="col-4">
                <img src="foto/product-4.jpg">
                <h4 class="text-center">Polo Navy</h4>
                <div class="text-center">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="priceFeatured">RP.200.000</p>
            </div>
        </div>
    </div>
    <?php
    }
    mysqli_close($conn);
    ?>
<!-- offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="foto/exclusive 1.jpg" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusive Available on MikerStore</p>
                <h3>NMD R1</h3>
                <medium> Get This Premium Shoe With A Crazy Discount Only On MikerShop </medium>
                <a href="" class="btn">Buy Now &#10132</a>
            </div>
        </div>
    </div>
</div>
<!--Brands -->
<div class="brands">
    <div class="small-container">
        <div class="row text-center">
            <div class="col-6">
                <img src="foto/logo-godrej.png">
            </div>
            <div class="col-6">
                <img src="foto/logo-nike.png">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-6">
                <img src="foto/logo-oppo.png">
            </div>
            <div class="col-6">
                <img src="foto/logo-coca-cola.png">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <img src="foto/logo-adidas.png">
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download Our App For Android And IOS</p>
                    <div class="app-logo">
                        <img src="foto/app-store.png">
                        <img src="foto/play-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="foto/LOGO.jpg.jpg">
                    <p>We Give The BEst For Customers</p>
                </div>
                <div class="footer-col-3">
                    <h3>Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Spot</li>
                        <li>Policy</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Our Social Media</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - MikerStore</p>
        </div>
    </div>
    <!-- js fr toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>