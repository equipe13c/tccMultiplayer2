<?php

function formata(){
    echo '<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">        
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <script type="text/javascript" src="js/jquery.js"> </script> 
        <script type="text/javascript" src="js/javascript.js"> </script> 
        <script type="text/javascript" src="js/slide.js"> </script>
        <script type="text/javascript" src="js/jquery.min.js"> </script>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <container id="container">
            <section id="secao">
                <header id="cabecalho">
                    <a href="index.php"> <div id="logo"> <img src="imagens/logo002.png" alt="" id="img-logo"/> </div> </a>
                    <nav id="menu-ps"> 
                        <ul class="ps">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-ps">
                                    <li><a href="#"> Personagens </a></li>
                                    <li><a href="#"> Gêneros </a></li>
                                    <li><a href="#"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Playstation </a>
                                <ul class="submenu-ps"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Nintendo </a>
                                <ul class="submenu-ps"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="#.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> XBOX </a>
                                <ul class="submenu-ps"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="#"> Outras Plataformas </a>
                                <ul class="submenu-ps"> 
                                    <li><a href="#"> Nintendinho </a></li>
                                    <li><a href="#"> Super Nintendo </a></li>
                                    <li><a href="#"> GameBoy </a></li>
                                    <li><a href="#"> Playstation 1 </a></li>
                                    <li><a href="#"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Login </a>
                                <ul class="submenu-ps">
                                    <li><a href="login_cadastro.php"> Login </a></li>
                                    <li><a href="login_cadastro.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>
                    <div id="propaganda1"><a href="#"><img src="imagens/propaganda.jpg" alt="" id="img-propaganda1" > </a></div>
                </header>        
                <div id="busca"> 
                    <input type="text" placeholder="Buscar" id="caixa-busca" /> 
                    <a href="busca.php"> <img src="imagens/lupa.jpg" alt="" id="lupa"> </a>
                </div>
                <article id="conteudo">   
                <div id="materias">
                    <a href="materia.php"> 
                        <div class="materias"> 
                            <img src="imagens/jogo-01.jpg" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia.php"> 
                        <div class="materias"> 
                            <img src="imagens/jogo-02.jpg" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia.php"> 
                        <div class="materias"> 
                            <img src="imagens/jogo-03.jpg" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia.php"> 
                        <div class="materias"> 
                            <img src="imagens/jogo-04.png" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia.php"> 
                        <div class="materias"> 
                            <img src="imagens/jogo-05.jpg" class="img-materia">
                        </div> 
                    </a>                   
                </div>
                <div id="coluna-lateral">
                    <div class="top"> Top Notícias 
                        <br/>
                        <a href="#" > Notícia 1 </a><br/> 
                        <a href="#" > Notícia 2 </a><br/>
                        <a href="#" > Notícia 3 </a><br/>
                        <a href="#" > Notícia 4 </a><br/>
                        <a href="#" > Notícia 5 </a><br/>
                        <a href="#" > Notícia 6 </a><br/>
                        <a href="#" > Notícia 7 </a><br/>
                        <a href="#" > Notícia 8 </a><br/>
                        <a href="#" > Notícia 9 </a><br/>
                        <a href="#" > Notícia 10 </a><br/>
                    </div><br/>
                    <div class="top"> Top Jogos 
                        <br/>
                        <a href="#" > Jogo 1 </a><br/> 
                        <a href="#" > Jogo 2 </a><br/>
                        <a href="#" > Jogo 3 </a><br/>
                        <a href="#" > Jogo 4 </a><br/>
                        <a href="#" > Jogo 5 </a><br/>
                        <a href="#" > Jogo 6 </a><br/>
                        <a href="#" > Jogo 7 </a><br/>
                        <a href="#" > Jogo 8 </a><br/>
                        <a href="#" > Jogo 9 </a><br/>
                        <a href="#" > Jogo 10 </a><br/>                    
                    </div><br/>
                    <div class="top">
                        <img src="imagens/propaganda2.jpg" id="propaganda2">                    
                    </div>
                </div>
                </article>                
                <footer id="rodape"> 
                    <div id="informacao">
                        <a href="quem_somos.php"> <div id="quem-somos"> Quem somos </div> </a>
                        <a href="contato.php"> <div id="contato"> Contato </div> </a>
                        <a href="escreva.php"> <div id="escreva"> Escreva uma Matéria </div> </a>
                        <a href="duvidas.php"> <div id="duvidas"> Dúvidas </div> </a>
                    </div>
                    <div id="outros-links">
                        <div id="colunas-rodape"> 
                            Colunas <br/>
                            <a href="colunas.php"> Coluna 1 </a> <br/>
                            <a href="colunas.php"> Coluna 2 </a> <br/>
                            <a href="colunas.php"> Coluna 3 </a> <br/>
                            <a href="colunas.php"> Coluna 4 </a> <br/>                            
                        </div>
                        <div id="plataformas"> 
                            Plataformas <br/>
                            <a href="ps3.php"> PS3 </a> <br/>
                            <a href="pc.php"> PC </a> <br/>
                            <a href="wii.php"> Wii </a> <br/>
                            <a href="xbox_360.php"> Xbox 360 </a> <br/>                            
                        </div>
                        <div id="series"> 
                            Séries <br/>
                            <a href="#"> Série 1 </a> <br/>
                            <a href="#"> Série 2 </a> <br/>
                            <a href="#"> Série 3 </a> <br/>
                            <a href="#"> Série 4 </a> <br/>
                        </div>
                        <div id="generos"> 
                            Gêneros <br/>
                            <a href="#"> Gênero 1 </a> <br/>
                            <a href="#"> Gênero 2 </a> <br/>
                            <a href="#"> Gênero 3 </a> <br/>
                            <a href="#"> Gênero 4 </a> <br/>
                        </div>
                    </div>
                    <div id="forum"> 
                        Conheça nosso Fórum <br/>
                        <a href="forum.php"> Pergunta 1 </a> <br/>
                        <a href="forum.php"> Pergunta 2 </a> <br/>
                        <a href="forum.php"> Pergunta 3 </a> <br/>
                        <a href="forum.php"> Pergunta 4 </a> <br/>                        
                    </div>
                </footer>
                </section>
        </container>
    </body>
</html>';
    
}
?>
