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

      <div>

<?php
	$code=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysql_query("Select * from book where id='$code'") or die ("Não é possível retornar dados do livro!");
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
<br><input type="submit" value="Deletar Dados">
</form>
<p><a href="../visualizacao/visualizacaoLivro.php">Cancelar e voltar</a>
	  </div>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.Todos os direitos reservados ao time de desenvolvimento</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>