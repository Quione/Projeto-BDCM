<html>
	<head>
		<title>..::SIS CONSULTA.::</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	<?php include ('menuu.php')?>
	<br>
	<div class="container-fluid">
	<h3>Pesquisa de Pacientes</h3>
	<form action="listarpaciente.php"  method="POST">
	<div class="row">
		<div class="col-sm-12">
			  <div class="form-group">
				<br>
				<label>Paciente</label>
				<input type="text" class="form-control" 
				name="paciente" placeholder="Digite o nome do Paciente">
			  </div>
		</div>
	</div>
		<button type="submit" class="btn btn-danger">Pesquisar</button>