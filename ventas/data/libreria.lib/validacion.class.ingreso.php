<?php
class validar extends conectar
	{
	
	//valido los datos y confirmo que sea un usuario con token e id  registrado.
	public function validador($id)	
		{
			conectar::conexiones();
			$id=$this->decrypt($id, publickey);
			
				//defino el número máximo de administradores que se registran y me aseguro que el id sea un número y no una cadena.
				$int_options = array("options"=>array("min_range"=>0, "max_range"=>100));
				if(filter_var($id, FILTER_VALIDATE_INT, $int_options)==false)
					{
					//Si el parámetro es una cadena o se sale del rángo me saca de la aplicación.
						
						header('Location: '.$this->url(1).'');
					}
				else
					{
					//después de asegurar que el id es  númerico y el parametro cumple con el rango mínimo  comparo la id con el token guardado.
					$int_options = array("options"=>array("min_range"=>0, "max_range"=>100));
					//envío el parametro a consulta token, este autoriza si el usuario es correcto o debe ser sacado
					
					
					$rs=mysql_fetch_array($this->consultaadmintoken(filter_var($id, FILTER_VALIDATE_INT, $int_options),$this->conexion));
					
					if(!isset($rs["id"]))
						{
							header('Location: '.$this->url(1).'');

						}
					}
			}
			
			
	
		
	
	

		
		
	public function consultaadmintoken($id, $conexion)
		{
		$token=$this->token();
		$sql="SELECT id, validacion  FROM empleados WHERE id='".mysql_real_escape_string($id)."' AND validacion='".mysql_real_escape_string($token)."'";
		return mysql_query($sql,$conexion);
		}
	
	








	//VALIDACION DE USUARIOS QUE NO SON ADMINISTRADOR
	
	
	//Generador  de token
private function token()
		{
		session_start();
		return hash("sha256",session_id());
		}
	
	
	public function  url($tipo)
		{
			switch($tipo)
				{
					case 1:
					return $url="http://".$_SERVER['HTTP_HOST']."/".url."/index.php?error=2";
					break;
					
					case 2:
					echo "http://".$_SERVER['HTTP_HOST']."/index.php?error=2";
					break;
					
					case 3:
					return "index.php?error=1";
					break;
					
					
					
					case 5:
					return "http://".$_SERVER['HTTP_HOST']."/".url."/";
					break;
					
					//para imagenes o links
					case 6:
					return "http://".$_SERVER['HTTP_HOST']."/".url."/panel/";
					break;
				
				//si no es administrador
				}
		}
		

//CERRAR
public function cerrarSesion($parametro)
{
	conectar::conexiones();
	$id=$this->decrypt($parametro, key);
	$sql="UPDATE empleados SET  validacion='cerrado' WHERE id='".intval($id)."'";
	if(mysql_query($sql))
	{
		$url="http://".$_SERVER['HTTP_HOST']."".url."/";
		conectar::desconectar();
		header('Location: '.$this->url(5).'');
	}
	
	# code...
}

		
//ERRORES

	}

 ?>