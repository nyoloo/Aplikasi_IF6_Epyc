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
    <title>White Rent Car</title>
<body>
<br>
<br>
<br>
<br>
<br>
<center>
<div class="card text-center shadow bg-white rounded" style="width: 45%;">
<div class="card-header">
    <b>Informasi Kata Sandi</b>
  </div>
  <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
            
    require './lib/PHPMailer/src/Exception.php';
    require './lib/PHPMailer/src/PHPMailer.php';
    require './lib/PHPMailer/src/SMTP.php';

//error_reporting(0);
if(isset($_POST["kirim"])){
	$db=dbConnect();
	if($db->connect_errno==0){
		// Bersihkan data
		$username		=$db->escape_string($_POST["username"]);

		$datacustomer=getDataCustomer($username);
        if($datacustomer)
        {
            $username=$datacustomer["username"];
            $password=$datacustomer["password"];
            // $phpmailer = new PHPMailer();
            //         try {
            //                 //Server settings
            //                 $phpmailer->isSMTP();
            //                 $phpmailer->Host = 'smtp.mailtrap.io';
            //                 $phpmailer->SMTPAuth = true;
            //                 $phpmailer->Port = 2525;
            //                 $phpmailer->Username = '38e6b8b9d46b79';
            //                 $phpmailer->Password = '1ffb80c08b2ebc';
                        
            //                 $phpmailer->setFrom('info@delichip.co.id', 'Delichip');
            //                 $phpmailer->addAddress("$Email", "$namapelanggan");
                        
                            $message = "    <div
                            style='
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              flex-direction: column;
                            '
                          >
                          <div>Anda mendapatkan Pesan ini karna ada permintaan 
                              penggantian kata sandi.</div>
                              <div>
                                  Gunakan kata sandi yang ada dibawah untuk login ke akun anda
                              </div>
                              <div>
                                  Kata sandi :{$password}
                              </div>
                          </div>";
                        //     //Content
                        //     $phpmailer->isHTML(true);                                  //Set email format to HTML
                        //     $phpmailer->Subject = 'Reset Password';
                        //     $phpmailer->Body    = $message;
    
                        //     //$phpmailer->send();
                             echo $message;
                        // } catch (Exception $e) {
                        //     echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
                        // }  
                    }
                    else 
                    {
                        header("Location: lupapass.php?error=1");
                    }
        }    
        else 
        {
            header("Location: lupapass.php?error=2");
        }
    }
?>
        <div class="card-body">
            <form name="loginreset" action="" method="post">
                <a href="login.php" class="btn btn-primary" role="button">Kembali Ke login</a>
            </form>
        </div>
    </div>
  </center>
    </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>