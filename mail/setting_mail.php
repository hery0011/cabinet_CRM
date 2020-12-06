<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	require_once "PHPMailer/PHPMailer.php";
	require_once "PHPMailer/SMTP.php";
	require_once "PHPMailer/Exception.php";

	$mail = new PHPMailer();
	$mail->CharSet = PHPMailer::CHARSET_UTF8;
	/*$mail->SMTPDebug = SMTP::DEBUG_SERVER; */
 ?>