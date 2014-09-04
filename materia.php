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
                include_once "conexao/conecta.inc";
                include_once "includes/funcoesUteis.inc";
                session_start();
            ?>
            <header id="cabecalho">
                <figure id="logo">
                    <a href="index.php"> <img src="imagens/logo001.png" alt="" id="img-logo"/>  </a>
                </figure>
                <?php
                include_once "includes/menu.php";
                ?>
                <div id="login">
                    <fieldset id="frmLogin">
                        <?php
                            VerificaSessao("");
                        ?>
                    </fieldset>
                </div>
                <?php
                include_once "includes/busca.php";
                ?>
            </header>
            <article id="conteudo_materia">
                <div id="materia_conteudo">
                    <header id="titulo_materia">
                      <h3 class="texto_titulo">  GTA V de volta em Los Santos.</h3>
                    </header>
                    <figure class="imagem_materia">                        
                    </figure>
                    <p class="texto_materia">
                    </p>
                    <figure class="imagem_materia">                        
                    </figure>
                    <p class="texto_materia">
                    </p>
                    <footer id="autor_materia">
                        <figure class="imagem_autor">                        
                        </figure>
                        <p class="texto_autor">
                        </p>
                    </footer>
                </div>
            </article>
            <footer id="rodape">
                <?php
                    include_once "includes/rodape.php";
                ?>
            </footer>            
        </section>
    </body>
</html>