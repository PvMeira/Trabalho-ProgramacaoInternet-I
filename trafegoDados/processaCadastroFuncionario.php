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
            <li class="active"><a href="#">Principal</a></li>
            <li><a href="cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="#">Realizar Aluguel</a></li>           
          </ul>
        </nav>
      </div>
<?php
$name=$_GET['name'];
$phone=$_GET['phone'];
$mail=$_GET['mail'];
$cpf=$_GET['cpf'];
$neighborhood=$_GET['neighborhood'];
$street=$_GET['street'];
$house=$_GET['house'];
$extra=$_GET['extra'];
if ($name==''||$phone==''||$mail==''||$cpf==''||$neighborhood==''||$street==''||$house=='')
	print("Faltou preencher algum campo.");
else
{
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	
	mysql_query("insert into employee (name,phone,mail,cpf,neighborhood,street,house,extra) values ('$name','$phone','$mail','$cpf','$neighborhood','$street','$house','$extra')") 
	or die ("Não é possível inserir cadastro de Funcionario!");
	
	print("Registro de funcionario Inserido com sucesso !");
}
?>
 
</body>
</html>