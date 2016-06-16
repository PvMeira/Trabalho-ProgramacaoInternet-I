<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Deletar livro</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>

<?php
	$code=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysql_query("Select * from book where id='$code'") or die ("Não é possível retornar dados do livro!");
	$linha=mysql_fetch_array($result);
	$id=$linha["id"];
	$name=$linha["name"];
	$writer=$linha["writer"];
	$pages=$linha["pages"];
	$stash = $linha["stash"];
	print("<h3>Deletando o livro:</h3><p>");
	print("Código: $id<br>");
   	print("Nome: <b>$name</b><br>");
   	print("Escritor: $writer<br>");
   	print("Paginas: $pages<br>");
   	print("Estoque: $stash");
?>
<form action="confirmaDeletarLivro.php" method="get">
<input type="hidden" name="cod" value="<?php print($id)?>">
<br><input type="submit" value="Deletar Dados">
</form>
<p><a href="mostraf.php">Cancelar e voltar</a>
</body>
</html>