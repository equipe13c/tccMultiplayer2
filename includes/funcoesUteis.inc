<?php
function VerificaSessao(){
               if(isset($_SESSION["tipo"])){
                    $logado = true;
                    } 
                    else{
                    $logado = false;
                    }
                if(!($logado !== true)){
                if($_SESSION['tipo'] == '1'){
                echo '<div class="foto_usuario">';
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
                echo "<img src='uploads/$urlImagem' class='imgUsuario' alt='imagem'>";
                $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                $result = mysql_fetch_array($sql); 
                echo "<h1 id='nome_adm'>" . $result['APELIDO_USUARIO']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                    echo "<a href='admin/index.php'>Painel </a><br/>";
                    echo "<a href='admin/sair.php'>Logout </a><br/>";
                  echo '</div>';
                }
                if($_SESSION['tipo'] == '2'){
                  echo '<div class="foto_usuario">';
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
                echo "<img src='uploads/$urlImagem' class='imgUsuario' alt='imagem'>";
                $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                $result = mysql_fetch_array($sql); 
                echo "<h1 id='nome_adm'>" . $result['APELIDO_USUARIO']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                  echo "<a href='restrito/painel.php'>Perfil </a><br/>";
                  echo "<a href='restrito/sair.php'>Logout </a><br/>";
                echo '</div>';
                }
                if($_SESSION['tipo'] == '3'){
                  echo '<div class="foto_usuario">';
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
                echo "<img src='uploads/$urlImagem' class='imgUsuario' alt='imagem'>";
                $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                $result = mysql_fetch_array($sql); 
                echo "<h1 id='nome_adm'>" . $result['APELIDO_USUARIO']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                    echo "<a href='colunista/painel.php'>Perfil </a><br/>";
                    echo "<a href='colunista/index.php'>Nova Matéria </a><br/>";
                    echo "<a href='colunista/sair.php'>Logout </a><br/>";
                echo '</div>';
                }
                }
                else{
                    
                    echo '                    
                        <form name="formulario" action="login.php" method="post" id="login"> 
                        <img src="img/user.png" alt="" class="imgUsuario">
                        <label class="txtLogin"> Usuário: </label><input type="email" name="email"><br/><br/>
                        <label class="txtLogin"> Senha: </label><input type="password" name="senha"><br/><br/>
                        <div id="msglogin"></div>
                        <input type="submit" name="submit" class="btnLogin" value="Entrar"/><br/><br/>
                        <a class="linksLogin" href="cadastro.php">Cadastre-se </a>
                        <a class="linksLogin" href="esqueceuSenha.php">Esqueceu sua senha? </a>
                        </form>';
                }            
}
function VerificaSessao2(){
               if(isset($_SESSION["tipo"])){
                    $logado = true;
                    } 
                    else{
                    $logado = false;
                    }
                if(!($logado !== true)){
                if($_SESSION['tipo'] == '1'){
                echo '<div class="foto_usuario">';
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
                echo "<img src='../uploads/$urlImagem' class='imgUsuario' alt='imagem'>";
                $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                $result = mysql_fetch_array($sql); 
                echo "<h1 id='nome_adm'>" . $result['APELIDO_USUARIO']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                    echo "<a href='../admin/index.php'>Painel </a><br/>";
                    echo "<a href='../admin/sair.php'>Logout </a><br/>";
                  echo '</div>';
                }
                if($_SESSION['tipo'] == '2'){
                  echo '<div class="foto_usuario">';
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
                echo "<img src='../uploads/$urlImagem' class='imgUsuario' alt='imagem'>";
                $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                $result = mysql_fetch_array($sql); 
                echo "<h1 id='nome_adm'>" . $result['APELIDO_USUARIO']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                  echo "<a href='../restrito/painel.php'>Perfil </a><br/>";
                  echo "<a href='../restrito/sair.php'>Logout </a><br/>";
                echo '</div>';
                }
                if($_SESSION['tipo'] == '3'){
                  echo '<div class="foto_usuario">';
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
                echo "<img src='../uploads/$urlImagem' class='imgUsuario' alt='imagem'>";
                $sql = mysql_query("SELECT NOME_USUARIO, APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
                $result = mysql_fetch_array($sql); 
                echo "<h1 id='nome_adm'>" . $result['APELIDO_USUARIO']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                    echo "<a href='../colunista/painel.php'>Perfil </a><br/>";
                    echo "<a href='../colunista/index.php'>Nova Matéria </a><br/>";
                    echo "<a href='../colunista/sair.php'>Logout </a><br/>";
                echo '</div>';
                }
                }
                else{
                    
                    echo '                    
                        <form name="formulario" action="../login.php" method="post" id="login"> 
                        <img src="../img/user.png" alt="" class="imgUsuario">
                        <label class="txtLogin"> Usuário: </label><input type="email" name="email"><br/><br/>
                        <label class="txtLogin"> Senha: </label><input type="password" name="senha"><br/><br/>
                        <div id="msglogin"></div>
                        <input type="submit" name="submit" class="btnLogin" value="Entrar"/><br/><br/>
                        <a class="linksLogin" href="../cadastro.php">Cadastre-se </a>
                        <a class="linksLogin" href="../esqueceuSenha.php">Esqueceu sua senha? </a>
                        </form>';
                }            
}
function validaAutenticacao($link, $tipo){
    
    echo '<meta charset=UTF-8>';

    session_start();
if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])){
    if($tipo == '1'){
        
    }else{
    echo '<script> 
        alert("Acesso negado!\n Você não efetuouu login.")
    location.href="'.$link.'"
            </script>';
    }
}else{
    if($tipo == '1'){ include_once '../conexao/conecta.inc';
                      include_once '../classes/Bcrypt.class.php';}
    if($tipo == '2'){ include_once '../conexao/conecta.inc';
                      include_once '../classes/Bcrypt.class.php';}
    if($tipo == '3'){ include_once '../conexao/conecta.inc';
                      include_once '../classes/Bcrypt.class.php';}
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $query = "SELECT * FROM USUARIO WHERE EMAIL_USUARIO='$email'";
    $result = mysql_query($query);
    $totalUSUARIOs = mysql_num_rows($result);
    if($totalUSUARIOs !== 0){
        //testando senha
        $USUARIOs = mysql_fetch_assoc($result);
        $senhaBanco = $USUARIOs['SENHA_USUARIO'];
        $tipoBanco = $USUARIOs['TIPO_USUARIO']; 
        if (Bcrypt::check($senha, $senhaBanco)) {
   
        }else{
        session_destroy();            
        echo '<script> 
        alert("Acesso negado!\n Senha não confere.")
        location.href="'.$link.'"
         </script>';         
        }
        
    }else{
            session_destroy();
           // echo $totalUSUARIOs;
           echo '<script> 
       alert("Acesso negado!\n Email não confere.")
    location.href="'.$link.'"
           </script>';
            
        }
}
if($tipoBanco == '1'){

}
else{
if($tipoBanco == '2'){
if ($tipo !== $tipoBanco){
    echo '<script> 
       alert("Acesso negado!\n Você não tem permissão para acessar esta página!.")
    location.href="'.$link.'"
           </script>';
}
}
if($tipoBanco == '3'){
if ($tipo !== $tipoBanco){
    echo '<script> 
       alert("Acesso negado!\n Você não tem permissão para acessar esta página!.")
    location.href="'.$link.'"
           </script>';
}
}
}
}
function get_post_action($name){
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
function verificaADM(){
               if(isset($_SESSION["tipo"])){
                    $logado = true;
                    } 
                    else{
                    $logado = false;
                    }
                if(!($logado !== true)){
                   include_once 'adminLogado.php'; 
                }            
                else{
                 echo'<fieldset id="frmLogin"><form name="formulario" action="login.php" method="post" onsubmit="return validacao();"> 
                            <label class="stringLogin">E-mail: </label><input type="email" class="txtLogin" name="email" placeholder="E-mail de Acesso" /><br/>
                            <label class="stringLogin">Senha: </label><input type="password" class="txtLogin" name="senha" placeholder="Senha"/> <br/><br/>
                            <input type="submit" name="submit" id="btnLogin" value="Entrar"/>
                            <div id="msglogin"></div><br/><br/>
                        </form></fieldset>';
                }
}
function verificaCOL_RES(){
               if(isset($_SESSION["tipo"])){
                    $logado = true;
                    } 
                    else{
                    $logado = false;
                    }
                if(!($logado !== true)){
                if($_SESSION['tipo'] == '2'){
                  echo '<div class="foto_usuario">';
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
                echo "<img src='../uploads/$urlImagem' id='imagem_usuario' alt='imagem'>";
                echo "<h1 id='nome_adm'>" . $_SESSION['apelido']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                  echo "<a href='painel.php'>Perfil </a><br/>";
                  echo "<a href='sair.php'>Logout </a><br/>";
                echo '</div>';
                }
                if($_SESSION['tipo'] == '3'){
                  echo '<div class="foto_usuario">';
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
                echo "<img src='../uploads/$urlImagem' id='imagem_usuario' alt='imagem'>";
                echo "<h1 id='nome_adm'>" . $_SESSION['apelido']."</h1>";
                }
                echo '</div><br/><br/>';
                echo '<div class="links_usuario">';
                    echo "<a href='painel.php'>Perfil </a><br/>";
                    echo "<a href='index.php'>Nova Matéria </a><br/>";
                    echo "<a href='sair.php'>Logout </a><br/>";
                echo '</div>';
                }
                }
                else{
                      echo'<form name="formulario" action="login.php" method="post" onsubmit="return validacao();"> 
                            <label class="stringLogin">E-mail: </label><input type="email" class="txtLogin" name="email" placeholder="E-mail de Acesso" /><br/>
                            <label class="stringLogin">Senha: </label><input type="password" class="txtLogin" name="senha" placeholder="Senha"/> <br/><br/>
                            <input type="submit" name="submit" id="btnLogin" value="Entrar"/>
                            <div id="msglogin"></div><br/><br/>
                            <a class="linksLogin" href="esqueceuSenha.php"> Esqueceu sua senha? </a>
                            <a class="linksLogin" href="cadastro.php" >Cadastre-se</a>
                        </form>';
                }    
}
function verificaComment(){
    $sql = "SELECT * FROM COMENTARIO WHERE ID_MATERIA = ";
    echo '            <article id="comment" >
                <figure class="autor_comment"> </figure>
               <p class="comentario_materia"> </p>
            </article>';
}
function buscarDados($string){
    if($string == "nome"){
        $sql = mysql_query("SELECT NOME_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
        $result = mysql_fetch_array($sql); 
        echo $result['NOME_USUARIO'];
    }
    if($string == "apelido"){
         $sql = mysql_query("SELECT APELIDO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
         $result = mysql_fetch_array($sql); 
         echo $result['APELIDO_USUARIO']; 
    }
    if($string == "data"){
        $sql = mysql_query("SELECT DATA_NASCIMENTO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
        $result = mysql_fetch_array($sql);  
        $data = $result['DATA_NASCIMENTO']; 
        $ano = substr($data, 0, 4);
        $mes = substr($data, 5, 2);
        $dia = substr($data, 8, 2);
         echo "$dia / $mes / $ano";
    }
    if($string == "estado"){
        $sql = mysql_query("SELECT ESTADO_USUARIO FROM USUARIO WHERE COD_USUARIO =". $_SESSION['code']); 
        $result = mysql_fetch_array($sql);  
        echo $data = $result['ESTADO_USUARIO'];
    }
    if($string == "imgcapa"){
        $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$_SESSION['code'];
        $result = mysql_query($query);                
        $imagens = mysql_num_rows($result);
        if($imagens === 0){
        $nome = "defaultCapa.jpg";            
        mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM_CAPA, COD_IMAGEM_USUARIO)
        VALUES('$nome'".$_SESSION['code'].")");
        }
        else{
        $imagens2 = mysql_fetch_array($result); 
        $urlImagem = $imagens2['URL_IMAGEM_CAPA'];
        echo "<img src='../uploads/$urlImagem' alt='Imagem' id='imgCapasource'>";
        }
    
    }
    if($string == "imgcapa"){
        $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$_SESSION['code'];
        $result = mysql_query($query);                
        $imagens = mysql_num_rows($result);
        if($imagens === 0){
        $nome = "defaultCapa.jpg";            
        mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM_CAPA, COD_IMAGEM_USUARIO)
        VALUES('$nome'".$_SESSION['code'].")");
        }
        else{
        $imagens2 = mysql_fetch_array($result); 
        $urlImagem = $imagens2['URL_IMAGEM_CAPA'];
        echo "<img src='../uploads/$urlImagem' alt='Imagem' id='imgCapasource'>";
        }
    
    }
    if($string == "imgcapa"){
        $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$_SESSION['code'];
        $result = mysql_query($query);                
        $imagens = mysql_num_rows($result);
        if($imagens === 0){
        $nome = "defaultCapa.jpg";            
        mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM_CAPA, COD_IMAGEM_USUARIO)
        VALUES('$nome'".$_SESSION['code'].")");
        }
        else{
        $imagens2 = mysql_fetch_array($result); 
        $urlImagem = $imagens2['URL_IMAGEM_CAPA'];
        echo "<img src='../uploads/$urlImagem' alt='Imagem' id='imgCapasource'>";
        }
    
    }
    
}
function corpoMateria($corpo){
    $corpo = '';
}
function infosImagensMateria($string){

                if($string == "imagemgaleria1"){   
                    $query = "SELECT * FROM IMAGENS_MATERIA WHERE COD_MATERIA_IMAGEM = 1";
                    $result = mysql_query($query);                
                    $imagens = mysql_num_rows($result);
                    if($imagens === 0){
                    $nome = "defaultCapa.jpg";            
                    mysql_query("INSERT INTO IMAGENS_MATERIA(IMAGEM_CAPA, COD_MATERIA_IMAGEM)
                    VALUES('$nome','1')");
                    }
                    else{
                    $imagens2 = mysql_fetch_array($result); 
                    $urlImagem = $imagens2['IMAGEM_GALERIA'];
                    echo "<img src='../uploads/$urlImagem' alt='Imagem' class='imgGaleria'>";
                    }
                }
                if($string == "imagemgaleria2"){   
                    $query = "SELECT * FROM IMAGENS_MATERIA WHERE COD_MATERIA_IMAGEM = 1";
                    $result = mysql_query($query);                
                    $imagens = mysql_num_rows($result);
                    if($imagens === 0){
                    $nome = "defaultCapa.jpg";            
                    mysql_query("INSERT INTO IMAGENS_MATERIA(IMAGEM_CAPA, COD_MATERIA_IMAGEM)
                    VALUES('$nome','1')");
                    }
                    else{
                    $imagens2 = mysql_fetch_array($result); 
                    $urlImagem = $imagens2['IMAGEM_GALERIA2'];
                    echo "<img src='../uploads/$urlImagem' alt='Imagem' class='imgGaleria'>";
                    }
                }
                if($string == "imagemgaleria3"){   
                    $query = "SELECT * FROM IMAGENS_MATERIA WHERE COD_MATERIA_IMAGEM = 1";
                    $result = mysql_query($query);                
                    $imagens = mysql_num_rows($result);
                    if($imagens === 0){
                    $nome = "defaultCapa.jpg";            
                    mysql_query("INSERT INTO IMAGENS_MATERIA(IMAGEM_CAPA, COD_MATERIA_IMAGEM)
                    VALUES('$nome','1')");
                    }
                    else{
                    $imagens2 = mysql_fetch_array($result); 
                    $urlImagem = $imagens2['IMAGEM_GALERIA3'];
                    echo "<img src='../uploads/$urlImagem' alt='Imagem' class='imgGaleria'>";
                    }
                }
                if($string == "capa"){   
                    $query = "SELECT * FROM IMAGENS_MATERIA WHERE COD_MATERIA_IMAGEM = 1";
                    $result = mysql_query($query);                
                    $imagens = mysql_num_rows($result);
                    if($imagens === 0){
                    $nome = "defaultCapa.jpg";            
                    mysql_query("INSERT INTO IMAGENS_MATERIA(IMAGEM_CAPA, COD_MATERIA_IMAGEM)
                    VALUES('$nome','1')");
                    }
                    else{
                    $imagens2 = mysql_fetch_array($result); 
                    $urlImagem = $imagens2['IMAGEM_CAPA'];
                    echo "<img src='../uploads/$urlImagem' alt='Imagem' id='imgFundo'>";
                    }
                }
                if($string == "imgPrincipal"){   
                    $query = "SELECT * FROM IMAGENS_MATERIA WHERE COD_MATERIA_IMAGEM = 1";
                    $result = mysql_query($query);                
                    $imagens = mysql_num_rows($result);
                    if($imagens === 0){
                    $nome = "imgPrincipalDefault.jpg";            
                    mysql_query("INSERT INTO IMAGENS_MATERIA(IMAGEM_PRINCIPAL, COD_MATERIA_IMAGEM)
                    VALUES('$nome','1')");
                    }
                    else{
                    $imagens2 = mysql_fetch_array($result); 
                    $urlImagem = $imagens2['IMAGEM_PRINCIPAL'];
                    echo "<img src='../uploads/$urlImagem' alt='Imagem' id='imagemPrincipal'>";
                    }
                }
}
function  infoArtigos($string,$url){
    
    if($string == "dataLancamento"){
        $sql = "SELECT * FROM ARTIGO WHERE URL_ARTIGO = '$url'";
        $result = mysql_query($sql);                
        $info = mysql_num_rows($result);
        if($info === 0){
        }
        else{
        $informacao = mysql_fetch_array($result); 
        $infoRecebida = $informacao['DATA_LANCAMENTO'];
        $ano = substr($infoRecebida, 0, 4);
        echo $ano;
        }
    }
    if($string == "plataforma"){
        $sql = "SELECT * FROM ARTIGO WHERE URL_ARTIGO = '$url'";
        $result = mysql_query($sql);                
        $info = mysql_num_rows($result);
        if($info === 0){
        }
        else{
        $informacao = mysql_fetch_array($result); 
        $infoRecebida = $informacao['CATEGORIA_ARTIGO'];
        $query = "SELECT * FROM CATEGORIA WHERE COD_CATEGORIA = $infoRecebida";
        $resultado = mysql_query($query);
        $resultadoQuery = mysql_fetch_array($resultado);
        echo $resultadoQuery['NOME_CATEGORIA'];
        }
    }
    if($string == "titulo"){
        $sql = "SELECT * FROM ARTIGO WHERE URL_ARTIGO = '$url'";
        $result = mysql_query($sql);                
        $info = mysql_num_rows($result);
        if($info === 0){
        }
        else{
        $informacao = mysql_fetch_array($result); 
        $infoRecebida = $informacao['TITULO_ARTIGO'];
        echo "$infoRecebida";
        }
    }
    if($string == "descricao"){
        $sql = "SELECT * FROM ARTIGO WHERE URL_ARTIGO = '$url'";
        $result = mysql_query($sql);                
        $info = mysql_num_rows($result);
        if($info === 0){
        }
        else{
        $informacao = mysql_fetch_array($result); 
        $infoRecebida = $informacao['DESCRICAO_ARTIGO'];
        echo "$infoRecebida";
        }
    }
    if($string == "tituloConteudo"){
        $sql = "SELECT * FROM ARTIGO WHERE URL_ARTIGO = '$url'";
        $result = mysql_query($sql);                
        $info = mysql_num_rows($result);
        if($info === 0){
        }
        else{
        $informacao = mysql_fetch_array($result); 
        $infoRecebida = $informacao['TITULO_CONTEUDO_ARTIGO'];
        echo "$infoRecebida";
        }
    }
    if($string == "conteudoMateria"){
        $sql = "SELECT * FROM ARTIGO WHERE URL_ARTIGO = '$url'";
        $result = mysql_query($sql);                
        $info = mysql_num_rows($result);
        if($info === 0){
        }
        else{
        $informacao = mysql_fetch_array($result); 
        $infoRecebida = $informacao['CONTEUDO_ARTIGO'];
        echo "$infoRecebida";
        }
    }
}

?>
