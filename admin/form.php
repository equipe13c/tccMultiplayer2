<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
<?php
include 'funcoesUteis.inc';

switch (get_post_action('geraLikes','gerarPalnocuDoVinicius')) {
        case 'geraLikes':
        //Inicio
            echo '<meta charset=UTF-8>';
            function geraLikes(){
                
            }
        //Fim
        break;
        case 'gerarPalnocuDoVinicius':
            //Inicio
            while ($pauNocuDOVINICIUS < 10000000000000000000000000)
        {
            $gerarPalnocuDoVinicius = 1;
            $gerarPalnocuDoVinicius++;
            if($gerarPalnocuDoVinicius == 10000000000000000000000000){
                $$gerarPalnocuDoVinicius = 0;
                echo $gerarPalnocuDoVinicius;
            }
            }
            //Fim
            break;
    default:
       echo "Nenhuma Função Definida";
}
?>
    </body>
</html>