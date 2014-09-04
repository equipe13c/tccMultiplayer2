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
                include_once 'conexao/conecta.inc';
                include_once 'includes/funcoesUteis.inc';
                session_start();
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
                            VerificaSessao('');
                        ?>
                    </fieldset>
                </div>
                <?php
                include_once 'includes/busca.php';
                ?>
            </header>
            <article id="conteudo">
                <p class="testeUsers">
                LINKS FUNCIONANDO <BR/>
                PLAY STATION >> PS3 E PS4 <BR/>
                NINTENDO > WII, WII U E 3D <BR/>
                XBOX > XBOX 360 E XBOX ONE <BR/>
                PC <BR/>
                
                TESTEM CADASTRO >  
                <BR/>
                <b>ADMS:</b><BR/>
                <b>Jow:</b> jonathan@gmail.com<BR/>
                <b>Vinicius:</b> vinicius@gmail.com<BR/>
                <b>Gabi:</b> gabi@gmail.com<BR/>
                <b>Lari:</b> lari@gmail.com<BR/>
                <b>Jessica:</b> jessica@gmail.com<BR/>
                <b>Joao:</b> joao@gmail.com<BR/>
                <b>Lucas:</b> lucas@gmail.com<BR/>
                <b>Alessandro:</b> alessandro@gmail.com<BR/>
                <b>josimar:</b> josimar@gmail.com<BR/><BR/>
                
                <b>COLUNISTAS:</b><BR/>
                <b>Jow:</b> jonathan.col@gmail.com<BR/>
                <b>Vinicius:</b> vinicius.col@gmail.com<BR/>
                <b>Gabi:</b> gabi.col@gmail.com<BR/>
                <b>Lari:</b> lari.col@gmail.com<BR/>
                <b>Jessica:</b> jessica.col@gmail.com<BR/>
                <b>Joao:</b> joao.col@gmail.com<BR/>
                <b>Lucas:</b> lucas.col@gmail.com<BR/>
                <b>Alessandro:</b> alessandro.col@gmail.com<BR/>
                <b>josimar:</b> josimar.col@gmail.com<BR/><BR/>
                
                 <b>SENHAS:</b> 123
                </p>
            </article>
            <footer id="rodape">
                <?php
                    include_once 'includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>