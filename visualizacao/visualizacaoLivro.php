<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
  <meta charset="UTF-8">
<title>Visualização de Livros Cadastrados </title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
<script type="text/javascript">

$(document).ready(function() {	

	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		
		var id = $(this).attr('href');
	
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		$(id).fadeIn(2000); 
	
	});
	
	$('.window .close').click(function (e) {
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>
<style type="text/css">
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}

#boxes #dialog {
  width:375px; 
  height:253px;
  padding:10px;
  background-color:#ffffff;
}

#boxes #dialog1 {
  width:375px; 
  height:203px;
}

#dialog1 .d-header {
  background:url(login-header.png) no-repeat 0 0 transparent; 
  width:375px; 
  height:150px;
}

#dialog1 .d-header input {
  position:relative;
  top:60px;
  left:100px;
  border:3px solid #cccccc;
  height:22px;
  width:200px;
  font-size:15px;
  padding:5px;
  margin-top:4px;
}

#dialog1 .d-blank {
  float:left;
  background:url(login-blank.png) no-repeat 0 0 transparent; 
  width:267px; 
  height:53px;
}

#dialog1 .d-login {
  float:left;
  width:108px; 
  height:53px;
}

#boxes #dialog2 {
  background:url(notice.png) no-repeat 0 0 transparent; 
  width:326px; 
  height:229px;
  padding:50px 0 20px 25px;
}
.close{display:block; text-align:right;}

</style>
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
            <li><a href="visualizacaoLivro.php">Visualização de Livro</a></li>
            <li><a href="visualizacaoCliente.php">Visualização de Clientes</a></li>
            <li><a href="visualizacaoFuncionario.php">Visualização de Funcionarios</a></li>
			<li><a href="../cadastro/devolucao.php">Realizar Devolução</a></li>       
          </ul>
        </nav>
      </div>
<div>


<a href="../cadastro/cadastroLivro.php"><button type="button"  class="btn">Novo Cadastro
<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
</button></a>
<a href="#dialog" name="modal"><button type="button"  class="btn">Realizar Aluguel
<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
</button></a>
</div>
<br>
<form method="GET" action="../trafegoDados/buscaLivro.php">
<div class="form-group">
	<label for="search">Buscar por Nome:</label>
	<input type="text" id="search" name="search" maxlength="255" />
	<input type="submit" value="OK" />
</div>
</form>
  <?php
		require("../conecta.inc");
		conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		$resultado=mysql_query("Select * from book order by id") or die ("Não é possível consultar clientes.");
		print("<center><h2>Mostrando os livros</h2>");
		print("<table class='display table' width='90%'>");
		print("<tr><td><b>Código</td>");
		print("<td><b>Nome</td>");
		print("<td><b>Escritor</td>");
		print("<td><b>Estoque</td>");
		print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
			while ($linha=mysql_fetch_array($resultado)) {
															
			$id=$linha["id"];
			$name=$linha["name"];
			$writer=$linha["writer"];
			$stash=$linha["stash"];
			print("<tr><td align='center'>$id</td>");
			print("<td>$name</td>");
			print("<td>$writer</td>");
			print("<td>$stash</td>");
			print("<td><a href='../trafegoDados/deletaLivro.php?cod=$id'><button type='button'  class='btn'>Deletar
										<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </button></a>");
			print("<td><a href='../trafegoDados/alteraLivro.php?cod=$id'><button type='button'  class='btn'>Editar
										<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> </button></a>");   }
			print("</table></center>");
?>    


<div id="boxes">

<div id="dialog" class="window">
<a href="#" class="close">Fechar [X]</a><br />
<form action="../trafegoDados/processaAluguel.php" method="get">
<fieldset>
	<div class="form-group">
		Livro:  <select name="book">
		<?php
		/* require("../conecta.inc");
		conecta_bd() or die ("Não é possível conectar-se ao servidor."); */
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
			$resultado=mysql_query("Select * from employee WHERE id_position='2' order by id") or die ("Não é possível consultar Funcionario.");
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
		Realizar Aluguel
	</button>
</form>
</div>
  
 </div> <!-- /container -->
<!-- Máscara para cobrir a tela -->
  <div id="mask"></div>


</body>
</html>
