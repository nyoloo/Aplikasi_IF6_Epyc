<?php
include_once("../function.php");
?>
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
		$Email		=$db->escape_string($_POST["email"]);

		$datapelanggan=getDataPelanggan($Email);
        if($datapelanggan)
        {
            $namapelanggan=$datapelanggan["nama_pelanggan"];
            $password=$datapelanggan["password"];
            $phpmailer = new PHPMailer();
                    try {
                            //Server settings
                            $phpmailer->isSMTP();
                            $phpmailer->Host = 'smtp.mailtrap.io';
                            $phpmailer->SMTPAuth = true;
                            $phpmailer->Port = 2525;
                            $phpmailer->Username = '38e6b8b9d46b79';
                            $phpmailer->Password = '1ffb80c08b2ebc';
                        
                            $phpmailer->setFrom('info@delichip.co.id', 'Delichip');
                            $phpmailer->addAddress("$Email", "$namapelanggan");
                        
                            $message = "    <div
                            style='
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              flex-direction: column;
                            '
                          >
                          <div>Anda mendapatkan email ini karna ada permintaan 
                              penggantian kata sandi.</div>
                              <div>
                                  Gunakan kata sandi baru dibawah untuk login ke akun anda,
                                  dan segera ganti ke kata sandi yang anda inginkan.
                              </div>
                              <div>
                                  Kata sandi baru :{$password}
                              </div>
                          </div>";
                            //Content
                            $phpmailer->isHTML(true);                                  //Set email format to HTML
                            $phpmailer->Subject = 'Reset Password';
                            $phpmailer->Body    = $message;
    
                            //$phpmailer->send();
                            echo $message;
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
                        }  
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
                                <center>
                                <form name="loginreset" action="" method="post">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Cek Kembali Email Anda</h6>
                                    <br>
                                    <a href="login.php" class="btn btn-primary" role="button">Kembali Ke login</a>
                                </form>
                                </center>
                                
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