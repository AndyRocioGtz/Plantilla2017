<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registro Público de la Propiedad y Notarías</title>

<!-- css-plantilla-principal -->
<link href="style.css" rel="stylesheet" type="text/css">
<link href="menu.css" rel="stylesheet" type="text/css">

<!-- css-slide-publicaciones -->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
<link rel="icon" href="../images/impulso.png">

<!--[if lt IE 9]>
	<script src="js/respond.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="script.js"></script>

</head>
<body>
<div id="pagewrap">
	<header>
        <div class="wrapper grid2">
            <article class="col">
                <div class="menu-usuario">
                    <a class="mapa" href="https://goo.gl/maps/3gM9WvJrQg12" target="_blank">Mapa del sitio</a>
                    <a class="mail" href="#">Contacto</a>
                    <!-- <a class="inicio" href="index.php">Inicio</a> -->
                    <!--<a class="accesibilidad" href="#">Accesibilidad</a>
                </div>menu-de-ayuda-para-el-usuario-->
            </article>

            <article class="col-1">
                <a class="ligas-footer">
                    <span class="palabras">
                        Dirección General de Regisros Públicos
                    </span>
                </a>
            </article>
        
          <!--  <article class="col-1">
                    <a class="mapa" href="#" target="_blank">Directorio de Oficinas Registrales</a>
                    <a class="mail" href="#">Directorio de Notarias</a>
            </article>redes-sociales-->
        </div>

        <div class="wrapper grid3">
            <a href="index.php ">
            <article class="col-2">
                <img class="logo" src="images/gobierno-de-guanajuato.jpg" alt="Gobierno del Estado de Guanajuato">
            </article>
            </a>
         
        
            <article class="col-3">
                <h1 class="titulo">Registro Público de la Propiedad</h1>
                <h2 class="sub-titulo">Comercio y Notarías</h2>
            </article>
        </div><!-- /institucional-->
        
        <!--<div id='cssmenu'>
            <?php #include ("menu.php");?>
        </div>menú-principal-->
    </header><!-- /encabezado -->
    
    <div class="wrapper grid2">
            <article class="col-4">
            <div class="flexslider">
              <ul class="slides">
                <li>
                	<a href="#"><img src="images/principal/banner1.jpg" alt="Servicios en Línea"></a>
				</li>

                <li>
					<a href="#"><img src="images/principal/banner2.jpg" alt="Solicitud de Certificados en Línea"></a>
                </li>

                <li>
                    <a href="https://pagosenlinea.guanajuato.gob.mx/public/servicios?tipoServicio=0017" target="_blank">
                        <img src="images/principal/banner3.jpg" alt="Formas de Pago"></a>
                </li>
              </ul>
            </div>
            </article>
              <!-- FlexSlider -->
              <script defer src="scripts/jquery.flexslider.js"></script>
              <script type="text/javascript">
                $(function(){
                  SyntaxHighlighter.all();
                });
                $(window).load(function(){
                  $('.flexslider').flexslider({
                    animation: "slide",
                  });
                });
              </script>
            

            <article class="col-5">
            	<h1 class="seccion">Destacados</h1>
                <ul class="enlaces">
                	<li><a href="segurenet.php">SEGUREnet</a></li>
                    <li><a href="consulta_remota.php">Consulta Remota</a></li>
                    <li><a href="http://www.erpp.guanajuato.gob.mx/serv_electronicos/" target="_blank">Solicitud de Certificados en Línea</a></li>
                    <li><a href="http://www.erpp.guanajuato.gob.mx/precaptura/" target="_blank">Precaptura en Línea</a></li>
                    <li><a href="http://www.erpp.guanajuato.gob.mx/estrados/" target="_blank">Consulta de Estrados</a></li>
                    <li><a href="http://www.erpp.guanajuato.gob.mx/consultaerpp/" target="_blank">Verificación de Boletas de Resolución</a></li>
                </ul>
            </article>
    </div>
    <!-- Dirección General-->
    <div class="wrapper grid2">
        <div style=" padding-bottom: 20px; width: 100%;">
            <div class="sec1-tramite"><img class="tramites-icon1" src="http://guanajuato.gob.mx/images/tramites/icono1.png"><label class="tittle-tra">Dirección de Registros Públicos</label><br><br>
                <ul class="tramite-lst">
                  <li type="circle"><a class="link-tramite-p" href="oficinas_rpp.php">Directorio de Oficinas Registrales</a></li>
                  <li type="circle"><a class="link-tramite-p" href="estadisticas.php">Estadísticas</a></li>
                  <li type="circle"><a class="link-tramite-p" href="estruct.php">Estructura General</a></li>
                </ul>
                <a class="ver-mas-ts" href="dg.php">Acerca de Dirección General de Registros Públicos</a>
            </div>
        <div class="sect-midt"></div>
            <div class="sec3-tramite"><img class="tramites-icon2" src="http://guanajuato.gob.mx/images/tramites/icono1.png"><label class="tittle-tra">Dirección de Notarías</label><br><br>
                <ul class="tramite-lst">
                  <li type="circle"><a class="link-tramite-p" targt="_blank" href="http://erpp.guanajuato.gob.mx/portaln/" target="_blank">Portal de Notarías</a></li>
                  <li type="circle"><a class="link-tramite-p" targt="_blank" href="http://www.erpp.guanajuato.gob.mx/dirnot/" target="_blank">Directorio Notarial</a></li>
                  <li type="circle"><a class="link-tramite-p" targt="_blank" href="http://normatividadestatalymunicipal.guanajuato.gob.mx" target="_blank">Legislación</a></li>
                </ul>
                <a class="ver-mas-ts" href='dnotarial.php'>Acerca de Dirección de Notarías</a>
            </div>
        </div>
    </div>

    <!--módulo-de-información-relevante-->
    
    <div class="wrapper-noticia">
    	<!--<div class="publicidad2">
        <object id="sliderNoticias" class="sliderNoticias" data="http://www.guanajuato.gob.mx/ingudisCom/wp-content/uploads/sliderNoticias/vista/silderNoticias.html" type="text/html" name="silderNoticias" width="100%" style=" min-height: 290px; max-height: 700px;"></object>
        </div>-->
        <div class="publicidad"><img class="img-publi" src="http://www.guanajuato.gob.mx//ingudisCom/wp-content/uploads/2016/09/Captura-de-pantalla-2016-10-28-a-las-09.35.18.png"></div>
        <div class="publicidad"><img class="img-publi" src="http://www.guanajuato.gob.mx//ingudisCom/wp-content/uploads/2016/09/Captura-de-pantalla-2016-10-28-a-las-09.35.18.png"></div>
        <div class="publicidad"><img class="img-publi" src="http://www.guanajuato.gob.mx//ingudisCom/wp-content/uploads/2016/09/Captura-de-pantalla-2016-10-28-a-las-09.35.18.png"></div>
        <!--
        <div class="publicidad3">
            <iframe style="border:0px; padding: 0px;" src="http://gto1.mx/banners/php2image2.php?llave=UYT945VB&amp;iden=img" width="301" height="251"></iframe>
        </div>-->

    </div><!--módulo-de-difusión-->
    
	<div class="wrapper grid4">

		<div class="col-6">
        	<h1 class="tit-menu"><img class="ico-menu" src="images/normatividad.png" alt="Normatividad"> Normatividad...</h1>
            	<ul class="items">
                	<li><a href="http://www.rppc.guanajuato.gob.mx/files/nrrpp2012.pdf">Reglamento RPP GTO. 2012 (Vigente)</a></li>
                    <li><a href="http://www.rppc.guanajuato.gob.mx/files/rrppab.pdf">Reglamento del Registro Público de la Propiedad (Abrogado)</a></li>
                    <li><a href="http://www.rppc.guanajuato.gob.mx/files/1.pdf">Lineamientos de Operación del Registro Público de la Propiedad</a></li>
                </ul>
		</div>
	
		<div class="col-6">
        	   <br><br><br><br>
                <ul class="items">
                    <li><a target="_blank" href="http://www.rppc.guanajuato.gob.mx/files/Ley_de_Ingresos_para_el_Estado_de_Guanajuato_para_el_Ejercicio_Fiscal__2016.pdf">
                                Ley de Ingresos Del Estado de Guanajuato</a></li>
                    <li><a target="_blank" href="http://www.rppc.guanajuato.gob.mx/files/criteriosregistrales.pdf">Criterios Registrales del Estado de Guanajuato</a></li>
                    <li><a target="_blank" href="http://www.rppc.guanajuato.gob.mx/files/acuerdo-administrativo.pdf">
                                Acuerdo Administrativo cobro de Productos Criterios Registrales</a></li>
                </ul>
		</div>
	
		<div class="col-6">
            <h1 class="tit-menu"><img class="ico-menu" src="images/programas.png" alt="Programas y Servicios"> Programas y Servicios</h1>
        	<!--<h1 class="tit-menu"><img class="ico-menu" src="images/empresas-incluyentes.png" alt="Empresas Incluyentes">Empresas Incluyentes</h1>-->
                <ul class="items">
                    <li><a href="http://tramitesyservicios.strc.guanajuato.gob.mx/consulta/" target="_blank">Trámites y Servicios</a></li>
                    <li><a href="https://rpc.economia.gob.mx/siger2/xhtml/login/login.xhtml" target="_blank">SIGER 2.0</a></li>
                    <li><a href="http://www.siger.gob.mx/ManUPuSiger20.pdf" target="_blank">Manual SIGER 2.0</a></li>
                    <li><a href="http://finanzas.guanajuato.gob.mx" target="_blank">Finanzas</a></li>
                    <li><a href="https://pagosenlinea.guanajuato.gob.mx/public/servicios?tipoServicio=0017" target="_blank">Pagos en Línea</a></li>
                    <li><a href="http://eguanajuato.gob.mx" target="_blank">Firma Electrónica</a></li>
                    <li><a href="http://cfdi.guanajuato.gob.mx/cfdi/public/cfdi" target="_blank">Comprobantes Fiscales (CFDI)</a></li>
                </ul>
		</div>
	

	</div><!-- /menú-secciones -->
	
	<div class="wrapper grid2">
        <article class="col-7">
			<img class="img-tp" src="images/logotipo.png">
        </article>

        <article class="col-8">
            	<ul class="transparencia">
                	<li><a href="oficinas_rpp.php">Directorio de Oficinas Registrales</a></li>
                    <li><a href="http://www.erpp.guanajuato.gob.mx/dirnot/">Directorio de Notarial</a></li>
                    <li><a href="estruct.php">Estructura orgánica</a></li>
                    <li><a href="http://finanzas.guanajuato.gob.mx/c_calendario/doc/CALENDARIO_DIAS_INHABILES_2017.pdf" target="_blank">Calenario</a></li>
                </ul>
        
            	<ul class="transparencia">
                	<li></li>
                    <li></li>
                    <li></li>
                </ul>
        </article>
    </div><!-- /transparencia -->
    
   <footer>
        <div class="wrapper grid3">
        <article class="col-9">
            <a class="ligas-footer">Dirección General del Registro Público de la Propiedad y Notarías:<br>
                
            </a>
        </article>
    
    	<article class="col-9">
            <a class="ligas-footer">
            <span class="palabras">
                    Calle Nueva S/N, Col. Noria Alta <BR>
                    Guanajuato, Gto. 36000 <br>
                    
                </span> 
            </a>
		</article>
        
        <article class="col-9">
            <a class="ligas-footer">
                <span class="palabras">
                    Teléfono: <br>
                    01 800 53 65 051 <br>
                    01(473) 734 16 14
                </span>
            </a>
        </article>
        </div><!--pie-de-página-->
   </footer>

   <div class="avisos">
    © 2017 Guanajuato, Secretaría de Gobierno
   </div><!--avisos-acerca del sitio-contacto-->
</div>
<!-- /ingudis -->
</body>
</html>