<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Buy Food | Cadastrar produtos</title>
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
								<li class="active">Cadastrar produtos</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
							<fieldset>
 <form action="" method="post" enctype="multipart/form-data" role="form" class="form-horizontal" id="billing-information">
 

 
  
          </br>
          <label class="col-md-2 control-label">Tipo de produto:<small class="text-default"></small></label>
          <div class="col-md-10">
													<select class="form-control" name="tipo">
														<option value="lanche">Lanche</option>
                                                        <option value="pizza">Pizza</option>
                                                        <option value="queijo">Pão de Queijo</option>
                                                        <option value="bebidas">Bebidas</option>
                                                       
                                                        							
													</select>
												</div><?php
                                                 if ($_SESSION['nivel']=='2'){
                                                  echo'  <label for="billingFirstName" class="col-md-2 control-label">Codigo do fornecedor:<small class="text-default">*</small></label>
          <div class="col-md-10">
              <input type="text" name="cfornecedor" width="150"class="form-control" id="billingNome"  value="'.$_SESSION['codfornecedor'].'" readonly="true" />            
          </div>  
						
                      '; }
                      
                      else {
                        
                        echo'  <label for="billingFirstName" class="col-md-2 control-label">Codigo do fornecedor:<small class="text-default">*</small></label>
          <div class="col-md-10">
              <input type="text" name="cfornecedor" width="150"class="form-control" id="billingNome" />            
          </div>  
                        
                        
                        
                      ';}
                        ?>
         
          <label for="billingFirstName" class="col-md-2 control-label"> Nome:<small class="text-default">*</small></label>
          <div class="col-md-10">
              <input type="text" name="nome" width="150"class="form-control" id="billingNome" />            
          </div> 
          
          </br>
          
           <label for="billingFirstName" class="col-md-2 control-label">Descrição do produto:<small class="text-default">*</small></label>
           <div class="col-md-10">
               <textarea name="descricao" required rows="5" cols="40"class="form-control" id="billingNome" ></textarea>
           </div>
           
           </br>
           
          
          
     <label for="billingFirstName" class="col-md-2 control-label">preço <small class="text-default">*</small></label>
          <div class="col-md-10">
              <input type="text" required name="preco" width="50" class="form-control" id="billingNome"><!-- aceita apenas campos numericos-->
          </div>
          
          </br>
          
          
     <label for="billingFirstName" class="col-md-2 control-label">Quantidade<small class="text-default">*</small> </label>
          <div class="col-md-10">
              <input type="text" required name="quantidade" width="50"class="form-control" id="billingNome"> <br><!-- aceita apenas campos numericos-->
          </div>
       
										
			 <label for="billingFirstName" class="col-md-2 control-label">Estabelecimento<small class="text-default">*</small></label>
           <div class="col-md-10">
               <input type="text" required name="estabelecimento" width="150"class="form-control" id="billingNome" rows="1"  ></textarea>
           </div>
           
           </br>							
     
           </br>
           
         
                       
          
           
             <label for="billingFirstName" class="col-md-2 control-label">informaçoes <small class="text-default">*</small></label>
           <div class="col-md-10">
               <input  type="text" required name="informacoes" width="150"class="form-control" id="billingNome" >
           </div>
           
           </br>
    
   
     </br>
                         
                            
      </br>
                                <div class="col-md-2 control-label" class="col-md-2 control-label">
									<label for="billingFirstName">Foto:</label>
                                        <div class="col-md-10">
									<input type="file" id="exampleInputFile" name="foto">
								
								</div>
                <div align="right">
                          <input class="btn btn-default" type="reset" name="resete" value="Limpar">  
                          <input class="btn btn-default" type="submit" name="enviar" value="Cadastrar"> 
                           
                          </div>
        </form> 
       
                       
        
        
        
						</fieldset>
                        </li>
                      					
                                        
                                         <?php
										 
						 
											  

if (isset($_POST['enviar'])) { 
$cfornecedor=$_POST["cfornecedor"];
$tipo=$_POST["tipo"];
$preco=$_POST["preco"];
$quantidade=$_POST["quantidade"];
$nome=$_POST["nome"];
$estabelecimento=$_POST["estabelecimento"];
$descricao=$_POST["descricao"];
$info=$_POST["informacoes"];
$status=$_POST["status"];
$dicas=$_POST["dicasdoproduto"];


if ($quantidade !=is_numeric($quantidade)){
	echo '<html><div class="alert alert-danger" role="alert">
								<strong>Opss!</strong> o campo Quantidade so pode ser composto por numeros!.
							</div></html>' . mysql_error($conn);
							
}else{
	
	if ($cfornecedor != is_numeric($cfornecedor)){
		echo '<html><div class="alert alert-danger" role="alert">
								<strong>Opss!</strong> o codigo do fornecedor so pode ser coposto por numeros!.
							</div></html>' . mysql_error($conn);
	}else {
	
	
$estencao = strtolower(substr($_FILES['foto']['name'], -4)); //defique qual e a extençao da imagen
$n_nome = md5(time()).$estencao; // define o nome nela criptografado
$diretorio = "C:\wamp\www\BF 1.1\images";//define para onde ira a imagen 
move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$n_nome);//move a imagen para o diretorio desejado 

//codproduto, codfornecedor, pnome, preco, quantidade, descricao, foto, estabelecimento, pstatus, informacoes, tipo
		$sql = "insert into produtos(codfornecedor,pnome, preco, quantidade, foto,descricao,estabelecimento,pstatus,informacoes,tipo)
values ('$cfornecedor','$nome','$preco','$quantidade','$n_nome','$descricao','$estabelecimento','$status','$info','$tipo');";




if (mysql_query($sql, $conn)) {
   echo '<html><div class="alert alert-success" role="alert">
								<strong>Parabéns!</strong> Cadastro efetuado com sucesso!.
							</div></html>';
} else {
  echo '<html><div class="alert alert-danger" role="alert">
								<strong>Oh que chato!</strong> Cadastro não efetuado, tente novamente!.
							</div></html>' . mysql_error($conn);

		
		}


	 
	
	
	

	
	}//fechamento da verificaçao da quantidade
	
}//fechamento da verificaçao do codigo do fornecedor

		
} 

  



mysql_close($conn);
?>

                
                   
                      
                    </div>
                   
			<!-- main-container end -->  <!-- page-wrapper end -->
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
