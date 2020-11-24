<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
</head>
<body>

<?php 
use PHPMailer\PHPMailer\PHPMailer;
  //demande poste :
if(isset($_POST['comptabilite'])){
	$comptabilite = trim($_POST['comptabilite']);
}
if(isset($_POST['audit'])){
	$audit = trim($_POST['audit']);
}	

if(isset($_POST['fiscalite'])){
	$fiscalite = trim($_POST['fiscalite']);
}
if(isset($_POST['creation_entreprise'])){
	$creation_entreprise = trim($_POST['creation_entreprise']);
}
if(isset($_POST['gestion_paix'])){
	$gestion_paix = trim($_POST['gestion_paix']);
}
if(isset($_POST['finance'])){
	$finance = trim($_POST['finance']);
}
if(isset($_POST['autre'])){
	$autre = trim($_POST['autre']); 
}

//Salarie
 $informationSalarie = "<br><b>Nombre de salariés :<b>";
	if(isset($_POST["salaries"]))
	{
		$salarie = trim($_POST["salaries"]);
		$informationSalarie .= "<br> $salarie";
	}

//chiffre d'affaire
	$chiffreAffaireAnnuel = "<br><b>Chiffre d'affaire annuel</b> :";
	if(isset($_POST['chiffreAffaire']))
	{
		$chiffreAffaire = trim($_POST['chiffreAffaire']);
		$chiffreAffaireAnnuel .= "<br> $chiffreAffaire";
	}

//expert comptable
	$expertComptable = "<br><b>Ayant un expert comptable :</b>";
	if(isset($_POST["comptable"]))
	{
		$comptable = trim($_POST["comptable"]);
		$expertComptable .= "<br> $comptable";
	}

//forme juridique du société
	if(isset($_POST['forme_juridique'])){
		$forme_juridique = trim($_POST['forme_juridique']);
	}

// Reconnaissance du CRM
	if(isset($_POST['comment'])){
		$comment = $_POST['comment'];
	}

//information personnel
	$information ="<br><b>Information personnelles :</b> ";
	if(isset($_POST['nom'])){
		$nom = $_POST['nom'];
		$information .= "<br><b>Nom :</b> $nom";
	}
	if(isset($_POST['prenom'])){
		$prenom = $_POST['prenom'];
		$information .= "<br><b>Prénom:</b> $prenom";
	}
	if(isset($_POST['entreprise']))
	{
		$entreprise = $_POST['entreprise'];
		$information .= "<br><b>Entreprise :</b> $entreprise";
	}

	if(isset($_POST['secteur']))
	{
		$secteur = $_POST['secteur'];
		$information .= "<br><b>Secteur d'activité :</b> $secteur";
	}

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		//$information .= "<br> $email";
	}
	if(isset($_POST['tel']))
	{
		$tel = $_POST['tel'];
		$information .= "<br><b>Téléphone :</b> $tel";
	}

	if(isset($_POST['ville']))
	{
		$ville = $_POST['ville'];
		$information .= "<br><b>Ville:</b> $ville";
	}

	if(isset($_POST['code_postal']))
	{
		$code_postal = $_POST['code_postal'];
		$information .= "<br><b>Code postal :</b> $code_postal";
	}

	if(isset($_POST['message']))
	{
		$message = $_POST['message'];
		$information .= "<br><b>Message :</b> $message";
	}
	if(isset($_POST['optradio']))
	{
		$optradio = $_POST['optradio'];
		$information .= "<br> j'accepte que les informations saisies soient exploitées dans le cadre de la demande de devis et de la relation commerciale qui peut en découler.";
	}

// demande poste ($affichage)
	$demande = "<b>votre demande porte sur :</b>";

	if(isset($comptabilite))
	{
	 $demande .= "<br> $comptabilite";
	}

	if(isset($audit)){
	 
		$demande .= "<br> $audit";
	}

	if(isset($fiscalite)){
		 $demande .= "<br> $fiscalite";

	}

		if(isset($creation_entreprise)){
			 $demande .= "<br> $creation_entreprise";
		}

		if(isset($gestion_paix)){
			$demande .= "<br> $gestion_paix";
		}

		if(isset($finance)){
			$demande .= "<br> $finance";	
		}

		if(isset($autre)){
			$demande .= "<br> $autre";
		}

	$affichage = $information."<br><br>".$demande."<br>".$informationSalarie."<br>".$chiffreAffaireAnnuel;
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

</body>
</html>
</body>
</html>