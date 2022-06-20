<?php require_once 'database.php'; ?>
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

    <section class="sub-header3">
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
        <h1>Contact Us</h1>

    </section>

    <!------------Contact Us---------------->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6825.115687320637!2d29.888565584774057!3d31.205276767373054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c3ee0499be65%3A0x34a5981f04e2de13!2z8J-NpCBLYWRvdXJh!5e0!3m2!1sen!2seg!4v1652639012930!5m2!1sen!2seg"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>MY ROOM</h5>
                        <p>الاسكندريه قاره لوحدها</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>01203546077</h5>
                        <p>every day</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>Elbadawy55714@gmail.com</h5>
                        <p>Email of badawy</p>
                    </span>
                </div>
            </div>
            <!--------------form------------------->
            <div class="contact-col">
                <form action="" method="post">
                    <input type="text" id="fname" name="fname" placeholder="Enter your Name" required>
                    <input type="text" id="email" name="email" placeholder="Enter Email Address" required>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject" required>
                    <textarea id="message" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" value="Submit" class="hero-btn red-btn">send Message</button>
                </form>
            </div>
        </div>
    </section>
    <!-----------------Footer---------------------->
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
    <!------------phone view-------------->
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
<!---------php of contact ------------->
<?php
if (!empty($_POST['submit'])){

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (Name, Email, Subject, Message) 
            values ('$fname', '$email', '$subject', '$message')";
    if (mysqli_query($conn, $sql)){
        echo "New send successfully";
    }else{
        echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>