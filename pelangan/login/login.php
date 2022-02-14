<html>
<?php include_once("../function.php"); ?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>NFS Rent Car</title>
</head>
<style>
    .btn-group{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<body class="bg-white">

<div class="container">
        <center>
            <img src="https://cdn.discordapp.com/attachments/859080381517266944/865996965488754728/WhatsApp_Image_2021-07-03_at_12.23.31.jpeg" style="width: 10rem;" class="mt-5">
            <h1>White Rent Car</h1>
            <div class="card mt-4  shadow p-3 mb-5 bg-white rounded" style="width: 45%;">
                <div class=" card-body">         
                    <?php
                    if (isset($_GET["error"])) {
                    $error = $_GET["error"];
                    if ($error == 1) {
                    showError("Email dan password tidak sesuai."); }
                    else if ($error == 2)
                    showError("Error database. Silahkan hubungi administrator");
                    else if ($error == 3)
                    showError("Koneksi ke Database gagal. Autentikasi gagal.");
                    else if ($error == 4)
                    showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login.
                    Silahkan login terlebih dahulu.");
                    else
                    showError("Unknown Error.");
                    }
                    ?>
                    <div class="mt-3">
                    <form action="logindatabase.php" method="post">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                    <input type="username" name="username" id="username" class="form-control" placeholder="Username"required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-link"><a href="register.php">Create an account</a></button>
                                        <input type="submit" name="signin" id="signin" class="btn btn-primary btn-sm" value="Login" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td align="center"><a href="lupapass.php" class="term-service">lupa Password?</a></td>
                                </tr>
                                <div class="form-group">
<<<<<<< HEAD
                                    
                                <a href="../../admin/public/index.php" class="term-service">Login Sebagai Admin</a>
=======
                                <a href="http://localhost/tugas-besar-RPL/admin/public/" class="term-service">Login Sebagai Admin</a>
>>>>>>> 73f86178c2d74beaad7df5179035a99577d508bf
                            </div>
                            </table>
                        </form>
                    </div>
                    </div>
        </center>
                </div>
            </div>
        </section>
    </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>