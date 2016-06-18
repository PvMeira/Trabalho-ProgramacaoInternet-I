<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Realizar devolução</title>
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
            <li class="active"><a href="../cadastro/principal.php">Principal</a></li>
            <li><a href="../cadastro/cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="../cadastro/cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="../cadastro/cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="../cadastro/aluguel.php">Realizar Aluguel</a></li>   
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>				
          </ul>
        </nav>
      </div>
<?php
require("../conecta.inc");
		conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		$resultado=mysql_query("Select * from rent where avaliable='alugado' order by id") or die ("Não é possível consultar Alugueis.");
		print("<center><h2>Mostrando os alugueis</h2>");
		print("<table class='display table' width='90%'>");
		print("<tr><td><b>Código</td>");
		print("<td><b>livro</td>");
		print("<td><b>cliente</td>");
		print("<td><b>Devolver</td>");
			while ($linha=mysql_fetch_array($resultado))  
{
   $id=$linha["id"];
   $book=$linha["id_book"];
   $client=$linha["id_client"];
   
   print("<tr><td align='center'>$id</td>");
   print("<td>$book</td>");
   print("<td>$client</td>");
   print("<td><a href='../trafegoDados/processaDevolucao.php?cod=$id & cod_book=$book & cod_client=$client '>Devolver</a></td>");   }
   print("</table></center>");
?>	   
</body>
</html>