<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 17/05/2016
 * Time: 22:51
 */

$host="localhost";
$user="root";
$pass="usbw";
$nova_con=mysql_pconnect($host, $user, $pass);
if (!$nova_con)
    print("Falha na conexão...");
else
    print("Conexão OK!!!");
?>
