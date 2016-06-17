<!doctype html>
<html>
<head>
<?php  
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço 
do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, 
com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página 
redireciona o mesmo para a index.php.*/
session_start();
if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	header('location:index.php');
	}

$logado = $_SESSION['login'];
?> 
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

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>BEM VINDO !</h1>
        <p class="lead">Este portal tem como objetivo digitalizar o processo de aluguel de livros.</p>
      </div>

      

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.Todos os direitos reservados ao time de desenvolvimento</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>