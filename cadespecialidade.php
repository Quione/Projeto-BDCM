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
		<h3>Cadastro para Especialidade</h3>
	<form action="insereespecialidade.php"  method="POST">
	<div class="row">
		<div class="col-sm-6">
			  <div class="form-group">
			  <br>
				<label>Especialidade</label>
				<input type="text" class="form-control" 
				name="especial" placeholder="Digite a Especialidade">
			  </div>
		</div>
	</div>
	
  <button type="submit" class="btn btn-danger">Cadastrar</button>
</form>
</form>
</div>
	</body>
</html>