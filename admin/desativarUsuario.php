<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
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
$data = $_POST['data'];
$code = $_POST['cod_user'];
$motivo = $_POST['motivo'];
function salvaLog($mensagem,$name,$senha,$data,$code,$motivo,$email) {
$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
$hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
$acao = 3;
$dia = date('Y-m-d');
$sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
    VALUES('$ip','$dia', '$hora', '$mensagem', $acao,'".$_SESSION['email']."',".$_SESSION['code'].")";
mysql_query($sql);
$query = "INSERT INTO DESATIVADOS(COD_DESATIVADO, NOME_DESATIVADO, EMAIL_DESATIVADO, 
    SENHA_DESATIVADO,DATA_NASCIMENTO, TEMPO_DESATIVADO, MOTIVO_DESATIVADO)
    VALUES($code,'$name','$email','$senha','$data','$hora','$motivo')";
mysql_query($query);

$sql2 = "UPDATE USUARIO SET TIPO_USUARIO = 4, USUARIO_DESATIVADO = $code WHERE COD_USUARIO = $code";
mysql_query($sql2);
echo "$mensagem às <b>$hora</b> do dia <b>$dia</b>";
}
echo "<meta charset=utf-8>";

    $mensagem = "Usuário $name Desativado";
salvaLog($mensagem,$name,$senha,$data,$code,$motivo,$email);
?>        
    </body>
</html>