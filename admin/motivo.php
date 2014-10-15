<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style2.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php        
        include '../includes/funcoesUteis.inc';
        include '../conexao/conecta.inc';  
        include_once '../classes/Bcrypt.class.php';
        validaAutenticacao('../index.php', '1');
        
        
        
      
?>        
    </body>
</html>