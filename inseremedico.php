<html>
	<head>
		<title>..::SIS CONSULTA.::</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
<?php

	include ("conexao/conexao.php");
	
	$medico 	   = $_POST['medico'];
	$especialidade = $_POST['especialidade'];
	
	$sql = "insert into tblmedico (medico,especialidade) values('$medico','$especialidade')";
	$qry = mysqli_query ($con,$sql);
	
	if(!$qry) {
		echo "<h1>Não Cadastrou</h1>";
	} else {
		echo "<a class = 'btn btn-danger' href='menuu.php'> Menu Principal </a>";
		mysqli_close($con);
	}
	?>
	</body>
	</html>