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
		$this->url=define(url, $this->datospagina(7));
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
		$sql='SELECT * FROM datosEmpresa';
		$query=mysql_query($sql,$this->conexion);
		$rs=mysql_fetch_array($query);
			switch($vector)
				{
					case 0:
					return $rs['nombre'];
					break;
					
					case 1:
					return $rs['direccion'];
					break;
					
					case 2:
					return $rs['telefono'];
					break;
					
					case 3:
					return $rs['email'];
					break;
					
					case 4:
					return $rs['clausula'];
					break;

					case 5:
					return "http://".$_SERVER['HTTP_HOST']."/".url."";
					break;

					case 6:
					return $rs['activo'];
					break;
				
				}

		
		conectar::desconectar();
		}



public function historial($id, $cambio)
	{

		$id=$this->decrypt($id, key);
	   	$sqlHistorialCambios="INSERT INTO historial SET usuario='".intval($id)."',  cambio='".$cambio."', fecha='".mktime()."'";
		mysql_query($sqlHistorialCambios);
	;
	}





//saco los avisos de confirmación o  error  
public function avisos($tipo, $mensaje)
{
	if ($tipo=="done") {
		echo '<div class="alert alert-success" id="noPrint" align="center" style="font-size:18px;">'.$mensaje.'</div>';
		# code...
	}
	elseif ($tipo=="aviso") {
		# code...
		echo '<div class="alert alert-warning" role="alert" align="center" style="font-size:18px;"> <i class="fa fa-exclamation-circle"></i> '.$mensaje.'</div>';
	}
	elseif ($tipo=="error") {
		# code...
		echo '<div class="alert alert-danger" id="noPrint" align="center" style="font-size:18px;">'.$mensaje.'</div>';
	}
	else
	{
		echo '<div class="alert alert-danger" id="noPrint" align="center" style="font-size:18px;">'.$mensaje.'</div>';
	}
}
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


public  function allow($parametro, $vector)
{
	/*
	[666]= Todos

	*/
if($parametro==666)
{
	$permiso =  array();
	$permiso[0]=$vector;
}

else
{
	$permiso=explode("-", $parametro);
}

	$control=0;
	$array=array();
	$tamano=sizeof($permiso);
	while ($control<$tamano) {
		# code...
		if($permiso[$control]==$vector OR  $permiso[$control]==777)
		{
			//Permitalo
		 	$array[$control]=1;

		}
		else{

			$array[$control]=0;

		}
		$control++;
	}

	if(in_array("1", $array)==true)
	{
		return 1;//Permitalo
	}
	else
	{
		return 0;//No lo permita
	}
	
}


}

define(key, "chnm0slAqR3dMnx4v9qvnu5EQJ2M08K6N7ETQhY6");
define(publickey, "5239253912695439104592850");
define(url, "arenafit/cafeteria/administrador/");


?>