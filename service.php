<?php 
	require_once('parts/database.php'); 
    session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sen Tiak-Tiak - Services</title>
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">


    <!-- ----------------------------------------------- -->
<?php require_once('parts/header.php')?>
		<!-- end:header-top -->
	

		<!-- Interior -->
			<?php require_once('parts/interior.php')?>
		<!-- End Interior -->
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Nos Services</h3>
						<p>Trouver le fiabilité dans vos transports et livraisons</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Guédiawaye</h3>
								<span>Tiak-Tiak</span>
								<span class="price">1000 frcs</span>
								<a class="btn btn-primary btn-outline" href="#">Aller<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Parcelles Assainies</h3>
								<span>Tiak-Tiak</span>
								<span class="price">1200 frcs</span>
								<a class="btn btn-primary btn-outline" href="#">Aller<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Maristes</h3>
								<span>Tiak-Tiak</span>
								<span class="price">1500 frcs</span>
								<a class="btn btn-primary btn-outline" href="#">Aller<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Rufisque</h3>
								<span>Tiak-Tiak</span>
								<span class="price">900 frcs</span>
								<a class="btn btn-primary btn-outline" href="#">Aller<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Grand Yoff</h3>
								<span>Tiak-Tiak</span>
								<span class="price">8000 frcs</span>
								<a class="btn btn-primary btn-outline" href="#">Aller<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Grand Dakar</h3>
								<span>Tiak-Tiak</span>
								<span class="price">1000 frcs</span>
								<a class="btn btn-primary btn-outline" href="#">Aller<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- -------------------------------------: -->
			<?php require_once('parts/temoignages.php')?>
		<!-- -------------------------------------: -->
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
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

