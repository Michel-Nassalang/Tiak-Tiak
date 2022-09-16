<?php 
	require_once('parts/database.php'); 
    session_start();
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sen Tiak-Tiak - Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Superfish -->
		<link rel="stylesheet" href="css/superfish.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- Date Picker -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
		<!-- CS Select -->
		<link rel="stylesheet" href="css/cs-select.css">
		<link rel="stylesheet" href="css/cs-skin-border.css">
		
		<link rel="stylesheet" href="css/style.css">


		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

    <!-- ----------------------------------------------- -->
<?php require_once('parts/header.php')?>
		<!-- end:header-top -->
		

		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Contacts</h3>
						<p>Nous serions heureux de partager avec vous toutes formes d'informations ou renseignements nous concernant.</p>
					</div>
				</div>
				<form action="" method="post">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Notre adresse</h3>
							<p>Sen Tiak-Tiak, vous facilite vos déplacements et vos livraisons tout en assurant et en veillant sur votre bien être.</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Unité 11, Parcelles Assainies Dakar</li>
								<li><i class="icon-phone2"></i>+ 77 111 22 36</li>
								<li><i class="icon-mail"></i><a href="#">info.tiaktiak@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.tiaktiak.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<?php 
							if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
								$nom = htmlspecialchars($_POST['name']);
								$email = htmlspecialchars($_POST['email']);
								$message = htmlspecialchars($_POST['message']);
								$insertion = $db->prepare('INSERT INTO contact(nom,email,message) VALUES (:nom,:email,:message)');
								$insertion->execute([
									"nom" => $nom,
									"email" => $email,
									"message" => $message
								]);
							}else {
							?>
							<?php 
							}
							?>
							<form action="" method="post">
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Nom" required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Email" required="required">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required="required"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Soumettre" class="btn btn-primary">
									</div>
								</div>
								</div>
							</form>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- -------------------------------------: -->
			<?php require_once('parts/temoignages.php')?>
		<!-- -------------------------------------: -->
	<div id="map" class="fh5co-map"></div>
		<!-- END map -->


    <!-- ----------------------------------------------- -->
<?php require_once('parts/footer.php')?>
		<!-- end:footer-bottom -->

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

