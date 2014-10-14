<?php
//Configuração

$server = "localhost";
$user = "root";
$password = "";
$database = "multiplayer5";

$connection = mysql_connect($server,$user,$password);
if($connection === FALSE){
    echo "Não foi possivel estabelecer a conexão com MYSQL<br/>";
    echo mysql_error();
}
else{
    if(!mysql_select_db($database,$connection))
    {
    echo "Não foi possivel selecionar o banco de dados" . $database . "<br/>";
    echo mysql_error(); 
    }
}
mysql_set_charset("utf8", $connection);