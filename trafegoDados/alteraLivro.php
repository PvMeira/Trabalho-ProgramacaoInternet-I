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
	$cod=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$resultado1=mysql_query("Select * from book where id = '$cod'") or die ("Não é possível retornar dados do Livro!");
	$linha=mysql_fetch_array($resultado1);
	$id=$linha["id"];
	$name=$linha["name"];
	$writer=$linha ["writer"];
	$pages=$linha ["pages"];
	$stash=$linha ["stash"];
?>
<form action="confirmaAlteraracaoLivro.php" method="get">
	<table class='display table' width='90%'>
			<tr><td><b>Código</td>
			<td><b>Autor</td>
			<td><b>Paginas</td>
			<td><b>Estoque</td>
			<td><b>Nome</td>
			<tr><td><input type="hidden" name="id_alter" value="<?php print($id)?>"></td>
			<td><input type="text" name="writer_alter" value="<?php print($writer)?>"></td>
			<td><input type="text" name="pages_alter" value="<?php print($pages)?>"></td>
			<td><input type="text" name="stash_alter" value="<?php print($stash)?>"></td>
			<td><input type="text" name="name_alter" value="<?php print($name)?>"></td>
	</table></center>

			<p><input type="submit" value="Alterar Dados">
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