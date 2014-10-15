<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style2.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
              <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
  
    </head>
    <body>
        <?php
include "../conexao/conecta.inc";
include '../includes/funcoesUteis.inc';
validaAutenticacao('../index.php', '1');
        $busca = "SELECT * FROM USUARIO WHERE COD_USUARIO=" . $_SESSION['code'];
        $resultado = mysql_query($busca);
        $totalUsers = mysql_num_rows($resultado);
        $users = mysql_fetch_assoc($resultado);
        echo "
        <div id=frmAlterarDados>
        <h4>Bem Vindo ". $users['NOME_USUARIO'] . "</h4>
        <form action='alterarDados.php' method='post' id='frmAlterar' enctype='multipart/form-data'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='cod_user' value='" . $users['COD_USUARIO'] . "'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='tipo' value='" . $users['TIPO_USUARIO'] . "'>
        <label class='stringAlterarDados'> Nome: </label><input type='text'  class='txtsAlterarDados' size='35' id='nome'  name='name' value='" . $users['NOME_USUARIO'] . "'><br/>
        <label class='stringAlterarDados'>Email: </label><input type='text'  class='txtsAlterarDados'  size='35' id='email' name='email' value='" . $users['EMAIL_USUARIO'] . "'><br/>
        <label class='stringAlterarDados'>Confirm. E-mail:</label><input type='text'  class='txtsAlterarDados' size='35' id='confirmemail' name='confirmemail' value='" . $users['EMAIL_USUARIO'] . "'><br/>
        <label class='stringAlterarDados'>Senha:</label><input type='password'  class='txtsAlterarDados' size='35' id='senha'  name='password'><br/>
        <label class='stringAlterarDados'>Confirm. Senha:</label><input type='password'  class='txtsAlterarDados' size='35' id='confirmsenha'  name='confirmsenha'><br/>    
        <label class='stringAlterarDados'>Alterar Foto:</label><input type='file' name='arquivo'><br/>
        <br/>
        <input type='submit' id='buttonAlterar' value='Atualizar'>
        </form>
        </div>";
        ?>        
    </body>
</html>


