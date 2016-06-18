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
            <li class="active"><a href="../cadastro/principal.php">Principal</a></li>
            <li><a href="../cadastro/cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="../cadastro/cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="../cadastro/cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="#">Realizar Aluguel</a></li>   
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>				
          </ul>
        </nav>
      </div>
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
if ($name==''||$phone==''||$mail==''||$cpf==''||$address=='')
	print("Faltou preencher algum campo.");
else
{
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	
	mysql_query("insert into client (name,phone,mail,cpf,address,rentCount) values ('$name','$phone','$mail','$cpf','$address','0')") 
	or die ("Não é possível inserir cadastro de cliente!");
	
	print("Cadastro de Cliente Inserido com sucesso !");
}
?>
 
</body>
</html>