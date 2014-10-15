<?php
session_start();
include "../conexao/conecta.inc";
include '../includes/funcoesUteis.inc';
function geraSaltAleatorio($tamanho = 6) {
return substr(md5(mt_rand()), 0, $tamanho); 
}
echo "<meta charset=UTF-8>";
$codigoArtigo = $_POST['codigoMateria'];
$tituloArtigo = $_POST['titulo_conteudo'];
$autor = $_SESSION['code'];
$descricaoArtigo = $_POST['descricao'];
$dataLancamento = $_POST['data_lancamento'];
$conteudoArtigo = $_POST['conteudo'];
$conteudoArtigo2 = $_POST['conteudo2'];
$tituloConteudoArtigo = $_POST['titulo_conteudo'];


// INICIO UPLOAD IMAGEM_CAPA
$_UP['pasta'] = "../uploads/";
$_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
$_UP['extensao'] = array('jpg','png','gif');
$_UP['renomeia'] = true;

$_UP['erros'][0] = "Não Houve Erros";
$_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
$_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
$_UP['erros'][3] = "Upload feito parcialmente";
$_UP['erros'][4] = "Nao teve upload";


if($_FILES['imagemCapa']['error'] != 0){
    die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['imagemCapa']['erros']]);
    exit;
}
$img_nome = $_FILES['imagemCapa']['name'];
$img_separador = explode('.',$img_nome);
$extensao = strtolower(end($img_separador));
if(array($extensao, $_UP['extensao'])=== false){
    echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
}
                
else if($_UP['tamanho'] < $_FILES['imagemCapa']['size']){
    echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
}
else{
    if($_UP['renomeia'] == true){
$salt = geraSaltAleatorio();
        $imgCapaname = $salt.'.jpg';
    }
    else{
        $imgCapaname = $_FILES['imagemCapa']['name'];
    }
    if(move_uploaded_file($_FILES['imagemCapa']['tmp_name'], $_UP['pasta'] . $imgCapaname)){
            // INICIO UPLOAD IMAGEM_MINIATURA
            $_UP['pasta'] = "../uploads/";
            $_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
            $_UP['extensao'] = array('jpg','png','gif');
            $_UP['renomeia'] = true;

            $_UP['erros'][0] = "Não Houve Erros";
            $_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
            $_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
            $_UP['erros'][3] = "Upload feito parcialmente";
            $_UP['erros'][4] = "Nao teve upload";
            if($_FILES['imagemMiniatura']['error'] != 0){
                die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['imagemMiniatura']['erros']]);
                exit;
            }
            $img_nome = $_FILES['imagemMiniatura']['name'];
            $img_separador = explode('.',$img_nome);
            $extensao = strtolower(end($img_separador));
            if(array($extensao, $_UP['extensao'])=== false){
                echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
            }

            else if($_UP['tamanho'] < $_FILES['imagemMiniatura']['size']){
                echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
            }
            else{
                if($_UP['renomeia'] == true){
            $salt = geraSaltAleatorio();
                    $imagemMiniaturaname = $salt.'.jpg';
                }
                else{
                    $imagemMiniaturaname = $_FILES['imagemMiniatura']['name'];
                }
                if(move_uploaded_file($_FILES['imagemMiniatura']['tmp_name'], $_UP['pasta'] . $imagemMiniaturaname)){
                    // INICIO UPLOAD IMAGEM_PRINCIPAL
                        $_UP['pasta'] = "../uploads/";
                        $_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
                        $_UP['extensao'] = array('jpg','png','gif');
                        $_UP['renomeia'] = true;

                        $_UP['erros'][0] = "Não Houve Erros";
                        $_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
                        $_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
                        $_UP['erros'][3] = "Upload feito parcialmente";
                        $_UP['erros'][4] = "Nao teve upload";
                        if($_FILES['imagemPrincipal']['error'] != 0){
                            die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['imagemPrincipal']['erros']]);
                            exit;
                        }
                        $img_nome = $_FILES['imagemPrincipal']['name'];
                        $img_separador = explode('.',$img_nome);
                        $extensao = strtolower(end($img_separador));
                        if(array($extensao, $_UP['extensao'])=== false){
                            echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
                        }

                        else if($_UP['tamanho'] < $_FILES['imagemPrincipal']['size']){
                            echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
                        }
                        else{
                            if($_UP['renomeia'] == true){
                        $salt = geraSaltAleatorio();
                                $imagemPrincipalname = $salt.'.jpg';
                            }
                            else{
                                $imagemPrincipalname = $_FILES['imagemPrincipal']['name'];
                            }
                            if(move_uploaded_file($_FILES['imagemPrincipal']['tmp_name'], $_UP['pasta'] . $imagemPrincipalname)){
                                // INICIO UPLOAD IMAGEM_GALERIA 
                                    $_UP['pasta'] = "../uploads/";
                                    $_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
                                    $_UP['extensao'] = array('jpg','png','gif');
                                    $_UP['renomeia'] = true;

                                    $_UP['erros'][0] = "Não Houve Erros";
                                    $_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
                                    $_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
                                    $_UP['erros'][3] = "Upload feito parcialmente";
                                    $_UP['erros'][4] = "Nao teve upload";
                                    if($_FILES['imagemGaleria']['error'] != 0){
                                        die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['imagemGaleria']['erros']]);
                                        exit;
                                    }
                                    $img_nome = $_FILES['imagemGaleria']['name'];
                                    $img_separador = explode('.',$img_nome);
                                    $extensao = strtolower(end($img_separador));
                                    if(array($extensao, $_UP['extensao'])=== false){
                                        echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
                                    }

                                    else if($_UP['tamanho'] < $_FILES['imagemGaleria']['size']){
                                        echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
                                    }
                                    else{
                                        if($_UP['renomeia'] == true){
                                    $salt = geraSaltAleatorio();
                                            $imagemGalerianame = $salt.'.jpg';
                                        }
                                        else{
                                            $imagemGalerianame = $_FILES['imagemGaleria']['name'];
                                        }
                                        if(move_uploaded_file($_FILES['imagemGaleria']['tmp_name'], $_UP['pasta'] . $imagemGalerianame)){
                                            // INICIO UPLOAD IMAGEM2_GALERIA
                                                $_UP['pasta'] = "../uploads/";
                                                $_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
                                                $_UP['extensao'] = array('jpg','png','gif');
                                                $_UP['renomeia'] = true;

                                                $_UP['erros'][0] = "Não Houve Erros";
                                                $_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
                                                $_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
                                                $_UP['erros'][3] = "Upload feito parcialmente";
                                                $_UP['erros'][4] = "Nao teve upload";
                                                if($_FILES['imagemGaleria2']['error'] != 0){
                                                    die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['imagemGaleria2']['erros']]);
                                                    exit;
                                                }
                                                $img_nome = $_FILES['imagemGaleria2']['name'];
                                                $img_separador = explode('.',$img_nome);
                                                $extensao = strtolower(end($img_separador));
                                                if(array($extensao, $_UP['extensao'])=== false){
                                                    echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
                                                }

                                                else if($_UP['tamanho'] < $_FILES['imagemGaleria2']['size']){
                                                    echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
                                                }
                                                else{
                                                    if($_UP['renomeia'] == true){
                                                $salt = geraSaltAleatorio();
                                                        $imagemGaleria2name = $salt.'.jpg';
                                                    }
                                                    else{
                                                        $imagemGaleria2name = $_FILES['imagemGaleria2']['name'];
                                                    }
                                                    if(move_uploaded_file($_FILES['imagemGaleria2']['tmp_name'], $_UP['pasta'] . $imagemGaleria2name)){
                                                        // INICIO UPLOAD IMAGEM3_GALERIA
                                                            $_UP['pasta'] = "../uploads/";
                                                            $_UP['tamanho'] = 1024 * 1024 * 2; //2MB;
                                                            $_UP['extensao'] = array('jpg','png','gif');
                                                            $_UP['renomeia'] = true;

                                                            $_UP['erros'][0] = "Não Houve Erros";
                                                            $_UP['erros'][1] = "O Arquivo é Maior do que o límite do php";
                                                            $_UP['erros'][2] = "Tamanho da imagem ultrapassou o límite exigido";
                                                            $_UP['erros'][3] = "Upload feito parcialmente";
                                                            $_UP['erros'][4] = "Nao teve upload";
                                                            if($_FILES['imagemGaleria3']['error'] != 0){
                                                                die("Não foi Possível alterar a imagem Devido a: <br/>". $_UP['erros'][$_FILES['imagemGaleria3']['erros']]);
                                                                exit;
                                                            }
                                                            $img_nome = $_FILES['imagemGaleria3']['name'];
                                                            $img_separador = explode('.',$img_nome);
                                                            $extensao = strtolower(end($img_separador));
                                                            if(array($extensao, $_UP['extensao'])=== false){
                                                                echo "Por Favor Escolha apenas imagens JPG, PNG e GIF";
                                                            }

                                                            else if($_UP['tamanho'] < $_FILES['imagemGaleria3']['size']){
                                                                echo "Arquivo muito grande, Envie um arquivo1 de até 2MB";
                                                            }
                                                            else{
                                                                if($_UP['renomeia'] == true){
                                                            $salt = geraSaltAleatorio();
                                                                    $imagemGaleria3 = $salt.'.jpg';
                                                                }
                                                                else{
                                                                    $imagemGaleria3 = $_FILES['imagemGaleria3']['name'];
                                                                }
                                                                if(move_uploaded_file($_FILES['imagemGaleria3']['tmp_name'], $_UP['pasta'] . $imagemGaleria3)){
                                                                    // INICIO UPLOAD IMAGEM3_GALERIA
                                                                        
                                                                        
                                                                               $sql = "UPDATE ARTIGO SET TITULO_ARTIGO = '$tituloArtigo', DATA_ARTIGO = '$dataLancamento', DESCRICAO_ARTIGO = '$descricaoArtigo', CONTEUDO_ARTIGO = '$conteudoArtigo', CONTEUDO_ARTIGO2 = '$conteudoArtigo2', TITULO_CONTEUDO_ARTIGO = '$tituloConteudoArtigo' WHERE ID_ARTIGO = $codigoArtigo";
                                                                               
                                                                               if(mysql_query($sql)){
                                                                                   $sql2 = "UPDATE IMAGENS_MATERIA SET IMAGEM_CAPA = '$imgCapaname', IMAGEM_PRINCIPAL = '$imagemPrincipalname', IMAGEM_MINIATURA = '$imagemMiniaturaname', IMAGEM_GALERIA = '$imagemGalerianame', IMAGEM_GALERIA2 = '$imagemGaleria2name', IMAGEM_GALERIA3 = '$imagemGaleria3' WHERE COD_MATERIA_IMAGEM = $codigoArtigo";
                                                                                   if(mysql_query($sql2)){
                                                                                       echo "Matéria Atualizada";
                                                                                   }
                                                                        }

                                                                    // FIM UPLOAD IMAGEM3_GALERIA
                                                                }
                                                                else{
                                                                }
                                                            }
                                                        // FIM UPLOAD IMAGEM3_GALERIA
                                                    }
                                                    else{
                                                    }
                                                }
                                            // FIM UPLOAD IMAGEM2_GALERIA
                                        }
                                        else{
                                        }
                                    }
                                // FIM UPLOAD IMAGEM_GALERIA
                            }
                            else{
                            }
                        }
                    // FIM UPLOAD IMAGEM_PRINCIPAL
                }
                else{
                }
            }
        //FIM UPLOAD IMAGEM_MINIATURA
    }
    else{
    }
}
//FIM UPLOAD IMAGEM_CAPA
