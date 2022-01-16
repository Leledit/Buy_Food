<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Pedido</title>
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
		<link href="css/style.css" rel="stylesheet" media="screen">
		
		<!-- Print Invoice CSS -->
		<link href="css/print-invoice.css" rel="stylesheet" media="print">

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
    
include"menu2.php";
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
								<li class="active">Nota do Pedido</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->
<?php
                                 $nome = $_SESSION['nome'];
                        $sobrenome = $_SESSION['sobrenome'];
                        $telefone = $_SESSION['telefone'];
                        $celular = $_SESSION['celular'];
                        $email = $_SESSION['email'];
                        $endereco = $_SESSION['endereco'];
						$ver = $_GET['codvenda'];
						
						$select = "SELECT * FROM vendas where codvenda = '$ver'";
						$revest = mysql_query($select);
						
						$het = mysql_fetch_array($revest);
						
					     $formap = $het['entrega'];
						 if ($formap == 'Entrega'){
							 $verr = 2;
							 }else {
								$verr = 0;
								
								 }
                                ?>
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
							<h1 class="page-title">Nota do pedido</h1>
							<!-- page-title end -->

							<div id="invoice-container" class="invoice-container">
								<hr>
								<div class="row">
									<div class="col-sm-6">
										<img src="images/logola.png" width="100" height="100" alt="logo">
										<p class="invoice-slogan">Delivery Online</p>
										<address class="small">
											<strong>Buy Food.com.br</strong><br>
											
											Areado - MG <br>
											<abbr title="Phone">P:</abbr> (35) 3293-1061<br>
											E-mail: info@buyfood.com.br</a>
										</address>
									</div>
									<div class="col-sm-offset-3 col-sm-3">
										<p class="text-right small"><strong>Pedido N° <?php echo $ver ?></strong> <br><?php echo $het['date'] ?></p>
										<h5 class="text-right"></h5>
										<p class="text-right small">
											<strong>Name:</strong> <span><?php echo $nome,' ', $sobrenome ?></span> <br>
											<strong>Email:</strong> <?php echo $email ?><br>
											<strong>Endereço:</strong><?php echo $endereco ?><br>
											<strong>Telefone:</strong> <?php echo $telefone ?> <br>
                                            <strong>Celular:</strong> <?php echo $celular ?> <br>
										
                                      
										
										
								
										
										</p>
									</div>
								</div>
								<p class="small"><strong>Comentários/Observações:</strong> Lorem ipsum dolor sit amet, consectetur.</p>
								<table class="table cart table-bordered">
									<thead>
										<tr>
											<th>Descrição </th>
											<th>Preço </th>
											<th>Quantidade</th>
											<th class="amount">Total </th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									  
									$sql ="SELECT v.codvendaitem , v.codvenda, p.pnome , v.quantidade , v.preco , v.total  FROM vendasitens v , produtos p where p.codproduto = v.codproduto  and codvenda =  '$ver' ;";
									$refir = mysql_query($sql);
								
									while($rel = mysql_fetch_array($refir)){
										
										
										
										echo '
										<tr>
											<td class="product">'.$rel['pnome'].' </td>
											<td class="price">'.$rel['preco'].' </td>
											<td class="quantity">'.$rel['quantidade'].'</td>
											<td class="amount">'.$rel['total'].' </td>
										</tr>
										';
									$stotal = $stotal + $rel['total'];
									
									};
									$qitnes = count($refir) ;
									
									$ttotal = $stotal + $verr ;
									?>
										
								
										<tr>
											<td class="total-quantity" colspan="3">Subtotal</td>
											<td class="amount"><?php echo $stotal   ?></td>
										</tr>
										<tr>										
											<td class="total-quantity" colspan="3">Entrega</td>
											<td class="amount"><?php echo $verr ?></td>
										</tr>
										<tr>
											<td class="total-quantity" colspan="3">Total <?php  echo $qitnes  ?> Itens</td>
											<td class="total-amount"><?php echo $ttotal ?></td>
										</tr>
									</tbody>
								</table>
								<p class="small">Se você tiver alguma duvida, entrar em contato conosco: <strong><a href="page-contact.php">Buy Food.</a></strong>, tel: <strong>(35)3293-1061</strong>, email: <strong>info@buyfood.com.br</strong> <br> Obrigado!</p>
								<hr>
							</div>
							<div class="text-right">	
								<button onclick="print_window();" class="btn btn-print btn-group btn-default btn-sm"><i class="fa fa-print pr-10 pl-5"></i> IMPRIMIR</button>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

		

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			
			<?php
include "rodape.php";

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
