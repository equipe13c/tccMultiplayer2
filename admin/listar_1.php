<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="pt-br">
        <title>Listagem de Usuário</title>
    </head>
    <body>
<?php
session_start();
include '../conexao/conecta.inc';
include '../includes/funcoesUteis.inc';
$tipoUser = $_POST['tipoUser'];
if($tipoUser == "1"){
$query = "SELECT * FROM USUARIO WHERE TIPO_USUARIO = '$tipoUser' ORDER BY COD_USUARIO ASC";
}
else if($tipoUser == "2"){
$query = "SELECT * FROM USUARIO WHERE TIPO_USUARIO = '$tipoUser' ORDER BY COD_USUARIO ASC";    
}
else if($tipoUser == "3"){
$query = "";
}
else if($tipoUser == "desativados"){
$query = "";
}
else if($tipoUser == "deletados"){
$query = "";  
}
$result = mysql_query($query);
echo "<div class='tables'>";
    echo "<table class='tabelas' id='tabelausuario'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nome</th>";
    echo "<th>E-mail</th>";
    echo "<th>Tipo</th>";
    echo "<th>Data Nasc.</th>";
    echo "<th>Imagem</th>";
    echo "<th colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Ação</th>";
    echo "</tr>";
while($materias = mysql_fetch_array($result))
{         
    echo "<form id='usuariosA' action='form.php' method='post'>";
        echo "<tr>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='5'  id='usuarioTable' name='cod_user' value='" . $materias['COD_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='25'  id='usuarioTable' name='name' value='" . $materias['NOME_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='35'  id='usuarioTable' name='email' value='" . $materias['EMAIL_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='3'  id='usuarioTable' name='tipo' value='" . $materias['TIPO_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='7'  id='usuarioTable' name='dataNasc' value='" . $materias['DATA_NASCIMENTO'] . "'></td>";
        echo "<td><input type='hidden' readonly='readonly' class='edituser' size='16'  id='usuarioTable' name='imagem' value='" . $materias['COD_IMAGEM'] . "'></td>";
        echo "<td><input type='submit' class=botoes name='alterar' value='Alterar Dados'></td>";
        echo "<td><input type='submit' class=botoes name='desativar' value='Desativar'></td>";
        echo "<td><input type='submit' class=botoes name='deletar' value='Excluir'></td>";
        echo "</tr>"; 
        echo "</form>";
}
echo "</table>";

?>
    </body>
</html>
