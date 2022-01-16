<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Editar ADM</title>
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
								<li class="active">Editar ADM </li>
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
							<h1 class="page-title margin-top-clear">Editar ADM</h1>
							<!-- page-title end -->
							<div class="space"></div>
							
							<div class="space-bottom"></div>
							<fieldset>
								<legend>Quadro de Informações</legend>
								<form role="form" class="form-horizontal" id="billing-information" action="" method="post">
									<div class="row">
										<div class="col-lg-3">
											<h2 class="title"> Informações Pessoais</h2>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
                                           						 	<label for="billingFirstName" class="col-md-2 control-label">Usuário<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" required class="form-control" id="billingUsuario" name="usuario" >
												</div>

                                                
                                                						<label for="billingFirstName" class="col-md-2 control-label">Senha<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="password" required class="form-control" id="billingSenha" name="senha" >
												</div>
                                                
												<label for="billingFirstName" class="col-md-2 control-label">Nome<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" id="billingNome" name="nome" >
												</div>
                                               
																							
												<label for="billingLastName" class="col-md-2 control-label">Sobrenome<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" required class="form-control" id="billingSobrenome" name="sobrenome">
												</div>
											
												<label for="billingLastName" class="col-md-2 control-label">CPF<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" required class="form-control" id="billingSobrenome" name="cpf">
												</div>
											
												<label for="billingTel" class="col-md-2 control-label">Telefone<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" required class="form-control" id="billingTel" name="telefone">
												</div>
											
											
												<label for="billingFax" class="col-md-2 control-label">Celular<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" required class="form-control" id="billingFax" name="celular" >
												</div>
											
											
												<label for="billingemail" class="col-md-2 control-label">Email<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="email" required class="form-control" id="billingemail" name="email" >
												</div>

											</div>
										</div>
									</div>

									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<h2 class="title">Seu Endereço</h2>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
												<label for="billingAddress1" class="col-md-2 control-label">Endereço<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" required class="form-control" id="billingAddress1" name="endereco">
												</div>
											</div>
																						<div class="form-group">
												<label class="col-md-2 control-label">País<small class="text-default">*</small></label>
												<div class="col-md-10">
													<label for="billingPostalCode" required class="col-md-2 control-label">BR<small class="text-default"></small></label>
												</div>
											</div>
										<label class="col-md-2 control-label">Cidade<small class="text-default"></label>
												<div class="col-md-10">
													<select class="form-control" name="cidade">
														<option value="Areado-MG">Areado-MG</option>
                                                       
                                                        							
													</select>
												</div>
											</div>
											                                         
                                                                                    
										</div>
									
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<h2 class="title">Informações Complementares</h2>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
												<div class="col-md-12">
													<textarea class="form-control" required name="info"></textarea>
												</div>
											</div>
										</div>
									</div>
                                   
										
									</form>
                              <div align="right">
                                    <input type="submit" value="Salvar Alterações" class="btn btn-default" name="enviar" />
                                    </div>
                                   
								</form>
							</fieldset>
	<?php 

if (isset($_POST['enviar'])) { 


$login =$_POST["usuario"];
$senhac =$_POST["senha"];
$nome =$_POST["nome"];
$sobrenome =$_POST["sobrenome"];
$cpf =$_POST["cpf"];
$telefone =$_POST["telefone"];
$celular =$_POST["celular"];
$email =$_POST["email"];
$endereco =$_POST["endereco"];
$cidade =$_POST["cidade"];
$info =$_POST["info"];

include "conexao.php";

$consulta = "SELECT  usuario  FROM clientes where usuario = '$login';";
$select = mysql_query($consulta,$conn);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

if($logarray == $login){
      echo'<html><div class="alert alert-danger" role="alert">
								<strong>Oh que chato!</strong> Nome de usuário já existente, tente novamente!.
							</div></html>';
	  
        die();header("Location:Cadastre-se.php");

        
		
} else{
	
$sql = "INSERT INTO clientes(usuario,senha,nivel,nome,sobrenome,telefone,celular,email,cpf,endereco,cidade,info)
VALUES ('$login','$senhac','1','$nome','$sobrenome','$telefone','$celular','$email','$cpf','$endereco','$cidade','$info');";
}
if (mysql_query($sql, $conn)) {
    echo '<html><div class="alert alert-success" role="alert">
								<strong>Parabéns!</strong> Cadastro efetuado com sucesso!.
							</div></html>';
} else {
    echo '<html><div class="alert alert-danger" role="alert">
								<strong>Oh que chato!</strong> Cadastro não efetuado, tente novamente!.
							</div></html>' . mysql_error($conn);

}

mysql_close($conn);
} 

?>
	
					
										
							
							
								
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
		
			<!-- main-container end -->

<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">
                    


                   
					</div>
				</div>
			</section>

	
				
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
