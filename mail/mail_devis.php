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
	$mail->Username = "rasolonjatovohery5@gmail.com";
	$mail->Password = 'hery0011';
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";

	//email setting
	$mail->isHTML(true);
	$mail->setFrom($email, $nom);
	$mail->AddAddress("rasolonjatovohery5@gmail.com");

	$objet = "Devis";
	$mail->Subject = ("$email ($objet)");
	$mail->Body = $affichage;

	if ($mail->send()) {
		echo "<script type='text/javascript'>
               Swal.fire(
              'Message envoyé!',
              'Veuillez cliquer sur le boutton ci-dessous !',
              'success'
            );
            var btnSwalls = document.getElementsByClassName('swal2-confirm');
                    for(var i = 0; i<btnSwalls.length; i++)
                    {
                      btnSwalls[i].addEventListener('click', function(e){
                        e.preventDefault();
                        window.location = 'devis.html';
                        })
                    }
            </script>";
	}else{
		echo "no";
	}


 ?>