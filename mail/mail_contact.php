<?php 

	if (isset($_POST['nom']) && isset($_POST['mail'])&& isset($_POST['objet']) && isset($_POST['message'])) {
		
	$nom = $_POST['nom'];
	$email = $_POST['mail'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];

	include("setting_mail.php");
	
	$mail->Subject = ("$email ($objet)");
	$mail->Body = $message;

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
                        window.location = 'contact.php';
                        })
                    }
            </script>";
	}else{
		echo "no";
	}

	}
 ?>