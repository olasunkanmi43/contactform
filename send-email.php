<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail ->Port = 465;

$mail->Username = "";
$mail->Password = "";

$mail->setForm($email, $name);
$mail->addAddress("example@gmail.com", "Name");

$mail->Subject =$subjest;
$mail->Body = $message;

$mail->send();

header("Location: sent.hmtl");
