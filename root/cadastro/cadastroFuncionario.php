<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Cadastro Funcionario</title>
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
    <li><a href="#">Cadastros</a></li>
    <li><a href="#">Emprestimos</a></li>
    
   </ul>
  </div>
 </div>
</nav>  
<br>
  <div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Cadastro Funcionario</h2>
  </div><!-- fim .panel-heading -->
  
  
  <div class="container">

 
<form>
  <fieldset>
  <legend>Dados pessoais</legend>

  <div class="form-group">
    <label for="nome">Nome completo</label>
   <input type="text" class="form-control" id="telefone" name="telefone" autofocus>
  </div>
  
  <div class="form-group">
    <label for="telefone">Telefone</label>
   <input type="text" class="form-control" id="nome" name="nome" >
  </div>

  <div class="form-group">
  <label for="email">Email</label>

  <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="email" class="form-control"
             id="email" name="email">
  </div>
</div>


  <div class="form-group">
    <label for="cpf">CPF</label>
   <input type="text" class="form-control" id="cpf" name="cpf" 
       placeholder="000.000.000-00">
  </div>

 
</fieldset>

  <fieldset>
  <legend>Dados Gerais</legend>

  <div class="form-group">
    <label for="bairro">Bairro :</label>
    <input type="text" class="form-control" 
           id="bairro" name="bairro">
  </div>
  <div class="form-group">
    <label for="rua">Rua :</label>
    <input type="text" class="form-control" 
           id="rua" name="rua">
  </div>
   <div class="form-group">
    <label for="num">Casa/Apartamento :</label>
    <input type="text" class="form-control" 
           id="num" name="num">
  </div>
   <div class="form-group">
    <label for="complemento">Complemento :</label>
    <input type="text" class="form-control" 
           id="complemento" name="complemento">
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