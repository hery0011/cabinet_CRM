<?php 
try{
	include("setting_mail.php");
	
	$objet = "Devis";
	$mail->Subject = ("$email ($objet)");
	$mail->Body = $affichage;

	if ($mail->send());
  } catch (\Exception $exc) {
   var_dump($exc) ;die;
}

 ?>



