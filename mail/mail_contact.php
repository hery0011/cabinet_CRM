<?php 

	if (isset($_POST['nom']) && isset($_POST['mail'])&& isset($_POST['objet']) && isset($_POST['message'])) {
		
	$nom = $_POST['nom'];
	$email = $_POST['mail'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];
try{
	include("setting_mail.php");
	
	$mail->Subject = ("$email ($objet)");
	$mail->Body = $message;

	if ($mail->send());
  } catch (\Exception $exc) {
   var_dump($exc) ;die;
}
	}
 ?>