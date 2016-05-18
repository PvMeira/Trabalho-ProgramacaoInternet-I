<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Cadastro Livro</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Biblioteca navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">Biblioteca</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="principal.php">Início</a></li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Livro</a></li>
            <li><a href="#">Funcionario</a></li>
            <li><a href="#">Cliente</a></li>
          </ul>
        </li>
    <li><a href="#">Emprestimos</a></li>
   </ul>
  </div>
 </div>
</nav>

  <div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Cadastro Livro</h2>
  </div>
  </div>
  
  
  <div class="container">

 
<form>
  <fieldset>
  <legend>Dados do Livro</legend>

  <div class="form-group">
    <label for="nome">Nome</label>
   <input type="text" class="form-control" id="nome" name="nome" autofocus>
  </div>
  
  <div class="form-group">
    <label for="Autor">Autor</label>
   <input type="text" class="form-control" id="Autor" name="Autor" >
  </div>

    <div class="form-group">
    <label for="Paginas">Paginas</label>
   <input type="text" class="form-control" id="Paginas" name="Paginas" >
  </div>


  <div class="form-group">
    <label for="Estoque">Estoque</label>
   <input type="text" class="form-control" id="Estoque" name="Estoque" 
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