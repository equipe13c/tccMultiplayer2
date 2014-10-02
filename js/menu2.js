//Menu Dropdown
(function($) {

  $.fn.menu2maker = function(options) {
      
      var menu2 = $(this), settings = $.extend({
        title: "menu2",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        menu2.prepend('<div id="menu2-button">' + settings.title + '</div>');
        $(this).find("#menu2-button").on('click', function(){
          $(this).toggleClass('menu2-opened');
          var mainmenu2 = $(this).next('ul');
          if (mainmenu2.hasClass('open')) { 
            mainmenu2.hide().removeClass('open');
          }
          else {
            mainmenu2.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu2.find('ul').show();
            }
          }
        });

        menu2.find('li ul').parent().addClass('sub');

        multiTg = function() {
          menu2.find(".sub").prepend('<span class="submenu2-button"></span>');
          menu2.find('.submenu2-button').on('click', function() {
            $(this).toggleClass('submenu2-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else menu2.addClass('dropdown');

        if (settings.sticky === true) menu2.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            menu2.find('ul').show();
          }

          if ($(window).width() <= 768) {
            menu2.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$(document).ready(function() {
  $("#menu2").menu2maker({
    title: "Menu",
    format: "multitoggle"
  });

  $("#menu2").prepend("<div id='menu2-line'></div>");

var foundActive = false, activeElement, linePosition = 0, menu2Line = $("#menu2 #menu2-line"), lineWidth, defaultPosition, defaultWidth;

$("#menu2 > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#menu2 > ul > li").first();
}

defaultWidth = lineWidth = activeElement.width();

defaultPosition = linePosition = activeElement.position().left;

menu2Line.css("width", lineWidth);
menu2Line.css("left", linePosition);

$("#menu2 > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menu2Line.css("width", lineWidth);
  menu2Line.css("left", linePosition);
}, 
function() {
  menu2Line.css("left", defaultPosition);
  menu2Line.css("width", defaultWidth);
});

});


});
})(jQuery);

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
            };
            
            
       ////
       
       (function($){
$(document).ready(function(){

$(document).ready(function() {
  $("#menu22").menu2maker({
    title: "Menu2",
    format: "multitoggle"
  });

  $("#menu22").prepend("<div id='menu22-line'></div>");

var foundActive = false, activeElement, linePosition = 0, menu2Line = $("#menu22 #menu22-line"), lineWidth, defaultPosition, defaultWidth;

$("#menu22 > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#menu22 > ul > li").first();
}

defaultWidth = lineWidth = activeElement.width();

defaultPosition = linePosition = activeElement.position().left;

menu2Line.css("width", lineWidth);
menu2Line.css("left", linePosition);

$("#menu22 > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menu2Line.css("width", lineWidth);
  menu2Line.css("left", linePosition);
}, 
function() {
  menu2Line.css("left", defaultPosition);
  menu2Line.css("width", defaultWidth);
});

});


});
})
            
            