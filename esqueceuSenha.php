<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/funcoes.js"> </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
        <script type="text/javascript"> 
            $(document).ready(function(){
               $('#slide').before('<img id="controleGaleria">').cycle({
                   fx: 'scrollHorz',
                   pause: true,
                   timeout: 6000,
                   next: '#next',
                   prev: '#prev'
               }); 
            });           
            
            onload = function(){
                document.getElementById("nav").style.backgroundColor = "#00989E";
                document.getElementById("search").style.backgroundColor = "#00989E";
                document.getElementById("logar").style.borderBottom = "solid 5px #00989E";
            };
        </script>
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
                <?php
                include_once 'includes/menu.php';
                ?>
                <div id="logar">
                    
                        <?php
                            VerificaSessao('');
                        ?>-->
                    
                </div>
                <?php
                include_once 'includes/busca.php';
                ?>
            </header>
            <article id="conteudo">
                                          <?php
                                include 'conexao/conecta.inc';
                           ?>
                       <form action="enviarSenha.php" method="post">
                            <p id="tag_rec"> Recuperar Senha</p><br/><br/>
                            <label id="tag_email_rec">E-mail:</label><input id="rec_email" type="email" name="email" required><br/>
                            <input type="submit" id="btnRec" value="Recuperar">
                       </form> 
            </article>
            <footer id="rodape">
                <?php
                    include_once 'includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>
