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
                    var salvar =  document.getElementById("salvarCampo");
                    salvar.innerHTML = '<input class="bsalvar" type="submit" value="Salvar" name="salvarNome">';
                }
                if(valor === "apelido"){
                    document.getElementById(valor+"Info").disabled = false;
                    document.getElementById(valor+"Info").style.backgroundColor = "#FFF";
                    document.getElementById(valor+"Info").style.color = "#000";
                    document.getElementById(valor+"Info").focus();
                    var salvar =  document.getElementById("salvarCampo");
                    salvar.innerHTML = '<input class="bsalvar" type="submit" value="Salvar" name="salvarApelido">';
                }
                if(valor === "cidade"){
                    document.getElementById(valor+"Info").disabled = false;
                    document.getElementById(valor+"Info").style.backgroundColor = "#FFF";
                    document.getElementById(valor+"Info").style.color = "#000";
                    document.getElementById(valor+"Info").focus();
                    var salvar =  document.getElementById("salvarCampo");
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
                        <img src="../imagens/camera.png" alt="camera" id="imgCamera">
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
                    <?php
                            function salvaLog($mensagem,$acao) {
                            $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
                            $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
                            $dia = date('Y-m-d');
                            $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
                            VALUES('$ip','$dia', '$hora', '$mensagem', $acao,'".$_SESSION['email']."',".$_SESSION['code'].")";
                            mysql_query($sql);
                            }
                    switch (get_post_action('salvarDados','Retornar','salvarNome','salvarApelido','salvarCidade')) {
                    case 'salvarNome':
                    //Inicio    
                        $nome = $_POST['nomeUser'];
                        $sql = "SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =".$_SESSION['code'];
                        $result = mysql_query($sql);
                        $totalbusca = mysql_num_rows($result);
                        $usuarioEmail = mysql_fetch_array($result);
                        if($totalbusca === 0){                           
                        }
                        else{
                             if($nome == $usuarioEmail['NOME_USUARIO']){
                                Echo "Nome Digitado, igual ao Nome atual";
                            }
                            else{
                                $sql2 = "UPDATE USUARIO SET NOME_USUARIO = '$nome' WHERE COD_USUARIO =" . $_SESSION['code'];
                                if(mysql_query($sql2)){
                                    echo "Nome Alterado<br/>";
                                    $apelido = $usuarioEmail['APELIDO_USUARIO'];
                                    $mensagem = "$apelido Alterou Nome";
                                    $acao = 8;
                                    salvaLog($mensagem,$acao);
                                    
                                }
                                else{
                                    echo "erro ao alterar Nome";
                                }
                            }
                        }
                    //Fim    
                    break;
                    case 'salvarApelido':
                    //Inicio    
                        $apelido1 = $_POST['apelidoUser'];
                        $sql = "SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =".$_SESSION['code'];
                        $result = mysql_query($sql);
                        $totalbusca = mysql_num_rows($result);
                        $usuarioEmail = mysql_fetch_array($result);
                        if($totalbusca === 0){                           
                        }
                        else{
                             if($apelido1 == $usuarioEmail['APELIDO_USUARIO']){
                                Echo "Apelido Digitado, igual ao Apelido atual";
                            }
                            else{
                                $sql2 = "UPDATE USUARIO SET APELIDO_USUARIO = '$apelido1' WHERE COD_USUARIO =" . $_SESSION['code'];
                                if(mysql_query($sql2)){
                                    echo "Apelido Alterado<br/>";
                                    $apelido = $usuarioEmail['APELIDO_USUARIO'];
                                    $mensagem = "$apelido Alterou Apelido";
                                    $acao = 12;
                                    salvaLog($mensagem,$acao);
                                    
                                }
                                else{
                                    echo "erro ao alterar Apelido";
                                }
                            }
                        }
                    //Fim    
                    break;
                    case 'salvarCidade':
                    //Inicio    
                        
                    //Fim    
                    break;
                    case 'salvarDados':
                    //Inicio
                        $email = $_POST['confirmemail_usuario'];
                        $confirmEmail = $_POST['confirmemail_usuario2'];
                        if($email == $confirmEmail){
                            $query = "SELECT EMAIL_USUARIO FROM USUARIO WHERE EMAIL_USUARIO = '$email'";
                            $result = mysql_query($query);
                            $totalResult = mysql_num_rows($result);
                            if($totalResult === 0){ 
                        $sql = "SELECT EMAIL_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =".$_SESSION['code'];
                        $result = mysql_query($sql);
                        $totalbusca = mysql_num_rows($result);
                        $usuarioEmail = mysql_fetch_array($result);
                        if($totalbusca === 0){                           
                        }
                        else{
                             if($email == $usuarioEmail['EMAIL_USUARIO']){
                                Echo "E-mail Digitado, igual ao email atual";
                            }
                            else{
                                $sql2 = "UPDATE USUARIO SET EMAIL_USUARIO = '$email' WHERE COD_USUARIO =" . $_SESSION['code'];
                                if(mysql_query($sql2)){
                                    echo "E-mail Alterado<br/>";
                                    $apelido = $usuarioEmail['APELIDO_USUARIO'];
                                    $mensagem = "$apelido Alterou E-mail";
                                    $acao = 7;
                                    salvaLog($mensagem,$acao);
                                    
                                }
                                else{
                                    echo "erro ao alterar E-mail";
                                }
                            }
                        }
                        }
                        else{
                           Echo "E-mail Já Existente";
                            echo "<a href=javascript:history.go(-1)> Voltar</a>"; 
                        }
                        }
                        else{
                            Echo "E-mail Diferentes";
                            echo "<a href=javascript:history.go(-1)> Voltar</a>";
                        }

                    //Fim
                    break;
                    case 'Retornar':
                        //Inicio
                            echo '<form action="update.php" method="post">';
                                echo '<table id="tabelaPerfil" class="bordasimples">';
                                    echo '<tr class="linhasInfo">';
                                        echo '<td class="icone"><img src="../imagens/mail.png" alt="imgMail" id="mailImg"></td>';
                                        echo '<td class="info">Endereço de e-mail</td>';
                                        echo '<td class="campos"><input type="text" class="txtInfo" disabled="disabled" id="emailInfo"  value="'.$_SESSION['email'].'"></td>';
                                        echo '<td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('."'email'".', '."'".$_SESSION['email']."'".')" href="#">Editar</a></td>';
                                    echo '</tr>';
                                    echo '<tr class="linhasInfo">';
                                        echo '<td class="icone"><img src="../imagens/nome.png" alt="imgNome" id="nomeImg"></td>';
                                        echo '<td class="info">Nome completo</td>';
                                        echo '<td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="nomeInfo"  value="'.$_SESSION['nome'].'"></td>';
                                        echo '<td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('."'nome'".')" href="#">Editar</a></td>';
                                    echo '</tr>';
                                        echo '<tr class="linhasInfo">';
                                        echo '<td class="icone"><img src="../imagens/nome.png" alt="imgNome" id="nomeImg"></td>';
                                        echo '<td class="info">Apelido</td>';
                                        echo '<td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="apelidoInfo"  value="'.$_SESSION['apelido'].'"></td>';
                                        echo '<td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('."'apelido'".')" href="#">Editar</a></td>';
                                    echo '<tr class="linhasInfo">';
                                        echo '<td class="icone"><img src="../imagens/data.png" alt="imgData" id="dataImg"></td>';
                                        echo '<td class="info">Data de nascimento</td>';
                                        echo '<td class="campos"><input type="text" class="txtInfo" disabled="disabled"  id="dataInfo"  value="10/02/1996"></td>';
                                        echo '<td class="edit"></td>';
                                    echo '</tr>';
                                    echo '<tr class="linhasInfo">';
                                        echo '<td class="icone"><img src="../imagens/cidade.png" alt="imgCidade" id="cidadeImg"></td>';
                                        echo '<td class="info">Cidade</td>';
                                        echo '<td class="campos"><input type="text" class="txtInfo" disabled="disabled" id="cidadeInfo"  value="Barueri"></td>';
                                        echo '<td class="edit"><img src="../imagens/edit.png" alt="editImage" class="editImage"><a onclick="edit('."'cidade'".')" href="#">Editar</a></td>';
                                    echo '</tr>';
                                echo '</table>';
                            echo '</form>';
                                    
                        //Fim
                        break;
                    default:
                       
                    }   
                    ?>
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