<?php
    include_once("../function.php");
    $halaman = 6; //batasan halaman
    $db=new database();
	  $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	  $total = $db->__construct()->query("select * from mobil");
	  $pages = ceil($total->num_rows/$halaman);
    $dataMobil = query("SELECT * FROM mobil limit $mulai,$halaman");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="mobil/css/styles.css">
        <link rel="stylesheet" href="style.css">

        <title>White Rent Car | Harga Sewa</title>
    </head>
    
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">White Rent Car</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="../index.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="../index.php" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Harga Sewa</a></li>
                        <li class="nav__item"><a href="login/login.php" class="nav__link">login</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <h2 class="section-title">Harga dan Nama Mobil</h2>
                
                <div class="menu__container bd-grid">
                <?php foreach($dataMobil as $data) :?>
                    <div class="menu__content">
                    <img src="<?= $data['img_url']; ?>" alt="" class="menu__img">
                        <h3 class="menu__name"><?= $data['nama_mobil'];?></h3>
                        <span class="menu__preci">Harga Sewa <br>Rp. <?=number_format($data['harga_sewa'],0,",",".") ?> / Hari</span>
                        <br>
                    </div>
                    <?php endforeach; ?> 
                </div>
                    <div class="menu__pagination">
                    <center>
                            <?php for ($i=1; $i<=$pages ; $i++){ ?>
                                <a class="nav__link"  href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                            <?php } 
                                ?>
                            
                    </center>
                    </div>
                    
       
            </section>

        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                </div>
            </div>
            </div>
        </footer>
        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="mobil/js/main.js"></script>
</script>
    </body>
</html>