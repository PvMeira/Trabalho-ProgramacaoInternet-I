<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Index</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		mysql_query("delete from employee where id='$cod'") or die ("Não é possível deletar Funcionario!");
		print("Funcionario deletado com sucesso (código): $cod");
?>
<p><a href="../visualizacao/visualizacaoFuncioanrio.php">Voltar para Visualização de funcionario</a>
</body>
</html>