<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
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