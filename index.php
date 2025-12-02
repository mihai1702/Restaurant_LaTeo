<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="style.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>Restaurant La Teo</title>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
/>

<!-- JS Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <?php
    include "header.html";
    ?>
    <section class="home-page-section">
       <div class="home-page-content">                
            <img class="logo" src="icons/logo.png" alt="Logo">
            <h1>Gustul care te aduce acasă!</h1>
            <button class="see-menu" onclick="location.href='Menu.php'">Vezi Meniul</button>
        </div>
    </section>
    <!-- Second section -->
    <section class="home-second-section">
        <div class="blur-effect">
            <div class="home-page-p">
                <p>De peste două decenii, La Teo transformă mâncarea în amintiri pline de savoare!</p>
                <!-- <p>Vino in restaurantul nostru pentru a lua parte la pasiunea noastra</p> -->
            </div>
        </div>
    </section>
    <!-- Image Slider Section -->
    <section class="swiper-section">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(images/slider-main.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-1.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-2.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-3.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-4.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-5.jpeg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-6.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-7.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-8.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-9.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-10.jpg);"></div>
                <div class="swiper-slide" style="background-image: url(images/slider-11.jpg);"></div>
            </div>
        </div>
    </section>
    <!-- Reservation section -->
     <section class="reservations" id="reserv">
            <h1>Rezervari</h1>
            <div class="desktop-style">
                <a class="phone" href="tel:+0265212244">SUNA ACUM</a>
                <div>
                    <h2>ORAR</h2>
            <div class="program">
                <div>
                    <p class="days">Luni - Sambata</p>
                    <p>11:00 - 23:00</p>
                </div>
                <div>
                    <p class="days">Duminica</p>
                    <p>12:00 - 22:00</p>
                </div>
            </div>
                </div>
            </div>
            
     </section>
    <?php
    include "footer.html";
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="scripts/index-script.js"></script>
</body>

</html>