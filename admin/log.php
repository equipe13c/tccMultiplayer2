<!DOCTYPE html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <script type="text/javascript" src="../js/funcoes.js"> </script>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
            <?php             
             include '../includes/funcoesUteis.inc';
             include '../conexao/conecta.inc';
             validaAutenticacao('','1');
             ?>
        <nav id="menuOpcoes">
            <ul class="home">
                <div id='busca'>
                    <form action='logUsuario.php' method='get'>
                    <label id='name_busca'>Busca de Usuário:</label>
                    <input type='text' onKeyPress='return letras();' name='nome_user_log'>
                    </form>
                </div>
                <li><a target='tela' href='listarLog.php?tipoLog=1'> Efetuaram Login </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=2'> Alteraram Foto </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=3'> Desativados </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=4'> Deletados </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=5'> Reativados </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=6'> Alteraram Senha </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=7'> Alteraram E-mail </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=8'> Alteraram Nome </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=9'> Comentaram Artigo </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=10'> Fez Cadastro </a></li>
                 <li><a target='tela' href='listarLog.php?tipoLog=11'> efetuou Logout </a></li>
            </ul>
        </nav>
             
    </body>
</html>
