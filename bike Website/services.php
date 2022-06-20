<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eren Bicycles</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section class="sub-header2">
        <nav>
            <a href="index.php"><img src="images/logo4.png"></a>
            <div class="nav-links" id="navLinks">
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
        <h1>Our services</h1>
    </section>
    <!---------------services------------->
    <section class="services">
        <h1>services We Offer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <div class="row">
            <div class="services-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulls, eleifend faucibus est
                    sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus
                    Donec site.</p>
            </div>
            <div class="services-col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulls, eleifend faucibus est
                    sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus
                    Donec site.</p>
            </div>
            <div class="services-col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulls, eleifend faucibus est
                    sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus
                    Donec site.</p>
            </div>
        </div>
    </section>
    <!-----------------------facilities-------------------------->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/back6.jpg">
                <h3>World class Library</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulla.</p>
            </div>
            <div class="facilities-col">
                <img src="images/wall3.jpg">
                <h3>Largest Play Ground</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulla.</p>
            </div>
            <div class="facilities-col">
                <img src="images/back7.jpg">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque aliquet turpis nulla.</p>
            </div>
        </div>
    </section>

    <!----------------------footer---------------------->
    <section class="footer">
        <h4>About us</h4>
        <p> Website is copyright 2021<br>
            All copyright its original copyright</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made by <i class="fa fa-heart-o"></i>  Ahmed Elbadawy</p>
    </section>
    <!----------------phone view-------------->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>