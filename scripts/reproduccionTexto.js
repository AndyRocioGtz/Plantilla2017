
$(function(){
    $('.accesibilidad').on("click",function(){
          mostrarAccesible();
    });

        $('#reconocimientoVoz').click(function(){
        if(readCookie('reconocimiento') === null){
            ejecutaComandos();
            createCookie('reconocimiento','1',1);
            $("#reconocimientoVoz").html("<img src='http://www.guanajuato.gob.mx/presentaciones/images/mic_on.png'>");
          }else{
            detenerComandos();
            eraseCookie('reconocimiento');
            $("#reconocimientoVoz").html("<img src='http://www.guanajuato.gob.mx/presentaciones/images/mic_off.png'>");

          }
    });
        $('#lecturaSeleccion').click(function(){
            
            if(readCookie('voz') === null){
            ejecutaVoz();
            createCookie('voz','1',1);
            $("#lecturaSeleccion").html("<img src='http://www.guanajuato.gob.mx/presentaciones/images/sound_on.png'>");
          }else{
            
            eraseCookie('voz');
            $("#lecturaSeleccion").html("<img src='http://www.guanajuato.gob.mx/presentaciones/images/sound_off.png'>");

          }
        });

    

});

function ejecutaVoz(){
    $("a,label,h1,h2,p,span").mouseenter(function() {
        var text = $(this).text();
        responsiveVoice.speak(text,"Spanish Latin American Female");
    }); 
}

function ejecutaComandos(){
        if (annyang) {
     // Let's define our first command. First the text we expect, and then the function it should call
     var commands = {
     'inicio': function() {
         //window.location.href="index.php";
         alert("dfd");
      }
     };

     // Add our commands to annyang
     annyang.setLanguage("es-MX");
     annyang.addCommands(commands);

     // Start listening. You can call this here, or attach this call to an event, button, etc.
     annyang.start();
   
}
}

      function detenerComandos(){
        if (annyang) {
          annyang.abort();
        }
      }

      function createCookie(name,value,days) {
          if (days) {
              var date = new Date();
              date.setTime(date.getTime()+(days*24*60*60*1000));
              var expires = "; expires="+date.toGMTString();
          }
          else var expires = "";
          document.cookie = name+"="+value+expires+"; path=/";
      }

      function readCookie(name) {
          var nameEQ = name + "=";
          var ca = document.cookie.split(';');
          for(var i=0;i < ca.length;i++) {
              var c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1,c.length);
              if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
          }
          return null;
      }

      function eraseCookie(name) {
          createCookie(name,"",-1);
      }

      function mostrarAccesible(){
          $("#moduloAccesibilidad").css("display","block");
          $("#reconocimientoVoz").css("margin-left","0px");
          $("#cerrarAccesible").html("<img class='accesible1' src='http://www.guanajuato.gob.mx/presentaciones/images/close_accesibilidad.png'>");
          $("#lecturaSeleccion").html("<img class='accesible1' src='http://www.guanajuato.gob.mx/presentaciones/images/sound_off.png'>");
          $("#reconocimientoVoz").html("<img class='accesible1' src='http://www.guanajuato.gob.mx/presentaciones/images/mic_off.png'>");
      }
