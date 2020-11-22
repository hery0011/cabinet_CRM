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
	if (isset($_POST['identifiant'])&& isset($_POST['password'])) {
		$login = $_POST['identifiant'];
		$mdp = $_POST['password'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cabinet_audit";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM login WHERE login_identifiant = '$login' AND login_password='$mdp'";
	$result = $conn->query($sql); 
	$row = $result->fetch_assoc();
	
	if ($row) {
		header("location:dashboard.php");
	}else{
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'veuillez contacter l \'administrateur du site!'
				});
				var btnSwalls = document.getElementsByClassName('swal2-confirm');
				for(var i = 0; i<btnSwalls.length; i++)
				{
					btnSwalls[i].addEventListener('click', function(e){
						e.preventDefault();
						window.location = 'log_in.html';
						})
				}
			</script>";
	}

	
	mysqli_close($conn);
 ?>