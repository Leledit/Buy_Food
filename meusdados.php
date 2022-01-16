<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Perfil</title>
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
								<li><i class="fa fa-home pr-10"></i>Home</li>
								<li class="active">Meu Perfil</li>
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
						$fcodigo = $_SESSION['codfornecedor'];
						//est programaçao e responsavel por pegar  a hora do estabelecimento
 if ($_SESSION['codfornecedor'] != null){
						$sql = "SELECT horario FROM fornecedores  where codfornecedor = $fcodigo ;";
                        $resplter = mysql_query($sql);
                        $acoes = mysql_fetch_assoc($resplter);
						
 }
                         ?> 
							<!-- page-title start -->
							<!-- ================ -->
							<h1 align="center" class="page-title margin-top-clear">Meu Perfil</h1>
							<!-- page-title end -->
							<div class="space"></div>
							<div class="space-bottom"></div>	
                            <?php 
						 if ($_SESSION['codfornecedor'] != null){
							echo 'o estabelecimento  se encontra:';
						    echo ' ';
							echo $acoes['horario'];
                            echo '</br>';
							echo '</br>';
						 }
							 ?>
                           <table class="table">
							<thead>
									<tr>
										<th colspan="2">Informações Pessoais </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nome Completo</td>
										<td class="information"><?php echo $nome,' ', $sobrenome ?>  </td>
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
                        </br>
                        
                        <div>

<?php 

$tes = $_SESSION['nivel'];
//botoes para a pagina de cliente
if ($tes == '3'){
echo '<form action="" method="post">

<input type="submit" name="procurar" value="alterar dados" class="btn btn-default">
</form>';

echo '
<form action="" method="post">

<input type="submit" name="pedidos" value="ver meus pedidos" class="btn btn-default">
</form>';
//botoes para a pagina do estabelecimento
} else {
if ($tes == 2){
$sql = "SELECT horario FROM fornecedores  where codfornecedor = $fcodigo ;";
$resplter = mysql_query($sql);
$acoes = mysql_fetch_assoc($resplter);


echo '<a href="meusdados.php?acao=fornecedorprocurar" class="btn btn-default">alterar dados</a>';
echo ' ';
echo '<a href="suporte.php?acao=aberto&codfornecedor='.$fcodigo.'" class="btn btn-default">abrir estabelecimento</a>';
echo ' ';
echo '<a href="suporte.php?acao=fechado&codfornecedor='.$fcodigo.'" class="btn btn-default">fechar estabelecimento</a>';


}

if ($tes == 1 ){
	echo '<form action="" method="post">

<input type="submit" name="procurar" value="alterar dados" class="btn btn-default">
</form>';
	}



 




	};
	
if(isset($_POST['eaberto'])){
	
//	echo 'o estabelecimento esta aberto';
echo '<a href="suporte.php?acao=aberto"></'; 
}

if(isset($_POST['efechado'])){
	
//echo 'o estabelecimento esta fechado';	
	}
?>



                        
                    	
						</div>
						<!-- main end -->
					</div>
				</div>
			</section>
			<!-- main-container end -->
				<?php
				
			
				//programaçao para mostrar um formulario para que o forncedor possa altera seus dados
				
				if ($_GET['acao'] == 'fornecedorprocurar'){
	
$var = $_SESSION['codfornecedor'];

$sql ="SELECT * FROM fornecedores where codfornecedor = '$var'";

$result = mysql_query($sql);

$busca = mysql_num_rows($result);
$linha = mysql_fetch_assoc($result);

if ($busca >  0){

$ednome = $linha['nome'];
$edusuario = $linha['usuario'];
$edsenha =    $linha['senha'];
$edsobrenome  = $linha['sobrenome'];
$edtelefone = $linha['telefone'];
$edcelular =  $linha['celular'];
$edemail =  $linha['email'];
$edendereco		 =  $linha['endereco'];
$edcidade		 =  $linha['cidade'];
$edinfo		 =  $linha['info'];
	
	
	echo '
	<fieldset>		

<form  action="" method="post" enctype="multipart/form-data" role="form" class="form-horizontal" id="billing-information">                        
       
 
 <label for="billingFirstName" class="col-md-2 control-label">Nome:</label>
   
     <div class="col-md-10">
        <input type="text" required name="nome" width="200"class="form-control" id="billingNome" value="'. $ednome  .' ">
    </div> 
<label for="billingFirstName" class="col-md-2 control-label"  >Senha:</label>
     <div class="col-md-10">
        <input type="text" name="senha" width="150" class="form-control" id="billingNome" value="' . $edsenha .'  "/>
     </div>  
             
 <label for="billingFirstName" class="col-md-2 control-label"  >Usuario:</label>
     <div class="col-md-10">
        <input type="text" name="usuario" width="150" class="form-control" id="billingNome" value="'. $edusuario .' "/>
     </div>   
     
 <label for="billingFirstName" class="col-md-2 control-label">sobrenome:</label>
     <div class="col-md-10">
        <input  type="text" required name="sobrenome" width="200"class="form-control" id="billingNome" value="'. $edsobrenome.'">
     </div>
 <label for="billingFirstName" class="col-md-2 control-label">telefone:</label>
     <div class="col-md-10">
        <input  type="text" required name="telefone" width="200"class="form-control" id="billingNome" value="'.$edtelefone .'"> 
     </div>
<label for="billingFirstName" class="col-md-2 control-label">celular:</label>
      <div class="col-md-10">
        <input type="text" name="celular" width="200"class="form-control" id="billingNome" value="'. $edcelular .'">
      </div>  
<label for="billingFirstName" class="col-md-2 control-label">email:</label>
      <div class="col-md-10">
        <input type="text" name="email" width="200" class="form-control" id="billingNome" value="'.$edemail  .'">
      </div>                           
<label for="billingFirstName" class="col-md-2 control-label">endereco</label>
        <div class="col-md-10">
         <input type="text" name="endereco" width="200"class="form-control" id="billingNome" value="'. $edendereco .'">
  </div>
<label for="billingFirstName" class="col-md-2 control-label">cidade:</label>
        <div class="col-md-10">
          <input type="text" name="cidade" width="200"class="form-control" id="billingNome" value="'. $edcidade.' ">
        </div>  
<label for="billingFirstName" class="col-md-2 control-label">info:</label>
         <div class="col-md-10">
          <input type="text" name="info" width="200"class="form-control" id="billingNome" value="'.$edinfo  .'">             
         </div>                    

         </div>
                          </p>
                          <div align="right">
                            
                          <input class="btn btn-default" type="submit" name="fenviar" value="Salvar Alterações"> 
                           
                          </div>
                                                 
    </form> 
       </fieldset>   
	';
}
		}
		
if (isset( $_POST['fenviar'])){
	
$unome = $_POST['nome'];
$usenha  = $_POST['senha'];
$uusuario  = $_POST['usuario'];
$usobrenome  = $_POST['sobrenome'];
$utelefone  = $_POST['telefone'];
$ucelular = $_POST['celular'];
$uemail  = $_POST['email'];
$uendereco = $_POST['endereco'];
$ucidade  = $_POST['cidade'];
$uinfo   = $_POST['info'];
$ufs = $_SESSION['codfornecedor'];

$sql = "update fornecedores set usuario= '$uusuario' ,senha =  '$usenha',nome = '$unome' , sobrenome = '$usobrenome' , telefone = '$utelefone' , celular =  '$ucelular', email =  '$uemail',  endereco  = '$uendereco' , cidade = '$ucidade' ,info = '$uinfo'  where codfornecedor = '$ufs' ;  ";

$_SESSION['nome']       = $unome;
$_SESSION['usuario']    = $uusuario;
$_SESSION['sobrenome']  = $usobrenome;
$_SESSION['telefone']   = $utelefone;
$_SESSION['celular']    = $ucelular;
$_SESSION['email']      = $uemail;
$_SESSION['endereco']   = $uendereco;
$_SESSION['cidade']     = $ucidade;
$_SESSION['info']       = $uinfo;

if (mysql_query($sql, $conn)) {
	
   echo '<html><div class="alert alert-success" role="alert">
								<strong> seus dados foram alterados com sucesso !.
							</div></html>';
} else {
  echo '<div class="alert alert-danger" role="alert"> 
   
								seus dados  nao foram alterados com sucesso, tente novamente!.
							</div>
							<div class="space"></div>   ' . mysql_error($conn);
}
}


		
					//programaçao para exibir o historico de vendas do fornecedor
				if (isset($_POST['historico'])){
					$codigo =$_SESSION['codfornecedor'];
					$sel ="SELECT v.codvenda, c.nome, v.date, v.time, v.valor,  v.vstatus FROM vendas v, clientes c where v.codcliente  = c.codcliente and   codfornecedor = 1 order by codvenda desc;";
					$rez = mysql_query($sel);
					
					echo "<table class='table cart table-striped'>
		<thead>
		  <tr>
		    <th>Codigo Venda</th>
            <th>Cliente</th>
            <th>Data e Hora</th>
			<th>Valor</th>
            <th>status:</th>
				</tr>
						</thead>
								<tbody>";
								
								while ($row = mysql_fetch_array($rez)){

/*			
$vese = $row['codvenda'];
$rent  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($rent);				
*/			
											 
  echo "<tr>";
  echo "<td>" . $row['codvenda'] . "</td>";
   echo "<td>" . $row['nome']. ' ' .$row['sobrenome'] .  "</td>";
  echo "<td>" . $row['date']. ' ' .$row['time'] .  "</td>";
  echo "<td>"  .$row['valor'] .  "</td>";
  echo "<td>" .$row['vstatus']. "</td>";
  
								  echo'</td>';
                         echo '</tr>';  
                          
   /*
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
		<a href="suporte.php?acao=entregue&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default">Pedido entregue</a>
		<a href="page-invoice.php?acao=nota&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default">Nota do pedido</a>
											
									 </form>
									</div>
								</div>
							</div>
						</div>
						';
   */
};
					echo '</table>';
					echo '<br>';
					}
				//programaçao para ver todos os pedidos do proprio cliente 
				if (isset($_POST['pedidos'])){
					
					$codigo = $_SESSION['codcliente'];
					//echo $codigo;
	$sql = "SELECT v.codvenda,c.nome,c.sobrenome, v.codfornecedor ,v.date, v.time, v.pagamento,  v.entrega, v.valor, v.informacoes  ,v.endereco,v.vstatus
FROM vendas v , clientes c where  v.codcliente  = c.codcliente and c.codcliente = 7  order by   codvenda  desc  ;";	
		 $verr=mysql_query($sql);


	 
		 	
		 
echo "<table class='table cart table-striped'>
		<thead>
		  <tr>
		    <th>Codigo Venda</th>
            <th>Cliente</th>
            <th>Data e Hora</th>
			<th>Valor</th>
            <th>Detalhes</th>
				</tr>
						</thead>
								<tbody>";
		while ($row = mysql_fetch_array($verr)){
			
$variavel = $row['codvenda'];
$consulta  ="SELECT p.pnome , v.quantidade FROM vendasitens v ,produtos p  where codvenda = '$variavel' and v.codproduto = p.codproduto ;";
$refil=mysql_query($consulta);				
			
											 
  echo "<tr>";
  echo "<td>" . $row['codvenda'] . "</td>";
   echo "<td>" . $row['nome']. ' ' .$row['sobrenome'] .  "</td>";
  echo "<td>" . $row['date']. ' ' .$row['time'] .  "</td>";
  echo "<td>"  .$row['valor'] .  "</td>";
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
		<a href="suporte.php?acao=entregue&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default">Pedido entregue</a>
		<a href="page-invoice.php?acao=nota&codvenda='.$row["codvenda"].'"    class="btn btn-sm btn-default">Nota do pedido</a>
											
									 </form>
									</div>
								</div>
							</div>
						</div>
						';
                       
                         echo'</td>';
                         echo '</tr>';  
                          
   
};
					echo '</table>';
					echo '<br>';
					
			
					};
/*					
if (isset($_POST['entregue'])){
	$_SESSION['teste']= 'deu certo';
	
	
	}*/
					
//programaçao para mostros um formularios com os dados do cliente atual e realizar uma alteraçao se o cliente desejar 				
if (isset($_POST['procurar'])){
	
$var = $_SESSION['codcliente'];

$sql ="SELECT * FROM clientes where codcliente = '$var'";

$result = mysql_query($sql);

$busca = mysql_num_rows($result);
$linha = mysql_fetch_assoc($result);

if ($busca >  0){
	
$ednome = $linha['nome'];
$edusuario = $linha['usuario'];
$edsenha =    $linha['senha'];
$edsobrenome  = $linha['sobrenome'];
$edtelefone = $linha['telefone'];
$edcelular =  $linha['celular'];
$edemail =  $linha['email'];
$edendereco		 =  $linha['endereco'];
$edcidade		 =  $linha['cidade'];
$edinfo		 =  $linha['info'];
	
	
	echo '
	<fieldset>		

<form  action="" method="post" enctype="multipart/form-data" role="form" class="form-horizontal" id="billing-information">                        
       
 
 <label for="billingFirstName" class="col-md-2 control-label">Nome:</label>
   
     <div class="col-md-10">
        <input type="text" required name="nome" width="200"class="form-control" id="billingNome" value="'. $ednome  .' ">
    </div> 
<label for="billingFirstName" class="col-md-2 control-label"  >Senha:</label>
     <div class="col-md-10">
        <input type="text" name="senha" width="150" class="form-control" id="billingNome" value="' . $edsenha .'  "/>
     </div>  
             
 <label for="billingFirstName" class="col-md-2 control-label"  >Usuario:</label>
     <div class="col-md-10">
        <input type="text" name="usuario" width="150" class="form-control" id="billingNome" value="'. $edusuario .' "/>
     </div>   
     
 <label for="billingFirstName" class="col-md-2 control-label">sobrenome:</label>
     <div class="col-md-10">
        <input  type="text" required name="sobrenome" width="200"class="form-control" id="billingNome" value="'. $edsobrenome.'">
     </div>
 <label for="billingFirstName" class="col-md-2 control-label">telefone:</label>
     <div class="col-md-10">
        <input  type="text" required name="telefone" width="200"class="form-control" id="billingNome" value="'.$edtelefone .'"> 
     </div>
<label for="billingFirstName" class="col-md-2 control-label">celular:</label>
      <div class="col-md-10">
        <input type="text" name="celular" width="200"class="form-control" id="billingNome" value="'. $edcelular .'">
      </div>  
<label for="billingFirstName" class="col-md-2 control-label">email:</label>
      <div class="col-md-10">
        <input type="text" name="email" width="200" class="form-control" id="billingNome" value="'.$edemail  .'">
      </div>                           
<label for="billingFirstName" class="col-md-2 control-label">endereco</label>
        <div class="col-md-10">
         <input type="text" name="endereco" width="200"class="form-control" id="billingNome" value="'. $edendereco .'">
  </div>
<label for="billingFirstName" class="col-md-2 control-label">cidade:</label>
        <div class="col-md-10">
          <input type="text" name="cidade" width="200"class="form-control" id="billingNome" value="'. $edcidade.' ">
        </div>  
<label for="billingFirstName" class="col-md-2 control-label">info:</label>
         <div class="col-md-10">
          <input type="text" name="info" width="200"class="form-control" id="billingNome" value="'.$edinfo  .'">             
         </div>                    

         </div>
                          </p>
                          <div align="right">
                            
                          <input class="btn btn-default" type="submit" name="enviar" value="Salvar Alterações"> 
                           
                          </div>
                                                 
    </form> 
       </fieldset>   
	';
}
	}	
	
				
//programaçao para enviar os novos dados do cliente para o banco de dados 				
if (isset( $_POST['enviar'])){
	
$unome = $_POST['nome'];
$usenha  = $_POST['senha'];
$uusuario  = $_POST['usuario'];
$usobrenome  = $_POST['sobrenome'];
$utelefone  = $_POST['telefone'];
$ucelular = $_POST['celular'];
$uemail  = $_POST['email'];
$uendereco = $_POST['endereco'];
$ucidade  = $_POST['cidade'];
$uinfo   = $_POST['info'];
$ufs = $_SESSION['codcliente'];

$sql = "update clientes set usuario= '$uusuario' ,senha =  '$usenha',nome = '$unome' , sobrenome = '$usobrenome' , telefone = '$utelefone' , celular =  '$ucelular', email =  '$uemail',  endereco  = '$uendereco' , cidade = '$ucidade' ,info = '$uinfo'  where codcliente = '$ufs' ;  ";

$_SESSION['nome']       = $unome;
$_SESSION['usuario']    = $uusuario;
$_SESSION['sobrenome']  = $usobrenome;
$_SESSION['telefone']   = $utelefone;
$_SESSION['celular']    = $ucelular;
$_SESSION['email']      = $uemail;
$_SESSION['endereco']   = $uendereco;
$_SESSION['cidade']     = $ucidade;
$_SESSION['info']       = $uinfo;
/*
echo $_SESSION['nome']  ;
echo '<br>';
echo $_SESSION['usuario'];
echo '<br>';
echo $_SESSION['sobrenome'];
echo '<br>';
echo $_SESSION['telefone'];
echo '<br>';
echo $_SESSION['celular'];
echo '<br>';
echo $_SESSION['email'] ;
echo '<br>';
echo $_SESSION['endereco'];
echo '<br>';
echo $_SESSION['cidade'];
echo '<br>';
echo $_SESSION['info'] ;
echo '<br>';
echo $_SESSION['cpf'] ;
   */
if (mysql_query($sql, $conn)) {
	/*
	 session_destroy();
		                                            unset($_SESSION);
		                                            header('Location: index.php');
		                                            exit;*/ 
   echo '<html><div class="alert alert-success" role="alert">
								<strong> seus dados foram alterados com sucesso !.
							</div></html>';
} else {
  echo '<div class="alert alert-danger" role="alert"> 
   
								seus dados  nao foram alterados com sucesso, tente novamente!.
							</div>
							<div class="space"></div>   ' . mysql_error($conn);
}
}
mysql_close($conn);

	
	
//rodape 				
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