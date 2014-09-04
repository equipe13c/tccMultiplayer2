<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="pt-br">
        <title>Listagem de Matérias</title>
    </head>
    <body>
<?php
session_start();
include '../conexao/conecta.inc';
include '../includes/funcoesUteis.inc';
$tipoMateria = $_POST['materia'];
if($tipoMateria == "1"){
    $query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC";
}
else if($tipoMateria == "2"){
$query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC"; 
}
else if($tipoMateria == "3"){
$query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC";
}
else if($tipoMateria == "4"){
$query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC";
}
else if($tipoMateria == "5"){
$query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC"; 
}
else if($tipoMateria == "6"){
$query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC";  
}
else if($tipoMateria == "7"){
$query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO  = '$tipoMateria' ORDER BY ID_ARTIGO ASC";  
}
$result = mysql_query($query);
 echo "<div class='listaMateria'>";  

while($materias = mysql_fetch_array($result))
{         
                 
    echo "<form id='usuariosA' action='form.php' method='post'>";
        
        
        echo "<h3> Título do Artigo </h3> <input type='text' readonly='readonly'  size='25'  id='usuarioTable' name='name' value='" . $materias['TITULO_ARTIGO'] . "'>";
         echo "<textarea readonly='readonly'>" . $materias['CONTEUDO_ARTIGO'] . "</textarea></td>";
        echo "<input type='text' readonly='readonly' class='edituser' size='7'  id='usuarioTable' name='dataNasc' value='" . $materias['DATA_ARTIGO'] . "'></td>";
         echo "<input type='text' readonly='readonly' class='edituser' size='7'  id='usuarioTable' name='dataNasc' value='" . $materias['HORA_ARTIGO'] . "'></td>";
          echo "<input type='text' readonly='readonly' class='edituser' size='7'  id='usuarioTable' name='dataNasc' value='" . $materias['AUTOR_ARTIGO'] . "'></td>";
        echo "<input type='submit' class=botoes name='alterar' value='Alterar Dados'></td>";
        echo "<input type='submit' class=botoes name='desativar' value='Desativar'></td>";
        echo "<input type='submit' class=botoes name='deletar' value='Excluir'></td>";
        
        echo "</form>";
       
}

 echo "</div>";
?>
    </body>
</html>
