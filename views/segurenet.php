<?php
//include our settings, connect to database etc.
 include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
$pagetitle = "Comercio y Notarías";
$projectName = "Dirección General de Registros Públicos de la Propiedad";
//and then call a template:
$tpl = "segurenet_view.php";
include("template.php");
?>