<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Pagamento</title>
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
								<li class="active">Método de Pagamento</li>
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
							<h1 class="page-title margin-top-clear">Método de Pagamento</h1>
							<!-- page-title end -->
							<div class="space-bottom"></div>
						<?php echo'	<fieldset>
								<legend>Pagamento</legend>
								  <form role="form" class="form-horizontal" id="payment-information" action="shop-checkout-review.php" method="post">
									<div class="row">
										<div class="col-lg-3">
                                       
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="op1"  disabled>
                                                    EM BREVE <br />
												(Cartão de Crédito)<i class="fa fa-cc-visa pl-10"></i><i class="fa fa-cc-amex pl-10"></i><i class="fa fa-cc-mastercard pl-10"></i>
												</label>
											</div>
                                            
											<div class="space-bottom"></div>
										</div>
                                        
                                       
									<div class="space"></div>
									<div class="row">
										
									
										</div>
									</div>
                                    
                                    
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3" required >
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="op2" checked >
													Pagar na Entrega
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<p>Você poderá realizar o pagamento da compra na entrega, cada entrega é adicionado R$2.00 de frete (podendo ser alterado sem prévio aviso)...</p>
										</div>
									</div>
                                    
                                    
                                    	<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio"  name="optionsRadios" id="optionsRadios3" value="op3">
													Buscar no Estabelecimento
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<p>Você poderá realizar o pagamento quando buscar o pedido, é totalmente grátis...</p>
										</div>
									</div>
                                    
          
 								
							</fieldset>
						
                            ';  
							
		
							
						
							
					
							 echo'
							<div class="text-right">	
								<a href="shop-checkout.php" class="btn btn-group btn-default btn-sm"><i class="icon-left-open-big"></i> Voltar</a>
								<input type="submit" name="finalizar" value="Revisar e Finalizar Pedido " class="btn btn-group btn-default btn-sm">
							</div>
						</div>
						</form>'
						;
						
						  
						
									
									
								$ende = $_POST['endero'];
								$info = $_POST['infor'];
							$_SESSION['ende'] = $ende;
							$_SESSION['inf'] =$info;
										
										
										
										
									
									
									
						?>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			

				
							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-2">
								<div class="footer-content">
									
							
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->

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
