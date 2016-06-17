<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Aluguel</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<div class="container">

      <div class="masthead">
        <h3 class="text-muted">Portal biblioteca</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="../cadastro/principal.php">Principal</a></li>
            <li><a href="../cadastro/cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="../cadastro/cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="../cadastro/cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="#">Realizar Aluguel</a></li>           
          </ul>
        </nav>
      </div>
<?php
$client=$_GET['client'];
$employee=$_GET['employee'];
$book=$_GET['book'];
$status='Alugado';
$date =$_GET['date'];

if ($client=='' or $employee=='' or $book=='' or $date=='')
	print("Faltou preencher algum campo!");
else
{
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	print("Realizando o aluguel:<p>");
		$resultado=mysql_query("Select * from book where id='$book'") 
		or die ("Não é possível realizar a consulta do estoque do livro!");
			while ($linha=mysql_fetch_array($resultado))  
			{
			$stash=$linha["stash"];
			}
				if($stash<1){
				print("Desculpe mas este livro nao pode ser alugado :Estoque esgotado");
				}
					else{
						mysql_query("insert into rent (id_client, id_book, id_employee, avaliable, rentDate) values ('$client', '$book', '$employee', '$status','$date')") 
						or die ("Não é possível realizar aluguel!");
							mysql_query("UPDATE book SET stash=stash-1 where id='$book'") 
							or die ("Não é possível alterar o estoque !");
							print("Aluguel realizado com sucesso:");
	}
}
?>
 
</body>
</html>