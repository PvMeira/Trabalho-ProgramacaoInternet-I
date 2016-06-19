<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Editar Funcionario</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Portal biblioteca</h3>
        <nav class="navbar navbar-default">	
          <ul class="nav nav-justified">
			<li class="active"><a href="../index.php">Principal</a></li>
            <li><a href="../visualizacao/visualizacaoLivro.php">Visualização de Livro</a></li>
            <li><a href="../visualizacao/visualizacaoCliente.php">Visualização de Clientes</a></li>
            <li><a href="../visualizacao/visualizacaoFuncionario.php">Visualização de Funcionarios</a></li>
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>     
          </ul>
        </nav>
      </div>

      <div>
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
	$address=$linha ["address"];
?>
<form action="confirmaAlteraracaoFuncionario.php" method="get">
	<table class='display table' width='90%'>
			<tr><td><b>Código</td>
			<td><b>Nome</td>
			<td><b>cpf</td>
			<td><b>mail</td>
			<td><b>Endereço</td>
			<tr><td><input type="hidden" name="id_alter" value="<?php print($id)?>"></td>
			<td><input type="text" name="name_alter" value="<?php print($name)?>"></td>
			<td><input type="text" name="cpf_alter" value="<?php print($cpf)?>"></td>
			<td><input type="text" name="mail_alter" value="<?php print($mail)?>"></td>
			<td><input type="text" name="address_alter" value="<?php print($address)?>"></td>
			</table></center>

<p><input type="submit" value="Alterar Dados">
</form>
<p><a href="../visualizacao/visualizacaoFuncionario.php">Cancelar e voltar</a>
 </div>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.Todos os direitos reservados ao time de desenvolvimento</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>