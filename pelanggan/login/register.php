<?php
	include_once("../function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delichip Cake Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-white">

<div class="container">
        <center>
            <img src="https://cdn.discordapp.com/attachments/859080381517266944/865996965488754728/WhatsApp_Image_2021-07-03_at_12.23.31.jpeg" style="width: 10rem;" class="mt-5">
            <h1>White Rent Car</h1>
            <div class="card mt-4  shadow p-3 mb-5 bg-white rounded" style="width: 45%;">
                <div class=" card-body">         
                    <div class="mt-3">
                    <form action="logindatabase.php" method="post">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" placeholder="Your Name"required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email"required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="password" name="your_pass" id="your_pass" class="form-control" placeholder="Password"required >
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                    <input type="submit" name="signup" id="signup" class="form-submit btn btn-primary" value="Register" >
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                                <div class="form-group">
                                <a href="login.php" class="signup-image-link">Sudah Punya Akun ?</a>
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