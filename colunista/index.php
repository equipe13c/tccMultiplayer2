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
            include '../includes/funcoesUteis.inc';
                include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '3');
             $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$_SESSION['code'];
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
                if($imagens === 0){
                $nome = "default.jpg";            
                mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM, COD_IMAGEM_USUARIO)
                VALUES('$nome'".$_SESSION['code'].")");
                }
                else{
                $imagens2 = mysql_fetch_array($result); 
                $codImagem = $imagens2['COD_IMAGEM_USUARIO'];
                } 
            ?>
            <header id="cabecalho">
                <div id="login">
                    <fieldset id="frmLogin">
                        <?php
                            verificaCOL_RES();
                        ?>
                    </fieldset>
                </div>
            </header>
            <article id="conteudo">
                <fieldset id="frmNovaMateria">
                    <form name="formulario" action="inserirMateriaNova.php" enctype="multipart/form-data" id="cadastroForm" method="post" onSubmit="return validar(); "> 
                    <label class="stringNovaMateria"> Nome: </label>  <input type="text" class="txtsNovaMateria" size='35' name="nomeMateria" placeholder="Nome da Matéria"/> <br/>
                    <br/> <label class="stringNovaMateria" id='nameCategoria'> Categoria: </label>
             <select class="txtsNovaMateria" name="categoriaMateria">
                        <option selected value="1" id="Ps3"> Ps3 </option>
                        <option value="2" id="Ps4"> Ps4 </option>
                        <option value="3" id="Wii_U"> Wii</option>
                        <option value="4" id="Wii_U"> Wii U</option>
                        <option value="5" id="Wii_U"> 3DS</option>
                        <option value="6" id="360"> Xbox 360 </option>
                        <option value="7" id="x_one"> Xbox One </option>
                        <option value="8" id="pc"> Pc </option>
                    </select>
                    <input type="checkbox" class="txtsRadioNovaMateria" name="categoria[]" value="2" id='check3'/><label class="stringRadioNovaMateria"> PS4 </label>
                    <input type="checkbox" class="txtsRadioNovaMateria" name="categoria[]" value="1"/><label class="stringRadioNovaMateria"> PS3 </label>
                    <input type="checkbox" class="txtsRadioNovaMateria" name="categoria[]" value="5"/><label class="stringRadioNovaMateria"> 3DS </label>
                    <input type="checkbox" class="txtsRadioNovaMateria" name="categoria[]" value="6"/><label class="stringRadioNovaMateria"> XBOX_360 </label>
                    <input type="checkbox" class="txtsRadioNovaMateria" name="categoria[]" value="7"/><label class="stringRadioNovaMateria"> XBOX_ONE </label>
                    <br/><br/>
                    <input type="checkbox" class="txtsRadioNovaMateria2" name="categoria[]" id='check1' value="5"/><label class="stringRadioNovaMateria2"> PC </label>
                    <input type="checkbox" class="txtsRadioNovaMateria2" name="categoria[]" value="6"/><label class="stringRadioNovaMateria2"> Wii </label>
                    <input type="checkbox" class="txtsRadioNovaMateria2" name="categoria[]" value="7"/><label class="stringRadioNovaMateria2"> Wii_U </label>
                    <input type="checkbox" class="txtsRadioNovaMateria2" name="categoria[]" value="7"/><label class="stringRadioNovaMateria2"> Outras Plataformas </label>
                    <br/>
             <label class="stringNovaMateria"> Imagem Miniatura: </label><input type="file" class="txtsNovaMateria" name="arquivo3"/><br/><br/>
             <label class="stringNovaMateria"> Descrição: </label> <textarea class="txtsNovaMateria"  rows="3" cols="35" name="descricao" id="descricao" > </textarea> <br/>
             <label id="text_image" class="stringNovaMateria"> Imagem1:      </label><br/><br/><input type="file" class="txtsNovaMateria" name="arquivo"/><br/><br/>
             <label class="stringNovaMateria"> Conteúdo:  </label><textarea class="txtsNovaMateria"  cols="50" rows="50" name="conteudo" id="text_1" > </textarea> <br/><br/>
             <label id="text_image2" class="stringNovaMateria"> Imagem2:      </label><br/><br/><br/><br/><input type="file" class="txtsNovaMateria" name="arquivo1"/><br/><br/>
             <label class="stringNovaMateria"> Conteúdo2:  </label><textarea class="txtsNovaMateria"  cols="50" rows="50" name="conteudo2" id="text_2" > </textarea> <br/>
             <input type="hidden" readonly="readonly" class="txtsNovaMateria" name="dataMateria" value="<?php echo date('Y-m-d'); ?>"/> <br/>
             <input type="hidden" readonly="readonly" class="txtsNovaMateria" name="nome_url_autor" value="<?php echo $codImagem; ?>"/> <br/>
            <input type="hidden"  readonly='readonly' class="txtsNovaMateria" name="horaMateria" value="<?php echo date('H:i:s'); ?>" /> 
            <input type="hidden" class="txtsNovaMateria" name="autor" value="<?php $_SESSION['email']; ?>"/> <br/>
            <br/><label class="stringNovaMateria"> Url:      </label><input type="text" class="txtsNovaMateria" name="url"/> <br/>
            <br/>
             <input type="submit" class="btnMats" name="cadastrar" value="Postar Matéria"/>
             <input type="reset" class="btnMats" name="limpar" value="Limpar"/>
        </form>
        </fieldset>                
            </article>         
            <footer id="rodape">
                <?php
                    include_once '../includes/rodape.php';
                ?>
            </footer>            
        </section>
    </body>
</html>