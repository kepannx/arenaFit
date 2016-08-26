<?php 
class conectar
{
	
		protected $nombre;
		protected $usuario;
		protected $pass;
		protected $base;
		protected $conexion;
	

	function  __construct()
		{
		
		$this->nombre ="localhost";
		$this->usuario= "arenafit"; //SuperAdministrador
		$this->pass ="ZEhcRpwyaf9CGdMD";
		$this->base = "arenafitPedidos";
		
		
		}

	public function conexiones()
		{
		$this->conexion=mysql_connect($this->nombre,$this->usuario,$this->pass);
		mysql_select_db($this->base,$this->conexion);
		}
	public function desconectar(){
		
		mysql_close($this->conexion);
		}
	

	public function datospagina($vector)
		{
		conectar::conexiones();
		$sql='SELECT nombre, telefono FROM datosEmpresa';
		$query=mysql_query($sql,$this->conexion);
		$rs=mysql_fetch_array($query);
			switch($vector)
				{
					case 0:
					return $rs['nombre'];
					break;
					
					case 2:
					return $rs['telefono'];
					break;


					case 5:
					return "http://".$_SERVER['HTTP_HOST']."/".url."/panel/";
					break;
				
				}
		conectar::desconectar();
		}



//Guardo  todos los movimientos


//Encriptar

		//ENCRIPTO INFORMACION
	public function encrypt($string, $key) {
		$result = '';
		for ($i = 0; $i < strlen($string); $i++) {
			$char    = substr($string, $i, 1);
			$keychar = substr($key, ($i%strlen($key))-1, 1);
			$char    = chr(ord($char)+ord($keychar));
			$result .= $char;
		}
		return base64_encode($result);
	}

	//desencripto el parametro
	public function decrypt($string, $key) {
		$result = '';
		$string = base64_decode($string);
		for ($i = 0; $i < strlen($string); $i++) {
			$char    = substr($string, $i, 1);
			$keychar = substr($key, ($i%strlen($key))-1, 1);
			$char    = chr(ord($char)-ord($keychar));
			$result .= $char;
		}
		return $result;
	}


}
define(key, "chnm0slAqR3dMnx4v9qvnu5EQJ2M08K6N7ETQhY6");
define(publickey, "5239253912695439104592850");
define(url, "cafeteria/");


?>