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

    <section class="sub-header">
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
        <h1>AboutUs</h1>

    </section>

    <!-----------------About Us content---------------->
    <section class="row">
        <div class="about-col">
            <h1>Information About Best Bicycle</h1>
            <p1>bicycle, also called bike, two-wheeled steerable machine that is pedaled by the rider’s feet. On a
                standard bicycle the wheels are mounted in-line in a metal frame, with the front wheel held in a
                rotatable fork. The rider sits on a saddle and steers by leaning and turning handlebars that are
                attached to the fork. The feet turn pedals attached to cranks and a chainwheel. Power is transmitted by
                a loop of chain connecting the chainwheel to a sprocket on the rear wheel. Riding is easily mastered,
                and bikes can be ridden with little effort at 16–24 km (10–15 miles) per hour—about four to five times
                the pace of walking. The bicycle is the most efficient means yet devised to convert human energy.
                 </p1>
            <a href="" class="hero-btn red-btn">BOOK NOW</a>
        </div>
        <div class="about-col">
            <img src="images/Kirsten Dunst & Garrett.jpg" width="500" height="600" style="margin-left: 20%">
        </div>
    </section>

<!---------footer--------------->
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
    <!--------phone view------------->
    <script>
        var navLinks = document.getElementById("navlinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>