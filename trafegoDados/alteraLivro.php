<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Alterar Livro</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<?php
	$cod=$_GET['cod'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$resultado1=mysql_query("Select * from book where id = '$cod'") or die ("Não é possível retornar dados do Livro!");
	$linha=mysql_fetch_array($resultado1);
	$id=$linha["id"];
	$name=$linha["name"];
	$writer=$linha ["writer"];
	$pages=$linha ["pages"];
	$stash=$linha ["stash"];
	print("<h3>Alterando os dados do Livro:</h3><p>");
?>
<form action="confirmaAlteraracaoLivro.php" method="get">
Código: <?php print($id)?>
<input type="hidden" name="id_alter" value="<?php print($id)?>">
<br>Nome: <input type="text" name="name_alter" value="<?php print($name)?>">

<br>Escritor: <input type="text" name="writer_alter" value="<?php print($writer)?>">

<br>Paginas: <input type="text" name="pages_alter" value="<?php print($pages)?>">

<br>Estoque: <input type="text" name="stash_alter" value="<?php print($stash)?>">

<p><input type="submit" value="Alterar Dados">
</form>
<p><a href="mostrad.php">Cancelar e voltar</a>
</body>
</html>