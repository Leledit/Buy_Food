<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Pedidos</title>
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


<meta HTTP-EQUIV="refresh" CONTENT="60"> 
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

	
include "conexao.php";

//consultando registros

$var = $_SESSION['codfornecedor'];
//fornecedores page 
if ($_SESSION['nivel']=='2'){
$sql = "SELECT v.codvenda,c.nome,c.sobrenome, v.codfornecedor ,v.date, v.time, v.pagamento,  v.entrega, v.valor, v.informacoes ,v.endereco ,v.vstatus FROM
vendas v , clientes c where   v.codcliente  = c.codcliente and codfornecedor = '$var' and vstatus = 'delivery'  order by codvenda desc ";

$ret = "SELECT v.codvenda,c.nome,c.sobrenome, v.codfornecedor ,v.date, v.time, v.pagamento,  v.entrega, v.valor, v.informacoes ,v.endereco ,v.vstatus FROM
vendas v , clientes c where   v.codcliente  = c.codcliente and codfornecedor = '$var' and vstatus = 'aceito'  order by codvenda desc";

$rep ="SELECT v.codvenda,c.nome,c.sobrenome, v.codfornecedor ,v.date, v.time, v.pagamento,  v.entrega, v.valor, v.informacoes ,v.endereco ,v.vstatus FROM
vendas v , clientes c where   v.codcliente  = c.codcliente and codfornecedor = '$var' and vstatus = 'espera'  order by codvenda desc";

$indentificador  = 2 ;
}; 
//adiministradores page 
if ($_SESSION['nivel']=='1'){
$sql = "SELECT v.codvenda,c.nome,c.sobrenome, v.codfornecedor ,v.date, v.time, v.pagamento,  v.entrega, v.valor, v.informacoes  ,v.endereco ,v.vstatus
FROM vendas v , clientes c where  v.codcliente  = c.codcliente order by codvenda desc ;";
$indentificador  = 1 ;
};


$result=mysql_query($sql);
$result2=mysql_query($ret);
$result3=mysql_query($rep);

//if($result > 0){echo 'nao a pedidos no momento';};

?>


			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i>Home</li>
								<li class="active">Página Administrativa / Recebimento de Pedidos</li>
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
							
							
                      <h1 class="page-title">Recebimento de Pedidos!</h1>
							
                            
                           
                            
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
            
            
			<!-- main-container end -->
							
<?php
if ($indentificador == 2){
	
//$consulta = mysql_query(
if (mysql_num_rows($result) <= 0  && mysql_num_rows($result2) <= 0  && mysql_num_rows($result3) <= 0  ){
	
	echo'<html><div class="alert alert-danger" role="alert">
								<strong>Opss!!! </strong> Voce nao ten nenhum pedido no momento!.
							</div></html>';
//aki esta apenas um espaçamento para ajustar o tamanho da tela oks.					
	echo'
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>';						
	
	
	}else{
echo "<table class='table cart table-striped'>
								<thead>
									<tr>
						                
                                        <th>Cliente</th>
                                       	<th>Data e Hora</th>
										<th>Valor</th>
                                        <th>Detalhes</th>
										
                                        
									</tr>
								</thead>
								<tbody>";
								
//aki sera mostrados todas ass vendas que ssao iguais a  aceito

while($row = mysql_fetch_array($result2)){
	
$variavel = $row['codvenda'];


$consulta  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($consulta);

{
    
						 
  echo "<tr >";
 
   echo "<td>" . $row['nome']. ' ' .$row['sobrenome'] .  "</td>";
  echo "<td>" . $row['date']. ' ' .$row['time'] .  "</td>";
  echo "<td>"  .$row['valor'] .  "</td>";
   echo "<td>" .' 
							<!-- Modals start -->	
							<!-- ============================================================================== -->
							<!-- Button trigger modal -->
							<div align="center"><a href="" data-toggle="modal" data-target="#myModal'.$row['codvenda'].'">Pedido n°  #'.$row['codvenda'].'</a>
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
										<form action="" method="post"class="modal-footer">
										<input type="submit"  class="btn btn-sm btn-dark" data-dismiss="modal" name="fechar" value="fechar"> 
										<a href="suporte.php?acao=aceito&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default" >Aceito</a>
										<a href="suporte.php?acao=recusar&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default">recusar</a>
										
										<a href="suporte.php?acao=processo&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default" >processo</a>
										<a href="suporte.php?acao=delivery&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default">delivery</a>
					
											
									 </form>
									</div>
								</div>
							</div>
						</div>
						';
                        
                         echo'</td>';
                         echo '</tr>'; 
		 
                          
   
};
  
}
	
	
	

//aakki seraa mosttraadoss todaass as venddas que sao iguaais a proccessoss
while($row = mysql_fetch_array($result3)){
	
$variavel = $row['codvenda'];


$consulta  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($consulta);

{
    
						 
  echo "<tr >";
 
   echo "<td>" . $row['nome']. ' ' .$row['sobrenome'] .  "</td>";
  echo "<td>" . $row['date']. ' ' .$row['time'] .  "</td>";
  echo "<td>"  .$row['valor'] .  "</td>";
   echo "<td>" .' 
							<!-- Modals start -->	
							<!-- ============================================================================== -->
							<!-- Button trigger modal -->
							<div align="center"><a href="" data-toggle="modal" data-target="#myModal'.$row['codvenda'].'">Pedido n°  #'.$row['codvenda'].'</a>
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
										<form action="" method="post"class="modal-footer">
										<input type="submit"  class="btn btn-sm btn-dark" data-dismiss="modal" name="fechar" value="fechar"> 
										<a href="suporte.php?acao=aceito&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default" >Aceito</a>
										<a href="suporte.php?acao=recusar&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default">recusar</a>
										
										<a href="suporte.php?acao=processo&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default" >processo</a>
										<a href="suporte.php?acao=delivery&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default">delivery</a>
					
											
									 </form>
									</div>
								</div>
							</div>
						</div>
						';
                        
                         echo'</td>';
                         echo '</tr>'; 
		 
                          
   
};
  
}
									
								
//aki seraa mostras  todas as  vendas que sao iguais  delivery
while($row = mysql_fetch_array($result)){
	
$variavel = $row['codvenda'];


$consulta  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($consulta);

{
    
						 
  echo "<tr >";
 
   echo "<td>" . $row['nome']. ' ' .$row['sobrenome'] .  "</td>";
  echo "<td>" . $row['date']. ' ' .$row['time'] .  "</td>";
  echo "<td>"  .$row['valor'] .  "</td>";
   echo "<td>" .' 
							<!-- Modals start -->	
							<!-- ============================================================================== -->
							<!-- Button trigger modal -->
							<div align="center"><a href="" data-toggle="modal" data-target="#myModal'.$row['codvenda'].'">Pedido n°  #'.$row['codvenda'].'</a>
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
										<form action="" method="post"class="modal-footer">
										<input type="submit"  class="btn btn-sm btn-dark" data-dismiss="modal" name="fechar" value="fechar"> 
										<a href="suporte.php?acao=aceito&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default" >Aceito</a>
										<a href="suporte.php?acao=recusar&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default">recusar</a>
										
										<a href="suporte.php?acao=processo&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default" >processo</a>
										<a href="suporte.php?acao=delivery&codvenda='.$row["codvenda"].'"  class="btn btn-sm btn-default">delivery</a>
					
											
									 </form>
									</div>
								</div>
							</div>
						</div>
						';
                        
                         echo'</td>';
                         echo '</tr>'; 
		 
                          
   
};
  
}




	

			
}
}


//

if ($indentificador == 1){
	
	//$consulta = mysql_query(
echo "<table class='table cart table-striped'>
								<thead>
									<tr>
						                
                                        <th>Cliente</th>
                                       	<th>Data e Hora</th>
										<th>Valor</th>
                                        <th>Detalhes</th>
										
                                        
									</tr>
								</thead>
								<tbody>";

while($row = mysql_fetch_array($result)){
	
$variavel = $row['codvenda'];


$consulta  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($consulta);
    
									 
  echo "<tr>";
  echo "<td>" . $row['nome']. ' ' .$row['sobrenome'] .  "</td>";
  echo "<td>" . $row['date']. ' ' .$row['time'] .  "</td>";
  echo "<td>"  .$row['valor'] .  "</td>";
    echo "<td>" .' 
							<!-- Modals start -->	
							<!-- ============================================================================== -->
							<!-- Button trigger modal -->
							<div align="center"><a href="" data-toggle="modal" data-target="#myModal'.$row['codvenda'].'">Pedido n°  #'.$row['codvenda'].'</a>
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
									  <li>Status : '.$row['vstatus'].'</li>
                                      </p>
							             <p align="right" >Valor do pedido: R$'.$row['valor'].'</p> 
										</div>
										<form action="" method="post"class="modal-footer">
										<input type="submit"  class="btn btn-sm btn-dark" data-dismiss="modal" name="fechar" value="fechar"> <strong></strong>
										</form>
										
						
					
										';
										
										
  echo'</td>';
  echo '</tr>'; 
						 
}
	}
echo '</table>';
	
?>
						

						<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-2">
								<div class="footer-content">
									
							
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
		
        	

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
