<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Visualização Livro</title>
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
            <li><a href="visualizacaoLivro.php">Visualização de Livro</a></li>
            <li><a href="visualizacaoCliente.php">Visualização de Clientes</a></li>
            <li><a href="visualizacaoFuncionario.php">Visualização de Funcionarios</a></li>
            <li><a href="../cadastro/aluguel.php">Realizar Aluguel</a></li>
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>       
          </ul>
        </nav>
      </div>

      <div>
	   <br><br>
	  <a href="../cadastro/cadastroLivro.php"><button type="button"  class="btn">Novo Cadastro</button></a>
	  <?php
require("../conecta.inc");
conecta_bd() or die ("Não é possível conectar-se ao servidor.");
$resultado=mysql_query("Select * from book order by id") or die ("Não é possível consultar clientes.");
		print("<center><h2>Mostrando os livros</h2>");
		print("<table class='display table' width='90%'>");
		print("<tr><td><b>Código</td>");
		print("<td><b>Nome</td>");
		print("<td><b>Escritor</td>");
		print("<td><b>Estoque</td>");
		print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
			while ($linha=mysql_fetch_array($resultado)) {
															
			$id=$linha["id"];
			$name=$linha["name"];
			$writer=$linha["writer"];
			$stash=$linha["stash"];
			print("<tr><td align='center'>$id</td>");
			print("<td>$name</td>");
			print("<td>$writer</td>");
			print("<td>$stash</td>");
			print("<td><a href='../trafegoDados/deletaLivro.php?cod=$id'>Deletar</a></td>");
			print("<td><a href='../trafegoDados/alteraLivro.php?cod=$id'>Alterar</a></td></tr>");   }
			print("</table></center>");
?>
	  </div>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.Todos os direitos reservados ao time de desenvolvimento</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>