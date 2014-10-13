<!DOCTYPE html>
<html>
    <head> 
        <title> Zelda U</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../style/style.css"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
        <script type="text/javascript"> 
            onload = function(){
                document.getElementById("nav").style.backgroundColor = "#009FE3";
                document.getElementById("descricaoColunista").style.backgroundColor = "#009FE3";
                document.getElementById("search").style.backgroundColor = "#009FE3";
                document.getElementById("logar").style.borderBottom = "solid 5px #009FE3";
				document.getElementById("fundoDescricao").style.backgroundColor = "#CEECF5";
			
			};
        </script>
        
    </head> 
    <body> 
        <container id="container">
            <header id="header">
                <div id="fundoMateria">
                    <img src="../../img/JZQdnNc.jpg" alt="" id="imgFundo">
                </div>
                <nav id="nav">
                    <a href="#"> <div id="img-logo"><img src="../../img/logo001.png" alt="" id="logo"></div></a>
                    <div id='menu'>
                        <ul>
                            <li><a href='#'>Home</a></li>
                            <li><a href='#'>Colunas</a>
                                <ul>
                                    <li class='sub'><a href='#'>Séries</a></li>
                                    <li class='sub'><a href='#'>Personagens</a></li>
                                    <li class='sub'><a href='#'>Gêneros</a></li>
                                    <li class='sub'><a href='#'>Nostalgia</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>PlayStation</a>
                                <ul>                           
                                    <li class='sub'><a href='#'>PlayStation 3</a></li>
                                    <li class='sub'><a href='#'>PlayStation 4</a><li> 
                                    <li class='sub'><a href='#'>PlayStation Vita</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Nintendo</a>
                                <ul>                               
                                    <li class='sub'><a href='#'>Nintendo Wii</a></li>
                                    <li class='sub'><a href='#'>Nintendo Wii U</a></li>
                                    <li class='sub'><a href='#'>Nintendo 3DS</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Xbox</a>
                                <ul>
                                    <li class='sub'><a href='#'>Xbox 360</a></li>
                                    <li class='sub'><a href='#'>Xbox One</a></li> 
                                </ul>
                            </li>
                            <li><a href='#'>PC</a></li>                                 
                        </ul> 
                    </div>                                        
                    <div id="busca">
                        <a href="#"><img src="../../img/lupa.jpg" alt="" id="imagemBusca"></a>
                        <form method="get" action="/search" id="search">  
                            <input name="buscar" type="text" size="40" placeholder="  Buscar" />
                        </form>                                                
                    </div>                    
                </nav>                 
                <div id="logar">
                    <form method="post" id="login"> 
                        <img src="../../img/user.png" alt="" id="imgUsuario">
                        <label class="txtLogin"> Usuário: </label><input type="email" name="email"><br/><br/>
                        <label class="txtLogin"> Senha: </label><input type="password" name="senha"><br/><br/>
                        <a href="#" type="submit"> &nbsp; Entrar </a> <br/>
                        <a href="#"> &nbsp; Cadastre-se </a>
                    </form>
                </div>  
                
                <div id="iconesSociais">
                    
                </div>
            </header>            
            <article id="article">                 
                <section id="materia"> 
                    <div id="tituloMateriaNintendo"> <h1> Zelda U </h1></div>
                    <div id="tituloMateriaNintendo2"> </div>
                    <div id="imagemMateriaNintendo"> <img src="../../img/zelda_wii_u_link_1920x1080.jpg" alt="" height="100%" width="100%"></div>
                    <div id="fundoDescricao">
                    <div id="descricaoMateria">
                        <p> O mais novo game da saga The Legend of Zelda está chegando,sendo um dos grandes destaque da nintendo na E3 de 2014.</p> <br/>
                        <p> Plataforma: Nintendo WiiU </p> <br/>
                        <p> Data de Lançamento: 2015</p> <br/>
                        <p> Desenvolvedora: Nintendo </p> <br/>
                        <p> Avaliação: ***** </p> <br/>                      
                    </div> 
                    <div id="img-pequena-descricao">
			<img src="../../img/rating_pegi_18.gif" alt="" >
			<img src="../../img/rating_pegi_bad-lang.gif" alt=""  >
			<img src="../../img/rating_pegi_violence.gif" alt=""  >
		     </div>    
                    </div>
                    <div id="materiaTexto">
                        <h2> Qual será a nova trama para o grande heroí Link ?</h2>
                        <br/>
                        <p> <b>Zelda U</b> nome provissório,o mais novo game da saga The Legend of Zelda explorará um mundo de dimensões totalmente diferente dos anteriores.</p>
						<p> Ainda não sabemos muito sobre esta nova hístoria,tendo boatos de que o game se passa entre o Wind Waker e o Skyward Sword,por causa de sua roupa e até mesmo pelo cenário,sendo uma floresta vasta e aberta.</p>
						<p> Esperamos por mais informações!Confira o trailer do game.</p>
					</div>
                    <div id="galeriaMateria">   
                   <a href="#" > <img src="../../img/Wallpaper_WiiU_TheLegendOfZelda_1920x1080_03.jpg" alt="" id="galeria1"> </a>
				   <a href="#" > <img src="../../img/WiiU_Zelda_scrn04_E3.jpg" alt="" id="galeria2"> </a>
				   <a href="#" > <img src="../../img/Wallpaper_WiiU_TheLegendOfZelda_1440x900_01.jpg" alt="" id="galeria3"> </a>
                    </div>
					<br/>
					<div id="videoMateria">
                        <a href="#"><img src="../../img/Screenshot_6.png" alt="" id="videoTrailer"> </a>
                    </div> 
                    <div id="descricaoColunista"> 
						<br/>
					   <img src="../../img/tumblr_m7mlskMMCq1rsfehro1_500.jpg" alt="" id="img-colunista">
						<div id="descricao-colunista">
						<p><b>Nico di Angelo</b> é um dos integrantes da equipe 9Bits,responsável pelo projeto Multiplayer,atualmente é administrador do site e colunista,desde 2014,mas ainda está em fase de aprendizado. Pode ser encontrado nos livros da saga Percy Jackson e os Olimpianos:A Maldição do Titan,a Batalha do Labirinto e o Último Olimpiano,també pode ser encontrado na saga Os Heroís do Olimpo:O Filho de Netuno, A Marca de Atena, A Casa de Hades e no Sangue do olimpo. Para enviar mensagens é recomendado o uso de mensagem de Íris.</p>
                        </div>
						</div>
                </section>    
                <aside id="aside">
                    
                </aside>
            </article>
            <footer id="footer">
                <div id="linksRodape">
                    <div class="linksRodape"> 
                        <h1> Multiplayer </h1>
                        <a href="index.php"> Home </a> <br/>
                        <a href="quem_somos.php"> Quem Somos </a> <br/>
                        <a href="contato.php"> Contato </a> <br/>
                        <a href="escreva.php"> Escreva uma Matéria </a> <br/>
                        <a href="termos_uso.php"> Termos de Uso </a> <br/>
                        <a href="mapa_site.php"> Mapa do Site </a> <br/>
                    </div>
                    <div class="linksRodape">
                        <h1> Plataformas </h1>
                        <a href="ps3.php"> PS3 </a> <br/>
                        <a href="pc.php"> PC </a> <br/>
                        <a href="wii.php"> Wii </a> <br/>
                        <a href="xbox_360.php"> Xbox 360 </a> <br/>  
                        <a href="ps4.php"> PS4 </a> <br/>
                        <a href="3ds.php"> 3DS </a> <br/>
                        <a href="xbox_one.php.php"> Xbox One </a> <br/>
                        <a href="ps4.php"> PS4 </a> <br/>
                    </div>
                    <div class="linksRodape">
                        <h1> Séries </h1>
                        <a href="serie_mario.php"> Mario </a> <br/>
                        <a href="serie_batman.php"> Batman </a> <br/>
                        <a href="serie_mortal_kombat.php"> Mortal Kombat </a> <br/>
                        <a href="serie_god_of_war.php"> God of War </a> <br/>
                        <a href="serie_bioshock.php"> Bioshock </a> <br/>
                        <a href="serie_the_sims.php"> The Sims </a> <br/>
                        <a href="serie_legend_of_zelda.php"> Legend of Zelda </a> <br/>
                        <a href="serie_pokemon.php"> Pokémon </a> <br/>
                    </div>
                    <div class="linksRodape">
                        <h1> Gêneros </h1>
                        <a href="genero1.php"> Ação </a> <br/>
                        <a href="genero2.php"> FPS </a> <br/>
                        <a href="genero3.php"> Corrida </a> <br/>
                        <a href="genero4.php"> Terror </a> <br/>
                        <a href="genero4.php"> Plataforma </a> <br/>
                        <a href="genero4.php"> RPG </a> <br/>
                        <a href="genero4.php"> Aventura </a> <br/>
                        <a href="genero4.php"> Casual </a> <br/>
                    </div>
                </div>     
            </footer>
        </container>
    </body>
</html>