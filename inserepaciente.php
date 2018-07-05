<html>
	<head>
		<title>..::SIS CONSULTA.::</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
<?php

	include ("conexao/conexao.php");
	
	$nome 	   = $_POST['nome'];
	$cpf 	   = $_POST['cpf'];
	$telf 	   = $_POST['telf'];
	$telc      = $_POST['telc'];
	
	$sqlproc = "SELECT * FROM tblpaciente WHERE cpf = '$cpf'";
	$verifica_cpf = mysqli_query($con,$sqlproc);
	
	if(mysqli_num_rows($verifica_cpf) >= 1){
		echo "<h1>CPF já cadastrado<br>Falha no Cadastro!</h1>";
	} else {
		$sql = "insert into tblpaciente (nome,cpf,telf,telc) values('$nome','$cpf','$telf','$telc')";
		$qry = mysqli_query ($con,$sql);
		echo "<a class = 'btn btn-danger' href='menuu.php'>Menu Principal</a>";
	}
	?>
	</body>
	</html>