<?php 

	if (isset($_POST['nom']) && isset($_POST['mail'])&& isset($_POST['objet']) && isset($_POST['message'])) {
		
	$nom = $_POST['nom'];
	$email = $_POST['mail'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];

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
	$mail->Subject = ("$email ($objet)");
	$mail->Body = $message;

	} catch (Exception $e) {
		var_dump($e);die($mail->ErrorInfo);
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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

	}
 ?>