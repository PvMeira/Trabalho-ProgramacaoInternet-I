<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Deletar Livro</title>
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
	$code=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("<div class='alert alert-danger' role='alert'>Não foi possivel realizar conexão com o Banco de Dados</div>");
	$result=mysql_query("Select * from book where id='$code'") or die ("<div class='alert alert-danger' role='alert'>Não é possível retornar dados do livro!</div>");
		print("<h3>Deletando o livro:</h3><p>");
		print("<table class='display table' width='90%'>");
		print("<tr><td><b>Código</td>");
		print("<td><b>Nome</td>");
		print("<td><b>Escritor</td>");
		print("<td><b>Estoque</td>");
	$linha=mysql_fetch_array($result);
	$id=$linha["id"];
	$name=$linha["name"];
	$writer=$linha["writer"];
	$pages=$linha["pages"];
	$stash = $linha["stash"];
	
			print("<tr><td >$id</td>");
			print("<td>$name</td>");
			print("<td>$writer</td>");
			print("<td>$stash</td>");
			print("</table></center>");
?>
<form action="confirmaDeletarLivro.php" method="get">
<input type="hidden" name="cod" value="<?php print($id)?>">
<br><button type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-trash"></span>
				Deletar
			</button>
</form>
<p><a href="../visualizacao/visualizacaoLivro.php"><button type='button'  class='btn'>Voltar
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span> </button></a>
	  </div>

    </div> <!-- /container -->
</body>
</html>