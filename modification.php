<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cabinet_audit";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}


if(
	isset($_POST["titre"]) 
	&& isset($_POST["id"]) 
	&& isset($_POST["date"]) 
	&& isset($_FILES["image"]) 
	&& isset($_POST["contenu"]) 
	&& isset($_POST["signature"])
)
{

	$titre = addslashes(trim($_POST['titre']));
	$date = $_POST['date'];
	$id = $_POST['id'];
	$image = "upload/";
 	$image = $image . basename( $_FILES['image']['name']);
	$contenu = addslashes(trim($_POST['contenu']));
	$signature = addslashes(trim($_POST['signature']));

	if($image =="upload/")
	{
		$sql2 = "SELECT image_art FROM article WHERE id_art = $id";
		$res = mysqli_query($conn, $sql2);
		if($res)
		{
			$ligne = mysqli_fetch_assoc($res);
			$image = $ligne['image_art'];
		}
	}

	$sql ="UPDATE article SET titre_art='$titre',image_art='$image',date_pub_art='$date',contenu_art='$contenu',signature_art='$signature' WHERE id_art=$id";

if (mysqli_query($conn, $sql)) {
	if(!file_exists($image))
	{
			if(move_uploaded_file($_FILES['image']['tmp_name'], $image)){
	 	
			  header("location:dashboard.php");

			 }

		 	else {
	//			var_dump($image);die();
		 		//var_dump($_FILES['image']['tmp_name']);die();
		 		echo "Problem uploading file";
		 	}  	
	}
	else
	{
		header("location:dashboard.php");
	}
} else {
    echo "Erreur d'insertion : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




}
	/*if (isset($titre && $date && $image && $contenu && $signature)) {
		
	}*/


 ?>