<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>ADM | Vendas</title>
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
include"menu3.php";
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
								<li><i class="fa fa-home pr-10"></i>Home</li>
								<li class="active">Página Administrativa / Tabela Vendas</li>
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
                    
                    <?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

include "conexao.php";

//consultando registros

if ($_SESSION['nivel']=='2'){
    $codf = $_SESSION['codfornecedor'];
$sql = "SELECT v.codvenda, c.nome, v.date, v.time, v.valor,  v.vstatus, v.pagamento, v.entrega FROM
vendas v, clientes c where v.codcliente  = c.codcliente and   codfornecedor = 1 order by codvenda desc;";
};
if ($_SESSION['nivel']=='1'){
$sql = "SELECT * FROM vendas";
};
/*
$codigo =$_SESSION['codfornecedor'];
					$sel ="SELECT v.codvenda, c.nome, v.date, v.time, v.valor,  v.vstatus FROM vendas v, clientes c where v.codcliente  = c.codcliente and   codfornecedor = 1 order by codvenda desc;";
					$rez = mysql_query($sel);
*/


$result=mysql_query($sql);

echo "<br />";
echo "<div class='table-responsive'><table class='table cart table-striped'>
								<thead>
									<tr>
										
                                        <th>Codigo da Venda</th>
                                       	<th>Nome do Cliente</th>
				                       	<th>Data</th>
                                        <th>Hora</th>
                                        <th>Pagamento</th>
                                        <th>Entrega</th>
                                        <th>Valor</th>
                                        <th>Informaçoes</th>
                                        
									</tr>
								</thead>
								<tbody>
									<tr>";
								while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['codvenda'] . "</td>";
  echo "<td>" . $row['nome'] . "</td>";
  
//  echo "<td>" . $row['codfornecedor'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['pagamento'] . "</td>";
  echo "<td>" . $row['entrega'] . "</td>";
  echo "<td>" . $row['valor'] . "</td>";
 echo "<td>" .'
  <!-- Modals start -->	
							<!-- ============================================================================== -->
							<!-- Button trigger modal -->
							<div align="center"><a data-toggle="modal" data-target="#myModal'.$row['codvenda'].'">Pedido #'.$row['codvenda'].'</a>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="myModal'.$row['codvenda'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel"> Pedido: #'.$row['codvenda'].'</h4>
										</div>
										<div class="modal-body">
											
											
											<p> Informações:
                                            <ul>
                                            <li>Cliente: '.$row['nome'].' '.$row['sobrenome'].'</li>
                                            <li>Endereço:  '.$row['endereco'].'</li>    
                                        	<li>Forma de pagamento: '.$row['pagamento'].'</li>
                                        	<li>Tipo de entrega: '.$row['entrega'].'</li>
                                            </ul>
                                            </p>                                     		                               
					                           
											
										Produtos:
											 ';
 $variavel = $row['codvenda'];
$consulta  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($consulta);	
									while($linha = mysql_fetch_array($refil)){
										echo  '
                                        <p><ul>
                                        <li>Nome: '.$linha['pnome'].'</li>
                                        <li>Quantidade: '.$linha['quantidade'].'</li>
                                        </ul>
                                        </p> 
                                       
									
										';
										};		
											
								echo '
                                     <p> Detalhes do pedido: <ul>
                                     <li>Data: '.$row['date'].' </li>
                                      <li> Hora: '.$row['time'].' </li>
                                      </p>
							             <p align="right" >Valor do pedido: R$'.$row['valor'].'</p> 
										</div>
										<div>
											<li>Status do pedido: '.$row['vstatus'].'   </li>
										</div>
										<form action="" method="post" class="modal-footer">
								
										<input type="submit"  class="btn btn-sm btn-dark" data-dismiss="modal" name="fechar" value="fechar">
									 </form>
									</div>
								</div>
							</div>
						</div>
   
';
};
					echo '</table>';
					echo '<br>';
					

// fechando conexão com o Banco de Dados

mysql_close($conn);
?>
								</tbody>
							</table></div>
                				

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
