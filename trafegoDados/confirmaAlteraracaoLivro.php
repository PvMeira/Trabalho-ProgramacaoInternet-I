<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Confirmação</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>

<?php
	$cod=$_GET['id_alter'];
	$name_alter=$_GET['name_alter'];
	$writer_alter=$_GET['writer_alter'];
	$pages_alter=$_GET['pages_alter'];
	$stash_alter=$_GET['stash_alter'];
	
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	print("Alteração do Livro realizada:<p>");
	print("$cod <b>$name_alter</b> <p>");
	mysql_query("update book set name='$name_alter', writer='$writer_alter',pages='$pages_alter', stash='$stash_alter' where id='$cod'") 
	or die ("Não é possível alterar dados do Livro!");
	print("Dados do livro alterados com sucesso!");
?>
<p><a href="../visualizacao/visualizacaoLivro.php">Mostrar</a>
</body>
</html>