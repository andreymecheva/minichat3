<?php
require_once("shout.php");
require("class.php");
$tra=new Trabajo();
$visitas=$tra->get_visitas();
echo "<table width='700' border='1' style='background:#dfdfdf;'>";
echo "<tr><td><b>Nombre</b></td><td><b>Comentario</b></td><td><b>Fecha</b></td><td><b>Hora</b></td><td><b></b></td></tr>";
for ($i=0;$i<sizeof($visitas);$i++)
{
	echo "<tr><td>".$visitas[$i]["user"]."</td>";
	echo "<td>".$visitas[$i]["message"]."</td>";
	echo "<td>".$visitas[$i]["date_time"]."</td>";
	echo "<td>".$visitas[$i]["ip_address"]."</td>";
	?><td><a href="javascript:void(0)" onClick="window.location='eliminar.php?id=<?php echo $visitas[$i]["id"];?>'" title='Editar Registro'><img src='img/eliminar.png' border='0'/></a></td></tr>
	<?php
}
echo "</table>";
?>