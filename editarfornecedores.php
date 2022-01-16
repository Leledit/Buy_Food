<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Editar Fornecedores</title>
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
include "conexao.php";
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
								<li class="active">Editar Fornecedores</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		<div>
     <br/>
    <h1 class="page-title margin-top-clear" align="center">Editar fornecedores</h1>
							<!-- page-title end -->
							<div class="space"></div>    
<form action="" method="post">
  <h3>Codigo do fornecedor:<input type="text" name="codigo" value=""></h3> 
  
    <input type="submit" name="procurar" value="Pesquisar" class="btn btn-default" >
  </p>
</form>
</div>
<?php 


$hest =  0 ;

if (isset($_POST['procurar'])){
$var = $_POST['codigo'];

$_SESSION['ep'] = $_POST['codigo'];

$sql ="SELECT * FROM fornecedores where codfornecedor = '$var'";

$result = mysql_query($sql);

$busca = mysql_num_rows($result);
$linha = mysql_fetch_assoc($result);

if ($busca > 0){
$usu = $linha['usuario'];
$senha = $linha['senha'];
$tiem = $linha['tipo'];
$no = $linha['nome'];
$sobre = $linha['sobrenome'];
$cnpj = $linha['cnpj'];	
$telefone = $linha['telefone'];
$celular = $linha['celular'];
$email = $linha['email'];
$endereco = $linha['endereco'];
$cidade= $linha['cidade'];
$info = $linha['info'];	
$fstatus =  $linha['fstatus'];
$hest = 1;
}else {
		echo '<h2> 
		Fornecedor  nao foi encontrado!! Por favor digite um codigo valido
		
		</h2>';
		};
}

if ($hest == 1 ){

	echo '
	<fieldset>		

<form  action="" method="post" enctype="multipart/form-data" role="form" class="form-horizontal" id="billing-information">                        
       
 
 <label for="billingFirstName" class="col-md-2 control-label">Usuario:</label>
   
     <div class="col-md-10">
        <input type="text" required name="usuario" width="200"class="form-control" id="billingNome" value="'. $usu .' ">
    </div> 
<label for="billingFirstName" class="col-md-2 control-label"  >Senha:</label>
     <div class="col-md-10">
        <input type="text" name="senha" width="150" class="form-control" id="billingNome" value="' .$senha .'  "/>
     </div>  
        
		     
<label class="col-md-2 control-label">Tipo de fornecedor:<small class="text-default"></small></label>
          <div class="col-md-10">
													<select class="form-control" name="tipo">
                                                    <option value=" '.$tiem.'"  selected >   '.$tiem.'</option>
													';
													if ($tiem == ''){
														echo '
														<option value="lanche">Lanche</option>
														<option value="pizza">Pizza</option>
                                                        <option value="queijo">Pão de Queijo</option>
                                                        <option value="bebidas">Bebidas</option>	';
														}
													if ($tiem =='lanche'){
														echo '
														<option value="pizza">Pizza</option>
                                                        <option value="queijo">Pão de Queijo</option>
                                                        <option value="bebidas">Bebidas</option>	';
													}
													if($tiem´ == 'queijo'){
														echo'
														<option value="lanche">Lanche</option>
                                                        <option value="pizza">Pizza</option>
														<option value="bebidas">Bebidas</option>		
														';
														}
													if($tiem == 'pizza'){
														echo '
														<option value="lanche">Lanche</option>
														<option value="queijo">Pão de Queijo</option>
                                                        <option value="bebidas">Bebidas</option>
														';
														}
													if ($tiem == 'bebidas'){
														echo'
														<option value="lanche">Lanche</option>
                                                        <option value="pizza">Pizza</option>
                                                        <option value="queijo">Pão de Queijo</option>
														';
														}
													
													echo'</select>
		  </div> 
     
	   <label class="col-md-2 control-label">Status:<small class="text-default"></small></label>
          <div class="col-md-10">
													<select class="form-control" name="status">
                                                    <option value="'. $fstatus .' " selected >'. $fstatus .'</option>
													';
													if ($fstatus == 'ativo'){
														
                                                      echo'<option value="desativo">Desativos</option>';
														}else {
														echo'<option value="ativo">Ativo</option>';	
														};
														
                                                      
													 echo'   </select>
                                                        </div>
           </br>
 <label for="billingFirstName" class="col-md-2 control-label">Nome:</label>
     <div class="col-md-10">
        <input  type="text" required name="nome" width="200"class="form-control" id="billingNome" value="'. $no .'">
     </div>
 <label for="billingFirstName" class="col-md-2 control-label">Sobrenome:</label>
     <div class="col-md-10">
        <input  type="text" required name="sobrenome" width="200"class="form-control" id="billingNome" value="'.  $sobre .'"> 
     </div>
<label for="billingFirstName" class="col-md-2 control-label">Cnpj:</label>
      <div class="col-md-10">
        <input type="text" name="CNPJ" width="200"class="form-control" id="billingNome" value="'. $cnpj .'">
      </div>  
<label for="billingFirstName" class="col-md-2 control-label">Telefone:</label>
      <div class="col-md-10">
        <input type="text" name="telefone" width="200" class="form-control" id="billingNome" value="'. $telefone .'">
      </div>              
<label for="billingFirstName" class="col-md-2 control-label">Celular:</label>
       <div class="col-md-10">
        <input type="text" name="celular" width="200"class="form-control" id="billingNome" value="'. $celular . '">
  </div>              
<label for="billingFirstName" class="col-md-2 control-label">Email</label>
        <div class="col-md-10">
         <input type="text" name="email" width="200"class="form-control" id="billingNome" value="'. $email .'">
  </div>
<label for="billingFirstName" class="col-md-2 control-label">Endereço:</label>
        <div class="col-md-10">
          <input type="text" name="endereco" width="200"class="form-control" id="billingNome" value="'.$endereco.' ">
        </div>  
<label for="billingFirstName" class="col-md-2 control-label">Cidade:</label>
         <div class="col-md-10">
          <input type="text" name="cidade" width="200"class="form-control" id="billingNome" value="'. $cidade .'">             
         </div>                    
<label for="billingFirstName" class="col-md-2 control-label">informaçoes opcionais:</label>
         <div class="col-md-10">
          <input type="text" name="informacoes" width="200"class="form-control" id="billingNome" value="'. $info .' ">             
         </div>      
         </div>
                          </p>
                          <div align="right">
                            
                          <input class="btn btn-default" type="submit" name="enviar" value="Salvar Alterações"> 
                           
                          </div>
                                                 
    </form> 
       </fieldset>   
	';};

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

if (isset($_POST['enviar'])) { 
// nivel e igual 2 

$fusuario=$_POST["usuario"];
$fsenha=$_POST["senha"];
$ftipo=$_POST["tipo"];
$fnome=$_POST["nome"];
$fsobrenome=$_POST["sobrenome"];
$fcnpj=$_POST["CNPJ"];
$ftelefone=$_POST["telefone"];
$fcelular=$_POST["celular"];
$femail=$_POST["email"];
$fendereco=$_POST["endereco"];
$fcidade=$_POST["cidade"];
$finformacoes=$_POST["informacoes"];
$fstat = $_POST['status'];
//echo $ftipo;
$a= $_SESSION['ep'];  
$sql = "update fornecedores  set   usuario = '$fusuario', senha = '$fsenha', nome = '$fnome', sobrenome = '$fsobrenome', telefone = '$ftelefone', celular = '$fcelular', email = '$femail', cnpj = '$fcnpj', endereco = '$fendereco', cidade = '$fcidade', info = '$finformacoes', tipo = '$ftipo'  , fstatus = '$fstat' where codfornecedor = '$a' ;";
   
if (mysql_query($sql, $conn)) {
   echo '<html><div class="alert alert-success" role="alert">
								<strong> Registro alterado com sucesso !.
							</div></html>';
} else {
  echo '<div class="alert alert-danger" role="alert">
   
								Registro nao foi alterado, tente novamente!.
							</div>
							<div class="space"></div>   ' . mysql_error($conn);
}
}
mysql_close($conn);

?>
<div class="space"></div>   
<div class="space"></div>   
<div class="space"></div>   
<div class="space"></div>   
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
