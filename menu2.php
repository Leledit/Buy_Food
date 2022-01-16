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

									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Carrinho </button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
											<li>
                                            
                                            
                                            <?php 
											
											
$comparacao = '' ;
if(count($_SESSION['shop-cart']) == 0){
		 echo'<html><div class="alert alert-danger" role="alert">
								<strong>opss! </strong> seu carrinho esta vazio!.
							</div></html>';
	$comparacao = 1 ;
	}

else {
if ($comparacao <> 1 ){	
echo'	
<table class="table table-hover">
													<thead>
														<tr>
															<th class="quantity">Quantidade</th>
															<th class="product">Produto</th>
															<th class="amount">Total</th>
														</tr>
													</thead>
									<tbody>		';}
foreach(
$_SESSION['shop-cart'] as $id => $qtd){
$sql   = "SELECT * FROM produtos  where codproduto='$id';";
$qr    = mysql_query($sql) or die(mysql_error());
$ln    = mysql_fetch_assoc($qr);
$cnome  = $ln['pnome'];
$preco =($ln['preco']);
$sub   = ($ln['preco'] * $qtd);
$total += ($ln['preco'] * $qtd);
$cfornecedor =$in['codfornecedor'];

$result=mysql_query($sql);
$row = mysql_fetch_array($result);
		
 $quantidade =	count($_SESSION['shop-cart']);			  
   echo '
										
										
										
												<tr>
												  <td class="quantity">'.$qtd.'</td>
													<td class="product"><a href="produto.php?acao=mostrar&codproduto='.$row["codproduto"].'">'.$cnome.'</a><span class="small">'.$cfornecedor.'</span></td>
													  <td class="amount">'.$preco.'</td>
												         </tr>
														
														
														
													   ';
										

};
 echo'<tr>
															<td class="total-quantity" colspan="2">Total de Itens: '.$quantidade.'</td>
															<td class="total-amount">Total: '.$total.' </td>														</tr>
													</tbody>';};
?>

											
												</table>
												<div class="panel-body text-right">	
												<a href="shop-cart.php" class="btn btn-group btn-default btn-sm">Veja seu Carrinho</a>
                                                <?php
												//se o carrinho estiver vazio nao exibe este botao
												if ($comparacao <> 1 ){
												echo'<a href="shop-checkout.php" class="btn btn-group btn-default btn-sm">Finalizar Comprar</a>';
												
												}
												?>
												</div>
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
									<a href="index.php"><img src="images/logola.png" alt="iDea" name="logo" width="75" height="75" id="logo"></a>
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