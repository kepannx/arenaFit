<?php 
class consultasAjax extends conectar {

//


//CARGO LOS DATOS DEL CLIENTE  EN LOS CAMPOS DEL FORMULARIO SOLO PASANDO EL PAAMETRO DE LA IDENTIFICACIÓN
	public function loadDatosCliente($parametro) {
		conectar::conexiones();
		if(isset($parametro))
			{  
				$sql="select * from clientes where identificacion='".intval($parametro)."'";
			    $res = mysql_query($sql) or die(mysql_error());
			  	if($inf = mysql_fetch_array($res)){
			    echo "formObj.nombresApellidos.value = '".$inf["nombresApellidos"]."';\n";   
			    echo "formObj.telefonos.value = '".$inf["telefonos"]."';\n";    
			    echo "formObj.email.value = '".$inf["email"]."';\n";
			    echo "formObj.nuevoCliente.value = '".$inf["id"]."';\n";
			  }
			  else{
			    echo "formObj.nombresApellidos.value = '';\n";    
			    echo "formObj.ciudad.value = '';\n";    
			    echo "formObj.telefonos.value = '';\n";    
			    echo "formObj.email.value = '';\n";
			    echo "formObj.nuevoCliente.value = '0';\n";

			  }

			}
		conectar::desconectar();
	}








public  function normalizacionDeCaracteres($parametros)
{

  return $this->remplazartildesyotros($this->filtrocaracteres(mb_convert_case($parametros, MB_CASE_LOWER , "UTF-8")));

}

private function remplazartildesyotros($parametro) {
    $encontrar = array("á", "é", "í", "ó", "ú", " ", "ñ", "Á", "É", "Í", "Ó", "Ú", "Ä", "Ë", "Ï", "Ö", "Ü", "ä", "ë", "ï", "ö", "ü");
    $remplazar = array("a", "e", "i", "o", "u", "_", "n", "A", "E", "I", "O", "U", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
    return str_ireplace($encontrar, $remplazar, $parametro);
  }
private function filtrocaracteres($parametro){
      $encontrar    = array( ".", ",", " ", "=", "_"," ", "#","`:","+", "-", "(", ")");
      $remplazar = array( "");
      return str_ireplace($encontrar, $remplazar,$parametro);
  
}


}
?>