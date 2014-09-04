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
                        Não Foi Possível Realizar o Cadastro<br/> 
                        Senha ou E-mail Diferente<br/>
                        <a href='javascript:history.go(-1)'>Voltar</a>
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
