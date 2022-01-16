<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Carrinho</title>
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
	
	
if ($_SESSION['nivel']== 3){
	include"menu2.php";};
 };

		



     
	   



	

	   




include("conexao.php");





if(!isset($_SESSION['shop-cart']))
{ $_SESSION['shop-cart'] = array(); }

 if(isset($_GET['acao'])){ 
 
 if($_GET['acao'] == 'add'){
 
  $id = intval($_GET['codproduto']);
  
   if(!isset($_SESSION['shop-cart'][$id])){
	   
 $_SESSION['shop-cart'][$id] = 1; 
 }else{ $_SESSION['shop-cart'][$id] += 1; } } 
 
 


 
 }
// print_r($_SESSION['shop-cart'])

 
 //REMOVER CARRINHO
  if($_GET['acao'] == 'del'){
	 $id = intval($_GET['codproduto']);
	   if(isset($_SESSION['shop-cart'][$id]))
	   { unset($_SESSION['shop-cart'][$id]);
	
	// $_SESSION['estatus'] = 'ativa';
	  } } 
	   
	   
 //ALTERAR QUANTIDADE 
	if($_GET['acao'] == 'up'){

	   if(is_array($_POST['prod'])){ 
	   
	       foreach($_POST['prod'] as $id => $qtd){
			   
			
              if(!empty($qtd)  && $qtd <> 0 ){
			 
                 $_SESSION['shop-cart'][$id] = $qtd;
				 
               }else{
                  unset($_SESSION['shop-cart'][$id]);
				}
				
//$quantidade = $_POST['quantidade'];	
		
 //print_r(array_values($_SESSION['shop-cart']));
	        }
	 
	
	  }
	}


 
	
	
//$_SESSION['carrinho'] = $_SESSION['shop-cart'];			  

//if (isset($_POST['adicionar ao carinho'])) {
//$Cproduto = intval($_POST['codigo_produto']);
//$quantidade= $_POST["quantidade"];

//}



?>
			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="index.php">Home</a></li>
								<li class="active">Carrinho de Compra</li>
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
							<h1 class="page-title margin-top-clear">Carrinho de Compra</h1>
							<!-- page-title end -->
							<div class="space"></div>
                          
							<table class="table cart table-hover table-striped">
								<thead>
									<tr>
										<th>Produto </th>
										<th>Preço </th>
										<th>Quantidade</th>
										<th>Remover </th>
										<th class="amount">Sub-total </th>
									</tr>
								</thead>
                                
                               
                                <?php
								
if(count($_SESSION['shop-cart']) == 0 ){
echo '<tr><td colspan="5" ><html><div class="alert alert-danger" role="alert">
								<strong>opps!</strong> Parece que seu carrinho esta vazio !.
							</div></html></td></tr>';

$total = 0;
$nmais = true;
$_SESSION['var1'] = $nmais;
}else {

$total = 0;
foreach(
$_SESSION['shop-cart'] as $id => $qtd){
$sql   = "SELECT * FROM produtos  where codproduto='$id';";
$qr    = mysql_query($sql) or die(mysql_error());
$ln    = mysql_fetch_assoc($qr);
$cnome  = $ln['pnome'];
$preco =($ln['preco']);
$sub   = ($ln['preco'] * $qtd);
$total += ($ln['preco'] * $qtd);

$result=mysql_query($sql);
$row = mysql_fetch_array($result);


$_SESSION['total'] = $total;
$_SESSION['id'] = $id;
$_SESSION['var1'] = $row['codfornecedor']; 


echo
'<form action="?acao=up" method="post" name="shop-cart" method="post" >
		
										<td class="product"><a href="produto.php?acao=mostrar&codproduto='.$row["codproduto"].'&rere=rere">'.$cnome.'</a></td>
										<td class="price">R$ '.$preco.'</td>
										<td class="quantity">
											<div class="form-group">
											  <input type="text" class="form-control"name="prod['.$id.']" value="'.$qtd.'" maxlength="2" >
											</div>											
										</td>
										<td ><a href="?acao=del&codproduto='.$id.'">remover</a></td>
										<td class="amount">R$ '.$sub.'</td>

									</tr>
									
									
									
		';

}
}
echo'
<tr></tr>
<tr>
<td></td>

<td></td>
<div>
<td align="right"></td>
<td align="right">Total</td>
<td align="right">R$ '.$total.'</td></div>


</tr> 
<td>
<input type="submit" name="atualizar" value="Atualizar"  class="btn btn-group btn-default btn-sm" align="">
</form> '
;
$_SESSION['stotal'] = $total;

 if ($nmais <> true){
	 echo'<td  colspan="3"><a href="cardapio.php?maisprodutos&codfornecedor='.$row["codfornecedor"].' "class="btn btn-group btn-default btn-sm" >adicionar mais produtos</a></td>  </form>';
									};


  if ($nmais <> true){
	echo'<td  align="left" ><a href="shop-checkout.php?" class="btn btn-group btn-default btn-sm">Proximo passo</a></td>
                       
								
							
								';
	   
     
									
								};
?>

                                <!---<tbody>
									<tr class="remove-data">
										<td class="product"><a href="shop-product.html"></a></td>
										<td class="price"></td>
										<td class="quantity">
											<div class="form-group">
											  <input type="text" class="form-control" value="">
											</div>											
										</td>
										<td class="remove"><a class="btn btn-remove btn-default">Remover</a></td>
										<td class="amount">$5</td>
									</tr>
									
								</tbody>
                                -->
                       
                                
							</table>
                       
                            
                                
                                  
                             
                                 
                                  
								   
							
						
								 
							
                        
                               
                           	
					
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
