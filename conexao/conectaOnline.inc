<?php
//Configuração

$server = "mysql.hostinger.com.br";
$user = "u534143670_play";
$password = "multiplayer";
$database = "u534143670_multi";

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