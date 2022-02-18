<?php
	include_once("../../function.php");
?>
<?php
              session_start();
              if (!isset($_SESSION["username"]))
                header("Location: ../login/login.php?error=4");
              ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
    <title>Kirim pesan</title>
  </head>
  <body>
  <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './lib/PHPMailer/src/Exception.php';
require './lib/PHPMailer/src/PHPMailer.php';
require './lib/PHPMailer/src/SMTP.php';

if(isset($_POST["simpan"])){

$nama=($_POST["nama"]);
$email=($_POST["email"]);
$pesan=($_POST["pesan"]);

$mail = new PHPMailer();

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = 'e55eb3fa9f0110';
    $mail->Password = '86fbf20c1e6068';

    $mail->setFrom("$email", "$nama");
    $mail->addAddress('tafriyadi273@gmail.com', 'Tri');

    $messages=$pesan;

    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = 'Suara dari Customer';
    $mail->Body    = $messages;

    $mail->send();
    echo '<br>';
	echo '<br>';
	echo '<center>';
    echo '<div class="card" style="width: 25rem;">';
    echo '<center>';
    echo '<h5 class="card-header">Pesan Telah Terkirim!</h5>';
    echo '<div class="card-footer ">';
    echo '<a class="btn btn-primary" href="home.php" role="button">OK</a>';
    echo '</div>';
    echo '</center>';
    echo '</div>';
    echo '</center>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
else
{
    echo 'data tidak ada';
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>