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
                    <?php
                    $nomeMateria = $_POST['nomeMateria'];
                    $codigoMateria = $_POST['codigoMateria'];
                    $sql = "SELECT * FROM ARTIGO WHERE ID_ARTIGO = $codigoMateria";
                    $total = mysql_query($sql);
                    $totalResult = mysql_num_rows($total);
                    if($totalResult === 0){
                        echo "Nenhum Artigo Encontrado!";
                    }
                    else{
                        $result = mysql_fetch_array($total);
                        $idArtigo = $result['ID_ARTIGO'];
                        $tituloArtigo = $result['TITULO_ARTIGO'];
                        $descricaoArtigo = $result['DESCRICAO_ARTIGO'];
                        $dataLancamento = $result['DATA_ARTIGO'];
                        $conteudoArtigo = $result['CONTEUDO_ARTIGO'];
                        $conteudoArtigo2 = $result['CONTEUDO_ARTIGO2'];
                        $tituloConteudoArtigo = $result['TITULO_CONTEUDO_ARTIGO'];
                        
                        $query = "SELECT * FROM IMAGENS_MATERIA WHERE COD_MATERIA_IMAGEM = $idArtigo";
                        $resultado = mysql_query($query);
                        $total = mysql_fetch_array($resultado);
                        $capa = $total['IMAGEM_CAPA'];
                        $principal = $total['IMAGEM_PRINCIPAL'];
                        $mini = $total['IMAGEM_MINIATURA'];
                        $galeria1 = $total['IMAGEM_GALERIA'];
                        $galeria2 = $total['IMAGEM_GALERIA2'];
                        $galeria3 = $total['IMAGEM_GALERIA3'];
                        
                        ?>

                    <form action="alterarMateria.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="codigoMateria" value="<?php echo $idArtigo; ?>">
                        <table id="tabelaPerfil" class="tableInserirMateria">
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgCapa" > </td>
                                <td class="texto"> Imagem Capa Matéria </td>
                                <td class="campos"><?php echo '<img src="../uploads/'.$capa.'" alt="Imagem Capa" class="editImagens">'; ?></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgCapa" > </td>
                                <td class="texto"> Nova Imagem Capa </td>
                                <td class="campos"> <input type="file" name="imagemCapa"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgTitulo" class="editImgPencil"> </td>
                                <td class="texto"> Título Matéria </td>
                                <td class="campos"> <input type="text" name="titulo" class="textos_materia" value="<?php echo $tituloArtigo; ?>" id="titulo_materia"></td>
                            </tr>  
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem Principal </td>
                                <td class="campos"> <?php echo '<img src="../uploads/'.$principal.'" alt="Imagem Capa" class="editImagens">'; ?></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Nova Imagem Principal </td>
                                <td class="campos"> <input type="file" name="imagemPrincipal"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem Miniatura </td>
                                <td class="campos"> <?php echo '<img src="../uploads/'.$mini.'" alt="Imagem Capa" class="editImagens">'; ?></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Nova Imagem Miniatura </td>
                                <td class="campos"> <input type="file" name="imagemMiniatura"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Descrição </td>
                                <td class="campos"> <textarea name="descricao" class="descricao_materia" ><?php echo $descricaoArtigo; ?></textarea></td>
                            </tr> 
                            <tr>
                                <td class="icone"><img src="../imagens/data.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Data de Lançamento </td>
                                <td class="campos"> <input type="text" name="data_lancamento" class="textos_materia" value="<?php echo $dataLancamento; ?>" ></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgSerie" class="editImgPencil"> </td>
                                <td class="texto"> Título Conteúdo </td>
                                <td class="campos"> <input type="text" name="titulo_conteudo" value="<?php echo $tituloConteudoArtigo; ?>" class="textos_materia" id="titulo_conteudo_materia" maxlength="100"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Conteúdo </td>
                                <td class="campos"> <textarea name="conteudo" class="conteudo_materia"  maxlength="150"><?php echo $conteudoArtigo; ?></textarea></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/pencil.png" alt="imgDescrição" class="editImgPencil"> </td>
                                <td class="texto"> Conteúdo 2 </td>
                                <td class="campos"> <textarea name="conteudo2" class="conteudo_materia" maxlength="150"><?php echo $conteudoArtigo2; ?></textarea></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem Galeria </td>
                                <td class="campos"> <?php echo '<img src="../uploads/'.$galeria1.'" alt="Imagem Capa" class="editImagens">'; ?></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Nova Imagem Galeria </td>
                                <td class="campos"> <input type="file" name="imagemGaleria"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto">  Imagem2 Galeria </td>
                                <td class="campos"><?php echo '<img src="../uploads/'.$galeria2.'" alt="Imagem Capa" class="editImagens">'; ?></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Nova Imagem2 Galeria </td>
                                <td class="campos"> <input type="file" name="imagemGaleria2"></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Imagem3 Galeria </td>
                                <td class="campos"> <?php echo '<img src="../uploads/'.$galeria3.'" alt="Imagem Capa" class="editImagens">'; ?></td>
                            </tr>
                            <tr>
                                <td class="icone"><img src="../imagens/picture.png" alt="imgImagem" > </td>
                                <td class="texto"> Nova Imagem3 Galeria </td>
                                <td class="campos"> <input type="file" name="imagemGaleria3"></td>
                            </tr>
                            <tr>
                                <td class="icone" colspan="2"><img src="../imagens/save.png" alt="imgImagem" > </td>
                                <td class="texto" ><input type="submit" value="Atualizar Matéria" name="postarMateria" class="designButton"> </td>
                            </tr>
                        </table>
                        <?php
                                            }
                    ?>
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
