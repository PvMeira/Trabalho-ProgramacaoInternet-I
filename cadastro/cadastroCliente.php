<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Cadastro de um Cliente</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Portal biblioteca</h3>
        <nav class="navbar navbar-default">	
          <ul class="nav nav-justified">
			<li class="active"><a href="../index.php">Principal</a></li>
            <li><a href="../visualizacao/visualizacaoLivro.php">Visualização de Livro</a></li>
            <li><a href="../visualizacao/visualizacaoCliente.php">Visualização de Clientes</a></li>
            <li><a href="../visualizacao/visualizacaoFuncionario.php">Visualização de Funcionarios</a></li>
			<li><a href="devolucao.php">Realizar Devolução</a></li>     
          </ul>
        </nav>
      </div>

      <div>

 
<form action="../trafegoDados/processaCadastroCliente.php" method="get">
  <fieldset>
  <legend>Dados pessoais</legend>

  <div class="form-group">
    <label for="name">Nome completo</label>
   <input type="text" class="form-control" id="name" name="name" autofocus placeholder="Fulano">
  </div>
  
  <div class="form-group">
    <label for="phone">Telefone</label>
   <input type="text" class="form-control" id="phone" name="phone" placeholder="00.0000.0000" >
  </div>

	<div class="form-group">
  <label for="mail">Email</label>

			<div class="input-group">
				<span class="input-group-addon">@</span>
				<input type="mail" class="form-control" id="mail" name="mail">
			</div>
    </div>


  <div class="form-group">
    <label for="cpf">CPF</label>
   <input type="text" class="form-control" id="cpf" name="cpf" 
       placeholder="000.000.000-00">
  </div>
  
  <div class="form-group">
    <label for="address">Endereço</label>
   <input type="text" class="form-control" id="address" name="address" placeholder="Rua Fulano de Tal Nª222" >
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