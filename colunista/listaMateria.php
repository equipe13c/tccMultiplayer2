<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php include "../conexao/conecta.inc";
include '../includes/funcoesUteis.inc';
validaAutenticacao('../index.php', '3'); ?>
        <fieldset id="frmlistarMateria">
            <form action="visualizaMateria.php" method="post">
                <h4>Selecione o Tipo de Matéria:</h4>
                <select name="materia">
                    <option selected value="1"> Ps3 </option>
                    <option value="2"> Ps4          </option>
                    <option value="3"> Wii U        </option>
                    <option value="4"> Nintendo 3DS </option>
                    <option value="5"> Xbox 360     </option>
                    <option value="6"> Xbox One     </option>
                    <option value="7"> PC           </option>
                    
                </select><br/>
                <input type="submit" value="Listar">
            </form>
        </fieldset>
    </body>
</html>

