<?php 
session_start();
if(isset($_SESSION['user']))
{
	session_destroy();
}

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
	if (isset($_POST['identifiant'])&& isset($_POST['password'])) {
		$login = $_POST['identifiant'];
		$mdp = $_POST['password'];
	

	include('connex.php');

	$sql = "SELECT * FROM login WHERE login_identifiant = '$login' AND login_password='$mdp'";
	$result = $conn->query($sql); 
	$row = $result->fetch_assoc();
	
	if ($row) {
		$_SESSION['user'] = 'admin';
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
	}
	else
	{
		header("location:log_in.html");
	}
	mysqli_close($conn);
 ?>