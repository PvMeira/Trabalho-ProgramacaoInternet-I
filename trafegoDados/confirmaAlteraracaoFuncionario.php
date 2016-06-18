<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
  <title>Index</title>
  <meta name="viewport" content="width=device-width">
  
</head>
<body>
<div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Portal biblioteca</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Principal</a></li>
            <li><a href="cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="#">Realizar Aluguel</a></li>           
          </ul>
        </nav>
      </div>

      <div>
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
 </div>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.Todos os direitos reservados ao time de desenvolvimento</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>