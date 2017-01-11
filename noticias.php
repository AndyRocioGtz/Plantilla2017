<!DOCTYPE HTML>
<html id="twitter-wjs">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Instituto Guanajuatenses Para Las Personas con Discapacidad</title>

	<meta property="og:url"           content="http://guanajuato.gob.mx/presentaciones/conocenos.php" />
	<meta property="og:type"          content="Personas con Discapacidad" />
	<meta property="og:title"         content="Conócenos" />
	<meta property="og:description"   content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor turpis eget mi sodales, nec fringilla sem cursus. Proin in mi scelerisque, vestibulum urna sed, volutpat enim." />
	<meta property="og:image"         content="http://guanajuato.gob.mx/presentaciones/images/principal/transporte-adaptado.jpg" />

<!-- css-plantilla-principal -->
<link href="style.css" rel="stylesheet" type="text/css">
<link href="menu.css" rel="stylesheet" type="text/css">

<!-- css-slide-publicaciones -->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

<!--[if lt IE 9]>
	<script src="js/respond.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<script src="http://code.jquery.com/jquery-2.2.4.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/annyang/2.5.0/annyang.min.js"></script>
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
<script src="script.js"></script>
<script type="text/javascript" src="scripts/reproduccionTexto.js"></script>
<script type="text/javascript" src="scripts/detalles.js"></script>

</head>
<body id="Contenido">
<div id="moduloAccesibilidad" >
            <div  id="cerrarAccesible" ><img title="Cerrar Botones" class="accesible1" src="http://www.guanajuato.gob.mx/presentaciones/images/close_accesibilidad.png"></div>
            <div  id="lecturaSeleccion" ><img title="Activar Lectura" class="accesible1" src="http://www.guanajuato.gob.mx/presentaciones/images/sound_off.png"></div>
            <div  id="reconocimientoVoz" style="margin-left: 6px;" class="activoAccesibilidad"><img title="Activar Microfono" class="accesible1" src="http://www.guanajuato.gob.mx/presentaciones/images/mic_off.png"></div>
            <div  id="zoomin" style="margin-left: 5px;" ><img title="Aumentar tamaño de contenido" class="accesible1" src="http://www.guanajuato.gob.mx/presentaciones/images/zoom-in.png"></div>
            <div  id="zoomout" style="margin-left: 5px;" ><img title="Restablecer tamaño" class="accesible1" src="http://www.guanajuato.gob.mx/presentaciones/images/zoom-out.png"></div>
        </div>
<!-- Facebook Plugin -->
<div id="fb-root"></div>
<script>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<div id="pagewrap">
     <?php include ("header.php");?>
     <div class="wrapper-c1">
     <!-- Botones Compartir -->
      <div class="social">
         <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:50%;">
             <a class="a2a_button_facebook"></a>
             <a class="a2a_button_twitter"></a>
             <!--<a class="a2a_button_google_plus"></a>
              <a class="a2a_button_pinterest"></a>
             <a class="a2a_dd" href="https://www.addtoany.com/share"></a>-->
         </div>
     </div>
     <label class="direcciones">Usted se encunetra en: <a href="index.php">Inicio</a>/ Noticias</label>
     <h1>Noticias</h1>
     <!-- Contenido -->
     <div class="wrapper conten">
        
         <article id="html2" style="width: 100%;" class="formato-contenidos">

         </article>

     </div>
     <div class="widgets">
     	<div class="widget-1">
            	<h1 class="seccion">Destacados</h1>
                <ul class="enlaces">
                	<li><a href="#">Inclusión Laboral</a></li>
                    <li><a href="#">Programa Audiológico y de Lenguaje</a></li>
                    <li><a href="#">Centros de Rehabilitación</a></li>
                    <li><a href="#">Credencialización</a></li>
                    <li><a href="#">Enlaces con otras instituciones</a></li>
                    <li><a href="#">Transporte público adaptado</a></li>
                </ul>
            </div>

            <div class="widget-1 fb-w">
            <div class="fb-page" data-href="https://www.facebook.com/gobiernoguanajuato/" data-tabs="timeline" data-height="380" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gobiernoguanajuato/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gobiernoguanajuato/">Guanajuato Gobierno del Estado</a></blockquote></div>
            </div>
     </div>
     </div>
<!-- Footer -->
     <?php include ("footer.php");?>


</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- /ingudis -->
</body>
</html>