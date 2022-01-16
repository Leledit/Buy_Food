<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Blog</title>
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
								<li class="active">Blog</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Blog Buy Food</h1>
							<div class="separator-2"></div>
							<p class="lead">Acompanhe as novidades e eventos Buy Food!.</p>
							<!-- page-title end -->

							<!-- masonry grid start -->
							<div class="masonry-grid row">
								
								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6 col-md-4">
									<!-- blogpost start -->
									<article class="clearfix blogpost">
										<div class="overlay-container">
											<img src="images/IMG_1738.jpg" alt="">
											<div class="overlay">
												<div class="overlay-links">
													<a href="page-404.php"><i class="fa fa-link"></i></a>
													<a href="images/IMG_1738.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="blogpost-body">
											<div class="post-info">
												<span class="day">29</span>
												<span class="month">Set 2016</span>
											</div>
											<div class="blogpost-content">
												<header>
													<h2 class="title"><a href="page-404.php">Inovação e Empreendedorismo na Escola</a></h2>
													<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="page-404.php">Vinicius Melo</a></div>
												</header>
												<p>No dia 29/09/2016 a Equipe Buy Food esteve presente no evento Inovação e Empreendedorismo na Escola organizado pela Etec Francisco Garcia (Industrial). No evento apresentamos brevemente o nosso projeto.</p>
											</div>
										</div>
										<footer class="clearfix">
											<ul class="links pull-left">
												<li><i class="fa fa-comment-o pr-5"></i> <a href="page-404.php">22 comentários</a> |</li> 
												<li><i class="fa fa-tags pr-5"></i> <a href="page-404.php">tag 1</a></li>
											</ul>
											<a class="pull-right link" href="page-404.php"><span>Leia Mais</span></a>
										</footer>
									</article>
									<!-- blogpost end -->
								</div>
								<!-- masonry grid item end -->

								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6 col-md-4">
									<!-- blogpost start -->
									<article class="clearfix blogpost">
										<div class="blogpost-body">
											<div class="post-info">
												<span class="day">30</span>
												<span class="month">Set 2016</span>
											</div>
											<div class="blogpost-content">
												<header>
													<h2 class="title"><a href="page-404.php">Reunião</a></h2>
													<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="page-404.php">Vinícius Melo</a></div>
												</header>
												<p>Passamos toda a manhã em reunião com o Diretor de Empreendedorismo e Inovação do estado de São Paulo DR.Oswaldo Massambani.</p>
											</div>
										</div>
										<footer class="clearfix">
											<ul class="links pull-left">
												<li><i class="fa fa-comment-o pr-5"></i> <a href="page-404.php">2 comentarios</a> |</li> 
												<li><i class="fa fa-tags pr-5"></i> <a href="page-404.php">tag 1</a></li>
											</ul>
											<a class="pull-right link" href="page-404.php"><span>Leia Mais</span></a>
										</footer>
									</article>
									<!-- blogpost end -->
								</div>
								<!-- masonry grid item end -->
                              
								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6 col-md-4">
									<!-- blogpost start -->
									<article class="clearfix blogpost">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/6cvpmnEh7HM" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="blogpost-body">
											<div class="post-info">
												<span class="day">07</span>
												<span class="month">Junho 2017</span>
											</div>
											<div class="blogpost-content">
												<header>
													<h2 class="title"><a href="https://youtu.be/6cvpmnEh7HM">Entrevista com Nutricionista</a></h2>
													<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="page-404.php">Vinícius Melo</a></div>
												</header>
												<p>Estivemos a parte da tarde conversando com a Dra.Milleny de Mogi Guaçu-SP, nutricionista de várias escolas na cidade de Mococa-SP, assista ao vídeo.</p>
											</div>
										</div>
										<footer class="clearfix">
											<ul class="links pull-left">
												<li><i class="fa fa-comment-o pr-5"></i> <a href="page-404.php">30 Comentários</a> |</li> 
												<li><i class="fa fa-tags pr-5"></i> <a href="page-404.php">tag 1</a></li>
											</ul>
											<a class="pull-right link" href="https://youtu.be/6cvpmnEh7HM.php"><span>Leia Mais</span></a>
										</footer>
									</article>
									<!-- blogpost end -->
                                    
								
							</div>
							<!-- masonry grid end --> 
                            
                            
								<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6 col-md-4">
                                
									<!-- blogpost start -->
									<article class="clearfix blogpost">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/J8Q0reIqAIA" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="blogpost-body">
											<div class="post-info">
												<span class="day">29</span>
												<span class="month">Set 2016</span>
											</div>
											<div class="blogpost-content">
												<header>
													<h2 class="title"><a href="https://www.youtube.com/watch?v=J8Q0reIqAIA">Empreendorismo na Escola.</a></h2>
													<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="page-404.php">Vinícius Melo</a></div>
												</header>
												<p>No dia 29/09/2016 a Equipe Buy Food esteve presente no evento Inovação e Empreendedorismo na Escola organizado pela Etec Francisco Garcia (Industrial). No evento apresentamos brevemente o nosso projeto, assista ao vídeo.</p>
											</div>
										</div>
										<footer class="clearfix">
											<ul class="links pull-left">
												<li><i class="fa fa-comment-o pr-5"></i> <a href="page-404.php">30 Comentários</a> |</li> 
												<li><i class="fa fa-tags pr-5"></i> <a href="page-404.php">tag 1</a></li>
											</ul>
											<a class="pull-right link" href="https://www.youtube.com/watch?v=J8Q0reIqAIA.php"><span>Leia Mais</span></a>
										</footer>
									</article>
									<!-- blogpost end -->			
							
                            </div>
							<!-- masonry grid end -->
                            
                            	<!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6 col-md-4">
                                
									<!-- blogpost start -->
									<article class="clearfix blogpost">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/MjSzLGkgXHg" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="blogpost-body">
											<div class="post-info">
												<span class="day">30</span>
												<span class="month">Jun 2017</span>
											</div>
											<div class="blogpost-content">
												<header>
													<h2 class="title"><a href="https://youtu.be/MjSzLGkgXHg">Primeira Prévia TCC</a></h2>
													<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="page-404.php">Vinícius Melo</a></div>
												</header>
												<p>No dia 29/06/2017 a Equipe Buy Food apresentou a primeira prévia do projeto de TCC, assista ao vídeo.</p>
											</div>
										</div>
										<footer class="clearfix">
											<ul class="links pull-left">
												<li><i class="fa fa-comment-o pr-5"></i> <a href="page-404.php">30 Comentários</a> |</li> 
												<li><i class="fa fa-tags pr-5"></i> <a href="page-404.php">tag 1</a></li>
											</ul>
											<a class="pull-right link" href="https://youtu.be/MjSzLGkgXHg.php"><span>Leia Mais</span></a>
										</footer>
									</article>
									<!-- blogpost end -->			
							
                            </div>
							<!-- masonry grid end -->
                            
                            <!-- masonry grid item start -->
								<div class="masonry-grid-item col-sm-6 col-md-4">
									<!-- blogpost start -->
									<article class="clearfix blogpost">
										<div class="overlay-container">
											<img src="images/eletroportas.jpg"  alt="">
											<div class="overlay">
												<div class="overlay-links">
													<a href="page-404.php"><i class="fa fa-link"></i></a>
													<a href="images/eletroportas.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
										</div>
										<div class="blogpost-body">
											<div class="post-info">
												<span class="day">14</span>
												<span class="month">Set 2017</span>
											</div>
											<div class="blogpost-content">
												<header>
													<h2 class="title"><a href="page-404.php">Apresentação da plataforma!</a></h2>
													<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="page-404.php">Vinicius Melo</a></div>
												</header>
												<p>Nessa Quinta Feira a equipe Buy Food esteve presente no evento Eletrô de portas abertas organizado pela Etec João Baptista de Lima Figueiredo. No evento apresentamos brevemente o nosso projeto.</p>
											</div>
										</div>
										<footer class="clearfix">
											<ul class="links pull-left">
												<li><i class="fa fa-comment-o pr-5"></i> <a href="page-404.php">22 comentários</a> |</li> 
												<li><i class="fa fa-tags pr-5"></i> <a href="page-404.php">tag 1</a></li>
											</ul>
											<a class="pull-right link" href="page-404.php"><span>Leia Mais</span></a>
										</footer>
									</article>
									<!-- blogpost end -->
								</div>
								<!-- masonry grid item end -->
                            
                           
                            
                            
							  
                                
                               
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			

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
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
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
