<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Processamento de dados</title>
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
$cod=$_GET['cod'];
$cod_book=$_GET['cod_book'];
$cod_client=$_GET['cod_client'];

	require("../conecta.inc");
	conecta_bd() or die ("<div class='alert alert-danger' role='alert'>Não foi possivel realizar conexão com o Banco de Dados</div>");
	print("Realizando o Devolução:<p>");
		mysql_query("UPDATE rent SET avaliable='Devolvido' where id='$cod'") 
			or die ("<div class='alert alert-danger' role='alert'>Não é possível realizar a devolução!</div>");
			mysql_query("UPDATE book SET stash=stash+1 where id='$cod_book'") 
				or die ("<div class='alert alert-danger' role='alert'>Não é possível alterar o estoque !</div>");
					mysql_query("UPDATE client SET rentCount=rentCount-1 where id='$cod_client'") 
						or die ("<div class='alert alert-danger' role='alert'>Não é possível alterar o numero de alugueis do cliente !</div>");
			print("<div class='alert alert-success' role='alert'>Livro Devolvido com sucesso</div>");
	
?>
 <p><a href="../cadastro/devolucao.php"><button type='button'  class='btn'>Voltar
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span> </button></a>
</body>
</html>