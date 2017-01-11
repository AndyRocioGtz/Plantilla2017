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
    </header><!-- /encabezado -->

<?php
$rpc = new OpenERP();
    $rpc->login("admin", "admin", "registro8", "localhost:8069/xmlrpc/");
    //---------------------------------------------------------------//
    $domain=Array(
    );
    $office_ids = $rpc->search('registros.directorio', $domain);
    // READ-----
    $fields = array(
        'id','responsable_id','municipio_id', 'municipio_ids','domicilio_id','telefono_rp', 'tel_particular', 'correo'
    );
    $result = $rpc->read($office_ids, $fields, "registros.directorio");
    echo "
    <div class='table-responsive banner-content'>
    <table class='table table-striped'>
    <thead>
      <tr>
        <th> REGISTRADOR </th>
        <th>OFICINA</th>
        <th>DOMICILIO </th>
        <th>TEL. REGISTRO PÚBLICO </th>
        <th>CORREO</th>
        <th>PARTIDO JUDICIAL</th>
      </tr>
    <thead/>
    <tbody>";
    foreach ($result as $p){
        $responsable = $rpc->read(array($p['responsable_id'][0]), array('name'), "res.users");
        $municipio = $rpc->read(array($p['municipio_id'][0]), array('name'), "municipio");
        $domicilio = $rpc->read(array($p['domicilio_id'][0]), array('name'), "registros.domicilio");
        $pjudicial = $rpc->read($p['municipio_ids'], array('name'), "municipio");
      echo "<tr>";
      echo "<td>" . $responsable[0]['name'] . "</td>";
      echo "<td>" . $municipio[0]['name']. "</td>";
      echo "<td>" . $domicilio[0]['name']. "</td>";
      echo "<td>" .$p['telefono_rp'] . "</td>";
      // echo "<td>" . $p['tel_particular'] .  "</td>";
      echo "<td>" . $p['correo'] . "</td>";
      echo "<td>";
          foreach ($pjudicial as $m){
            echo $m['name']. "\n";
          }
    echo "</td>";
      echo "</tr>";
    }
    echo "</tbody>
    </table>
    </div>
    ";
?>



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