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
		mysql_query("delete from book where id='$cod'") or die ("Não é possível deletar livro!");
		print("livro deletado com sucesso (código)      : $cod");
?>
<p><a href="../visualizacao/visualizacaoLivro.php">Voltar para Visualização de Livros</a>
</body>
</html>