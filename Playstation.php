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
                document.getElementById("nav").style.backgroundColor = "#9C1006";
                document.getElementById("search").style.backgroundColor = "#9C1006";
                document.getElementById("logar").style.borderBottom = "solid 5px #9C1006";
                var imgLogo = document.getElementById("img-logo");
                imgLogo.innerHTML = '<img src="imagens/logo002.png" alt="LogoImagem" id="logo">';
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
                    ?>                    
                </div>
            </header>
            <article id="conteudo">
                        <?php
                            $query = "SELECT * FROM ARTIGO WHERE CATEGORIA_ARTIGO = 2 ";
                            $total_reg = "3";
                            $pc= isset($_GET['pagina'])? $_GET['pagina'] : "1";
                            $inicio = $pc - 1; 
                            $inicio = $inicio * $total_reg;
                            $limite = mysql_query("$query LIMIT $inicio,$total_reg"); 
                            $result = mysql_query($query);                
                            $tr = mysql_num_rows($result);
                            $tp = $tr / $total_reg;
                            if($tr === 0){
                                echo "Nenhum Artigo encontrado";
                            }
                            else{
                                while($artigos = mysql_fetch_array($limite))
                                {      
                                    $imagemMini = $artigos['IMAGEM_MINIATURA'];
                                    $descricaoArtigo = $artigos['DESCRICAO_ARTIGO'];
                                    $urlArtigo = $artigos['URL_ARTIGO'];
                                    echo '<div class="materias">';
                                    echo '<figure class="figura_materia">';
                                    echo '<a href="'.$urlArtigo.'"><img src="uploads/'.$imagemMini.'" class="imagem_miniatura_materia"></a>';
                                    echo '</figure>';
                                    echo '<p class="texto_materia">';
                                    echo '<a href="'.$urlArtigo.'">'.$descricaoArtigo .'</a>';
                                    echo '</p>';
                                    echo '</div>';
                            }
                            }
                            $anterior = $pc -1; 
   $proximo = $pc +1; 
   if ($pc>1) 
       { echo " <a href='?pagina=$anterior'><- Anterior</a> "; 
       
       } 
       if($pc ==1){/*CODIGO A APARECER PARA VOLTAR PAGINA*/} // Mostrando desabilitado 06/11/13 Rogério
       //echo "|"; 
       // Inicio lógica rogerio
       for($i=1;$i<=$tp;$i++)
       {
           echo "<a href=?pagina=$i>".$i . "</a>" . "    ";
       }
       // Fim lógia rogério
       if ($pc<$tp) 
           { echo " <a href='?pagina=$proximo'>Próxima -></a>"; 
           
           }
      if($pc == $tp){/*CODIGO A APARECER PARA PASSAR PAGINA*/} // Mostrando desabilitado 06/11/13 Rogério

                        ?>
            </article>
            <footer id="rodape">
                <?php
                    include_once 'includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>