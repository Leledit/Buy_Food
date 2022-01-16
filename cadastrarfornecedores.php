<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Cadastrar Fornecedores</title>
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
								<li class="active">Cadastrar Fornecedores</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
							<fieldset>		

<form  action="" method="post" enctype="multipart/form-data" role="form" class="form-horizontal" id="billing-information">                        
       
 
 <label for="billingFirstName" class="col-md-2 control-label">Usuario:</label>
   
     <div class="col-md-10">
        <input type="text" required name="usuario" width="200"class="form-control" id="billingNome">
    </div> 
<label for="billingFirstName" class="col-md-2 control-label"  >Senha:</label>
     <div class="col-md-10">
        <input type="password" name="senha" width="150" class="form-control" id="billingNome"/>
     </div>  
     <label class="col-md-2 control-label">Tipo de Empresa:<small class="text-default"></small></label>
          <div class="col-md-10">
													<select class="form-control" name="tipo">
														<option value="lanche">Lanchonete</option>
                                                        <option value="pizza">Pizzaria</option>
                                                        							
													</select>
												</div>          
 
 <label for="billingFirstName" class="col-md-2 control-label">Nome:</label>
     <div class="col-md-10">
        <input  type="text" required name="nome" width="200"class="form-control" id="billingNome">
     </div>
 <label for="billingFirstName" class="col-md-2 control-label">Sobrenome:</label>
     <div class="col-md-10">
        <input  type="text" required name="sobrenome" width="200"class="form-control" id="billingNome">
     </div>
<label for="billingFirstName" class="col-md-2 control-label">Cnpj:</label>
      <div class="col-md-10">
        <input type="text" name="CNPJ" width="200"class="form-control" id="billingNome">
      </div>  
<label for="billingFirstName" class="col-md-2 control-label">Telefone:</label>
      <div class="col-md-10">
        <input type="text" name="telefone" width="200" class="form-control" id="billingNome">
      </div>              
<label for="billingFirstName" class="col-md-2 control-label">Celular:</label>
       <div class="col-md-10">
        <input type="text" name="celular" width="200"class="form-control" id="billingNome">
  </div>              
<label for="billingFirstName" class="col-md-2 control-label">Email</label>
        <div class="col-md-10">
         <input type="text" name="email" width="200"class="form-control" id="billingNome">
  </div>
<label for="billingFirstName" class="col-md-2 control-label">Endereço:</label>
        <div class="col-md-10">
          <input type="text" name="endereco" width="200"class="form-control" id="billingNome">
        </div>  
<label for="billingFirstName" class="col-md-2 control-label">Cidade:</label>
         <div class="col-md-10">
          <input type="text" name="cidade" width="200"class="form-control" id="billingNome">             
         </div>                    
<label for="billingFirstName" class="col-md-2 control-label"> Informaçoes opcionais :</label>
         <div class="col-md-10">
                           <textarea name="informacoes" required rows="lines" cols="colunas " class="form-control" id="billingNome">                           
                          </textarea>
         </div>
                          </p>
                          <div align="right">
                          <input class="btn btn-default" type="reset" name="resete" value="Limpar">  
                          <input class="btn btn-default" type="submit" name="enviar" value="Cadastrar"> 
                           
                          </div>
                                                 
    </form> 
       </fieldset>
                       
                        <?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

if (isset($_POST['enviar'])) { 
// nivel e igual 2 
$fusuarios=$_POST["usuario"];
$fsenha=$_POST["senha"];
$fnome=$_POST["nome"];
$fcnpj=$_POST["CNPJ"];
$ftelefone=$_POST["telefone"];
$fcelular=$_POST["celular"];
$femail=$_POST["email"];
$fendereco=$_POST["endereco"];
$fcidade=$_POST["cidade"];
$finformacoes=$_POST["informacoes"];
$fsobrenome=$_POST["sobrenome"];
$tipo=$_POST["tipo"];

include "conexao.php";

if ($ftelefone != is_numeric($ftelefone)){
	echo '<html><div class="alert alert-danger" role="alert">
								<strong>Opss!</strong> o campo Telefone so pode ser composto por numeros!.
							</div></html>' . mysql_error($conn);
}else{
	if($fcelular != is_numeric($fcelular)){
	echo '<html><div class="alert alert-danger" role="alert">
								<strong>Opss!</strong> o campo Celular so pode ser composto por numeros!.
							</div></html>' . mysql_error($conn); 
	}else{

//verifica se o nome de usuario ja exite no banco de dados 
$consulta = "SELECT  usuario  FROM fornecedores where usuario = '$fusuarios';";
$select = mysql_query($consulta,$conn);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

if($logarray == $fusuarios){
      echo'<html><div class="alert alert-danger" role="alert">
								<strong>Oh que chato!</strong> Nome de usuário já existente, tente novamente!.
							</div></html>';
	  
        die();header("Location:Cadastre-se.php");

        
		
} else{
$sql = "INSERT INTO fornecedores (nivel,usuario,senha,nome,sobrenome,CNPJ,telefone,celular,email,endereco,cidade,info,tipo)
VALUES (2,'$fusuarios','$fsenha','$fnome','$fsobrenome','$fcnpj','$ftelefone','$fcelular','$femail','$fendereco','$fcidade','$finformacoes','$tipo');";
    

if (mysql_query($sql, $conn)) {
   echo '<html><div class="alert alert-success" role="alert">
								<strong>Parabéns!</strong> Cadastro efetuado com sucesso!.
							</div></html>';
} else {
  echo '<html><div class="alert alert-danger" role="alert">
								<strong>Oh que chato!</strong> Cadastro não efetuado, tente novamente!.
							</div></html>' . mysql_error($conn);
}
}

  

}//fechamento da verificaçao de teelfone
}//fechamento da verificaçao de celular
}//fechamento do enviar
mysql_close($conn);
?>



        
       
        
												
                   
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
            <!-- page-wrapper end -->

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
