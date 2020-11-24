<?php 
	include("setting_mail.php");
	
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