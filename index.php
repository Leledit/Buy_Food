<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Home</title>
		<meta name="description" content="Buy Food a mais nova plataforma de Delivery Online do Brasil chegou a Areado-MG! em breve em mais cidades... Click and Buy Food.">
		<meta name="Vinícius Melo (CEO)" content="buyfood.me">

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
		<link href="plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
		<link href="plugins/rs-plugin/css/extralayers.css" media="screen" rel="stylesheet">
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
	<body class="front no-trans">
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
<!-- banner start -->
			<!-- ================ -->
			<div class="banner">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow white-bg">
					
					<!-- slider revolution start -->
					<!-- ================ -->
					<div class="slider-banner-container">
						<div class="slider-banner-3">
							<ul>
								<!-- slide 1 start -->
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="Slide 1" class="dark-translucent-bg">
								
								<!-- main image -->
								<img src="images/131143.jpg"  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

								<!-- LAYER NR. 1 -->
								<div class="tp-caption very_large_text sft tp-resizeme"
									data-x="center"
									data-y="70" 
									data-speed="700"
									data-start="200"
									data-end="10000"
									data-endspeed="600">Buy Food Delivery Online
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption small_thin_white sfb text-center tp-resizeme"
									data-x="center"
									data-y="170" 
									data-speed="700"
									data-start="400"
									data-end="10000"
									data-endspeed="600">Cadastre-se em nossa plataforma e obtenha os melhores deliverys da cidade bem aqui.  <br> Basta apenas se cadastrar e estará em contato com os melhores estabelecimentos da sua cidade .
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption tp-resizeme sfb"
									data-x="center"
									data-y="300" 
									data-speed="700"
									data-start="600"
									data-end="10000"
									data-endspeed="600"><a href="Cadastre-se.php" class="btn btn-white btn-lg">Cadastre-se <i class="fa fa-angle-right pl-10"></i></a>
								</div>

								</li>
								<!-- slide 1 end -->

								<!-- slide 2 start -->
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="Slide 2" class="dark-translucent-bg">
								
								<!-- main image -->
								<img src="images/banner.jpg"  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

								<!-- LAYER NR. 1 -->
								<div class="tp-caption very_large_text sft tp-resizeme"
									data-x="center"
									data-y="70" 
									data-speed="700"
									data-start="200"
									data-end="10000"
									data-endspeed="600">Você está com fome?
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption small_thin_white sfb text-center tp-resizeme"
									data-x="center"
									data-y="170" 
									data-speed="700"
									data-start="400"
									data-end="10000"
									data-endspeed="600"> É muito fácil e rápido se adaptar ao Buy Food. <br>
                                    Tenha a tecnologia a seu dispor, estamos aqui para melhor atende-lo<br>
                                    Faça seu pedido agora e teste nossa plataforma...
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption tp-resizeme sfb"
									data-x="center"
									data-y="300" 
									data-speed="700"
									data-start="600"
									data-end="10000"
									data-endspeed="600"><a href="estabelecimentos.php" class="btn btn-white btn-lg">Pedir <i class="fa fa-angle-right pl-10"></i></a>
								</div>

								</li>
								<!-- slide 2 end -->

							</ul>
						</div>
					</div>
					<!-- slider revolution end -->

				</div>
				<!-- slideshow end -->

			</div>
			<!-- banner end -->
			<!-- page-top start-->
			        
            
            
            <div class="gray-bg section">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-sm-4">
											<div class="box-style-1 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
												<i class="icon-facebook-squared"></i>
												<h2>Facebook</h2>
												<p>Curta nossa página no Facebook e fique por dentro das promoções!</p>
												<a href="https://www.facebook.com/buyfoodbr/" class="btn-default btn">Acessar</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="box-style-1 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
												<i class=" icon-location"></i>
												<h2>Localização</h2>
												<p>"Buy Food  chegou a Areado-MG! em breve em mais cidades... Click and Buy Food."</p>
												<a href="page-about.php" class="btn-default btn">Sobre</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="box-style-1 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
												<i class=" icon-user-add"></i>
												<h2>Cadastre-se</h2>
												<p>Não fique por fora da era tecnológica aproveite o melhor da inovação.</p>
												<a href="Cadastre-se.php" class="btn-default btn">Cadastrar-se</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



	
            

<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h2>Mais Pedidos</h2>
							<div class="separator-2"></div>
							<p>Parceiros com maior número de pedidos pela plataforma! </p>
							<div class="owl-carousel carousel">
								<div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
									<div class="overlay-container">
										<img src="images/lanche.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/portfolio-1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Robertinho Lanches</a></h3>
                                          <p>1º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="200">
									<div class="overlay-container">
										<img src="images/pizza.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/portfolio-2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Pizzaria Tuttin</a></h3>
										<p>2º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="100">
									<div class="overlay-container">
										<img src="images/pao.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/pao.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Pão de Queijo Bornelli</a></h3>
										<p>3º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0">
									<div class="overlay-container">
										<img src="images/lanche.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/portfolio-4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Juliano Lanches</a></h3>
										<p>4º Lugar.</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/logoacai.png" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/logoacai.png" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Açaí Café da Praça</a></h3>
										<p>5º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/pizza.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/portfolio-6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Pizzaria Varanda</a></h3>
										<p>6º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/lanche.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/portfolio-7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Ricardinho Lanches</a></h3>
										<p>7º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/pizza.jpg" alt="">
										<div class="overlay">
											<div class="overlay-links">
												<a href="cardapio.php"><i class="fa fa-link"></i></a>
												<a href="images/pizza.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="image-box-body">
										<h3 class="title"><a href="cardapio.php">Pizzaria Pilãozinho</a></h3>
										<p>8º Lugar</p>
										<a href="cardapio.php" class="link"><span>Ver Cardápio</span></a>
									</div>
								</div>
							</div>

						</div>
					</div>
                    
				</div>

			</div>
			<!-- section end -->
            
			<!-- ================ -->
			<section class="main-container default-bg">

				<!-- main start -->
				<!-- ================ -->
				<div class="main">
					<div class="container">
						<div class="call-to-action">
							<div class="row">
								<div class="col-md-8">
									<h1 class="title text-center">Faça seu pedido agora...</h1>
								</div>
								<div class="col-md-4">
									<div class="text-center">
										<a href="estabelecimentos.php" class="btn btn-white btn-lg">Pedir</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main end -->
                

			</section>
			<!-- main-container end -->
			

	
            <!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix">
				<div class="owl-carousel content-slider">
					<div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Bem Vindo!</h2>
									<div class="testimonial-image">
										<img src="images/vini.png" alt="Vinicius" title="Vinicius" class="img-circle">
									</div>
									<div class="testimonial-body">
										<p>Seja muito bem vindo(a) a mais nova plataforma de Delivery Online! Aprecie a inovação na palma de suas mãos.</p>
										<div class="testimonial-info-1">Vinícius Melo</div>
										<div class="testimonial-info-2">CEO e CO-Fundador Buy Food</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
            
            
			
                            
                            
                            <!-- main-container start -->
            
           
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

		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

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
