<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>ABOUT US</title>
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
    <div class="about-section">
    <h1>The Crew</h1>
        <p>
        
          <?php
          echo "Meet the team that make it all possible."
          ?>
        </p>
      </div>
      
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="foto/user-3.png" alt="Jane" style="width:100%">
            <div class="container">
              <h2>Jane Doe</h2>
              <p class="title">CEO & Founder</p>
              <p>Some Text Here</p>
              <p>jane@abc.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="foto/user-2.png" alt="Mike" style="width:100%">
            <div class="container">
              <h2>Mike Ross</h2>
              <p class="title">Art Director</p>
              <p>Some Text Here</p>
              <p>mike@abc.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="foto/user-1.png" alt="John" style="width:100%">
            <div class="container">
              <h2>Jane Ross</h2>
              <p class="title">Designer</p>
              <p>Some text here</p>
              <p>ross@abc.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
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
</body>
</html>