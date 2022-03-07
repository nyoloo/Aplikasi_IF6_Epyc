<?php
    include_once("function.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="galery.css">

        <title>White Rent Car</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Travel</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="pelangan/mobil.php" class="nav__link">Harga Sewa Mobil</a>
                        </li>
                        <li class="nav__item">
                            <a href="pelangan/login/login.php" class="nav__link">Login</a>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="https://cdn.discordapp.com/attachments/837296692876410883/949298317437861898/damir-babacic-V6dyupmgIMs-unsplash.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">The Best Service<br> With <b>Well-Maintained <br>  Car</b></h1>
                        <a href="#about" class="button">About US<i class="ri-arrow-right-line"></i></a>

                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Whiter Rent Car</h2>
                        <p class="about__description">White Rent Car adalah perusahaan yang bergerak dibidang jasa sewa mobil. Kami menyewakan kendaraan roda empat untuk pemakaian harian, bulanan atau tahunan. 
                            Kendaraan kami selalu kami rawat sehingga kendaraan kami dalam kondisi maksimal.
                        </p>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="https://cdn.discordapp.com/attachments/899880655465357315/943886635769159740/Frame_1_1.png" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                </div>
            </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>