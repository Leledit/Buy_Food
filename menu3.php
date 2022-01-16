<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<!-- ================ -->
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
                                <?php
                                 $nome = $_SESSION['nome'];
                        $sobrenome = $_SESSION['sobrenome'];
                                ?>
									
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nome,' ', $sobrenome ?> </button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												
													<ul>
														<li><a href="meusdados.php" class="btn btn-gray btn-sm">Meu Perfil</a></li>
													</ul>
												              
                                                    
													<ul>
														<li><a href="esqueci.php" class="btn btn-gray btn-sm">Mudar Senha</a></li>
													</ul>
													                                             
										      				<ul>
														<li><a href="sair.php" class="btn btn-gray btn-sm">SAIR</a></li>
														</ul>
            
											
            
				

                                                
                                                
											</li>
										</ul>
									</div>

								</div>
								<!--  header top dropdowns end -->

							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>
			<!-- header-top end -->

			<!-- header start classes:
				fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
				 dark: dark header version e.g. <header class="header dark clearfix">
			================ -->
			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo">
									<img src="images/logola.png" alt="iDea" name="logo" width="75" height="75" id="logo">
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
												
													<!-- mega-menu start -->
													<li>
														<a href="admpedidos.php" class="dropdown-toggle" >Pedidos</a>
														
													</li>
													<!-- mega-menu end -->
                                                    
                                                    <!-- mega-menu start -->
													<li>
														<a href="page-contact.php " class="dropdown-toggle" >Contato</a>
														
													</li>
													<!-- mega-menu end -->
													
												
													
													</li>

													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tabelas</a>
														<ul class="dropdown-menu">
															<li><a href="admprodutos.php">Produtos</a></li>
                                                            <li><a href="admclientes.php">Clientes</a></li>
                                                            <?php
@session_start();

                        if ($_SESSION['nivel']=='1'){
						echo'<html><li><a href="admfornecedores.php">Fornecedores</a></li></html>';
                        };
                        
?>
                                                            <li><a href="admvendas.php">Vendas</a></li>															
															
															</ul>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar</a>
														<ul class="dropdown-menu">
															<li><a href="cadastrarprodutos.php">Produtos</a></li>
                                                            <?php
@session_start();

                        if ($_SESSION['nivel']=='1'){
						echo'<html>
                                                            <li><a href="cadastrarfornecedores.php">Fornecedores</a></li>
                                                          </li></html>';
                        };
                        
?>													
															
															</ul>
													</li>
                                                    
                                                    
                                                    <li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Editar</a>
														<ul class="dropdown-menu">
															<li><a href="editarprodutos.php">Produtos</a></li>
                                                            <?php
@session_start();

                        if ($_SESSION['nivel']=='1'){
						echo'<html>
                                                            <li><a href="editarclientes.php">Clientes</a></li>
                                                            <li><a href="editarfornecedores.php">Fornecedores</a></li>
                                                           ';
                        };
                        
?>													
															
															</ul>
													</li>
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


            