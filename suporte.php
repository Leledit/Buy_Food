<?php
include "conexao.php";


if($_GET['acao'] == 'aceito'){
	
$codigo = $_GET['codvenda'];

	$sql= "update vendas set  vstatus = 'aceito' where codvenda = '$codigo'";
	echo $codigo ;
	
	mysql_query($sql, $conn);
	header('Location: admpedidos.php'); 
	};
if($_GET['acao'] == 'processo'){
	
$codigo = $_GET['codvenda'];
	
$sql = "update vendas set  vstatus = 'processo' where codvenda = '$codigo' ;";	
	mysql_query($sql, $conn);
	header('Location: admpedidos.php'); 
	};


if($_GET['acao'] == 'delivery'){
	
$codigo = $_GET['codvenda'];
	
	$sql  = "update vendas set  vstatus = 'delivery' where codvenda = '$codigo' ;";
	mysql_query($sql, $conn);
	header('Location: admpedidos.php'); 
	};

if ($_GET['acao'] == 'entregue'){
	
$codigo = $_GET['codvenda'];
	
	$sql  = "update vendas set  vstatus = 'entregue' where codvenda = '$codigo' ;";
	mysql_query($sql, $conn);
	header('Location: meusdados.php'); 
	}
	if ($_GET['acao'] == 'recusar'){
$codigo = $_GET['codvenda'];		
		$sql  = "update vendas set  vstatus = 'recusado' where codvenda = '$codigo' ;";
		mysql_query($sql, $conn);
	header('Location: admpedidos.php'); 
		}
//programaçao para definir que o estabelecimento esta aberto	
	if ($_GET['acao'] == 'aberto'){
		echo 'foi o  aberto';
      $codigo =$_GET['codfornecedor']; 	
      //echo $codigo;
	 $sql  = "update fornecedores set horario = 'aberto' where codfornecedor = $codigo;";
	 mysql_query($sql, $conn);
	 echo 'deu certo';
	 header('Location: meusdados.php'); 
		}
		
//programaçao para definir que o estabelecimento esta fechado		
	if ($_GET['acao'] == 'fechado'){
			echo 'foi o fechado ';
			$codigo =$_GET['codfornecedor'];
		//	echo $codigo;
	$sql  =	 "update fornecedores set horario = 'fechado' where codfornecedor = $codigo;";
    mysql_query($sql, $conn);
	echo 'deu certo';
	
	header('Location: meusdados.php'); 
		}
		
		
?>