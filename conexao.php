<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

$conn = mysql_connect($servidor, $usuario, $senha);
if (!$conn) {
    die("Falha na conex�o: " . mysql_connect_error());
}
mysql_select_db('buyfood',$conn);

?>