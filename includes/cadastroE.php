<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/validacoes.js"> </script>
    </head>
    <body>
        <section id="container">
            <?php
                include_once 'includes/funcoesUteis.inc';
            ?>
            <header id="cabecalho">
                <figure id="logo">
                    <a href="index.php"> <img src="imagens/logo001.png" alt="" id="img-logo"/>  </a>
                </figure>
                <?php
                include_once 'includes/menu.php';
                ?>
                <div id="login">
                    <fieldset id="frmLogin">
                        <?php
                            VerificaSessao();
                        ?>
                    </fieldset>
                </div>
                <?php
                include_once 'includes/busca.php';
                ?>
            </header>
            <article id="conteudo">
                <div id="frmCadastro">
                    <p class="cadastroEfetuado">
                        Parabéns Seu Cadastro Foi Realizado.<br/>
                        Foi Enviado para o seu E-mail, um link para <br/>
                        confirmar o seu Cadastro.<br/><br/>
                        Caso Não tenha sido enviado um link de confirmação, <br/>
                        entre em contato com jonathan.webitb@gmail.com
                    </p>
                </div>
            </article>
            <footer id="rodape">
                <?php
                    include_once 'includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>
