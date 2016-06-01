<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Index</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Portal biblioteca</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Principal</a></li>
            <li><a href="cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="#">Realizar Aluguel</a></li>           
          </ul>
        </nav>
      </div>
 
<form action="../trafegoDados/processaCadastroLivro.php" method="get">
  <fieldset>
  <legend>Dados do Livro</legend>

  <div class="form-group">
    <label for="name">Nome</label>
   <input type="text" class="form-control" id="name" name="name" autofocus>
  </div>
  
 <div class="form-group">
    <label for="Writer">Autor</label>
   <input type="text" class="form-control" id="Writer" name="Writer" >
  </div>

    <div class="form-group">
    <label for="pages">Paginas</label>
   <input type="text" class="form-control" id="pages" name="pages" >
  </div>


  <div class="form-group">
    <label for="stash">Estoque</label>
   <input type="text" class="form-control" id="stash" name="stash" 
       >
  </div>

 
</fieldset>
  <button type="submit" class="btn btn-primary">
  <span class="glyphicon glyphicon-floppy-saved"></span>
  Confirmar Cadastro
</button>
</form>
</div>
  
</div>
  
</body>
</html>