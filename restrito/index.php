<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/funcoes.js"> </script>
        <title></title>
    </head>
    <body>
        <section id="container">
            <?php
            include '../includes/funcoesUteis.inc';
                include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '3');
            ?>
            <header id="cabecalho">
                <figure id="logo">
                    <a href="index.php"> <img src="../imagens/logo001.png" alt="" id="img-logo"/>  </a>
                </figure>
                <?php
                include_once '../includes/menu.php';
                ?>
                <div id="login">
                    <fieldset id="frmLogin">
                        <?php
                            verificaCOL_RES();
                        ?>
                    </fieldset>
                </div>
                <?php
                include_once '../includes/busca.php';
                ?>
            </header>
            <article id="conteudo">
                
            </article>
            <footer id="rodape">
                <?php
                    include_once 'includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>