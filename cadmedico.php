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
		<h3>Cadastro para Médicos</h3>
	<form action="inseremedico.php"  method="POST">
	<div class="row">
		<div class="col-sm-6">
			  <div class="form-group">
				<label>Médico</label>
				<input type="text" class="form-control" 
				name="medico" placeholder="Digite o nome do Médico">
			  </div>
		</div>
	
		<div class="col-sm-6">
			  <div class="form-group">
    <label>Especialidade</label>
    <select class="form-control" name="especialidade">
      <?php 
	  include ("conexao/conexao.php");
	  $sql = "select * from tblespecialidades order by especial";
	  $qry = mysqli_query($con,$sql);
	  while ($linha = mysqli_fetch_array($qry)){
		?>
	  <option value="<?php echo $linha['idespecial'];?>">
	  <?php echo $linha['especial']; ?>
	  </option>
	  <?php
		}
	  ?>
  
    </select>
  </div>
	</div>
	</div>
	
  <button type="submit" class="btn btn-danger">Cadastrar</button>
</form>

</div>
	</body>
</html>