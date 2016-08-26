<?php 
class documentacion extends conectar
	{
		public  function verDocumentacion($packet)
		{
			conectar::conexiones();
				$paquete=explode("-", $this->decrypt($packet, key));
				$sql = "SELECT * FROM documentosContacto";
				$consulta = mysql_query($sql,$this->conexion);		
				$datos = mysql_result($consulta,0,"documento");
				$tipo = mysql_result($consulta,0,"tipo");
				$nombre = mysql_result($consulta,0,"nombre");
				$peso = mysql_result($consulta,0,"peso");
				header("Content-type: $tipo");
				header("Content-length: $peso"); 
				header("Content-Disposition: inline; filename=$nombre"); 
				echo $datos;	
				conectar::desconectar();
		}

	}
?>