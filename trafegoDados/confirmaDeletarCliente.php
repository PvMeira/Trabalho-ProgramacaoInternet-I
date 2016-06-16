<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Confirmação</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		mysql_query("delete from client where id='$cod'") or die ("Não é possível deletar Cliente!");
		print("Cliente deletado com sucesso (código): $cod");
?>
<p><a href="../visualizacao/visualizacaoCliente.php">Voltar para Visualização de clientes</a>
</body>
</html>