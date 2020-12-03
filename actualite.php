<?php 
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
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- NAVBAR -->
	<div class="container-fluid">
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
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="index.php" class="active">Accueil</a></li>						
											<li class="navbar-menu-item contain dropdown pullUpDown">
												<a class="log-btn1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Le Cabinet </a>
												<ul class="sub_menu sub1 dropdown-menu" aria-labelledby="dropdownMenuButton">
													<li><a href="cabinet_qui_sommes_nous.html">Qui sommes-nous ?</a></li>
													<li><a href="cabinet_valeurs.html">Nos valeurs</a></li>
													<li><a href="cabinet_missions.html">Nos missions</a></li>
												</ul>
											</li>
											<li class="navbar-menu-item contain dropdown pullUpDown">
												<a class="log-btn1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos Services</a>
												<ul class="sub_menu sub2 dropdown-menu">
													<li><a href="service_expertise.html">Expertise comptable</a></li>
													<li><a href="service_audit.html">Audit</a></li>
													<li><a href="service_fiscalité.html">Fiscalité</a></li>
													<li><a href="service_investisseur.html">Assistance aux investisseurs</a></li>
													<li><a href="service_conseil.html">Assistance et conseil en gestion</a></li>
												</ul>
											</li>
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="devis.html">Devis</a></li>
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="actualite.php">Actualités</a></li>
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="contact.php">Contact</a></li>
										</ul>
				
									</div>

			
							
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
	<!-- NAVBAR -->

	<section id="banner" class="banner-actus">
		<div class="container"></div>
	</section>

	<!-- BODY -->
	<div class="container-fluid">
		
				<div class="row">
					<div class="col-md-12 col-lg-3">
						<aside id="filter">
							<h2 class="title"><b>Historique</b></h2>
							<div class="actu-filter">
								<!-- <p class="">
									Vous décrouvrez ici toutes les informations nous concernant. Nous partageons des conseils et astuces pour vous accompagner dans vos projets.
								</p> --><!-- 
								<h2 class="title"><b>Historique</b></h2> -->

								<div class="check-filter"> 
					              <ul>

								<?php 

									$sql = "SELECT titre_art FROM article ORDER BY id_art ASC";
									$result = mysqli_query($conn, $sql);
									
									if ($result->num_rows > 0) {
								    while($row = $result->fetch_assoc()) {
								 ?>

								
					              	<li class="liste_article"><a href=""><?php echo $row['titre_art']; ?></a></li>
					              	<?php 
							              }
							          }
					              	 ?>
					              </ul>
					          	</div>								
							</div>
						</aside>
					</div>
					<div class="col-md-12 col-lg-9">
						<section id="post">

									<?php 
										$sql = "SELECT * FROM article";
										$resultat = mysqli_query($conn, $sql);
										$total_ligne = mysqli_num_rows($resultat);
										if(isset($_GET["debut"]))
										{
											$commencement = $_GET["debut"];
											//$nbliste = $_GET["liste"];
											$nbliste = 3;
										}
										else
										{
											$commencement = 0;
											$nbliste = 3;
										}

										$nb_page = ceil($total_ligne/$nbliste);
										$sql = "SELECT * FROM article ORDER BY id_art DESC LIMIT  $commencement, $nbliste";



										//$sql = "SELECT * FROM article ORDER BY id_art DESC LIMIT 3";
										$result = mysqli_query($conn, $sql);
										if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
									?>
										<div class="post-content">
											<div class="row">
												<div class="col-md-4 col-sm-12">
													<div class="post-image">
														<img src="<?php echo $row['image_art'] ?>">
													</div>
												</div>
												<div class="col-md-8 col-sm-12">
													<div class="post-detail">
														<h2><?php echo $row['titre_art']; ?></h2>
														<p>
															<?php echo(substr($row['contenu_art'],0,210).'...'); ?>
														</p>
														<a href="article.php?id=<?php echo $row['id_art']; ?>">
															<div class="post-btn">
																<button class="btn btn-post float-right">En savoir plus</button>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>

											<?php 
													}
												}
											 ?>
			
									 <div class="container">
									 	<ul class="pagination">
									  	<?php
									 	for($i = 0; $i<$nb_page; $i++){
									 		$k = $i * $nbliste;
									 		$p = $i+1;

									 		?>
									 		<li class="page-item"><a class="page-link"  href="actualite.php?debut=<?php echo $k  ?>"><?php echo $p; ?></a></li>
									  
									<?php } ?>
									 	 </ul>
									 </div>
						</section>
					</div>
				</div>

			
	</div>
	<!-- BODY -->

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
		                               <i class="fa fa-map-marker-alt"></i> Lot II M 92 Antsakaviro <br>
		                               <i class="fa fa-phone-alt"></i> <a target="_blank" href="+261 34 65 459 75">+261 34 65 459 75</a>
		                            </p>
		                            <div class="socail_links">
		                                <p>Nous suivre : </p>
		                                <a target="_blank" href="https://www.facebook.com/CRMCAC.SARLU">
		                                    <i class="fab fa-facebook-f"></i>
		                                </a>
		                                <a target="_blank" href="https://www.linkedin.com/in/crm-comptabilit%C3%A9-audit-conseil-805503115/">
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
	<script src="js/wow.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/main.js"></script>
    <script src="js/aos.js"></script>

</body>
</html>