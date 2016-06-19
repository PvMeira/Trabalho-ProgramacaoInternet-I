<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Deletar Funcionario</title>
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
	$result=mysql_query("Select * from employee where id='$code'") or die ("<div class='alert alert-danger' role='alert'>Não é possível retornar dados do funcionário!</div>");
		print("<h3>Deletando o Cliente:</h3><p>");
		print("<table class='display table' width='90%'>");
		print("<tr><td><b>Código</td>");
		print("<td><b>Nome</td>");
		print("<td><b>cpf</td>");
		print("<td><b>mail</td>");
		print("<td><b>Endereço</td>");
	$linha=mysql_fetch_array($result);
	$id=$linha["id"];
	$name=$linha["name"];
	$phone=$linha["phone"];
	$mail=$linha["mail"];
	$cpf = $linha["cpf"];
	$address = $linha["address"];
	
	
			print("<tr><td>$id</td>");
			print("<td>$name</td>");
			print("<td>$cpf</td>");
			print("<td>$mail</td>");
			print("<td>$address</td>");
			print("</table></center>");
?>
<form action="confirmaDeletarFuncionario.php" method="get">
<input type="hidden" name="cod" value="<?php print($id)?>">
<br><button type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-trash"></span>
				Deletar
			</button>
</form>
<p><a href="../visualizacao/visualizacaoFuncionario.php"><button type='button'  class='btn'>Voltar
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span> </button></a>
	  </div>
   

    </div> <!-- /container -->
</body>
</html>