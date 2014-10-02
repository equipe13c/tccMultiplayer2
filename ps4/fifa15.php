<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script type="text/javascript" src="../js/funcoes.js"> </script>
        <title></title>
    </head>
    <body>
        <section id="container">
            <?php
                include_once "../conexao/conecta.inc";
                include_once "../includes/funcoesUteis.inc";
                session_start();
            ?>
            <header id="cabecalho">
                <figure id="logo">
                    <a href="../index.php"> <img src="../imagens/logo001.png" alt="" id="img-logo"/>  </a>
                </figure>
                <?php
                include_once "../includes/menu.php";
                ?>
                <div id="login">
                    <fieldset id="frmLogin">
                        <?php
                            VerificaSessao2("");
                        ?>
                    </fieldset>
                </div>
                <?php
                include_once "../includes/busca.php";
                ?>
            </header>
            <article id="conteudo_materia">
                <div id="materia_conteudo">
                    <header id="titulo_materia">
                      <h3 class="texto_titulo">FIFA 15</h3>
                    </header>
                    <figure class="imagem_materia">
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '%FIFA 15%'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $urlImagem = $imagens2['IMAGEM1_ARTIGO'];
                echo '<img src="../uploads/'.$urlImagem.'" class="imagens" alt="imagem">';
                    }
                    ?>
                    </figure>
                    <p class="texto_materia2">
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '%FIFA 15%'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                echo $urlImagem = $imagens2['CONTEUDO_ARTIGO'];
                    }
                    ?>
                    </p>
                    <figure class="imagem_materia">   
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '%FIFA 15%'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $urlImagem = $imagens2['IMAGEM2_ARTIGO'];
                echo '<img src="../uploads/'.$urlImagem.'" class="imagens" alt="imagem">';
                    }
                    ?>
                    </figure>
                    <p class="texto_materia2">
                <?php
                $query = "SELECT * FROM ARTIGO WHERE TITULO_ARTIGO LIKE '%FIFA 15%'";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                ECHO "Nenhuma imagem encontrada";
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                echo $urlImagem = $imagens2['CONTEUDO2_ARTIGO'];
                    }
                    ?>
                    </p>
                    <footer id="autor_materia">
                        <figure class="imagem_autor"> 
                        <?php
                        echo "<div class='foto_usuario'>";
                $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = 20";
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                $nome = "default.jpg";            
                mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM, COD_IMAGEM_USUARIO)
                VALUES('$nome'",$_SESSION['code'].")");
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $urlImagem = $imagens2['URL_IMAGEM'];
                echo '<img src="../uploads/'.$urlImagem.'" class="imagem_autor2" alt="imagem">';
                    }
                    ?>
                        </figure>
                        <p class="texto_autor">
                        </p>
                    </footer>
                </div>
            </article>
            <footer id="rodape">
                <?php
                    include_once "../includes/rodape.php";
                ?>
            </footer>            
        </section>
    </body>
</html>
