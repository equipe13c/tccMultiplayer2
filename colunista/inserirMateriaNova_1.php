<?php

include "../conexao/conecta.inc";

include 'funcoes/funcoesCol.php';
function geraSaltAleatorio($tamanho = 6) {
return substr(md5(mt_rand()), 0, $tamanho); 
}
echo "<meta charset=UTF-8>";
$nome = $_POST['nomeMateria'];
$tipo = $_POST['categoriaMateria'];
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];
$conteudo2 = $_POST['conteudo2'];
$data = $_POST['dataMateria'];
$hora = $_POST['horaMateria'];
$autor = $_POST['autor'];
$url = $_POST['url'];
$codImagem_autor = $_POST['nome_url_autor'];

//
$_UP['pasta'] = "../uploads/";
$_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
$_UP['extensao'] = array('jpg','png','gif');
$_UP['renomeia'] = true;

$_UP['erros'][0] = "Não Houve Erros";
$_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
$_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
$_UP['erros'][3] = "Upload feito parcialmente";
$_UP['erros'][4] = "Nao teve upload";

if($_FILES['arquivo3']['error'] != 0){
    die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['arquivo3']['erros']]);
    exit;
}
$img_nome = $_FILES['arquivo3']['name'];
$img_separador = explode('.',$img_nome);
$extensao = strtolower(end($img_separador));
if(array($extensao, $_UP['extensao'])=== false){
    echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
}
                
else if($_UP['tamanho'] < $_FILES['arquivo3']['size']){
    echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
}
else{
    if($_UP['renomeia'] == true){
$salt = geraSaltAleatorio();
        $nome_final2 = $salt.'.jpg';
    }
    else{
        $nome_final2 = $_FILES['arquivo3']['name'];
    }
    if(move_uploaded_file($_FILES['arquivo3']['tmp_name'], $_UP['pasta'] . $nome_final2)){
    }
    else{
    }
}

// Se a foto estiver sido selecionada
$_UP['pasta'] = "../uploads/";
$_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
$_UP['extensao'] = array('jpg','png','gif');
$_UP['renomeia'] = true;

$_UP['erros'][0] = "Não Houve Erros";
$_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
$_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
$_UP['erros'][3] = "Upload feito parcialmente";
$_UP['erros'][4] = "Nao teve upload";

if($_FILES['arquivo1']['error'] != 0){
    die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['arquivo1']['erros']]);
    exit;
}
$img_nome = $_FILES['arquivo1']['name'];
$img_separador = explode('.',$img_nome);
$extensao = strtolower(end($img_separador));
if(array($extensao, $_UP['extensao'])=== false){
    echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
}
                
else if($_UP['tamanho'] < $_FILES['arquivo1']['size']){
    echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
}
else{
    if($_UP['renomeia'] == true){
$salt = geraSaltAleatorio();
        $nome_final1 = $salt.'.jpg';
    }
    else{
        $nome_final1 = $_FILES['arquivo1']['name'];
    }
    if(move_uploaded_file($_FILES['arquivo1']['tmp_name'], $_UP['pasta'] . $nome_final1)){
    }
    else{
    }
}

$_UP['pasta'] = "../uploads/";
$_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
$_UP['extensao'] = array('jpg','png','gif');
$_UP['renomeia'] = true;

$_UP['erros'][0] = "Não Houve Erros";
$_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
$_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
$_UP['erros'][3] = "Upload feito parcialmente";
$_UP['erros'][4] = "Nao teve upload";

if($_FILES['arquivo']['error'] != 0){
    die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['arquivo']['erros']]);
    exit;
}
$img_nome = $_FILES['arquivo']['name'];
$img_separador = explode('.',$img_nome);
$extensao = strtolower(end($img_separador));
if(array($extensao, $_UP['extensao'])=== false){
    echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
}
                
else if($_UP['tamanho'] < $_FILES['arquivo']['size']){
    echo "Arquivo muito grande, Envie um arquivo de até 2MB";
}
else{
    if($_UP['renomeia'] == true){
$salt = geraSaltAleatorio();
        $nome_final = $salt.'.jpg';
    }
    else{
        $nome_final = $_FILES['arquivo']['name'];
    }
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)){
    }
    else{
    }
}
$nome_imagem = $nome_final1;
$nome_imagem2 = $nome_final;
$nome_imagem3 = $nome_final2;
# Nome do arquivo1 html
if($tipo == 1){
    $pastaTipo = "ps3";
}
else if($tipo == 2){
    $pastaTipo = "ps4";
}
else if($tipo == 3){
    $pastaTipo = "wii";
}
else if($tipo == 4){
    $pastaTipo = "wii_u";
}
else if($tipo == 5){
    $pastaTipo = "3ds";
}
else if($tipo == 6){
    $pastaTipo = "xbox_360";
}
else if($tipo == 7){
    $pastaTipo = "xbox_one";
}
else if($tipo == 8){
    $pastaTipo = "pc";
}
$urlFinal = "../$pastaTipo/$url.php";
$urlBanco = "$pastaTipo/$url.php";



  
    $query = "INSERT INTO ARTIGO (TITULO_ARTIGO, CATEGORIA_ARTIGO, DESCRICAO_ARTIGO, CONTEUDO_ARTIGO, CONTEUDO2_ARTIGO, DATA_ARTIGO, HORA_ARTIGO, AUTOR_ARTIGO, IMAGEM1_ARTIGO,IMAGEM2_ARTIGO,IMAGEM_MINIATURA,URL_ARTIGO)
        VALUES('$nome', $tipo, '$descricao', '$conteudo', '$conteudo2', '$data', '$hora', '$autor', '$nome_imagem','$nome_imagem2','$nome_imagem3','$urlBanco')";
   
    if(mysql_query($query)){
    echo "Matéria inserida com sucesso!<br/>";
    echo "<a href=../$urlBanco><input type='button' value='Visualizar matéria'> </a>";
}
else{
    echo "Não Foi Possível Inserir a Matéria :( ";
    echo mysql_error();
}  
$corpo = '<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script type="text/javascript" src="../js/funcoes.js"> </script>
        <title></title>
    </head>
    <body>
        <section id="container">
            <?php
                include_once "../conexao/conecta.inc";
                include_once "../includes/funcoesUteis.inc";
                session_start();
            ?>
            <header id="cabecalho">
                <figure id="logo">
                    <a href="../index.php"> <img src="../imagens/logo001.png" alt="" id="img-logo"/>  </a>
                </figure>
                <?php
                include_once "../includes/menu.php";
                ?>
                <div id="login">
                    <fieldset id="frmLogin">
                        <?php
                            VerificaSessao2("");
                        ?>
                    </fieldset>
                </div>
                <?php
                include_once "../includes/busca.php";
                ?>
            </header>
            <article id="conteudo_materia">
                <div id="materia_conteudo">
                    <header id="titulo_materia">
                      <h3 class="texto_titulo">'.$nome.'</h3>
                    </header>
                    <figure class="imagem_materia">
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '."'%".$nome."%'".'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $urlImagem = $imagens2['."'IMAGEM1_ARTIGO'".'];
                echo '."'".'<img src='.'"../uploads/'."'".'.$urlImagem.'."'".'" class='.'"imagens"'.' alt='.'"imagem"'.'>'."'".';'.'
                    }
                    ?>
                    </figure>
                    <p class="texto_materia2">
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '."'%".$nome."%'".'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                echo $urlImagem = $imagens2['."'CONTEUDO_ARTIGO'".'];
                    }
                    ?>
                    </p>
                    <figure class="imagem_materia">   
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '."'%".$nome."%'".'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $urlImagem = $imagens2['."'IMAGEM2_ARTIGO'".'];
                echo '."'".'<img src='.'"../uploads/'."'".'.$urlImagem.'."'".'" class='.'"imagens"'.' alt='.'"imagem"'.'>'."'".';'.'
                    }
                    ?>
                    </figure>
                    <p class="texto_materia2">
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '."'%".$nome."%'".'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                echo $urlImagem = $imagens2['."'CONTEUDO2_ARTIGO'".'];
                    }
                    ?>
                    </p>
                    <footer id="autor_materia">
                        <figure class="imagem_autor"> 
                        <?php
                        echo "'."<div class='foto_usuario'>".'";
                $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = '.$codImagem_autor.'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                $nome = "default.jpg";            
                mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM, COD_IMAGEM_USUARIO)
                VALUES('."'".'$nome'."'".'",$_SESSION['."'".'code'."'".'].")");
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $urlImagem = $imagens2['."'URL_IMAGEM'".'];
                echo '."'".'<img src='.'"../uploads/'."'".'.$urlImagem.'."'".'" class='.'"imagem_autor2"'.' alt='.'"imagem"'.'>'."'".';'.'
                    }
                    ?>
                        </figure>
                        <p class="texto_autor">
                        </p>
                    </footer>
                </div>
            </article>
            <footer id="rodape">
                <?php
                    include_once "../includes/rodape.php";
                ?>
            </footer>            
        </section>
    </body>
</html>
';
# Texto a ser salvo no arquivo1
$formatacao = $corpo ;

#Criar o arquivo1
$fp = fopen($urlFinal , "w");
$fw = fwrite($fp, $formatacao);
