<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 17/05/2016
 * Time: 23:00
 */
require("conecta.inc"); //inclui o arquivo para conexão
conecta_bd() or die ("Não é possível conectar-se ao servidor.");
$resultado=mysql_query("Select * from cliente;");
print("Mostrando os clientes...<p>");
print("<b>Código &nbsp;&nbsp;&nbsp;");
print("Nome &nbsp;&nbsp;&nbsp;");
print("E-Mail &nbsp;&nbsp;&nbsp;");
print("Telefone &nbsp;&nbsp;&nbsp;");
print("CPF &nbsp;&nbsp;&nbsp;");
print("Bairro &nbsp;&nbsp;&nbsp;");
print("Rua &nbsp;&nbsp;&nbsp;");
print("Numero &nbsp;&nbsp;&nbsp;");
print("Complemento &nbsp;&nbsp;&nbsp;");

while ($linha=mysql_fetch_array($resultado)) {
    $id=$linha["id"];
    $nome=$linha["nome"];
    $email=$linha["email"];
    $telefone=$linha["telefone"];
    $cpf=$linha["cpf"];
    $bairro=$linha["bairro"];
    $rua=$linha["rua"];
    $numero=$linha["numero"];
    $complemento=$linha["complemento"];



    print("$id &nbsp;&nbsp;&nbsp;");
    print("$nome &nbsp;&nbsp;&nbsp;");
    print("$email &nbsp;&nbsp;&nbsp;");
    print("$telefone &nbsp;&nbsp;&nbsp;");
    print("$bairro &nbsp;&nbsp;&nbsp;");
    print("$rua &nbsp;&nbsp;&nbsp;");
    print("$numero &nbsp;&nbsp;&nbsp;");
    print("$complemento &nbsp;&nbsp;&nbsp;");
     }
?>