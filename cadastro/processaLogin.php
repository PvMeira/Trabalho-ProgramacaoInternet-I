<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['username'];
$senha = $_POST['password'];
	require("../conecta.inc");
	conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysql_query("SELECT * FROM `user` WHERE `username` = '$login' AND `password`= '$senha'") or die ("Não é possível consultar departamentos.");
/* Logo abaixo temos um bloco com if e else, verificando se a variável 
$result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o 
seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo 
do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do 
formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:principal.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
	
	}

?>