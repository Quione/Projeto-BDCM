<html>
	<head>
		<title>..::SIS CONSULTA.::</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	<?php include('menuu.php'); ?>
	<br>
	<div class="container-fluid">
	<h3>Cadastro para Paciente</h3>
	<form action="inserepaciente.php"  method="POST">
	
	<div class="row">
		<div class="col-sm-6">
			  <div class="form-group">
				<label>Nome do paciente</label>
				<input type="text" class="form-control" 
				name="nome" placeholder="Digite o nome do Paciente">
			  </div>
		</div>
	
	
		<div class="col-sm-6">
				<div class="form-group">
				<label>CPF</label>
				<input type="number" class="form-control" 
				name="cpf" placeholder="CPF">
			  </div>
		</div>
		</div>
		<div class="row">
		 <div class="col-sm-6"> 
		  <div class="form-group">
			<label>Telefone Fixo</label>
			<input type="number" class="form-control" 
			name="telf" placeholder="Telefone Fixo">
		  </div>
		  </div>
		  
		  <div class="col-sm-6"> 
		  <div class="form-group">
			<label>Telefone Celular</label>
			<input type="number" class="form-control" 
			name="telc" placeholder="Telefone Celular">
		  </div>
		 </div>
		 
	</div>	 
		  <button type="submit" class="btn btn-danger">Cadastrar</button>
</form>
</form>

	</body>
</html>