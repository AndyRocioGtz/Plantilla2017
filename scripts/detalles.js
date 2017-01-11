
/**
 * Funcion que captura las variables pasados por GET
 * 
 * Devuelve un array de clave=>valor
 */
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

window.onload = function ()
{
    // Cogemos los valores pasados por get
    var valores = getGET();
    if (valores)
    {
        // hacemos un bucle para pasar por cada indice del array de valores
        console.log(valores);

        carga(valores["postid"],valores["autor"]);

    } else {
        // no se ha recibido ningun parametro por GET
        document.write("<br>No se ha recibido ningún parámetro");
    }
}

function carga(postid,autor) {
    /*  Se llama al método “lista” de la dependencia 11” */
   
    $.ajax({
        type: "POST",
        url: "http://guanajuato.gob.mx/apiboletines/api-boletinesgto.php",
        data: {autor: autor, postid: postid, metodo: "detalles"}
    })
            .done(function (msgD) {
                ImprimirObjetoD(msgD);
            });

    function ImprimirObjetoD(o) {
        var salida = '';
        for (var p in o) {
            salida += 'fecha: ' + o[0].fecha + '\n';
            var stri = o[0].contenido;
            var str = stri.split("[wzslider]").join("");
            var str1 = str.split("font-size: 12pt;").join("");
            var strf = str1.split('[wzslider autoplay="true"]').join("");
            strf = strf.replace(/\n/g,"<br>");
            
            strf = strf.replace(/<strong>/g,"");
            strf = strf.split('</strong>').join("");
            var tittle=o[0].titulo;
            var fecha=o[0].fecha;
            var titulo = tittle;
            
            if(o[0].imagen==false){
                    o[0].imagen="images/logo_gton.png";
                }
            document.getElementById("html2").innerHTML += "<div style='width:97%; padding: 13px;  margin: 0 auto; '><table width='100%' border='0' ><tbody><tr><td ><h1>" + titulo + "</h1></td></tr><tr><td><br><div style='text-align:justify;'><img style='width:45%; float:left; margin: 5px 10px 10px 5px;' src='" + o[0].imagen + "'/> <label id='h55' style='float: right;'>"+o[0].fecha+"</label><br> " + strf+ "</div></td></tr></tbody></table></div>";
        }
    }
}

