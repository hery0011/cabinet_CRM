<?php 
	$id = $_GET['id'];

	include('connex.php');

	$sql = "SELECT * FROM article WHERE id_art = $id";
	$result = $conn->query($sql); 
	$row = $result->fetch_assoc();
 ?>


<!doctype html>
<html class="no-js" lang="zxx">

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
		

		<section>
			<div class="container">
				<h2 class="title text-center">Modification article</h2>
				<hr class="separator">
				<form method="post" action="modification.php" enctype="multipart/form-data">
					<input type="number" name="id" value="<?php echo $row['id_art'] ?>" hidden>
					<div class="form-group">
		              <label>Titre</label>
		              <input type="text" class="form-control" name="titre" value="<?php echo $row['titre_art'] ?>">
		            </div>

		            <div class="form-group">
		              <label>Date de publication</label>
		              <input type="date" class="form-control" name="date" value="<?php echo $row['date_pub_art'] ?>">
		            </div>

		            <div class="form-group">
		              <label>image</label>
		              <img src="<?php echo $row['image_art'] ?>" width="100" height="50"><br>
		              <?php 	
		              	$sql2 = "SELECT image_art FROM article WHERE id_art = $id";
						$res = mysqli_query($conn, $sql2);
						if($res)
						{
							$ligne = mysqli_fetch_assoc($res);
							$image = $ligne['image_art'];
						}
 						?>
		              <input type="file" name="image" value="<?php if(isset($image)){echo $image;} ?>">
		            </div>

		            <div class="form-group">
		              <label>Contenu</label>
		              <textarea class="form-control" rows="5" name="contenu">
		              		<?php echo $row['contenu_art'] ?>
  						</textarea>
		            </div>

		            <div class="form-group">
		              <label>Signature (auteur)</label>
		              <input type="text" class="form-control" name="signature" value="<?php echo $row['signature_art'] ?>">
		            </div>

		            <div class="btn-wrap text-center">
		            	<button class="btn btn-primary" type="submit">Modification</button>
		            	<a href="dashboard.php" class="btn btn-danger">Annuler</a>
		            </div>
				</form>
			</div>
		</section>

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-md-6 col-lg-4 offset-right">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.php">
                                    <img src="img/Logo.png">
                                </a>
                            </div>
                            <p>
                               CRM – Cabinet de Comptabilité, Audit & Conseil
                               Adresse : <br>
                               Tèl : +261 34 70 071 61
                            </p>
                            
                            	
                            
                            <div class="socail_links">
                                <p>Nous suivre : </p>
                                <a target="_blank" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a target="_blank" href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Ressources
                            </h3>
                            <ul>
                                <li><a target="_blank" href="https://edbm.mg/?lang=fr">EDBM</a></li>
                                <li><a target="_blank" href="http://www.impots.mg/">DGI</a></li>
                                <li><a target="_blank" href="http://www.oecfm.mg/">OECFM</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Documentations
                            </h3>
                            <ul>
                                <li><a target="_blank" href="https://edbm.mg/sitemap/main-doeuvre/?lang=fr">Travail</a></li>
                                <li><a target="_blank" href="https://edbm.mg/sitemap/commerce/?lang=fr">Commerce</a></li>
                                <li><a target="_blank" href="https://edbm.mg/sitemap/lois-sur-les-societes/?lang=fr">Lois sur les sociétés</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Téléchargement
                            </h3>
                            <ul>
                                <li><a target="_blank" href="">Document 01</a></li>
                                <li><a target="_blank" href="">Document 02</a></li>
                                <li><a target="_blank" href="">Document 03</a></li>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
		</footer>
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
		
		<script src="js/jquery-3.5.1.js"></script>
		<script src="js/main.js"></script>
		<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
		</body>
</html>