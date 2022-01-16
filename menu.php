 <!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<!-- ================ -->
					<header>
            <div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2  col-sm-6">

					<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
								

									<li class="facebook"><a target="_blank" href="https://www.facebook.com/buyfoodbr/"><i class="fa fa-facebook"></i></a></li>
								
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
										
											
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/buyfoodbr/"><i class="fa fa-facebook"></i></a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<!-- header-top-first end -->

						</div>
                    
                                                        
 <?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);


include "conexao.php";

//inicia uma nova sesao.
@session_start();
?>
    
                            <div class="col-xs-10 col-sm-6">

								<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second"  class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class="header-top-dropdown">
									
									<div class="btn-group dropdown" id="login">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form class="login-form" method="post" action="" enctype="multipart/form-data" >
													<div class="form-group has-feedback">
														<label class="control-label">Usuario</label>
														<input type="text" class="form-control" required placeholder="" name="usuario" id="usuario">
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Senha</label>
														<input type="password" class="form-control" required placeholder="" name="senha" id="senha">
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
                                                 <input type="submit"   class="btn btn-group btn-dark btn-sm" value="Entrar"  />
								                 <input type="hidden" name="entrar" value="login">
													<span>ou</span>
													<a href="Cadastre-se.php"> Cadastre-se</a>
													<ul>
														<li><a href="esqueci.php">Esqueceu sua senha?</a></li>
													</ul>
                                             
										      
												</form>
   
   
		        
                                                
											</li>
										</ul>
									</div>
                                    
                             
				

							
							
									
									<div class="btn-group dropdown" id="login">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Cadastre-se</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
									
												
													<a href="Cadastre-se.php"> Cadastre-se</a>
													
                                             
										      
												
   
   
		        
                                                
									
										</ul>
									</div>	 


                               
                                     
         
<?php


  if(isset($_POST['entrar']) && $_POST['entrar'] == "login"){
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				
				
				//echo 'caiu no if ';
				
	//linpar as variaveis antes de envialas para o sistema

	
	//aki sera feito o escape das variveis
	
	$tusuario = $_POST['usuario'];
	$tsenha = $_POST['senha'];
	
	$escaped_very = mysql_escape_string($tusuario);
	$escaped_veryper = mysql_escape_string($tsenha);
	

			
					// aquei realiza o select se ele for cliente 
					//se nao estiverem  vazios realiza a verificaçao no banco de dados
             $query = "SELECT  codcliente,usuario,senha,nivel,nome,sobrenome,telefone,celular,email,endereco,cidade,info,cpf  FROM clientes  WHERE usuario = '$escaped_very'  AND senha = '$escaped_veryper'  ;";
			
					$result = mysql_query($query);
					$busca = mysql_num_rows($result);
					$linha = mysql_fetch_assoc($result);
					
					
                  
					if($busca > 0){ //verifica-se  se o select foi maior que uma linha , se foi os dados deles sao aramzaenados dentro  de uma  variavel para cerem ultilizados mais para frente 
					
						$_SESSION['codcliente'] = $linha['codcliente'];
						$_SESSION['nome']       = $linha['nome'];
						$_SESSION['usuario']    = $linha['usuario'];
						$_SESSION['nivel']      = $linha['nivel'];
						$_SESSION['sobrenome']  = $linha['sobrenome'];
						$_SESSION['telefone']   = $linha['telefone'];
						$_SESSION['celular']    = $linha['celular'];
		                $_SESSION['email']      = $linha['email'];
						$_SESSION['endereco']   = $linha['endereco'];
						$_SESSION['cidade']     = $linha['cidade'];
					    $_SESSION['info']       = $linha['info'];
                        $_SESSION['cpf']        = $linha['cpf'];
			/*$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];*/
					
					
						}else{
					 
							}
						
					// realiza o selct na tabela  fornecedores 
					
					$comsulta = "SELECT codfornecedor, nivel, usuario, senha, nome, sobrenome, telefone, celular, email, cnpj, endereco, cidade, info, tipo FROM fornecedores  where  usuario='$escaped_very' AND  senha = '$escaped_veryper';";
											
					$rest = mysql_query($comsulta);
					$busca = mysql_num_rows($rest);
					$linhas = mysql_fetch_assoc($rest);	
					if($busca > 0){
						
						$_SESSION['codfornecedor'] =   $linhas['codfornecedor'];
						$_SESSION['nome']          =   $linhas['nome'];
						$_SESSION['usuario']       =   $linhas['usuario'];
						$_SESSION['nivel']         =   $linhas['nivel'];
						$_SESSION['sobrenome']     =   $linhas['sobrenome'];
						$_SESSION['telefone']      =   $linhas['telefone'];
						$_SESSION['celular']       =   $linhas['celular'];
		                $_SESSION['email']         =   $linhas['email'];
						$_SESSION['endereco']      =   $linhas['endereco'];
						$_SESSION['cidade']        =   $linhas['cidade'];
					    $_SESSION['info']          =   $linhas['info'];
                        $_SESSION['cnpj']          =   $linhas['cnpj'];
		
			
		
					};
											
						if ($_SESSION['nivel']=='3'){
						header('Location:index.php');
                        };
                        if ($_SESSION['nivel']=='2'){
						header('Location:admpedidos.php');
                        };
                        if ($_SESSION['nivel']=='1'){
						header('Location:admpedidos.php');
                        };

						//exit;
					 // se o  numero de linha for menor que zero quer dizer que o usuario nao esta cadastrado ,ou errou na hora de colocar a senha
					      
					                       	
					
				}
			
echo ''
?>


									<a href="shop-cart.php"><div class="btn-group dropdown">
										 <button type="button"  class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Carrinho</button>
										
														
									</div></a>

								</div>
								<!--  header top dropdowns end -->

							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>
	

			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo">
									<a href="index.php"><img src="images/logola.png" width="75" height="75" ></a>
      </div>

								<!-- name-and-slogan -->
								<div class="site-slogan">
									Delivery Online
								</div>

							</div>
							<!-- header-left end -->

						</div>
						<div class="col-md-9">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<ul class="nav navbar-nav navbar-right">
													<li>
														<a href="index.php" class="dropdown-toggle" >Home</a>
														
													</li>
													<!-- mega-menu start -->
													<li>
														<a href="page-about.php" class="dropdown-toggle" >Sobre</a>
														
													</li>
													<!-- mega-menu end -->
                                                    
                                                    	<!-- mega-menu start -->
													<li>
														<a href="page-team.php" class="dropdown-toggle" >Quem somos</a>
														
													</li>
													<!-- mega-menu end -->
                                                    
                                                    <!-- mega-menu start -->
													<li>
														<a href="page-contact.php " class="dropdown-toggle" >Contato</a>
														
													</li>
													<!-- mega-menu end -->
													
												
													
													</li>
													<li class="dropdown">
														<?php echo' <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pedir</a>
														<ul class="dropdown-menu">
															<li><a href="estabelecimentos.php?id=1">Areado-MG</a></li>
                                                            
															<li><a href="estabelecimentos.php?id=2">Alterosa-MG</a></li>
                                                            
															<li><a href="estabelecimentos.php?id=3">Alfenas-MG</a></li>
                                                            
															<li><a href="estabelecimentos.php?id=4">Mococa-SP</a></li>															
															
															</ul>'; ?>
                                                            <?php 
										
										
															?>
													</li>
													<li>
														<a href="blog.php" class="dropdown-toggle" >Blog</a>
														
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>
			<!-- header end -->