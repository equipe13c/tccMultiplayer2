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
    $tipoUser = $_GET['tipoUser'];

$query = "SELECT * FROM DESATIVADOS ORDER BY COD_DESATIVADO ASC"; 

$total_reg = "10";
$pc= isset($_GET['pagina'])? $_GET['pagina'] : "1";
$inicio = $pc - 1; 
$inicio = $inicio * $total_reg;
$limite = mysql_query("$query LIMIT $inicio,$total_reg"); 
$result = mysql_query($query);
$tr = mysql_num_rows($result);

$tp = $tr / $total_reg;
if($tr == 0){
    echo "Nenhum Usuário Encontrado";
}
else{
echo "<div class='tables'>";
    echo "<table class='tabelas' id='tabelausuario'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nome</th>";
    echo "<th>Apelido</th>";
    echo "<th>E-mail</th>";
    echo "<th>Data Nasc.</th>";
    echo "<th>Tempo Desativado</th>";
    echo "<th>Motivo</th>";
    echo "<th>Imagem</th>";
    echo "<th>Ação</th>";
    echo "</tr>";
while($usuarios = mysql_fetch_array($limite))
{         
    $sql = "SELECT URL_IMAGEM FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$usuarios['COD_DESATIVADO'];
                $result2 = mysql_query($sql);   
                $imagens = mysql_fetch_array($result2); 
                $urlImagem = $imagens['URL_IMAGEM'];
                
    echo "<form id='usuariosA' action='form.php' method='post'>";
        echo "<tr>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='5'  id='usuarioTable' name='cod_user' value='" . $usuarios['COD_DESATIVADO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='25'  id='usuarioTable' name='name' value='" . $usuarios['NOME_DESATIVADO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='25'  id='usuarioTable' name='apelido' value='" . $usuarios['APELIDO_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='35'  id='usuarioTable' name='email' value='" . utf8_encode($usuarios['EMAIL_DESATIVADO']) . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='10'  id='usuarioTable' name='dataNasc' value='" . $usuarios['DATA_NASCIMENTO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='10'  id='usuarioTable' name='tempo' value='" . $usuarios['TEMPO_DESATIVADO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='3'  id='usuarioTable' name='motivo' value='" . $usuarios['MOTIVO_DESATIVADO'] . "'></td>";
        echo "<td><a href=../uploads/$urlImagem><img src='../uploads/$urlImagem' id='imagem_usuario_listagem' alt='imagem'></a></td>";
        echo "<td><input type='submit' class=botoes name='reativar' value='Reativar'></td>";
        echo "</tr>"; 
        echo "</form>";
}
echo "</table>";
}
$anterior = $pc -1; 
   $proximo = $pc +1; 
   if ($pc>1) 
       { echo " <a href='?pagina=$anterior&tipoUser=$tipoUser'><- Anterior</a> "; 
       
       } 
       if($pc ==1){/*CODIGO A APARECER PARA VOLTAR PAGINA*/} // Mostrando desabilitado 06/11/13 Rogério
       //echo "|"; 
       // Inicio lógica rogerio
       for($i=1;$i<=$tp;$i++)
       {
           echo "<a href=?pagina=$i&tipoUser=$tipoUser>".$i . "</a>" . "    ";
       }
       // Fim lógia rogério
       if ($pc<$tp) 
           { echo " <a href='?pagina=$proximo&tipoUser=$tipoUser'>Próxima -></a>"; 
           
           }
      if($pc == $tp){/*CODIGO A APARECER PARA PASSAR PAGINA*/} // Mostrando desabilitado 06/11/13 Rogério

?>
    </body>
</html>
