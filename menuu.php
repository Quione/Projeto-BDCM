<html>
	<head>
		<title>..::SIS CONSULTA.::</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<style>
			.body {height:100%;}
			
			.container {
			min-height:85.6%;
			position:relative;
			width:700px;
					}
			
			.footer {
			position:relative;
			bottom:0;
			width:90%;
			}
			.container {overflow:hidden;}
            .container {width:100px;}
			
			
		</style>
	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="menuu.php"><img src="img/medicine.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="pesqnome.php">Pesquisar</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadespecialidade.php"><img src="img/lifeline-in-a-heart-outline.png">  Especialidade</a>
          <a class="dropdown-item" href="cadmedico.php"><img src="img/medical-stethoscope-variant.png">  Médico</a>
          <a class="dropdown-item" href="cadconsulta.php"><img src="img/doctor.png">  Consulta</a>
		   <a class="dropdown-item" href="cadpaciente.php"><img src="img/cough.png">  Paciente</a>
        </div>
      </li>
    </ul>
  </div>
  
</nav>
			<!--<div class="container">
			
			
			</div>
			<div class="container-fluid">
				<footer class="row bg-secondary">
					<div class="col-md-2 text-center "><a href="menuu.php" class="text-dark">Home</a></div>
					<div class="col-md-8 text-center text-dark">&copy; Copyright 2018</div>
					
				</footer>
			</div>-->
			
	</body>
</html>