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
    <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  	<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
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

									<div class="sign-in-btn">
										<a href="log_in.html"><i class="fas fa-sign-in-alt"></i></a>
									</div>
							
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
	<!-- NAVBAR -->
	

	<section id="banner" class="banner-contact">
		<div class="container">
			<div class="inner-banner"></div>
		</div>
	</section>
	


	<!-- BODY -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">

				<section id="contact">
					<div class="container">
						<div class="form-contact">
							<div class="form-contact-title text-center">
								<h2 class="title"><b>Une question ? <span style="color:#4997d1; font-family: 'Poppins'; ">Un besoin ?</span> Un conseil ?</b></h2>
								<p class="wow"  style="font-family: Playfair Display;">
									Merci de remplir ce formulaire.
								</p>
							</div>
							<form method="post" action="contact.php">
								<div class="row pb-3" >
									<div class="col-md-6">
											<div class="form-group">
								              <label>Nom*</label>
								              <input type="text" class="form-control" name="nom">
								            </div>

								            <div class="form-group">
								              <label>Email*</label>
								              <input type="email" class="form-control" name="mail">
								            </div>

								            <div class="form-group">
								              <label>Objet*</label>
								              <input type="text" class="form-control" name="objet">
								            </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
							              <label>Message*</label>
							              <textarea class="form-control" rows="7" name="message"></textarea>
							            </div>
										<center><input type="submit" class="btn btn-post" value="ENVOYER LE MESSAGE"></center>
									</div>
								</div>
							</form>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="maps">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.2143978213194!2d47.534448255669226!3d-18.912405187181978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07d235e3b515f%3A0x7ecd70c7550e744a!2sRedZone%20Antsakaviro!5e0!3m2!1sen!2smg!4v1605988931504!5m2!1sen!2smg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									<div class="adress">
										<ul>
											<li><b>Raison sociale : </b>CRM COMPTABILITE, AUDIT & CONSEIL SARLU</li>
											<li><b>Siège social : </b>Lot II M 92 Antsakaviro</li>
											<li><b>Téléphone : </b>+ 261 34 65 459 75</li>
										</ul>
									</div>
								</div>
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
		                               <i class="fa fa-map-marker-alt"></i> Lot II M 92 Antsakaviro <br>
		                               <i class="fa fa-phone-alt"></i> <a target="_blank" href="+261 34 65 459 75">+261 34 65 459 75</a>
		                            </p>
		                            <div class="socail_links">
		                                <p>Nous suivre : </p>
		                                <a target="_blank" href="web.facebook.com">
		                                    <i class="fab fa-facebook-f"></i>
		                                </a>
		                                <a target="_blank" href="fr.linkedin.com">
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
<?php include("mail/mail_contact.php"); ?>