<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once(__DIR__. '/../../../config/database/database.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './lib/PHPMailer/src/Exception.php';
require './lib/PHPMailer/src/PHPMailer.php';
require './lib/PHPMailer/src/SMTP.php';

$phpmailer = new PHPMailer();

$json = file_get_contents('php://input');
$data = json_decode($json,true);

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+-={}[]\|<>,./?';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 15; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
$Password=randomPassword();

$email = $data["email"];

$result = mysqli_query(
	$con,
	"Select email from Owner where email='$email'");

$result1 = mysqli_query(
        $con,
        "Update Owner set password='$Password' where email='$email'");

    if ($result){
        if($result->num_rows==1){
        try {
            //Server settings
            $phpmailer->isSMTP();
            $phpmailer->Host = 'smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = '38e6b8b9d46b79';
            $phpmailer->Password = '1ffb80c08b2ebc';
        
            $phpmailer->setFrom('info@delichip.co.id', 'Delichip');
            $phpmailer->addAddress('tri@gmail.com', 'Tri');
        
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
                  Kata sandi baru :{$Password}
              </div>
          </div>";
            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = 'Reset Password';
            $phpmailer->Body    = $message;
        
            $arr = array();
            $arr['info'] = 'success';
            $arr['msg'] = 'Email Pemulihan Telah Dikirim';
            echo json_encode($arr);
            echo $message;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
        }  
    }
    else {
        $arr = array();
        $arr['info'] = 'error';
        $arr['msg'] = 'Masukan Email Yang Valid';
        echo json_encode($arr);
    }
    }
?>