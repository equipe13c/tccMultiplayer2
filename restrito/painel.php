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
                    email.innerHTML = '<form action="update.php" method="post" name="formCad">'
                            +'<table id="tabelaPerfil" class="editEmailTable">'
                        +'<tr class="linhasInfo" id="toplinha">'
                            +'<td class="icone2"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>'
                            +'<td class="info2">E-mail Atual</td>'
                            +'<td class="campos2"><input type="text" disabled="disabled" name="email_usuario"  class="txtInfo2" id="emailInfo"  value="'+valor2+'"></td>'
                            +'<td class="valid"></td>'
                        +'</tr>'
                        +'<tr class="linhasInfo">'
                            +'<td class="icone2"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>'
                            +'<td class="info2">Novo e-mail</td>'
                            +'<td class="campos2"><input type="text" name="confirmemail_usuario" class="txtInfo2" id="emailInfo1" onblur="validacaoEmail(formCad.confirmemail_usuario,'+"'"+ 'valid1 '+"'"+');"   value="'+valor2+'"></td>'
                            +'<td class="valid" id="valid1"></td>'
                        +'<tr class="linhasInfo">'
                            +'<td class="icone2"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>'
                            +'<td class="info2">Confirmar e-mail</td>'
                            +'<td class="campos2"><input type="text" name="confirmemail_usuario2" class="txtInfo2" id="emailInfo2" onblur="validacaoEmail(formCad.confirmemail_usuario2, '+"'"+ 'valid2 '+"'"+');"  value="'+valor2+'"></td>'
                            +'<td class="valid" id="valid2"> </td>'
                        +'</tr>'
                        +'<tr class="linhasInfo" id="bottomlinha">'
                            +'<td class="salvarEdit" colspan="2"><input type="submit" value="Salvar Alterações" name="salvarDados" class="designButton"></td>'
                            +'<td class="salvarEdit" colspan="2"><input type="submit" value="Retornar" name="Retornar" class="designButton"></td>'
                        +'</tr>'
                    +'</table>'
                    +'</form>';
                }
                if(valor === "nome"){
                    document.getElementById(valor+"Info").disabled = false;
                    document.getElementById(valor+"Info").style.backgroundColor = "#FFF";
                    document.getElementById(valor+"Info").style.color = "#000";
                    document.getElementById(valor+"Info").focus();
                    var salvar =  document.getElementById("salvarName");
                    salvar.innerHTML = '<input class="bsalvar" type="submit" value="Salvar" name="salvarNome">';
                }
                
                if(valor === "apelido"){
                    document.getElementById(valor+"Info").disabled = false;
                    document.getElementById(valor+"Info").style.backgroundColor = "#FFF";
                    document.getElementById(valor+"Info").style.color = "#000";
                    document.getElementById(valor+"Info").focus();
                    var salvar =  document.getElementById("salvarApel");
                    salvar.innerHTML = '<input class="bsalvar" type="submit" value="Salvar" name="salvarApelido">';
                }
                if(valor === "cidade"){
                    document.getElementById(valor+"Info").disabled = false;
                    document.getElementById(valor+"Info").style.backgroundColor = "#FFF";
                    document.getElementById(valor+"Info").style.color = "#000";
                    document.getElementById(valor+"Info").focus();
                    var salvar =  document.getElementById("salvarCid");
                    salvar.innerHTML = '<input class="bsalvar" type="submit" value="Salvar" name="salvarCidade">';
                }
            }
             
        </script>
         <script type="text/javascript">
            function validacaoEmail(field,idiv) { 
            var email = document.getElementById('emailInfo1').value;
            var confirm = document.getElementById('emailInfo2').value;

            if(email == confirm){
            usuario = field.value.substring(0, field.value.indexOf("@")); 
            dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length); 
            if ((usuario.length >=1) && (dominio.length >=3) && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1)&& (dominio.lastIndexOf(".") < dominio.length - 1)) 
            { 
            document.getElementById('valid1').innerHTML='<img src="../imagens/ico_valid.gif" alt="imgValid" class="validacaoOK">';
            document.getElementById('valid2').innerHTML='<img src="../imagens/ico_valid.gif" alt="imgValid" class="validacaoOK">';
            }
            else{ 
            document.getElementById('valid1').innerHTML='<img src="../imagens/ico_unvalid.gif" alt="imgValid" class="validacaoOK">';
            document.getElementById('valid2').innerHTML='<img src="../imagens/ico_unvalid.gif" alt="imgValid" class="validacaoOK">';
            } 
            }
            else{
            document.getElementById('valid1').innerHTML='<img src="../imagens/ico_unvalid.gif" alt="imgValid" class="validacaoOK">';
            document.getElementById('valid2').innerHTML='<img src="../imagens/ico_unvalid.gif" alt="imgValid" class="validacaoOK">';
            confirm.focus();
            }
            } 
            function mostrarCam(){
            var mostrar = document.getElementById("imgCam");
            mostrar.innerHTML = '<a onlick="mostrarLinks();" href="#"><img src="../imagens/camera.png" class="imgCamera" alt="imgCamera"></a>';
            }
            function retirarCam(){
            var retirar = document.getElementById("imgCam");
            retirar.innerHTML = '<img src="../imagens/fundoTransparente.png" class="imgCamera" alt="imgCamera">';
            }
            function mostrarLinks(){
            var mostrar = document.getElementById("imgCam");
            mostrar.innerHTML = '';    
            }
        </script>
        <title></title>
    </head>
    <body>
        <section id="container">
            <?php
                include_once '../conexao/conecta.inc';
                include_once '../includes/funcoesUteis.inc';
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
                            
                        </figure>
                        <nav>
                            <div id="menuImg">
                        <ul>
                            <li><a href='#'></a>
                                <ul>
                                    <li class='sub'><a href='#'>Remover</a></li>
                                    <li class='sub'><a href='#'>Alterar imagem</a></li>
                                </ul>
                        </ul>
                            </div>
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
                        include '../includes/menuR2.php';
                    ?>
                </nav>
                <article id="conteudo_infos">
                    <form action="update.php" method="post">
                        <table id="tabelaPerfil" class="bordasimples">
                            <tr class="linhasInfo">
                                <td class="icone"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>
                                <td class="info">Endereço de e-mail</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled" id="emailInfo"   value="<?php echo $_SESSION['email']; ?>"></td>
                                <td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('email', '<?php echo $_SESSION['email']; ?>')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"><img src="../imagens/nome.png" alt="imgNome" id="nomeImg"></td>
                                <td class="info">Nome completo</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="nomeInfo" name="nomeUser"  value="<?php $sql = mysql_query("SELECT NOME_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); $result = mysql_fetch_array($sql); echo $result['NOME_USUARIO']; ?>"></td>
                                <td class="edit" id="salvarName"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('nome')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"><img src="../imagens/nome.png" alt="imgNome" id="nomeImg"></td>
                                <td class="info">Apelido</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="apelidoInfo" name="apelidoUser" value="<?php $sql = mysql_query("SELECT APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); $result = mysql_fetch_array($sql); echo $result['APELIDO_USUARIO']; ?>"></td>
                                <td class="edit" id="salvarApel"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('apelido')" href="#">Editar</a></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"><img src="../imagens/data.png" alt="imgData" id="dataImg"></td>
                                <td class="info">Data de nascimento</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="dataInfo"  value="10/02/1996"></td>
                                <td class="edit"></td>                            
                            </tr>
                            <tr class="linhasInfo">
                                <td class="icone"><img src="../imagens/cidade.png" alt="imgCidade" id="cidadeImg"></td>
                                <td class="info">Cidade</td>
                                <td class="campos"><input type="text" class="txtInfo" disabled="disabled" id="cidadeInfo" name="cidadeUser" value="Barueri"></td>
                                <td class="edit" id="salvarCid"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('cidade')" href="#">Editar</a></td>                            
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