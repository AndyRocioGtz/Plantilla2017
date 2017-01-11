/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var autor=0;
$(document).ready(function () {
    
    var valores = getGET();
    if (valores)
    {
        // hacemos un bucle para pasar por cada indice del array de valores
        autor=valores["autor"];

    } else {
        // no se ha recibido ningun parametro por GET
        document.write("<br>No se ha recibido ningún parámetro");
    }
    var ruta="../../../noticias.php"
    /*  Se llama al método “lista” de la dependencia 11” */
    /*$.ajax({
        type: "POST",
        url: "http://guanajuato.gob.mx/apiboletines/api-boletinesgto.php",
        data: {autor: autor, metodo: "portada"}
    })
            .done(function (msg) {
                ImprimirObjeto(msg);

            });

    function ImprimirObjeto(o) {
        var salida = '';
        for (var p in o) {
            salida += 'fecha: ' + o[0].fecha + '\n';
            if (document.getElementById("html")) {
                var tittle=o[0].titulo;
                var titulo = tittle.toUpperCase();
                //document.getElementById("html").innerHTML += "<div id='portadax' style='width:87%; border-radius: 10px; margin: 0 auto; padding: 10px;'><a href='"+ruta+"?postid=" + o[0].id + "'><table width='100%' border='0' ><tbody><tr><td width='40%'><img id='imgalt' style='width:80%; border: 4px solid #FE642E;' src='" + o[0].imagen + "'/></td><td align='right'><h4 id='tittlenn'>" + titulo + "</h4><label id='h55'>"+o[0].fecha+"</label></td></tr></tbody></table></a></div>";
                document.getElementById("html").innerHTML += "<div class='swiper-slide'><a href='"+ruta+"?postid=" + o[0].id + "'><img src='" + o[0].imagen + "'>" + titulo + ""+o[0].fecha+"</a></div>";
                //<div class="swiper-slide">Slide 1</div>
            } else {

            }
        }
    }*/



    /* Se llama al método “lista” de la dependencia 11 */
    $.ajax({
        type: "POST",
        url: "http://guanajuato.gob.mx/apiboletines/api-boletinesgto.php",
        data: {autor: autor, metodo: "lista"}
    })
            .done(function (msgN) {
                ImprimirObjetoN(msgN);

            });

    function ImprimirObjetoN(n) {
        var salida = '';
        var cont = 0;
        var cadena="";
        for (var p in n) {
            if (document.getElementById("swiper")) {
                if(n[cont].imagen==undefined){
                    n[cont].imagen="img/logo_gton.png";
                }
                var tittle=n[cont].titulo;
                var titulo = tittle;
                var clase = '';
                /*switch(cont){
                    case 0:
                        clase = 'swiper-slide-prev';
                        break;
                    case 1:
                        clase = 'swiper-slide-active';
                        break;
                    case 2:
                        clase = 'swiper-slide-next';
                        break;
                }*/
                //cadena=cadena+"<tr style='border-radius: 10px;'  class='boton' onclick='redir(" + autor + "," + n[cont].id + ");'><td><img style=' width:100%; max-height: 155px;' src='" + n[cont].imagen + "'/></td><td style=' width:60%; border: 0px; margin: 15px; padding: 15px;' align='right'><label id='tittlennl' >" + titulo + "</label><h5>"+n[cont].fecha+"</h5></td></tr></div>";
                cadena=cadena+"<div class='swiper-slide "+clase+" '><a href='"+ruta+"?postid=" + n[cont].id + "&autor="+autor+"' target='_blank'><div class='swipetitle' data-swiper-parallax='-100'>" + titulo +"</div><img src='" + n[cont].imagen + "'></a></div>";
                //document.getElementById("html1").innerHTML += "<tr style='border-radius: 10px;'  class='boton' onclick='redir(" + autor + "," + n[cont].id + ");'><td><img style=' width:100%;' src='" + n[cont].imagen + "'/></td><td style=' width:60%; border: 0px; margin: 15px; padding: 15px;' align='right'><label id='tittlennl' >" + titulo + "</label><h5>"+n[cont].fecha+"</h5></td></tr></div>";
                cont++;
            }else{
            }
        }
        //var top="<table width='100%' border='0' ><tbody id='html1'>";
        //var bot="</tbody></table>";
        var tabla=cadena;
        document.getElementById("swiper").innerHTML =tabla;
    }



});

function redir(autor, id) {
    window.location = "../../noticias.php?postid=" + id + "";
}

function getGET()
{
    // capturamos la url
    var loc = document.location.href;
    // si existe el interrogante
    if (loc.indexOf('?') > 0)
    {
        // cogemos la parte de la url que hay despues del interrogante
        var getString = loc.split('?')[1];
        // obtenemos un array con cada clave=valor
        var GET = getString.split('&');
        var get = {};

        // recorremos todo el array de valores
        for (var i = 0, l = GET.length; i < l; i++) {
            var tmp = GET[i].split('=');
            get[tmp[0]] = unescape(decodeURI(tmp[1]));
        }
        return get;
    }
}

function getliga(){

}



