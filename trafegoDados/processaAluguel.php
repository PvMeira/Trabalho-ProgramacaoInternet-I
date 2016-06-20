<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Processamento de dados</title>
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
$client=$_GET['client'];
$employee=$_GET['employee'];
$book=$_GET['book'];
$status='Alugado';
$date =$_GET['date'];

if ($client=='' or $employee=='' or $book=='' or $date==''){
print("<br>");
print("<div class='alert alert-warning' role='alert'>Faltou preencher algum campo.</div>");
}
else
{
	require("../conecta.inc");
	conecta_bd() or die ("<div class='alert alert-danger' role='alert'>Não foi possivel realizar conexão com o Banco de Dados</div>");
	print("Realizando o aluguel:<p>");
		$resultado=mysql_query("Select * from book where id='$book'") 
		or die ("<div class='alert alert-danger' role='alert'> Não é possível realizar a consulta do estoque do livro!</div>");
			while ($linha=mysql_fetch_array($resultado))  
			{
			$stash=$linha["stash"];
			}
				if($stash<1){
				print("<div class='alert alert-danger' role='alert'> Desculpe mas este livro nao pode ser alugado :Estoque esgotado </div>");
				}
					else{
						$resultadoClient=mysql_query("Select * from client where id='$client'") 
						or die ("<div class='alert alert-danger' role='alert'>Não é possível realizar a consulta da quantidade de livros alugados pelo cliente! </div>");
							while ($linha1=mysql_fetch_array($resultadoClient))  
							{
							$rentCount=$linha1["rentCount"];
							}
								if($rentCount > 3){
									print("<div class='alert alert-danger' role='alert'>Desculpe mas este cliente ja chegou ao maximo de alugueis possiveis </div>");
								}	
								else{						
									mysql_query("insert into rent (id_client, id_book, id_employee, avaliable, rentDate) values ('$client', '$book', '$employee', '$status','$date')") 
									or die ("<div class='alert alert-danger' role='alert'>Não é possível realizar aluguel!</div>");
										mysql_query("UPDATE book SET stash=stash-1 where id='$book'") 
										or die ("<div class='alert alert-danger' role='alert'>Não é possível alterar o estoque !</div>");
											mysql_query("UPDATE client SET rentCount=rentCount+1 where id='$client'") 
											or die ("<div class='alert alert-danger' role='alert'>Não é possível alterar o numero de alugueis do cliente !</div>");
											print("<div class='alert alert-success' role='alert'>Aluguel Realizado com Sucesso</div>");
									}
	}		
}
?>
 <p><a href="../visualizacao/visualizacaoLivro.php"><button type='button'  class='btn'>Voltar
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span> </button></a>
</body>
</html>