<?php 
session_start();
if(isset($_SESSION['user']))
{ 

include('connex.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CRM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  	<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
</head>
<body>

	<div class="dashboard">
		<!-- NAVBAR -->
	<div class="container-fluid fixed">
		<div class="row">
			<div class="col-md-12">
				<header id="head" class="">
					<div class="container">
						<div class="navbar-head">
							
									<div class="navbar-logo">
										<a href="index.php"><img src="img/Logo.png"></a>
									</div>

									<div class="toggle-menu">
										<div class="hamburger">
											<i class="fas fa-bars"></i>
										</div>	
									</div>
									
									<div class="navbar-menu">
										<ul class="navbar-menu-list">
											<li class="navbar-menu-item contain pullUpDown"><a href="create-article.html">Nouvel article</a></li>
											<li class="navbar-menu-item"><a href="session_destroy.php" class="log-btn">Logout</a></li>
										</ul>
									</div>
							
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
	<!-- NAVBAR -->



	<!-- BODY -->
	<div class="container-fluid body-shift">
		
		<div class="row">
			<!-- <div class="col-md-12 col-lg-2">
				<div class="Dash-left">
					<h2 class="title">Dashboard</h2> 
					<ul>
				   		<li class="text-center"><a href="create-article.html" >Créer un Nouvel article</a></li>
				   </ul>
				</div>
			</div> -->
			<div class="col-md-12 col-lg-12">
				<section id="post">
					<div class="container">
						<h2 class="title text-center">Gestion des actualités </h2>
						<table id="table_id" class="display table-striped table table-bordered dt-responsive" style="width:100%;">
						    <thead>
						        <tr>
						            <th>Titre</th>
						            <!-- <th>Date de publication</th>
						            <th>Image</th>
						            <th>Contenu</th>
						            <th>Signature </th> -->
						            <th>Action</th>

						        </tr>
						    </thead>
						    <tbody>
						    	<?php 
						    		$sql = "SELECT id_art, titre_art, image_art, date_pub_art, contenu_art, signature_art FROM article ORDER BY date_pub_art ASC";

						    		$resultat = mysqli_query($conn, $sql);
						    		
						    		if($resultat){
						    			if(mysqli_num_rows($resultat)>0){
						    				while ($row = mysqli_fetch_assoc($resultat)){
						    						/*$titre = $row['titre_art'];
								    				$date =  $row['date_pub_art'];
								    				$image = $row['image_art'];
								    				$contenu = substr($row['contenu_art'],0,10);
								    				$contenu .= "....";
								    				$signature = $row['signature_art'];*/

						    					?>
						    					
						    					<tr data-id="<?php echo $row['id_art']; ?>">
						    					 <td><?php echo $row['titre_art']; ?></td>
						    					<!--  <td><?php echo $date; ?></td>
						    					 <td><img src="<?php echo $image; ?>" width="100" height="50"> </td>
						    					  <td><?php echo $contenu; ?></td>
						    					  <td><?php echo $signature; ?></td> -->
						    					   <td>
							            				<div class="text-center">
								            				<a href="edit.php?id=<?php echo $row["id_art"]?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
								            				<a id_data="<?php echo $row["id_art"]?>" class="delete btn btn-danger"><i class="fa fa-trash"></i></a>
								            			</div>
						           					</td>
						           			</tr>
						    				<?php 

						    				}
						    			}
						    		}
						    	 ?>
						    </tbody>
						</table>
					</div>
				</section>	
			</div>
		</div>

	</div>
	<!-- BODY -->
	</div>

	<!-- FOOTER -->
	<div class="container-fluid">
		<div class="row" style="background-color: #e0dede;">
			<div class="col-md-12">
				<footer id="footer">
					<div class="container">
						<div class="row">

		                    <div class=" col-md-4 ">
		                        <div class="footer_widget">
		                            <h3 class="footer_title">
		                               <strong>Liens utiles</strong> 
		                            </h3>
		                            <ul>
		                                </i><li><a target="_blank" href="https://edbm.mg/?lang=fr">EDBM</a></li>
		                                <li><a target="_blank" href="http://www.impots.mg/">DGI</a></li>
		                                <li><a target="_blank" href="http://www.oecfm.mg/">OECFM</a></li>
		                            </ul>
		                        </div>
		                    </div>

		                    <div class=" col-md-4 ">
		                        <div class="footer_widget">
		                            <h3 class="footer_title">
		                                <strong>Documentations</strong>
		                            </h3>
		                            <ul>
		                                <li><a target="_blank" href="https://edbm.mg/sitemap/main-doeuvre/?lang=fr"><i class="fa fa-download"></i>&nbsp Travail</a></li>
		                                <li><a target="_blank" href="https://edbm.mg/sitemap/commerce/?lang=fr"><i class="fa fa-download"></i>&nbsp Commerce</a></li>
		                                <li><a target="_blank" href="https://edbm.mg/sitemap/lois-sur-les-societes/?lang=fr"><i class="fa fa-download"></i>&nbsp Lois sur les sociétés</a></li>
		                            </ul>
		                        </div>
		                    </div>

		                    <div class=" col-md-4">
		                        <div class="footer_widget">
		                            <p>
		                               CRM – Cabinet de Comptabilité, Audit & Conseil
		                               <br>
		                               <i class="fa fa-map-marker-alt"></i> Lot II M 92 Antsakaviro - Immeuble Redzone<br>
		                               <i class="fa fa-phone-alt"></i> <a target="_blank" href="+261 34 65 459 75">+261 34 65 459 75</a>
		                            </p>
		                            <div class="socail_links">
		                                <p>Nous suivre : </p>
		                                <a target="_blank" href="https://www.facebook.com/crmcacsarlu2020">
		                                    <i class="fab fa-facebook-f"></i>
		                                </a>
		                                <a target="_blank" href="https://www.linkedin.com/in/crmcacsarlu">
		                                    <i class="fab fa-linkedin-in"></i>
		                                </a>
		                            </div>
		                        </div>
		                    </div>

						</div>

						<div class="cp-right">
							<div class="rights">
								<p>
								Copyright ©2020 All rights reserved <br>
								| Made with passion by <a target="_blank" href="https://www.dev-inbox.com/">www.dev-inbox.com</a>
							</p>
							<p>
								<a href="">Privacy Policy</a> & <a href="">Term of Use</a>
							</p>
							</div>
							<div class="social-link">
								<a target="_blank" href="https://web.facebook.com/Devinbox-112170117151430/?">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a target="_blank" href="https://www.linkedin.com/company/49147337/">
								<i class="fab fa-linkedin-in"></i>
							</a>
							</div>
						</div>	
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- FOOTER -->

	<!-- JAVASCRIPT -->
	<script src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="js/responsive.bootstrap4.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="js/control.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
		    $('#table_id').DataTable();
		} );
    </script>

</body>
</html>
<?php 
}
else{
    header("location:log_in.html");
}

?>