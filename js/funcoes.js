function loginE(){
    document.getElementById('msglogin').innerHTML = "<h3 class='msgloginE'>Login Efetuado</h3>";
    setTimeout("window.location.href ='index.php'",3000);
}
function loginF(){
    document.getElementById('msglogin').innerHTML = "<h3 class='msgloginF'>Senha Inválida</h3>";
}
function loginF2(){
    document.getElementById('msglogin').innerHTML = "<h3 class='msgloginF'>Usuário Inválido</h3>";
}
function loginF3(){
    document.getElementById('msglogin').innerHTML = "<h3 class='msgloginF'>Usuário Desativado</h3>";
}
function loginF4(){
    document.getElementById('msglogin').innerHTML = "<h3 class='msgloginF'>Usuário Não Encontrado</h3>";
}