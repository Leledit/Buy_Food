<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

$conn = mysql_connect($servidor, $usuario, $senha);
if (!$conn) {
    die("Falha na conexão: " . mysql_connect_error());
}
mysql_select_db('buyfood',$conn);

?>