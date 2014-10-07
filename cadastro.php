<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/funcoes.js"> </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
        <script type="text/javascript" src="js/validacoes.js"></script>
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
                var imgLogo = document.getElementById("img-logo");
                imgLogo.innerHTML = '<img src="imagens/logo001.png" alt="LogoImagem" id="logo">';
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
                <div id="frmCadastro">
                  <form action="inserirUser.php" id="cadastroForm" method="post" name="formCad"> 
                            <label class="vars"> Nome: </label>
                            <div class="validacoes" id="msName"></div>
                            <input type="text" class="txts" name="nome"  onKeyPress="return letras();" placeholder="Nome de Acesso" /> 
                            <br/>
                            <label class="vars"> Apelido: </label>
                            <div class="validacoes" id="msName"></div>
                            <input type="text" class="txts" name="apelido" maxlength="20"  onKeyPress="return letras();" placeholder="Apelido" /> 
                            <br/>
                            <label id="nameCad_email" class="vars">Email: </label>
                            <div class="validacoes" id="msgemail"></div>
                            <input  type="text" name="email" onblur="validacaoEmail(formCad.email,'msgemail');" class="txts"  id="email" placeholder="Digite seu E-mail" />
                            <br/>
                            <label class="vars">Confirmar Email: </label>
                            <div class="validacoes" id="msgConfirmemail"></div>
                            <input  type="text" name="confirmemail" onblur="validacaoEmail(formCad.confirmemail,'msgConfirmemail');" class="txts" id="confirmemail"  placeholder="Digite seu E-mail" /> <br/>
                            <label class="vars">Senha: </label>
                            <div class="validacoes" id="msgSenha"></div>
                            <input type="password" class="txts" name="senha" id="senha"  onblur="validaSenha();" placeholder="Senha" /> <br/>
                            <label class="vars">Confirmar Senha: </label>
                            <div class="validacoes" id="msgConfirmsenha"></div>
                            <input type="password" class="txts" name="confirmsenha" id="confirmsenha" onblur="validaSenha();"  placeholder="Confirmar Senha"/> <br/>
                            <label class="vars">Data Nasc. </label>
                            <div class="validacoes" id="msgData"></div>
                            <input type="text" class="txts" name="data" onKeyPress="MascaraData(formCad.data);" maxlength="10" onBlur="validarData(formCad.data);"> <br/>
                            <div id="captcha2">
                                <script type="text/javascript">
                                atualizarCaptcha();
                                </script>
                            </div>
                            <a id="atualizarCaptcha" onclick="atualizarCaptcha();"> Mudar Captcha </a>
                            <input type="text" id="captchaPalavra"class="txts"  name="palavra" maxlength="6" onKeyPress="return letrasNumeros();"> <br/> <br/> <br/> <br/>
                            <input type="submit" id="btnCad" class="btnCads" name="cadastrar" value="Cadastrar"/>
                            <input type="reset" class="btnCads" name="limpar" value="Limpar"/>
                        </form>
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
