<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CattlePaper</title>
  </head>
  <body>

    <!-- Nav Bar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-danger" p-5 style="z-index:1;">
      <a class="navbar-brand" href="Home.php">
        <img src="https://image.flaticon.com/icons/png/512/29/29343.png" width="30" height="30" alt="">
      </a>
      <a class="navbar-brand" href="Home.php">CattlePaper</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Caderno.php">Cadernos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Caneta.php">Canetas</a>
      </li>
    </ul>
  </nav>


    <!-- Cadastro -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Cadastro de Caderno</h3>
			</div>
			<div class="card-body">
      <form method="post" action="inserir_caderno.php">
					<div class="input-group form-group">
						<input type="text" class="form-control" name = "nome_caderno" placeholder="Nome do Caderno">						
					</div>
					<div class="input-group form-group">
            <input type="text" class="form-control"  name ="tipo_caderno" placeholder="Tipo">
					</div>          
					<div class="input-group form-group">
            <input type="number" class="form-control"  name = "preco" placeholder="Preço">
					</div>
					<div class="form-group">
						<input type="submit" value="Cadastrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>

			</div>
		</div>
	</div>
</div>

  </body>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
