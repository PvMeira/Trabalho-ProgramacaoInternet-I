<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Deletar Cliente</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<?php
	$cod=$_GET['id_alter'];
	$name_alter=$_GET['name_alter'];
	$cpf_alter=$_GET['cpf_alter'];
	$mail_alter=$_GET['mail_alter'];
	$address_alter=$_GET['address_alter'];
		
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	print("Alteração do Funcionario realizada:<p>");
	print("$cod <b>$name_alter</b> <p>");
	mysql_query("update employee set name='$name_alter', cpf='$cpf_alter',mail='$mail_alter',address='$address_alter' where id='$cod'") 
	or die ("Não é possível alterar dados do Funcionario!");
	print("Dados do Funcionario alterados com sucesso!");
?>
<p><a href="../visualizacao/visualizacaoFuncionario.php">Mostrar</a>
</body>
</html>