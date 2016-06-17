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
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>				
          </ul>
        </nav>
      </div>

 
<form action="../trafegoDados/processaAluguel.php" method="get">
<fieldset>
	<div class="form-group">
		Livro:  <select name="book">
		<?php
		require("../conecta.inc");
		conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		$resultado=mysql_query("Select * from book order by id") or die ("Não é possível consultar Funcionario.");
		while ($linha=mysql_fetch_array($resultado))
		{
		$id=$linha["id"];
		$name=$linha["name"];
		print("<option value='$id'>$name</option>");
		}
		?>
		</select>
	</div>
</fieldset>

<fieldset>
	<div class="form-group">
	 Cliente:  <select name="client">
	<?php
			$resultado=mysql_query("Select * from client order by id") or die ("Não é possível consultar Clientes.");
				while ($linha=mysql_fetch_array($resultado))
				{
					$id=$linha["id"];
					$name=$linha["name"];
					print("<option value='$id'>$name</option>");
				}
	
	?>
		</select>
	</div>
</fieldset>

<fieldset>
	<div class="form-group">
	 Funcionario:  <select name="employee">
	<?php
			$resultado=mysql_query("Select * from employee order by id") or die ("Não é possível consultar Funcionario.");
				while ($linha=mysql_fetch_array($resultado))
				{
					$id=$linha["id"];
					$name=$linha["name"];
					print("<option value='$id'>$name</option>");
				}
	
	?>
		</select>
	</div>
</fieldset>
<fieldset>
	<div class="form-group">
	Data: <input type="text" name="date" placeholder="dd-mm-aaaa">
	</div>
</fieldset>
	<button type="submit" class="btn btn-primary">
		<span class="glyphicon glyphicon-floppy-saved"></span>
		Confirmar Cadastro
	</button>
</form>
</div>
  
</div>
  
</body>
</html>
