<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Busca de Livro</title>
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
	  <br><br>
	  
<?php
$search=$_GET["search"];
require("../conecta.inc");
			conecta_bd() or die ("Não é possível conectar-se ao servidor.");
			$resultado=mysql_query("Select * from book WHERE  name LIKE'$search'") or die ("Não é possível consultar busca de livro.");

print("<center><h2>Mostrando Busca</h2>");
				print("<table class='display table' width='90%'>");
				print("<tr><td><b>Código</td>");
				print("<td><b>Nome</td>");
				print("<td><b>Autor</td>");
				print("<td><b>Paginas</td>");
				print("<td><b>Estoque</td>");
while ($linha=mysql_fetch_array($resultado)) { 
		$id=$linha["id"];
		$name=$linha["name"];
		$writer=$linha["writer"];
		$pages=$linha["pages"];
		$stash=$linha["stash"];
			  print("<tr><td>$id</td>");
			  print("<td>$name</td>");
			  print("<td>$writer</td>");
			  print("<td>$pages</td>");
			   print("<td>$stash</td>");
			  print("</table></center>");
}
?>
		<p><a href="../visualizacao/visualizacaoLivro.php"><button type='button'  class='btn'>Voltar
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span> </button></a>
 </div>

  </div>   

    </div> <!-- /container -->
</body>
</html>