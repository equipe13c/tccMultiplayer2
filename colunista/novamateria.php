<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="../js/funcoes.js"> </script>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/cycle.js"></script>
        <script type="text/javascript" src="../js/javascript.js"></script>
        <script type="text/javascript" src="../js/menu2.js"></script>
        <script type="text/javascript" src="../js/restrito.js"></script>
        <title></title>
    </head>
    <body >
        <section id="container" >
            <?php
                include_once '../conexao/conecta.inc';
                include_once '../includes/funcoesUteis.inc';
            ?>
            <header id="cabecalho">
                <?php
                include_once '../includes/menuR.php';
                validaAutenticacao('../index.php','3');
                ?>
            </header>
            <figure id="imgCapa">
                <?php
                buscarDados('imgcapa');
                ?>
                
            </figure>
            <article id="conteudo">
                <div id="info_user">    
                    <figure id="imgUser" onmouseover="mostrarCam();" onmouseout="retirarCam();" >
                        <?php
                            $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$_SESSION['code'];
                            $result = mysql_query($query);                
                            $imagens = mysql_num_rows($result);
                            if($imagens === 0){
                            $nome = "default.jpg";            
                            mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM, COD_IMAGEM_USUARIO)
                            VALUES('$nome'".$_SESSION['code'].")");
                            }
                            else{
                            $imagens2 = mysql_fetch_array($result); 
                            $urlImagem = $imagens2['URL_IMAGEM'];
                            echo "<img src='../uploads/$urlImagem' id='imagemUser' alt='imagem'>";
                        ?>
                        <figure id="imgCam" >                       
                            <a onmousedown="mostrarLinks();"  id="camera"></a>
                        </figure>
                        <nav id="menuImagem" >

                        </nav>    
                    </figure>
                    <div id="nomeUser">
                        <?php
                        $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                        $result = mysql_fetch_array($sql); 
                        echo '<h1 class="username">'.$result['NOME_USUARIO'].'<br/>( '.$result['APELIDO_USUARIO'].' )</h1>';
                        }
                        ?>
                    </div>
                </div>
                <nav id="menu2">
                    <?php 
                        include '../includes/menuC.php';
                    ?>
                </nav>
                <article id="conteudo_infos">
                    <form action="inserirMateriaNova.php" method="post" enctype="multipart/form-data">
                        <table id="tabelaPerfil" class="tableInserirMateria">
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgCapa" > </td>
                                <td class="texto"> Imagem Capa Matéria </td>
                                <td class="campos"> <input type="file" name="imagemCapa"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgTitulo" class="editImgPencil"> </td>
                                <td class="texto"> Título Matéria </td>
                                <td class="campos"> <input type="text" name="titulo" class="textos_materia" id="titulo_materia"></td>
                            </tr>  
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem Principal </td>
                                <td class="campos"> <input type="file" name="imagemPrincipal"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/joystick.png" alt="imgJoystick" id="jostyck"> </td>
                                <td class="texto"> Categoria </td>
                                <td class="campos"> <input type="checkbox" name="categoria[]" class="categoria" value="1">  PlayStation
                                     <input type="checkbox" name="categoria[]" class="categoria" value="2">  Nintendo
                                     <input type="checkbox" name="categoria[]" class="categoria" value="3">  XBOX
                                     <input type="checkbox" name="categoria[]" class="categoria" value="4">  PC
                                </td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/genero.png" alt="imgSerie" > </td>
                                <td class="texto"> Série </td>
                                <td class="campos"> <input type="text" name="serie" class="textos_materia" id="serie_materia"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem Miniatura </td>
                                <td class="campos"> <input type="file" name="imagemMiniatura"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Descrição </td>
                                <td class="campos"> <textarea name="descricao" class="descricao_materia"></textarea></td>
                            </tr> 
                            <tr>
                                <td class="icone"><img src="../imagens/data.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Data de Lançamento </td>
                                <td class="campos"> <input type="text" name="data_lancamento" class="textos_materia" ></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgSerie" class="editImgPencil"> </td>
                                <td class="texto"> Título Conteúdo </td>
                                <td class="campos"> <input type="text" name="titulo_conteudo" class="textos_materia" id="titulo_conteudo_materia" maxlength="100"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Conteúdo </td>
                                <td class="campos"> <textarea name="conteudo" class="conteudo_materia" maxlength="150"></textarea></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Conteúdo 2 </td>
                                <td class="campos"> <textarea name="conteudo2" class="conteudo_materia" maxlength="150"></textarea></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> URL Matéria </td>
                                <td class="campos"> <input type="text" name="url_materia" class="textos_materia" ></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem Galeria </td>
                                <td class="campos"> <input type="file" name="imagemGaleria"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem2 Galeria </td>
                                <td class="campos"> <input type="file" name="imagemGaleria2"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem3 Galeria </td>
                                <td class="campos"> <input type="file" name="imagemGaleria3"></td>
                            </tr>
                            <tr>
                                <td class="icone" colspan="2"><img src="../imagens/save.png" alt="imgImagem" > </td>
                                <td class="texto" ><input type="submit" value="Postar Matéria" name="postarMateria" class="designButton"> </td>
                                
                            </tr>
                        </table>
                    </form>    
                </article>                
            </article>
            <footer id="footer">
                <?php
                    include_once '../includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>