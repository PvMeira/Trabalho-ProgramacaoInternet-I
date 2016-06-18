<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Devolução</title>
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
            <li><a href="aluguel.php">Realizar Aluguel</a></li>
			<li><a href="devolucao.php">Realizar Devolução</a></li>     
          </ul>
        </nav>
      </div>

      <div>
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
		$resultado2=mysql_query("Select * from book where id='$book'") or die ("Não é possível consultar nome do cliente.");
		while($linha2=mysql_fetch_array($resultado2))
		$bookName=$linha2["name"];
	
   $client=$linha["id_client"];
		$resultado1=mysql_query("Select * from client where id='$client'") or die ("Não é possível consultar nome do cliente.");
		while($linha1=mysql_fetch_array($resultado1))
		$clientName=$linha1["name"];
   
   print("<tr><td>$id</td>");
   print("<td>$bookName</td>");
   print("<td>$clientName</td>");
   print("<td><a href='../trafegoDados/processaDevolucao.php?cod=$id & cod_book=$book & cod_client=$client '>Devolver</a></td>");   }
   print("</table></center>");
?>	   
</body>
</html>