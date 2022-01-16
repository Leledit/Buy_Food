<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Editar produtos</title>
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
	<body class="full-height no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		<?php	
@session_start();
include "conexao.php";
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
								<li class="active">Editar produtos</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
<div><br></div>
<div>
<h1 class="page-title margin-top-clear" align="center">Editar Produto</h1>
							<!-- page-title end -->
                            
                          <div class="space"></div> 
                                
							<div class="space"></div>
<form action="" method="post">
<h3>Codigo do produto: <input type="text" name="codigo" value=""> </h3> 
<p></p>
<input type="submit" name="procurar" value="Pesquisar" class="btn btn-default">

</form>
</div>

<?php
$hest = 0 ;
if (isset($_POST['procurar'])){
$var = $_POST['codigo'];
/*
if (is_null($var)){
	
echo'	<h1>Por favor digite o codigo do produto!!! </h1>';
	}*/

$_SESSION['ep'] = $_POST['codigo'];

 $codf = $_SESSION['codfornecedor'];
 if($_SESSION['nivel'] == 2){
$sql ="SELECT * FROM produtos where codproduto = '$var' and codfornecedor = '$codf'";
 }else{
	$sql ="SELECT * FROM produtos where codproduto = '$var' "; 
	 }
 
$result = mysql_query($sql);

$busca = mysql_num_rows($result);
$linha = mysql_fetch_assoc($result);


if ($busca > 0){
	
$tip = $linha['tipo'];
$codfornecedor = $linha['codfornecedor'];
$nom = $linha['pnome'];
$descri =$linha ['descricao'];
$preco = $linha['preco'];
$quanti = $linha['quantidade'];
$estabele = $linha['estabelecimento'];
$pstatus = $linha ['pstatus'];
$informacoes = $linha['informacoes'];
	
$hest = 1 ;
	}else {
		echo '<h2 align="center"> 
		Produto nao foi encontrado!! Por favor digite um codigo valido!!!
		
		</h2>';
		};

}

if ($hest == 1){
	echo '
<fieldset>
        <form action="" method="post" enctype="multipart/form-data" role="form" class="form-horizontal" id="billing-information">
 

 
  
          </br>
          <label class="col-md-2 control-label">Tipo de produto:<small class="text-default"></small></label>
          <div class="col-md-10">
													<select class="form-control" name="tipo">
                                                    <option value=" '.$tip.'"  selected >   '.$tip.'</option>
													';
													if ($tip =='lanche'){
														echo '
														<option value="pizza">Pizza</option>
                                                        <option value="queijo">Pão de Queijo</option>
                                                        <option value="bebidas">Bebidas</option>	';
													}
													if($tip´ == 'queijo'){
														echo'
														<option value="lanche">Lanche</option>
                                                        <option value="pizza">Pizza</option>
														<option value="bebidas">Bebidas</option>		
														';
														}
													if($tip == 'pizza'){
														echo '
														<option value="lanche">Lanche</option>
														<option value="queijo">Pão de Queijo</option>
                                                        <option value="bebidas">Bebidas</option>
														';
														}
													if ($tip == 'bebidas'){
														echo'
														<option value="lanche">Lanche</option>
                                                        <option value="pizza">Pizza</option>
                                                        <option value="queijo">Pão de Queijo</option>
														';
														}
													
													echo'</select>
		  </div>
          
          </br>
          <label for="billingFirstName" class="col-md-2 control-label"> Nome:<small class="text-default">*</small></label>
          <div class="col-md-10">
              <input type="text" name="nome" width="150"class="form-control" id="billingNome" value="'. $nom .'" />            
          </div> 
          
          </br>
          
           <label for="billingFirstName" class="col-md-2 control-label">Descrição do produto:<small class="text-default">*</small></label>
           <div class="col-md-10">
		   
               <input type="text"  name="descricao" required rows="5" cols="40"class="form-control" id="billingNome" value=" '. $descri .'"  >
           </div>
           
           </br>
           
          
          
     <label for="billingFirstName" class="col-md-2 control-label">preço <small class="text-default">*</small></label>
          <div class="col-md-10">
              <input type="text" required name="preco" width="50" class="form-control" id="billingNome" value="'. $preco .'"><!-- aceita apenas campos numericos-->
          </div>
          
          </br>
          
          
     <label for="billingFirstName" class="col-md-2 control-label">Quantidade<small class="text-default">*</small> </label>
          <div class="col-md-10">
              <input type="text" required name="quantidade" width="50"class="form-control" id="billingNome" value="'. $quanti .'" > <br><!-- aceita apenas campos numericos-->
          </div>
       
										
			 <label for="billingFirstName" class="col-md-2 control-label">Estabelecimento<small class="text-default">*</small></label>
           <div class="col-md-10">
               <input type="text" required name="estabelecimento" width="150"class="form-control" id="billingNome"  value="'. $estabele.' "  >
           </div>
           
		   
		    <label class="col-md-2 control-label">Status:<small class="text-default"></small></label>
          <div class="col-md-10">
													<select class="form-control" name="status">
                                                    <option value="'. $pstatus .' " selected >'. $pstatus .'</option>
													';
													if ($pstatus == 'ativo'){
														
                                                      echo'<option value="desativo">Desativos</option>';
														}else {
														echo'<option value="ativo">Ativo</option>';	
														};
														
                                                      
													 echo'   </select>
                                                        </div>
           </br>							
     
           </br>
           
         
                       
          
           
             <label for="billingFirstName" class="col-md-2 control-label">informaçoes <small class="text-default">*</small></label>
           <div class="col-md-10">
               <input  type="text" required name="informacoes" width="150"class="form-control" id="billingNome" value="'. $informacoes .' " >
           </div>
           </br>
     </br>                   
      </br>  
                <div align="right">
                          
                          <input class="btn btn-default" type="submit" name="enviar" value="Salvar Alterações"> 
                           
          </div>
        </form> 
		  </fieldset>

</li>';
	
	};
 ?>	


<?php

if (isset($_POST['enviar'])) { 
$tipo=$_POST["tipo"];
$cfornecedor=$_POST["cfornecedor"];
$nome=$_POST["nome"];
$descricao=$_POST["descricao"];
$preco=$_POST["preco"];
$quantidade=$_POST["quantidade"];
$e=$_POST["estabelecimento"];
$status=$_POST["status"];
$info=$_POST["informacoes"];
$a= $_SESSION['ep'];

$sql = "update produtos set pnome = '$nome', preco = '$preco', quantidade = '$quantidade', descricao = '$descricao', estabelecimento = '$e', pstatus='$status', informacoes='$info', tipo='$tipo' where codproduto = '$a';"; 


if (mysql_query($sql, $conn)) {
   echo '<html><div class="alert alert-success" role="alert">
								<strong>Parabéns!</strong> Alteraçao realizada com sucesso!.
							</div></html>';
} else {
  echo '<html><div class="alert alert-danger" role="alert">
								<strong>Oh que chato!</strong> Ediçao nao pode ser feita !tente novamente!.
							</div></html>' . mysql_error($conn);
}


}  



mysql_close($conn);
?>
                    </div> 
                    <div class="space"></div> 
                    <div class="space"></div> 
    
			<!-- main-container end -->  <!-- page-wrapper end -->
            <?php
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
		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
	<script type="text/javascript" src="plugins/jquery.js"></script>
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
