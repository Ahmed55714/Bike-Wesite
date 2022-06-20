<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eren Bicycles</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logo4.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                    <li> <a href="about.php">ABOUT</a></li>
                    <li> <a href="services.php">SERVICES</a></li>
                    <li> <a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Eren Bicycles</h1>
            <p>Your website is an extension of your bike shop, inviting new shoppers and engaging loyal customers. The
                right website makes your business easy to find, accessible, and relevant. With SmartEtailing, your bike
                shop can have a fully automated online store that looks and functions great on any device. </p>
            <a href="https://www.veloretti.com/" target="_blank" class="hero-btn"> KNOW MORE</a>
        </div>
    </section>
    <!--------------information-------------->
    <section class="information">
        <h1>Welcome to your Home </h1>
        <p>welcome,User!</p>
        <div class="row">
            <div class="information-col">
                <h3>Users </h3>
                <p>97,728 user</p>
            </div>
            <div class="information-col">
                <h3>Founders</h3>
                <p>faculty of science</p>
            </div>
            <div class="information-col">
                <h3>Vision</h3>
                <p>over 3 years of experince</p>
            </div>
        </div>
    </section>
    <!--------hover photos in home page------------>
    <section class="bike-Story">
        <h1>OUR VISION</h1>
        <p>We envision a Colorado where riding a bicycle is always safe and convenient for everyone, where bicycling is
            the top choice for recreation and everyday trips, and where the benefits of bicycling are experienced and
            valued by all people in our state
        </p>
        <div class="row">
            <div class="bike-Story-col">
                <img src="images/back8.jpg">
                <div class="layer">
                    <h3>Safety</h3>
                </div>
            </div>
            <div class="bike-Story-col">
                <img src="images/back4.jpg">
                <div class="layer">
                    <h3>Equity</h3>
                </div>
            </div>
            <div class="bike-Story-col">
                <img src="images/back3.jpg">
                <div class="layer">
                    <h3>Talent</h3>
                </div>
            </div>
        </div>
    </section>
    <div class="horizontal-scroll">
        <div class="main-scroll-div">
            <div>
                <button class="icon" onclick="scrolll()"><i class="fas fa-angle-double-left"></i></button>
            </div>
            <div class="cover">
                <div class="scroll-images">
                    <div class="child"><img class="child-img" src="images/Screenshot (160).png" alt="images"></div>
                    <div class="child"><img class="child-img" src="images/Screenshot (161).png" alt="images"></div>
                    <div class="child"><img class="child-img" src="images/Screenshot (162).png" alt="images"></div>
                    <div class="child"><img class="child-img" src="images/Screenshot (160).png" alt="images"></div>
                    <div class="child"><img class="child-img" src="images/Screenshot (161).png" alt="images"></div>
                    <div class="child"><img class="child-img" src="images/Screenshot (162).png" alt="images"></div>
                </div>
            </div>

            <div>
                <button class="icon" onclick="scrollr()"><i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>

    <!------------end home page------------->
    <section class="cta">
        <h1>We Hope You Like The Page</h1>
        <a href="contact.html" class="hero-btn">Write a Comment</a>
    </section>

<!--------------footer-------------------->
    <section class="footer">
        <h4>About us</h4>
        <p> Website is copyright 2021.<br>
            All copyright its original copyright <br>
        </p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made by <i class="fa fa-heart-o"></i>  Ahmed Elbadawy</p>
    </section>
    <!-----------------phone view--------------->
    <script>
        var navLinks = document.getElementById("navlinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    <!--------------horizontal-scroll------------->
    <script>
        function scrolll() {
            var left = document.querySelector(".scroll-images");
            left.scrollBy(-350, 0)
        }
        function scrollr() {
            var right = document.querySelector(".scroll-images");
            right.scrollBy(350, 0)
        }
    </script>
</body>
</html>