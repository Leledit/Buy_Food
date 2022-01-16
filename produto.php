<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Produto</title>
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
    
include"menu2.php";
};
?>

 <?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);


include("conexao.php");

//consultando registros





					
if($_GET['acao'] == 'mostrar'){
$codigo_produto = intval($_GET['codproduto']);

$sql = "SELECT * FROM produtos where codproduto='$codigo_produto';";
$ativar=mysql_query($sql);
$busca= mysql_fetch_array($ativar);
$tipo=$busca["tipo"];


}

if ('acao'== 'mostrarp'){
$cproduto = intval($_GET['codproduto']);
$selecao = "SELECT * FROM produtos where codproduto='$cproduto';";
$executar =mysql_query($selecao);
$a= mysql_fetch_array($executar);

};
$codigo = $_GET['codfornecedor'];
$consulta = mysql_query("SELECT * FROM fornecedores where codfornecedor ='$codigo'");
$ment = mysql_fetch_array($consulta);

?>


			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="index.php">Home</a></li>
								<li class="active"><?php echo 'Produto '.$busca["estabelecimento"].' ';
								                         echo  $executar["estabelecimento"] ;?></li>
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
							<h1 class="page-title margin-top-clear"><?php echo $busca["pnome"]?></h1>
							<!-- page-title end -->

							<div class="row">
								<div class="col-md-4">
                                <?php if ($tipo =='lanche'){ 
											echo' <img src="images/lanche.jpg" alt="">';
											}
										if ($tipo =='pizza'){
											echo'<img src="images/pizza.jpg" alt="">';
											}
											if ($tipo =='queijo'){
											echo'<img src="images/pao.jpg" alt="">';
											}
										if ($tipo =='bebidas'){
											echo'<img src="images/bebidas.jpg" alt="">';
											}?>
									<!-- Nav tabs -->
									
									

									<!-- Tab panes start-->
									
									<!-- Tab panes end-->
									<hr>
									<span class="price">R$ <?php echo  $busca["preco"]?></span>
									<div class="elements-list pull-right clearfix">
										<span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star"></i></span>
										<a href="#" class="wishlist"><i class="fa fa-heart-o pr-5"></i>Favoritos</a>
									</div>
									<div class="clearfix"></div>
									<hr>
                          
									 <div class="row">
                                     <form role="form" action="shop-cart.php" method="post" >
                                    
											
									
											<div class="col-md-12">
										                             <?php
							//sistema de mensagens
												$mensagen = '';
												
												
												
	
		
											//verificar se existe um cliente logado
											if ( $_SESSION == null ){
												
  $mensagen = '<a href="" data-toggle="modal" data-target=".bs-example-modal-sm" ><i class="fa fa-shopping-cart pr-10"></i>Adicionar Ao Carrinho</a>
					
						'; }else {
							//verificar se o estabelecimento se escontra fechado
   if( $ment['horario'] == 'fechado'){
								   
		$mensagen = '<a href="" data-toggle="modal" data-target=".estabelecimentoclose"><i class="fa fa-shopping-cart pr-10"></i>Adicionar Ao Carrinho</a>';					
	}else{	
		$mensagen = '<a href="shop-cart.php?acao=add&codproduto='.$busca["codproduto"].'"><i class="fa fa-shopping-cart pr-10"></i>Adicionar Ao Carrinho</a>';
		};					
							
						}
											
echo $mensagen;				
                                                
											
									
									

										?>
                                        
                                      
											</div>
										</form>
                                        
									</div>
								</div>

								<!-- product side start -->
								<aside class="col-md-8">
									<div class="sidebar">
										<div class="side product-item vertical-divider-left">
											<div class="tabs-style-2">
												<!-- Nav tabs -->
												<ul class="nav nav-tabs" role="tablist">
													<li class="active"><a href="#h2tab1" role="tab" data-toggle="tab"><i class="fa fa-file-text-o pr-5"></i>Descrição</a></li>
														</ul>
												<!-- Tab panes -->
												<div class="tab-content padding-top-clear padding-bottom-clear">
													<div class="tab-pane fade in active" id="h2tab1">
	
    <h4 class="title">Informações.</h4>
    <br />	
    **IMAGEM MERAMENTE ILUSTRATIVA
    <br />	
    <br />	
    <?php echo $busca["informacoes"]?>
    
    <h4 class="title">Descrição.</h4>		
    
   <?php echo $busca["descricao"]?>
											
														

														
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</aside>
								<!-- product side end -->
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

           <div class="modal fade estabelecimentoclose" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
											<h4 class="modal-title" id="mySmallModalLabel">Ops!</h4>
										</div>
										<div class="modal-body">
											<p>o estabelecimento se ecnontra fechado</p>
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
											
										</div>
									</div>
								</div>
							</div>
						</div> 

			</footer>
            
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
											<h4 class="modal-title" id="mySmallModalLabel">Ops!</h4>
										</div>
										<div class="modal-body">
											<p>Você precisa estar logado para realizar essa função.</p>
											<p>Faça o login, se ainda não é cadastrado <a href="Cadastre-se.php">Cadastre-se.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Fechar</button>
											<a href="Cadastre-se.php"><button type="button" class="btn btn-sm btn-default">Cadastre-se</button></a>
										</div>
									</div>
								</div>
							</div>
						</div> 

			</footer>
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
