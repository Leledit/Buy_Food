<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Time</title>
		<meta name="description" content="iDea a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/icon.png">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

		<!-- iDea core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="css/skins/red.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="css/custom.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	
	<!-- body classes: 
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> 
	-->
	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

		<?php
@session_start();
if ( $_SESSION == null ){

include"menu.php";
}
else{
                        if ($_SESSION['nivel']=='3'){
						include"menu2.php";
                        };
                        if ($_SESSION['nivel']=='2'){
						include"menu3.php";
                        };
                        if ($_SESSION['nivel']=='1'){
						include"menu3.php";
                        };

};
?>


			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="index.php">Home</a></li>
								<li class="active">Time</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix">
				<div class="container">

					<h1>Nosso Time</h1>
					<div class="separator-2"></div>

					<div class="row grid-space-20">
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="images/vini.png" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											
											
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/vinicius.demeloalexandre.71"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title">Vinícius Alexandre</h3>
									<small>CEO e Co-Fundador</small>
									<div class="separator-2"></div>
									<p>Idealista, Diretor Geral (CEO) e Co-Fundador da plataforma. Técnico em Informática.</p>
									<ul class="list-unstyled">
										
										<li><i class="fa fa-mobile pr-10 pl-5"></i>(35) 99700-8803</li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:vinicius@buyfood.com.br">vinicius@buyfood.com.br</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="images/leandro.png" alt="" >
									<div class="overlay">
<ul class="social-links clearfix">
											
											
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/leandro.caixeta.965"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
                                <div class="image-box-body">
									<h3 class="title">Leandro Ricardo</h3>
									<small>DBA e Co-Fundador</small>
									<div class="separator-2"></div>
									<p>Administrador de Banco de Dados (DBA) e Co-Fundador. Técnico em Informática.</p>
									<ul class="list-unstyled">
										
										<li><i class="fa fa-mobile pr-10 pl-5"></i>(19) 99240-6282</li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:leandro@buyfood.com.br">leandro@buyfood.com.br</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="images/gui.png" alt="" >
									<div class="overlay">
<ul class="social-links clearfix">
											
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/profile.php?id=100005343693891"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
                                <div class="image-box-body">
									<h3 class="title">Guilherme Dias</h3>
									<small>Marketing</small>
									<div class="separator-2"></div>
									<p>Promove visibilidade e elegância a plataforma. Técnico em Informática.</p>
									<ul class="list-unstyled">
										
										<li><i class="fa fa-mobile pr-10 pl-5"></i>(19) 98244-0951</li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:guilherme@buyfood.com.br">guilherme@buyfood.com.br</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="images/gabi.png" alt="" >
									<div class="overlay">
<ul class="social-links clearfix">
											
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/profile.php?id=100008206695931&fref=ts"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
                                <div class="image-box-body">
									<h3 class="title">Gabriela Queiroz</h3>
									<small>Administradora</small>
									<div class="separator-2"></div>
									<p>Gerencia e administra todo o setor burocrático da plataforma. Técnico em Informática.</p>
									<ul class="list-unstyled">
										
										<li><i class="fa fa-mobile pr-10 pl-5"></i>(19) 99102-9419</li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:gabriela@buyfood.com.br">gabriela@buyfood.com.br</a></li>
									</ul>
								</div>
							</div>
						</div>
							
					
					</div>	
				</div>
			</div>
			<!-- section end -->

<?php
@session_start();
if ( $_SESSION == null ){
include"rodape.php";
}
else{
                        if ($_SESSION['nivel']=='3'){
						include"rodape.php";
                        };
                        if ($_SESSION['nivel']=='2'){
						include"rodape2.php";
                        };
                        if ($_SESSION['nivel']=='1'){
						include"rodape2.php";
                        };

};
?>
			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Sharrre javascript -->
		<script type="text/javascript" src="plugins/jquery.sharrre.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>

		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
