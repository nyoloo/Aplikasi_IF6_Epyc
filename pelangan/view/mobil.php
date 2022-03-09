<?php
    include_once("../../function.php");
    $halaman = 6; //batasan halaman
    $db=new database();
	  $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	  $total = $db->__construct()->query("select * from mobil");
	  $pages = ceil($total->num_rows/$halaman);
    $dataMobil = query("SELECT * FROM mobil limit $mulai,$halaman");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../mobil/css/styles.css">
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>White Rent Car | Harga Sewa</title>
  </head>
    <style>
        .modal{
            color: black;
        }
    </style>
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
                        <li class="nav__item"><a href="home.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="home.php" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Harga Sewa</a></li>
                        <li class="nav__item"><a href="profil.php" class="nav__link">Profil</a></li>
                        <li class="nav__item"><a href="#" class="nav__link" data-bs-toggle="modal" data-bs-target="#logot">Logout</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
        
        <!-- Modal -->
        <center>
        <div class="modal fade" id="logot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        Yakin Untuk Keluar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                    </div>
                </div>
            </div>
        
        </center>
            
        

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <center>
                <h2 class="section-title">Harga dan Nama Mobil</h2>
                
                </center>
                <div class="menu__container bd-grid">
                <?php foreach($dataMobil as $data) :?>
                    <div class="menu__content">
                    <img src="<?= $data['img_url']; ?>" alt="" class="menu__img">
                        <h3 class="menu__name"><?= $data['nama_mobil'];?></h3>
                        <span class="menu__preci">Harga Sewa <br>Rp. <?=number_format($data['harga_sewa'],0,",",".") ?> / Hari</span>
                        <br>
                        <a href="profil/transaksi.php?id_mobil=<?= $data['id_mobil']; ?>" type="button" class="btn btn-success">Sewa Sekarang</a>
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
        <script src="../mobil/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    </body>
</html>



