<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="imagens/icone001.png" >
        <script type="text/javascript" src="js/funcoes.js"> </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
        <script type="text/javascript">             
            onload = function(){
                var imgMiniLogo = document.getElementById("imgMiniLogo");
                var imgLogo = document.getElementById("img-logo");                
                imgMiniLogo.innerHTML = '<img src="imagens/logosReduzidos001.png" alt="" id="miniLogo">';
                imgLogo.innerHTML = '<img src="imagens/logo001.png" alt="" id="logo">';
                document.getElementById("nav").style.backgroundColor = "#00989E";
                document.getElementById("navReduzido").style.backgroundColor = "#00989E";                
                document.getElementById("botaoLogin").style.backgroundColor = "#00989E";
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
            <header id="cabecalho"  ondragstart="return false">
                <?php
                include_once 'includes/menu.php';
                ?>
                <div id="logar">
                    <?php
                        VerificaSessao('');
                    ?>                    
                </div>
            </header>
            <article id="conteudo">
                <div id="galeria">  
                    <div id="botoesGaleria">
                        <a href="#" id="prev"> <img src="imagens/previous.png" alt=""> </a>
                        <a href="#" id="next"> <img src="imagens/next.png" alt=""> </a>
                    </div>
                    <div id="slide">
                        <?php
                                            buscarMateriasSlide();
                        ?>    
                    </div>                
                </div>  
 <div id="materias">
                        <a href="#">
                            <div class="materiaPrincipal">                                
                                    <div id="descricaoImagemPrincipal"> 
                                        <p> Saiba porque os times brasileiros não estarão presentes no novo FIFA 15. </p>
                                    </div>
                                    <img src="imagens/fifa-slide.jpg" alt="" id="imagemMaterias">                        
                            </div>
                        </a>
                        <div id="materiasPequenas">
                            <a href="#">
                                <div class="materias">                                
                                        <div id="descricaoImagem"> 
                                            <p> Descrição do JogoDescrição do JogoDescrição do JogoDescrição do JogoDescrição do </p>
                                        </div>
                                        <img src="imagens/gta-materia.jpg" alt="" id="imagemMaterias">                        
                                </div>
                            </a>
                            <a href="#">
                                <div class="materias">                                
                                        <div id="descricaoImagem"> 
                                            <p> Descrição do JogoDescrição do JogoDescrição do JogoDescrição do JogoDescrição do </p>
                                        </div>
                                        <img src="imagens/gta-materia.jpg" alt="" id="imagemMaterias">                        
                                </div>
                            </a>
                            <a href="#">
                                <div class="materias">                                
                                        <div id="descricaoImagem"> 
                                            <p> Descrição do JogoDescrição do JogoDescrição do JogoDescrição do JogoDescrição do </p>
                                        </div>
                                        <img src="imagens/gta-materia.jpg" alt="" id="imagemMaterias">                        
                                </div>
                            </a>
                            <a href="#">
                                <div class="materias">                                
                                        <div id="descricaoImagem"> 
                                            <p> Descrição do JogoDescrição do JogoDescrição do JogoDescrição do JogoDescrição do </p>
                                        </div>
                                        <img src="imagens/gta-materia.jpg" alt="" id="imagemMaterias">                        
                                </div>
                            </a>
                            <a href="#">
                                <div class="materias">                                
                                        <div id="descricaoImagem"> 
                                            <p> Descrição do JogoDescrição do JogoDescrição do JogoDescrição do JogoDescrição do </p>
                                        </div>
                                        <img src="imagens/gta-materia.jpg" alt="" id="imagemMaterias">                        
                                </div>
                            </a>
                            <a href="#">
                                <div class="materias">                                
                                        <div id="descricaoImagem"> 
                                            <p> Descrição do JogoDescrição do JogoDescrição do JogoDescrição do JogoDescrição do </p>
                                        </div>
                                        <img src="imagens/gta-materia.jpg" alt="" id="imagemMaterias">                        
                                </div>
                            </a>  
                        </div> 
                    </div>    
                    <aside id="aside1">
                        <?php
                        buscarMateriasAside2();
                        ?>
                    </aside> 
                <div id="voltarTopo">
                    <a href="" class="subir">
                        <img src="imagens/topo.png" alt="">
                        <p> Voltar ao topo </p>
                    </a>                    
                </div>
            </article>
            <footer id="footer">
                <?php
                    include_once 'includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>
