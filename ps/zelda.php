<!DOCTYPE html>
<html>
    <head> 
        <title> Zelda U</title>
        <meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="../js/funcoes.js"> </script>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/cycle.js"></script>
        <script type="text/javascript" src="../js/javascript.js"></script>
        <script type="text/javascript" src="../js/menu2.js"></script>
        <script type="text/javascript" src="../js/restrito.js"></script>
        <script type="text/javascript"> 
            onload = function(){
                document.getElementById("nav").style.backgroundColor = "#009FE3";
                document.getElementById("imgPrincipal").style.backgroundColor = "#009FE3";
                document.getElementById("tituloMateria").style.backgroundColor = "#009FE3";
                document.getElementById("descricaoMateria").style.backgroundColor = "#CEECF5";
                document.getElementById("search").style.backgroundColor = "#009FE3";
                document.getElementById("logar").style.borderBottom = "solid 5px #009FE3";
			
			};
        </script>
        
    </head> 
<body>
        <section id="container">
            <?php
                include_once '../conexao/conecta.inc';
                include_once '../includes/funcoesUteis.inc';
                session_start();
            ?>
            <header id="cabecalho">
                <?php
                include_once '../includes/menuPS.php';
                ?>
            <figure id="imgCapa">
                <?php
                infosImagensMateria('capa');
                ?>
                
            </figure>
                <div id="logar">
                    <?php
                        VerificaSessao2('');
                    ?>                    
                </div>

            </header>



            <article id="conteudo">
                <figure id="imgPrincipal">
                    <?php
                        infosImagensMateria('imgPrincipal');
                    ?>
                </figure>
                <div id="tituloMateria">
                    <p class="editTitulo">
                    <?php
                        infoArtigos('titulo','nintendo/zelda.php');
                    ?>
                    </p>
                </div>
                <div id="descricaoMateria">
                    <p class="editDescricao">
                    <?php
                        infoArtigos('descricao','nintendo/zelda.php');
                    ?>
                    </p>
                    <p class="editPlataforma">
                    <?php
                        echo "<b>Desenvolvedora:</b>    ";
                        infoArtigos('plataforma','nintendo/zelda.php');
                    ?>
                    </p>
                    <p class="editDatalancamento">
                    <?php
                        echo "<b>Data de Lançamento:</b>    ";
                        infoArtigos('dataLancamento','nintendo/zelda.php');
                    ?>
                    </p>
                </div>
                <div id="conteudoMateria">
                    <p class="editTituloconteudo">
                    <?php
                        infoArtigos('tituloConteudo','nintendo/zelda.php');
                    ?>
                    </p>
                    <p class="ediConteudoMateria">
                    <?php
                        infoArtigos('conteudoMateria','nintendo/zelda.php');
                    ?>
                    </p>
                </div>
                <div id="galeriaImagens">
                    <figure class="imagensGaleria">
                        <?php
                            infosImagensMateria('imagemgaleria1');
                        ?>
                    </figure>
                    <figure class="imagensGaleria">
                        <?php
                            infosImagensMateria('imagemgaleria2');
                        ?>
                    </figure>
                    <figure class="imagensGaleria">
                        <?php
                            infosImagensMateria('imagemgaleria3');
                        ?>
                    </figure>
                </div>
            </article>
            <footer id="footer">
                <?php
                    include_once '../includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>