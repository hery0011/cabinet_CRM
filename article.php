<?php 
	$id = $_GET['id'];

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
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="index.php" class="active">Accueil</a></li>						
											<li class="navbar-menu-item contain pullUpDown nav-drop-menu">
												<a class="log-btn1" href="cabinet_qui_sommes_nous.html">Le Cabinet </a>
												<ul class="sub_menu">
													<li><a href="cabinet_qui_sommes_nous.html">Qui sommes-nous ?</a></li>
													<li><a href="cabinet_valeurs.html">Nos valeurs</a></li>
													<li><a href="cabinet_missions.html">Nos missions</a></li>
												</ul>
											</li>
											<li class="navbar-menu-item contain pullUpDown nav-drop-menu">
												<a class="log-btn1" href="service_expertise.html">Nos Services</a>
												<ul class="sub_menu">
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

	<!-- BODY -->
	<div class="container-fluid body-shift">
		
				<div class="row">
					<div class="col-md-12 col-lg-3">
						<aside id="filter">
							<h2 class="title"><b>Historique</b></h2>
							<div class="actu-filter">
								<div class="check-filter"> 
					              <ul>
					              	<?php 

									$sql = "SELECT * FROM article ORDER BY id_art ASC";
									$result = mysqli_query($conn, $sql);
									
									if ($result->num_rows > 0) {
								    while($row = $result->fetch_assoc()) {
								 ?>

								
					              	<li class="liste_article"><a href="article.php?id=<?php echo $row['id_art'] ?>"><?php echo $row['titre_art']; ?></a></li>
					              	<?php 
							              }
							          }
					              	 ?>
					              </ul>
					          	</div>								
							</div>
						</aside>
					</div>
					<div class="col-md-12 col-lg-8">
						<section id="post">
							<div class="container">
								<?php 
									$sql = "SELECT * FROM article WHERE id_art = $id";
									$result = $conn->query($sql); 
									$row = $result->fetch_assoc();
								 ?>
								<h2 class="title text-center"><?php echo $row['titre_art']; ?></h2>
								<hr class="separator">
								<div class="text-center">
									<div class="article-img wow zoomIn">
									<img src="<?php echo $row['image_art'] ?>">

										<div class="article-info">
											<span><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $row['signature_art']; ?></span>
											<span><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo $row['date_pub_art']; ?></span>
										</div>
									</div>
									<div class="article-content">
										<p class="wow fadeInUp text-justify">
											<?php echo $row['contenu_art']; ?>
										</p>
								
										<!-- <span class="signature text-left wow fadeInUp text-justify">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua
										</span> -->
									</div>
								</div>
								
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
		                               <i class="fa fa-map-marker-alt"></i> Lot II M 92 Antsakaviro - Immeuble Redzone<br>
		                               <i class="fa fa-phone-alt"></i> +261 34 65 459 75
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
								| Made with passion by <a href="">www.dev-inbox.com</a>
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
	<script src="js/main.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/aos.js"></script>

</body>
</html>