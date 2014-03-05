<?php
require_once("shout.php");
$tra=new Trabajo();
$tra->eliminar_visita($_GET["id"]);
?>