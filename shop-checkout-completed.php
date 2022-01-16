<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Completo</title>
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

include("conexao.php");

if ($_GET['acao'] == 'enviar'){

$v1= $_SESSION['codcliente'];
$v2 = $_SESSION['var1'];
$v3 = $_SESSION['pagamento'];
$v4 = $_SESSION['stotal'];
$v5 = $_SESSION['ende'];

/*
echo $v1;
echo '<br>';
echo $v2;
echo '<br>';
echo $v3;
echo '<br>';
echo $v4;
*/
	
//codvenda, codcliente, codfornecedor, date, time, pagamento, entrega, valor, informacoes
	$sql = mysql_query("insert into vendas (codcliente,codfornecedor,date,time,pagamento,entrega,valor,endereco,vstatus) values('$v1','$v2',now(),now(),'dinheiro','$v3','$v4','$v5','espera');");
}
	$sql = mysql_query("SELECT max(codvenda) as codv FROM vendas where codcliente = '$v1' ;");
	
	$ln = mysql_fetch_assoc($sql);
	$codvenda = $ln["codv"];
	$_SESSION['cod'] = $codvenda;
	//echo $codvenda;
	
	 foreach($_SESSION['shop-cart'] as $id => $qtd){
		 $sql   = "SELECT * FROM produtos  where codproduto='$id';";
		 $qr    = mysql_query($sql) or die(mysql_error());
		 $ln    = mysql_fetch_assoc($qr);
		 $preco =($ln['preco']);
		 $total = ($ln['preco'] * $qtd );
        
		 //codvendaitem, codvenda, codproduto, quantidade, preco, total
		 $sql  = "INSERT INTO vendasitens (codvenda, codproduto, quantidade, preco, total) values ".
		          "('$codvenda', '$id', '$qtd', '$preco', '$total')";
				  //echo $sql;
		 $result=mysql_query($sql ) or die (mysql_error());
		 
      //     $copiando = clone $_SESSION['shop-cart'];
		   
	
		$_SESSION['shop-cart'] = array();
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
								<li class="active">Parabéns</li>
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
						<div class="main col-md-10 col-md-offset-1">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title margin-top-clear text-center">Obrigado!</h1>
							<div class="space"></div>
							<!-- page-title end -->
							<p class="lead text-center"> Obrigado por escolher o Buy Food... Por depositar toda sua confiança em nossa plataforma. Deixe sua Avaliação...
                            Se você obteve uma ótima experiência aqui, compartilhe  com seus amigos e nos ajude a divulgar o Buy Food!!!!  </p>
                            </br>
                            </br>
                           
                            
							<div class="text-center"><a href="index.php" class="btn btn-lg btn-default">Voltar ao Site</a></div>
                             </br>
                   <?php //         <div class="text-center"><a href="page-invoice.php" class="btn btn-lg btn-default">Nota do Pedido</a></div>
                           ?>
						    </br> 
                            </br>
                      
                            
						</div>
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
