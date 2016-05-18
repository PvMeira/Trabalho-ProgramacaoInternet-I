<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 17/05/2016
 * Time: 22:53
 */

function conecta_bd()
{
    $link=mysql_pconnect("localhost","root","usbw");
    if ($link && mysql_select_db("biblioteca"))

        return($link);
    return(FALSE);
}
?>