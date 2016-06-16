<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Deletar Cliente</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$resultado1=mysql_query("Select * from employee where id = '$cod'") or die ("Não é possível retornar dados do Funcioanrio!");
	$linha=mysql_fetch_array($resultado1);
	$id=$linha["id"];
	$name=$linha["name"];
	$cpf=$linha ["cpf"];
	$mail=$linha ["mail"];
	print("<h3>Alterando os dados do Funcioanrio:</h3><p>");
?>
<form action="confirmaAlteraracaoFuncionario.php" method="get">
Código: <?php print($id)?>
<input type="hidden" name="id_alter" value="<?php print($id)?>">
<br>Nome: <input type="text" name="name_alter" value="<?php print($name)?>">

<br>Nome: <input type="text" name="cpf_alter" value="<?php print($cpf)?>">

<br>Nome: <input type="text" name="mail_alter" value="<?php print($mail)?>">

<p><input type="submit" value="Alterar Dados">
</form>
<p><a href="../visualizacao/visualizacaoFuncionario.php">Cancelar e voltar</a>
</body>
</html>