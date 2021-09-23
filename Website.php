<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/web.Style.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/9b9a1b31fa.js" crossorigin="anonymous"></script>
    <title>Electric Cars, Solar & Clean Energy | Tesla</title>
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <img src="Images/tesla.png" alt="Logo" width="100px">
            </div>
            <div class="List-Items">
                <ul>
                    <li><a href="#">Home</a></i></li>
                    <li><a href="#">About</a></li>
                    <li class="subnavli"><a href="#">Contact</a>
                        <ul class="subnav">
                            <li><a href="https://mail.google.com/mail/u/0/#inbox">Email</a><i class="fas fa-envelope-square"></i>
                            </li>
                            <li><a href="#">Address</a><i class="fas fa-map-marked-alt"></i></li>
                            <li><a href="contact form/form.php">Your Opinion</a><i class="far fa-thumbs-up"></i></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Headers End's here -->
    <section> 
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="images/slide_03.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="images/slide_01.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="images/slide_02.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div class="section">
            <div class="box">
                <img src="images/bugatti_veyron_cars_sport_cars_white_hood_lights_suite_93487_320x240.jpg" alt="">
                Model S is built from the ground up as an electric vehicle, with a high-strength architecture and floor-mounted battery pack for incredible occupant protection and low rollover risk. Every Model S includes Tesla’s latest active safety features, such as Automatic Emergency Braking.
                <button>Read More </button>
            </div>
            <div class="box">
                <img src="images/bugatti_chiron_bugatti_sports_car_129532_320x240.jpg" alt="">
                Model S is built from the ground up as an electric vehicle, with a high-strength architecture and floor-mounted battery pack for incredible occupant protection and low rollover risk. Every Model S includes Tesla’s latest active safety features, such as Automatic Emergency Braking.
                <button>Read More </button>
            </div>
            <div class="box">
                <img src="images/bmw_vision_efficientdynamics_concept_front_view_97571_320x240.jpg" alt="">
                Model S is built from the ground up as an electric vehicle, with a high-strength architecture and floor-mounted battery pack for incredible occupant protection and low rollover riskAttention to detail on all exterior surfaces makes Model S the most aerodynamic production car on Earth.
                <button>Read More </button>
            </div>
        </div>
    </section>
    <!-- Section End's here -->
    <div class="footer">
        <div class="copyright">
            © Copyright 2021 Tesla Motors. All Rights Reserved.
        </div>
    </div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
    </script>
</body>

</html>