<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	require_once "PHPMailer/PHPMailer.php";
	require_once "PHPMailer/SMTP.php";
	require_once "PHPMailer/Exception.php";

	$mail = new PHPMailer();

	//smtp setting
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "devinbox.contact@gmail.com";
	$mail->Password = 'devinbox007@';
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";

	//email setting
	$mail->isHTML(true);
	$mail->setFrom($email, $nom);
	$mail->AddAddress("no-replay@crmcac.com");
 ?>