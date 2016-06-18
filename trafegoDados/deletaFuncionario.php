<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Deletar Funcionario</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>

<?php
	$code=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysql_query("Select * from employee where id='$code'") or die ("Não é possível retornar dados do funcionário!");
	$linha=mysql_fetch_array($result);
	$id=$linha["id"];
	$name=$linha["name"];
	$phone=$linha["phone"];
	$mail=$linha["mail"];
	$cpf = $linha["cpf"];
	$address = $linha["address"];
	
	print("<h3>Deletando o Cliente:</h3><p>");
	print("Código: $id<br>");
   	print("Nome: <b>$name</b><br>");
   	print("Telefone: $phone<br>");
   	print("E-Mail: $mail<br>");
   	print("CPF: $cpf");
	print("Endereço: $address<br>");
?>
<form action="confirmaDeletarFuncionario.php" method="get">
<input type="hidden" name="cod" value="<?php print($id)?>">
<br><input type="submit" value="Deletar Dados">
</form>
<p><a href="../visualizacao/visualizacaoFuncioanrio.php">Cancelar e voltar</a>
</body>
</html>