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
            <li class="active"><a href="../cadastro/principal.php">Principal</a></li>
              <li><a href="../cadastro/cadastroLivro.php">Cadastro de Livro</a></li>
            <li><a href="../cadastro/cadastroCliente.php">Cadastro de Clientes</a></li>
            <li><a href="../cadastro/cadastroFuncionario.php">Cadastro de Funcionarios</a></li>
            <li><a href="#">Realizar Aluguel</a></li>           
          </ul>
        </nav>
      </div>
<?php
		$name=$_GET['name'];
		$phone=$_GET['phone'];
		$mail=$_GET['mail'];
		$cpf=$_GET['cpf'];
		$address=$_GET['address'];
		if ($name==''||$phone==''||$mail==''||$cpf==''||$address=='')
			print("Faltou preencher algum campo.");
			else
				{
			require("../conecta.inc");
			conecta_bd() or die ("Não é possível conectar-se ao servidor.");
			mysql_query("insert into employee (name,phone,mail,cpf,address) values ('$name','$phone','$mail','$cpf','$address')") 
	or die ("Não é possível inserir cadastro de Funcionario!");
	print("Registro de funcionario Inserido com sucesso !");
}
?>
 
</body>
</html>