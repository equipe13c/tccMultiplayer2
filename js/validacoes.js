function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 

        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 

        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 

        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}
function mascaraInteiro(){
        if (event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
}
function MascaraData(data){
        if(mascaraInteiro(data)==false){
                event.returnValue = false;
        }       
        return formataCampo(data, '00/00/0000', event);
}
function letras(){
  tecla = event.keyCode;  
    if (tecla >= 33 && tecla <= 64 || tecla >= 91 && tecla <= 93 || tecla >= 123 && tecla <= 159 || tecla >= 162 && tecla <= 191 ){   
        return false;  
    }else{  
       return true;  
    }  
}
function letrasNumeros(){
  tecla = event.keyCode;  
    if (tecla >= 33 && tecla <= 47 || tecla >= 91 && tecla <= 93 || tecla >= 123 && tecla <= 159 || tecla >= 162 && tecla <= 191 ){   
        return false;  
    }else{  
       return true;  
    }  
}
function validarData(campo){
var expReg = /^(([0-2]\d|[3][0-1])\/([0]\d|[1][0-2])\/[1-2][0-9]\d{2})$/;
if ((campo.value.match(expReg)) && (campo.value!='')){
var dia = campo.value.substring(0,2);
var mes = campo.value.substring(3,5);
var ano = campo.value.substring(6,10);
if(mes==4 || mes==6 || mes==9 || mes==11 && dia > 30){
document.getElementById('msgData').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Data Inválido'> O mês contém no máximo 30 dias."; 
campo.value="";
} else{
if(ano%4!=0 && mes==2 && dia>28){
document.getElementById('msgData').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Data Inválido'> Fevereiro tem 28 dias";
campo.value="";
} else{
if(ano%4==0 && mes==2 && dia>29){
document.getElementById('msgData').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Data Inválido'> Fevereiro vai até dia 29";
campo.value="";
}
else{	
document.getElementById('msgData').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_valid.gif' alt='Data Válido'>";
}}}} else {
campo.focus();
document.getElementById('msgData').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Data Inválido'> Data Inválida";
}}
function atualizarCaptcha(){
    var campo = document.getElementById("captcha2");
    campo.innerHTML = '<img src="captcha.php?l=150&a=40&tf=18&ql=5"id="captcha" >';
}
function validacaoEmail(field,idiv) { 
    var email = document.getElementById('email').value;
    var confirm = document.getElementById('confirmemail').value;

    if(email == confirm){
    usuario = field.value.substring(0, field.value.indexOf("@")); 
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length); 
    if ((usuario.length >=1) && (dominio.length >=3) && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1)&& (dominio.lastIndexOf(".") < dominio.length - 1)) 
    { 
    document.getElementById('msgemail').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_valid.gif' alt='E-mail Válido'>";
    document.getElementById('msgConfirmemail').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_valid.gif' alt='E-mail Válido'>";} 
    else{ 
    document.getElementById('msgemail').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='E-mail Inválido'>E-mail Inválido";
    document.getElementById('msgConfirmemail').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='E-mail Inválido'>E-mail Inválido";
    } 
    }
    else{
    document.getElementById('msgemail').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='E-mail Inválido'>E-mails Diferentes";
    document.getElementById('msgConfirmemail').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='E-mail Inválido'>E-mails Diferentes";
    confirm.focus();
    }
    
} 
function validaSenha(){
    var senha = document.getElementById('senha').value;
    var confirmsenha = document.getElementById('confirmsenha').value;
    if((senha == '') && (confirmsenha == '')){
    document.getElementById('msgSenha').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Senha Inválida'>Senha Inválida";
    document.getElementById('msgConfirmsenha').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Senha Inválida'>Senha Inválida";
    }
    else{
    if(senha == confirmsenha){
    document.getElementById('msgSenha').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_valid.gif' alt='Senha Válida'>";
    document.getElementById('msgConfirmsenha').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_valid.gif' alt='Senha Válida'>";    
    }
    else{
    document.getElementById('msgSenha').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Senha Inválida'>Senhas Diferentes";
    document.getElementById('msgConfirmsenha').innerHTML="&nbsp;&nbsp;<img src='imagens/ico_unvalid.gif' alt='Senha Inválida'>Senhas Diferentes";
    confirmsenha.focus();
        }
    }
}

