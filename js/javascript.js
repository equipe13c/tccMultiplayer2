$(function(){
    var liWidth = $("#galeria ul li").outerWidth(),
    speed = 3500,
    rotate = setInterval(auto, speed);    
    //Mostra os Botões
   $("#galeria").hover(function(){
       $("#buttons").fadeIn();
       clearInterval(rotate);
   }, function(){
       $("#buttons").fadeOut();
       rotate = setInterval(auto, speed);
    });
    //Próximo
    $(".next").click(function(e){
       e.preventDefault();
       $("#galeria ul").css({'width':'99999%'}).animate({left:-liWidth}, function(){
         $("#galeria ul li").last().after($("#galeria ul li").first());
         $(this).css({'left':0, 'width':'auto'});
       });
    });
    //Voltar 
    $(".prev").click(function(e){
       e.preventDefault();
       $("#galeria ul").css({'width':'99999%'}).animate({left:liWidth}, function(){
       $("#galeria ul li").first().before($("#galeria ul li").last().css({'margin-left':-liWidth}));
       $("#galeria ul li").first().css({'margin-left':'0'});
       $(this).css({'left':'0', 'width':'auto'});
       });
    });
    function auto(){
        $(".next").click();
    };
});











