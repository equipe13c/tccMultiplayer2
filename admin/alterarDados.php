<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style2.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php        
        include '../includes/funcoesUteis.inc';
        include '../conexao/conecta.inc';  
        include_once '../classes/Bcrypt.class.php';
        validaAutenticacao('../index.php', '1');
        
        
$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['password'];
$code = $_POST['cod_user'];
$tipo = $_POST['tipo'];
$apelido = $_POST['apelido'];

        function salvaLog($mensagem) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 6,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql);
        $sql3 = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 8,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql3);
        $sql2 = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 7,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql2);
        }

        
$sql = "UPDATE USUARIO SET NOME_USUARIO = '$name', APELIDO_USUARIO='$apelido',  EMAIL_USUARIO = '$email', SENHA_USUARIO = '$senha' WHERE COD_USUARIO = $code";
  if(mysql_query($sql)){
    echo "Dados Atualizados<br/>";
    $mensagem = "Usuário $apelido";
    salvaLog($mensagem);
}
else{
    echo "Erro Ao Atualizar Dados";
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
function geraSaltAleatorio($tamanho = 6) {
return substr(md5(mt_rand()), 0, $tamanho); 
}
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
$nome = $nome_final;
$sql = "UPDATE IMAGEM_USUARIO SET URL_IMAGEM = '$nome' WHERE COD_IMAGEM_USUARIO =" . $code;
if(mysql_query($sql)){
    echo "Imagem Atualizada<br/>";
    echo "<a href=listar.php?tipoUser=$tipo>Voltar</a>";
    $mensagem = "$apelido Alterou à Foto";
    salvaLog($mensagem);
    
}
else{
    echo "erro atualizar imagem";
}

        ?>        
    </body>
</html>


