<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Editar Funcionario</title>
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
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>     
          </ul>
        </nav>
      </div>

      <div>
<?php
	$cod=$_GET['id_alter'];
	$name_alter=$_GET['name_alter'];
	$cpf_alter=$_GET['cpf_alter'];
	$mail_alter=$_GET['mail_alter'];
	$address_alter=$_GET['address_alter'];
	
	require("../conecta.inc");
	conecta_bd() or die ("<div class='alert alert-danger' role='alert'>Não foi possivel realizar conexão com o Banco de Dados</div>");
	print("Alteração do Cliente:<p>");
	print("$cod <b>$name_alter</b> <p>");
	mysql_query("update client set name='$name_alter', cpf='$cpf_alter',mail='$mail_alter',address='$address_alter' where id='$cod'") 
	or die ("<div class='alert alert-danger' role='alert'>Não é possível alterar dados do Cliente!</div>");
	print("<div class='alert alert-success' role='alert'>Dados do Cliente alterados com sucesso!</div>");
?>
<p><a href="../visualizacao/visualizacaoCliente.php"><button type='button'  class='btn'>Voltar
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span> </button></a>
 
</body>
</html>