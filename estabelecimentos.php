<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Lojas</title>
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
	   }else {
if ($_SESSION['nivel']== 1){
	  include"menu3.php";        
	};
	   };


if ($_SESSION['nivel']== 3){
	include"menu2.php";};
	

include("conexao.php");

if (isset($_GET['id'])){
	
	$var = $_GET['id'];
	
	if ($var == 1){
$cidade ='Areado-MG';
		}
	
	if ($var == 2){
$cidade = 'Alterosa-MG';		
		}
	
	if ($var == 3){
$cidade = 'Alfenas-MG';		
		}
	
	
	if ($var == 4){
$cidade ='Mococa-SP';		
		}
	
$sql = "SELECT * FROM fornecedores where cidade ='$cidade'  ;";
$result=mysql_query($sql);	
	
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
								<li class="active">Pedir em  <?php	
    echo $cidade;
    ?></li>
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
							<h1 class="page-title">Pedir em <?php										
							echo $cidade;
                            ?>
							</h1>
							<div class="separator-2"></div>
							<p class="lead">Selecione o estabelecimento para ter acesso ao cardápio!</p>
							<!-- page-title end -->
							
							<!-- isotope filters start -->
							<div class="filters">
								<ul class="nav nav-pills">
									<li class="active"><a href="#" data-filter="*">Tudo</a></li>
									<li><a href="#" data-filter=".pizza">Pizzarias</a></li>
									<li><a href="#" data-filter=".lanche">Lanchonetes</a></li>
									<li><a href="#" data-filter=".queijo">Pão de Queijo</a></li>
								</ul>
							</div>
							<!-- isotope filters end -->

							<!-- portfolio items start -->
							<div class="isotope-container row grid-space-20">


								<?php
// and  fstatus = 'ativo' 
								
if(count($_SESSION['shop-cart']) == 0){
$tipo=$row["tipo"];
$sql = "SELECT * FROM fornecedores where cidade ='$cidade';";
$result=mysql_query($sql);






while($row = mysql_fetch_array($result)){
 echo'<div class="col-sm-6 col-md-4 isotope-item '.$row["tipo"].'">
									<div class="image-box">
										<div class="overlay-container">';
$tipo=$row["tipo"];
//print_r($tipo);
										
										if ($tipo =='lanche'){
											echo' <img src="images/lanche.jpg" alt="">';
											}
										if ($tipo =='pizza'){
											echo'<img src="images/pizza.jpg" alt="">';
											}
										if ($tipo =='queijo'){
											echo'<img src="images/pao.jpg" alt="">';
											}
										
										echo'
											<a href="cardapio.php?acao=exibir&codfornecedor='.$row["codfornecedor"].'" class="overlay small">
												<i class="fa fa-link"></i>
												
											</a>
										</div>
										<a href="cardapio.php?acao=exibir&codfornecedor='.$row["codfornecedor"].'" class="btn btn-light-gray btn-lg btn-block">'.$row["nome"].' ' .$row["sobrenome"].'</a>
									</div>
								</div>';

}}else {
	$var2 = $_SESSION['var1'];
    
	


$consulta = "SELECT * FROM fornecedores where cidade ='$cidade' and codfornecedor = '$var2' ;";
$resultado=mysql_query($consulta);

 //and  fstatus = 'ativo' 



while($pesquisar = mysql_fetch_array($resultado)){
 echo'<div class="col-sm-6 col-md-4 isotope-item '.$pesquisar["tipo"].'">
									<div class="image-box">
										<div class="overlay-container">';

$tipo= $pesquisar["tipo"];
//print_r($tipo);
										
										if ($tipo =='lanche'){
											echo' <img src="images/lanche.jpg" alt="">';
											}
										if ($tipo =='pizza'){
											echo'<img src="images/pizza.jpg" alt="">';
											}
										if ($tipo =='queijo'){
											echo'<img src="images/pao.jpg" alt="">';
											}
										
										
										echo'
											<a href="cardapio.php?acao=exibir&codfornecedor='.$pesquisar["codfornecedor"].'" class="overlay small">
												<i class="fa fa-link"></i>
												
											</a>
										</div>
										<a href="cardapio.php?acao=exibir&codfornecedor='.$pesquisar["codfornecedor"].'" class="btn btn-light-gray btn-lg btn-block">'.$pesquisar["usuario"].'</a>
									</div>
								</div>';}
	}?>                
                         
							</div>
							<!-- portfolio items end -->

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

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
