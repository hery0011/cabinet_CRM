<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cabinet_audit";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Erreur de connexion: " . mysqli_connect_error());
}

if(
	isset($_POST["titre"]) 
	&& isset($_POST["date"]) 
	&& isset($_FILES["file"])
	&& isset($_POST["contenu"])
	&& isset($_POST["signature"])
	)

	$chemin = "upload/";
 	$chemin = $chemin . basename( $_FILES['file']['name']);
	$titre = addslashes(trim($_POST["titre"]));
	$date = trim($_POST["date"]);
	$contenu = addslashes(trim($_POST["contenu"]));
	$signature = trim($_POST["signature"]);



$sql ="INSERT INTO article(titre_art, image_art, date_pub_art, contenu_art, signature_art) VALUES ('$titre', '$chemin', '$date', '$contenu', '$signature')";


if (mysqli_query($conn, $sql)) {
	if(move_uploaded_file($_FILES['file']['tmp_name'], $chemin)){
 	
		  header("location:dashboard.php");

	 }

 	else {

 		echo "Problem uploading file";
 	}  
} else {
    echo "Erreur d'insertion : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


 ?>