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
            <li><a href="../cadastro/aluguel.php">Realizar Aluguel</a></li>
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>     
          </ul>
        </nav>
      </div>

      <div>
<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 17/05/2016
 * Time: 23:15
 */
$name=$_GET['name'];
$phone=$_GET['phone'];
$mail=$_GET['mail'];
$cpf=$_GET['cpf'];
$address=$_GET['address'];
if ($name==''||$phone==''||$mail==''||$cpf==''||$address==''){
print("<br>");
print("<br>");
print("<br>");
print("<br>");
print("<br>");
print("<br>");
	print("Faltou preencher algum campo.");
print("<br>");
print("<br>");
print("<br>");
	}
else
{
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	
	mysql_query("insert into client (name,phone,mail,cpf,address,rentCount) values ('$name','$phone','$mail','$cpf','$address','0')") 
	or die ("Não é possível inserir cadastro de cliente!");
	
	print("Cadastro de Cliente Inserido com sucesso !");
}
?>
 <p><a href="../cadastro/cadastroCliente.php">Voltar</a>
</body>
</html>