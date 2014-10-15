<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style2.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="../js/validacoes.js"> </script>
    </head>
    <body>
        <?php include "../conexao/conecta.inc";
include '../includes/funcoesUteis.inc';
validaAutenticacao('../index.php', '1');
?>
        <fieldset id="frmNovoUsuario">
        <form action="inserirUsuarioNovo.php" id="cadastroForm" method="post" name="formCad2"> 
             <label class="stringNovoUsuario">Nome:</label>            <input type="text" class="txtsNovoUsuario" size='35' onKeyPress="return letras();" name="nome" placeholder="Nome de Acesso"/> <br/>
             <label class="stringNovoUsuario">Apelido:</label>            <input type="text" class="txtsNovoUsuario" size='35' onKeyPress="return letras();" name="apelido" placeholder="Nome Apelido"/> <br/>
             <label class="stringNovoUsuario">E-mail:</label>          <input type="email" class="txtsNovoUsuario" size='35' name="email" id="email" placeholder="Digite seu E-mail"/> <br/>
             <label class="stringNovoUsuario">Confirmar E-mail:</label><input type="email" class="txtsNovoUsuario" size='35' id="confirmemail" name="confirmemail" placeholder="Digite seu E-mail"/> <br/>
             <label class="stringNovoUsuario">Senha:</label>           <input type="password" class="txtsNovoUsuario" size='35' name="senha" placeholder="Senha"/> <br/>
             <label class="stringNovoUsuario">Confirmar Senha:</label> <input type="password" class="txtsNovoUsuario" size='35'name="confirmsenha" placeholder="Confirmar Senha"/> <br/>
             <label class="stringNovoUsuario">Data Nasc.:</label>      <input type="text" class="txtsNovoUsuario" name="data"onKeyPress="MascaraData(formCad2.data);" maxlength="10" onBlur="validarData(formCad2.data);"> <br/>
             <label class="stringNovoUsuario">Tipo:</label>
             <select name="tipoUser">
                 <option value="2" selected>RES</option>
                    <option value="3">COL</option>
             </select><br/><br/>
             <input type="submit" name="cadastrar" value="Cadastrar"/>
             <input type="reset" name="limpar" value="Limpar"/>
        </form>
        </fieldset>
   </body>
</html>