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
        <nav class="navbar navbar-default">
		
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
require("../conecta.inc");
conecta_bd() or die ("Não é possível conectar-se ao servidor.");
$resultado=mysql_query("Select * from book order by id") or die ("Não é possível consultar clientes.");
print("<center><h2>Mostrando os livros...</h2>");
print("<table border='1' bordercolor='red'>");
print("<tr><td><b>Código</td>");
print("<td><b>Nome</td>");
print("<tr><td><b>Escritor</td>");
print("<td><b>Estoque</td>");
print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
while ($linha=mysql_fetch_array($resultado))  
{
   $id=$linha["id"];
   $name=$linha["name"];
   $writer=$linha["writer"];
   $stash=$linha["stash"];
   print("<tr><td align='center'>$id</td>");
   print("<td>$name</td>");
   print("<td>$writer</td>");
   print("<td>$stash</td>");
   /* print("<td><a href='deletard.php?cod=$CodigoD&nom=$NomeD'>Deletar</a></td>");
   print("<td><a href='alterard.php?cod=$CodigoD&nom=$NomeD'>Alterar</a></td></tr>"); */  }
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