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
				<h3>Cadastro para Consulta</h3>
			<form action="insereconsulta.php"  method="POST">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<br>
							<label>Paciente</label>
							<input type="text" class="form-control" name="paciente" placeholder="Digite o nome do Paciente">
						</div>
					</div>
				</div>
	
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Data da Consulta</label>
							<input type="date" class="form-control" name="dtcon" placeholder="Data da Consulta">
						</div>
					</div>
					<div class="col-sm-4"> 
						<div class="form-group">
							<label>Hora da Consulta</label>
						<input type="time" class="form-control" name="hora" placeholder="Hora da Consulta">
						</div>
					</div>
	
					<div class="col-sm-4">
						<div class="form-group">
							<label>Especialidade</label> | <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Incluir</button>
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
  
					<div class="col-sm-4">
						<div class="form-group">
							<label>Tipo da Consulta</label>
							<input type="text" class="form-control" name="forma" placeholder="Tipo da Consulta">
						</div>
					</div>  
	  
					<div class="col-sm-4">
						<div class="form-group">
							<label>Valor da Consulta</label>
							<input type="text" class="form-control" name="valor" placeholder="R$">
						</div>
					</div>  
	  
					<div class="col-sm-4">
						<div class="form-group">
							<label>Unidade</label>
							<input type="text" class="form-control" name="unidade" placeholder="Unidade">
						</div>
					</div>
				</div>
  
  				<button type="submit" class="btn btn-danger">Cadastrar</button>
			</form>
			</div>
			<!--modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Cadastrar Especialidade</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
			<div class="modal-body">
        		<form action="insereespecialidade.php" method="POST">
					<div class="container mt-4">
						<div class="row">
							<div class="col-md-12 col-12">
								<div class="form-group">
									<label>Especialidade:</label>
									<input type="text" class="form-control" name="especial" placeholder="Digite a especialidade a ser cadastrada">
								</div>
							</div>
								<div class="col-md-12 col-12 text-center">
									<button type="submit" class="btn btn-danger">Cadrastar</button>
								</div>
						</div>
					</div>
				</form>
      		</div>
      			<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      			</div>
    		</div>
  			</div>
	        </div>
	</body>
</html>