<?php
include '../includes/funcoesUteis.inc';
include '../conexao/conecta.inc';
session_start();
function salvaLog($mensagem) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $acao = 11;
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', '$acao','".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql);
        }
        $mensagem = $_SESSION['nome'] . " Efeutou Logout";
        salvaLog($mensagem);
session_destroy();
echo '<script>
    location.href="../index.php"
</script>';
            
 
