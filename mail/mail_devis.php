<?php 
	include("setting_mail.php");
	try {

		 //Server settings
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "rasolonjatovohery0011@gmail.com";
	$mail->Password = 'hery0011';
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";

	//email setting
	$mail->isHTML(true);
	$mail->setFrom($email, $nom);
	$mail->AddAddress("crmcac@crmcac.com");

	$objet = "Devis";
	$mail->Subject = ("$email ($objet)");
	$mail->Body = $affichage;

	} catch (Exception $e) {
		/*var_dump($e);die($mail->ErrorInfo);*/
	}

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
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...Une erreur s\'est produite',
				  text: 'Veuillez actualiser la page et ressaisir les informations!'
				});
				var btnSwalls = document.getElementsByClassName('swal2-confirm');
				for(var i = 0; i<btnSwalls.length; i++)
				{
					btnSwalls[i].addEventListener('click', function(e){
						e.preventDefault();
						window.location = 'contact.php';
						})
				}
			</script>";
	}

?>



