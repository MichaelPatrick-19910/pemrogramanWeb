<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products - MikeStrore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/56a878bc83.js" crossorigin="anonymous"></script>
</head>
<body>

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
                <li><a href="product.php">CATALOG</a></li>
            </ul>
        </nav>
            <img src="foto/shopping_cart_80px.png" width="28px" height="30px">
            <img src="foto/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
    </div>

    <div class="small-container">
        
        <div class="row row-2">
            <h2>All Product</h2>
            <select>
                <option >Default Sorting</option>
                <option >Sort by price</option>
                <option >Sort by popularity</option>
                <option >Sort by rating</option>
                <option >Sort by sale</option>
            </select>
        </div>
           
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
        $array = array();
while ($row = mysqli_fetch_assoc($query)) {
    $array[] = $row;
}
    ?>
        <div class="row">
            <div class="col-4">
                <img src="foto/product-1.jpg">
                <h4><?php echo $array[0]['name'];?></h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>RP.120.000</p>
            </div>
            <div class="col-4">
                <img src="foto/product-2.jpg">
                <h4><?php echo $array[1]['name'];?></h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>RP.1.939.000</p>
            </div>
            <div class="col-4">
                <img src="foto/product-3.jpg">
                <h4><?php echo $array[2]['name'];?></h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>RP.430.000</p>
            </div>
            <div class="col-4">
                <img src="foto/product-4.jpg">
                <h4><?php echo $array[3]['name'];?></h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>RP.200.000</p>
            </div>
        </div>


    </div>
    
    <?php
    // }
    mysqli_close($conn);
    ?>
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









