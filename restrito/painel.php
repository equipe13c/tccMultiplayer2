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
        <script type="text/javascript"> 
            function alterarDados(){
                var alterar = document.getElementById("conteudo_infos");
                alterar.innerHTML = "";
            }
            function edit(valor,valor2){
                if(valor === "email"){
                    var email = document.getElementById("conteudo_infos");
                    email.innerHTML = '<form action="update.php" method="post">'
                            +'<table id="tabelaPerfil" class="editEmailTable">'
                        +'<tr class="linhasInfo" id="toplinha">'
                            +'<td class="icone2"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>'
                            +'<td class="info2">E-mail Atual</td>'
                            +'<td class="campos2"><input type="text" disabled="disabled" name="email_usuario" class="txtInfo2" id="emailInfo"  value="'+valor2+'"></td>'
                        +'</tr>'
                        +'<tr class="linhasInfo">'
                            +'<td class="icone2"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>'
                            +'<td class="info2">Novo e-mail</td>'
                            +'<td class="campos2"><input type="text" name="confirmemail_usuario" class="txtInfo2" id="emailInfo"  value="'+valor2+'"></td>'
                        +'<tr class="linhasInfo">'
                            +'<td class="icone2"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>'
                            +'<td class="info2">Confirmar e-mail</td>'
                            +'<td class="campos2"><input type="text" name="confirmemail_usuario" class="txtInfo2" id="emailInfo"  value="'+valor2+'"></td>'
                        +'</tr>'
                        +'<tr class="linhasInfo" id="bottomlinha">'
                            +'<td class="salvarEdit"></td>' 
                            +'<td class="salvarEdit">Salvar Alterações</td>'
                            +'<td class="salvarEdit">Retornar</td>'
                        +'</tr>'
                    +'</table>'
                    +'</form>';
                }
                else{
                    document.getElementById(valor+"Info").disabled = false;
                    document.getElementById(valor+"Info").style.backgroundColor = "#FFF";
                    document.getElementById(valor+"Info").style.color = "#000";
                    document.getElementById(valor+"Info").focus();
                }
            }
        </script>
        <title></title>
    </head>
    <body>
        <section id="container">
            <?php
                include_once '../conexao/conecta.inc';
                include_once '../includes/funcoesUteis.inc';
                session_start();
                
            ?>
            <header id="cabecalho">
                <?php
                include_once '../includes/menuR.php';
                validaAutenticacao('../index.php','2');
                ?>
            </header>
            <figure id="imgCapa">
                <img src="../imagens/capateste1.jpg" alt="Imagem" id="imgCapasource">
            </figure>
            <article id="conteudo">
                <div id="info_user">
                    <figure id="imgUser">
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
                    </figure>
                    <div id="nomeUser">
                        <?php
                        echo '<h1 class="username">'.$_SESSION['nome'].'<br/>( '.$_SESSION['apelido'].' )</h1>';
                        }
                        ?>
                    </div>
                </div>
                <nav id="menu2">
                    <ul>
                        <li> <a onclick="perfil()" href=""> Perfil </a></li>
                        <li> <a onclick="logAtividade()" href=""> Log De Atividades </a></li>
                        <li> <a onclick="alterarDados()" href="#"> Alterar Dados </a></li>
                    </ul>
                </nav>
                <article id="conteudo_infos">
                    <form action="update.php" method="post">
                        <table id="tabelaPerfil" class="bordasimples">
                            <tr class="linhasInfo">
                                <td class="icone"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>
                                <td class="info">Endereço de e-mail</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled" id="emailInfo"  value="<?php echo $_SESSION['email']; ?>"></td>
                                <td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('email', '<?php echo $_SESSION['email']; ?>')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"></td>
                                <td class="info">Nome completo</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="nomeInfo"  value="<?php echo $_SESSION['nome']; ?>"></td>
                                <td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('nome')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"></td>
                                <td class="info">Apelido</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="apelidoInfo"  value="<?php echo $_SESSION['apelido']; ?>"></td>
                                <td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('apelido')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"></td>
                                <td class="info">Data de nascimento</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="dataInfo"  value="10/02/1996"></td>
                                <td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('data')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"></td>
                                <td class="info">Cidade</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled" id="cidadeInfo"  value="Barueri"></td>
                                <td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('cidade')" href="#">Editar</a></td>                            
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