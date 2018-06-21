<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdcm";
$charset = "utf-8";

$con = mysqli_connect("$servidor","$usuario","$senha","$bd");

if (!$con) {
	echo "<h1>Conexão não ESTABELECIDA!!</h1>";
}
//define o padrao de acentuação para UTF-8
mysqli_set_charset($con,$charset);
//fecha a conexão
mysqli_close($con);