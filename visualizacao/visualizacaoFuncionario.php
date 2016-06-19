<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Visualização Funcionario</title>
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
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>     
          </ul>
        </nav>
      </div>

      <div>
	   <br><br>
		<a href="../cadastro/cadastroFuncionario.php"><button type="button"  class="btn">Novo Cadastro
		<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
		</button></a>
	  <?php
		require("../conecta.inc");
		conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		$resultado=mysql_query("Select * from employee order by id") or die ("Não é possível consultar funcionarios.");
		print("<center><h2>Mostrando os Funcionarios</h2>");
		print("<table class='display table' width='90%'>");
		print("<tr><td><b>Código</td>");
		print("<td><b>Nome</td>");
		print("<td><b>cpf</td>");
		print("<td><b>mail</td>");
		print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
			while ($linha=mysql_fetch_array($resultado))  
{
   $id=$linha["id"];
   $name=$linha["name"];
   $cpf=$linha["cpf"];
   $mail=$linha["mail"];
   print("<tr><td align='center'>$id</td>");
   print("<td>$name</td>");
   print("<td>$cpf</td>");
   print("<td>$mail</td>");
    print("<td><a href='../trafegoDados/deletaFuncionario.php?cod=$id '><button type='button'  class='btn'>Deletar
										<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </button></a>");
	print("<td><a href='../trafegoDados/alteraFuncionario.php?cod=$id '><button type='button'  class='btn'>Editar
										<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> </button></a>");    }
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