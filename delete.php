 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
</head>
<body>

</body>
</html>
<?php 
	$id = $_GET['id'];

	include('connex.php');

	// sql to delete a record
	$sql = "DELETE FROM article WHERE id_art=$id";

	if ($conn->query($sql) === TRUE) {
    	echo "<script type='text/javascript'>
		   Swal.fire(
		  'Suppression réussie!',
		  'Veuillez cliquer sur le boutton ci-dessous !',
		  'success'
		);
		var btnSwalls = document.getElementsByClassName('swal2-confirm');
		        for(var i = 0; i<btnSwalls.length; i++)
		        {
		          btnSwalls[i].addEventListener('click', function(e){
		            e.preventDefault();
		            window.location = 'dashboard.php';
		            })
		        }
		</script>";

	} else {
    	echo "Error deleting record: " . $conn->error;
	}

	$conn->close();

?>