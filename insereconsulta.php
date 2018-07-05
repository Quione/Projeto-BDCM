<html>
	<head>
		<title>..::SIS CONSULTA.::</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
<?php 
include ('conexao/conexao.php');
$paciente 	= $_POST['paciente'];
$dtcon 		= $_POST['dtcon'];
$hora 		= $_POST['hora'];
$especial 	= $_POST['especial'];
$forma 		= $_POST['forma'];
$valor 		= $_POST['valor'];
$unidade 	= $_POST['unidade'];

	$sql = "insert into tblconsultas (paciente,dtcon,hora,especial,forma,valor,unidade)
	values('$paciente','$dtcon','$hora','$especial','$forma','$valor','$unidade')";
	
	$qry = mysqli_query($con,$sql);
	
	if(!$qry) {
		echo "<h1>Não Cadastrou</h1>";
	} else {
		echo "<a class = 'btn btn-danger' href='menuu.php'> Menu Principal </a>";
		mysqli_close($con);
	}
	?>
	</body>
	</html>