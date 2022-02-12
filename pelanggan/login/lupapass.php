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
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <title>Delichip Cake Store</title>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
<center>
    <div class="card text-center shadow bg-white rounded" style="width: 45%;">
    <div class="card-header">
    Masukan Email Anda
    </div>
        <div class="card-body">
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
            <form name="kirimemail" action="LP2.php" method="post">
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="Your Email"required>
                            </div>     
                            <br>
                            <br>
                            
                        <input type="submit" name="kirim" value="cari" class="btn btn-primary">
                    </div>
                </div>
        </div>
    </div>
</body>
</html>