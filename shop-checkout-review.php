<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Revisão</title>
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
								<li class="active">Revisar seu pedido</li>
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
                        
                        <?php
                        $nome = $_SESSION['nome'];
                        $sobrenome = $_SESSION['sobrenome'];
                        $telefone = $_SESSION['telefone'];
                        $celular = $_SESSION['celular'];
                        $email = $_SESSION['email'];
                        $endereco = $_SESSION['endereco'];
                        $info = $_SESSION['info'];
						
					    $inf =$_SESSION['inf'];
						$ende= $_SESSION['ende'];
                        
										if ($_POST['optionsRadios'] == 'op2'){
						
						      
							$pagamento = 'Entrega';	
							 $var = 'Custo R$ 2.0 podendo haver alterações'; 
                             $taxa = 2;
        
							 
							$_SESSION['pagamento'] = $pagamento;
							$_SESSION['v'] = $var;	 	
							
								}
							if ($_POST['optionsRadios']== 'op3'){
								
							$pagamento = 'Buscar no Estabelecimento';
							 $var = 'sem custo';
							 
								$_SESSION['pagamento'] = $pagamento; 
								$_SESSION['v'] = $var;	
								};
                         ?> 

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title margin-top-clear">Revisar seu pedido</h1>
							<!-- page-title end -->
							<div class="space"></div>
                            
                            <table class="table cart table-striped">
								<thead>
									<tr>
										<th>Produto </th>
										<th>Preço</th>
										<th>Quantidade</th>
                                        <th>Sub total</th>
									
									</tr>
								</thead>
								<tbody>
                            
<?php
 
 
 foreach(
$_SESSION['shop-cart'] as $id => $qtd){
$sql   = "SELECT * FROM produtos  where codproduto='$id';";
$qr    = mysql_query($sql) or die(mysql_error());
$ln    = mysql_fetch_assoc($qr);
$cnome  = $ln['pnome'];
$preco =($ln['preco']);
$sub   = ($ln['preco'] * $qtd);
//$total = ($ln['preco'] * $qtd);
$total = $_SESSION['stotal'] + $taxa ;

$result=mysql_query($sql);
$row = mysql_fetch_array($result);

 
echo

'<form action="?acao=up" method="post" name="shop-cart" method="post" >
		
										<td class="product">'.$cnome.'</a></td>
										<td class="price" >R$ '.$preco.'</td>
										<td class="quantity">
											<div class="form-group">
											  '.$qtd.'
											</div>											
										</td>
										
										<td class="amount">R$ '.$sub.' </td>

									</tr>
									
									

								
		';



}// Fim do FOREACH
$_SESSION['stotal'] = $total;
 
								
					$quantidade =	count($_SESSION['shop-cart']);			
									echo'
									
								
									
									<div>
	<td align="left">Total  '.$quantidade.' Itens</td>
                                              
											  <td align="right"></td>
											  <td align="right">Total</td>
                                                <td align="right">R$ '.$total.' </td>
												
												<div>
												
											
											
												';	
												

					
										  ?>
                            
                            
                 
							<div class="space-bottom"></div>
							
                           <table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2">Informações Pessoais </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nome Completo</td>
										<td class="information"><?php   
										echo $nome ,' ' ,$sobrenome;
										
										 ?>  </td>
									</tr>
									<tr>
										<td>Email</td>
										<td class="information"><?php echo $email ?> </td>
									</tr>
                                    <tr>
										<td>Celular</td>
										<td class="information"><?php echo $celular ?> </td>
									</tr>
									<tr>
										<td>Telefone</td>
										<td class="information"><?php echo $telefone ?> </td>
									</tr>
									<tr>
										<td>Endereço</td>
										<td class="information"><?php echo $endereco ?> </td>
									</tr>
									<tr>
										<td>Informações Complementares</td>
										<td class="information"><?php echo $info ?> </td>
									</tr>
								</tbody>
							</table>
							<div class="space-bottom"></div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2">Informações de Entrega </th>
									</tr>
								</thead>
							<tbody>
									<tr>
										<td>Nome Completo</td>
										<td class="information"><?php echo $nome ,' ', $sobrenome ?>  </td>
									</tr> 
									<tr>
										<td>Email</td>
										<td class="information"><?php echo $email ?> </td>
									</tr>
                                    	<tr>
										<td>Celular</td>
										<td class="information"><?php echo $celular ?> </td>
									</tr>
									<tr>
										<td>Telefone</td>
										<td class="information"><?php echo $telefone ?> </td>
									</tr>
									<tr>
										<td>Endereço</td>
										<td class="information"><?php echo $ende ?> </td>
									</tr>
									<tr>
										<td>Informações Complementares</td>
										<td class="information"><?php echo $inf ?> </td>
									</tr>
								</tbody>
							</table>
                           
							<div class="space-bottom"></div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2">Pagamento </th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                    <?php
							
									$var = $_SESSION['pagamento'];
									$var1 = $_SESSION['v'];
									
										echo'<td>'.$var.'</td>
										<td class="information">'.$var1.' </td>
									</tr>';
									?>
								</tbody>
							</table>
							<div class="text-right">	
								<a href="shop-checkout-payment.php" class="btn btn-group btn-default btn-sm"><i class="icon-left-open-big"></i> Voltar</a>
								<a href="shop-checkout-completed.php?acao=enviar" class="btn btn-group btn-default btn-sm"><i class="icon-check"></i> Finalizar Pedido</a>
							</div>
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
