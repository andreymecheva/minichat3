<?php
Class Conectar
{
	public static function con()
	{
		$conexion=mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("chat4");
		return $conexion;
	}
}
/*******************************************************************/
class Trabajo
{
	//private $visitas=array();
	private $visitas;
	public function __construct()
	{
		$this->visitas=array();
	}
	
	public function get_visitas()
	{
		$sql="select * from shout_box";
		$res=mysql_query($sql,Conectar::con());
		while($reg=mysql_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
		}
		return $this->visitas;
	}
	public function get_visitas_por_id($id)
	{
		$sql="select * from shout_box where id=$id";
		$res=mysql_query($sql,Conectar::con());
		While($reg=mysql_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
		}
			return $this->visitas;
	}
		public function eliminar_visita($id)
	{
		$sql="delete from shout_box where id=$id";
		$res=mysql_query($sql,Conectar::con());
		echo "<script type='text/javascript'>
		alert('El registro se eliminó');
		window.location='admin.php';
		</script>";
	}
}
?>