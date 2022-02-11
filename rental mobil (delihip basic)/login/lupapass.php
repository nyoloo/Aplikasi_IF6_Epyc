<?php
include_once("../function.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <title>Delichip Cake Store</title>
<body>
    <br>
    <br>
    <br>
    <br>
    <br> 
<center>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                                <div class="card-block">
                                <form name="kirimemail" action="LP2.php" method="post">
                                    <center>
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Masukan Email yang terdaftar</h6>
                                   

                                     <div class="form-group"><div class="row mb-3">

    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    
    <div class="col-sm-10">
      <input type="email"  class="form-control" name="email" id="email" placeholder="Your Email"required>
    </div>
    <br>
    <br>
    <center>
    <?php
                                    if (isset($_GET["error"])) {
                                        $error = $_GET["error"];
                                    if ($error == 1) {
                                        showError("Email Tidak Ditemukan"); }
                                        else if ($error == 2)
                                        showError("Error database. Silahkan hubungi administrator");
                                        else
                                        showError("Unknown Error.");
                                        }
                                    ?>
                                 
    </center>
                                </center>
                                    </div>
                                    <input type="submit" name="kirim" value="cari" class="btn btn-primary"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </center>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>