<?php
$cliente = new SoapClient(null, array('location' => 'http://tramitesyservicios.strc.guanajuato.gob.mx/service.php', 'uri' => 'urn:webservices'));
$json = json_decode($cliente->GetInfoTyS());

$general="";
$cont = 0;

foreach ($json as $item) {
    if($cont<=4){
        foreach ($item as $key => $value) {
          
            
            if($key=="Nombre"){
                $name=recortar_texto($value, 50);
                $nameC=$value;
            }
            if($key=="Link_Tramite_Detalles"){
                $url=$value;
            }
        }
        $general .= "<li type='circle'><div class='img_thumb'><div class='img_desc'><a class='link-tramite-p2' href='".$url. "' target='_blank'>".$nameC."</a></div><a class='link-tramite-p' href='".$url. "' target='_blank'>".$name."</a></div></li>"; // Su valor
    }
    $cont ++;
}

function recortar_texto($texto, $limite=100){   
    $texto = trim($texto);
    $texto = strip_tags($texto);
    $tamano = strlen($texto);
    $resultado = '';
    if($tamano <= $limite){
        return $texto;
    }else{
        $texto = substr($texto, 0, $limite);
        $palabras = explode(' ', $texto);
        $resultado = implode(' ', $palabras);
        $resultado .= '...';
    }   
    return $resultado;
}

echo $general;
?>