<?php
class ingresos extends conectar {


//FILTER_VALIDATE_INT
//FILTER_VALIDATE_EMAIL
//FILTER_SANITIZE_STRING


public  function datospedido($id, $vector)
{
	conectar::conexiones();
	$id=$this->decrypt($id, publickey);
	$sql="SELECT * FROM pedidos WHERE id='".$id."'";
	$query=mysql_query($sql);
	$rs=mysql_fetch_array($query);
	switch ($vector) {
		case 'nroPedido':
			# code...
			return $rs["nroPedido"];
			break;

		case 'idCliente':
			# code...
			return $rs["idCliente"];
			break;

		case 'idVendedor':
			# code...
			return $rs["idVendedor"];
			break;

		case 'fechaPedido':
			# code...
			return $rs["fechaPedido"];
			break;

		case 'valorPedido':
			# code...
			return $rs["valorPedido"];
			break;

		case 'estado':
			# code...
			return $rs["estado"];
			break;
		
		default:
			# code...
			break;
	}
	conectar::desconectar();


}





/******************************[Datos Tablas]**********************************/






/******************************[ORDENES]**********************************/




function ingresarProductos($parametros){

	conectar::conexiones();
	extract($parametros);
	$sql="INSERT INTO items SET nombreArticulo='".$this->filtroStrings($nombreArticulo, 2)."',
	ventaFinal='".$this->filtroNumerico($this->normalizacionDeCaracteres($ventaFinal))."',
	ventaProvedor='".$this->filtroNumerico($this->normalizacionDeCaracteres($ventaProvedor))."'
	";

	if (mysql_query($sql)) {
		# code...
		return 1; //Ingresó parámetros
	}
	else
	{
		 return 0; //ocurrió un error
	}


	conectar::desconectar();

}





public  function ingresarPedidos($parametros)
{
	conectar::conexiones();
	extract($parametros);

		

		//verificacion del cliente
		$idCliente=$this->verificacionCliente($identificacion);
		if($idCliente==0)
		{
			//Creo cliente
			$idCliente=$this->crearCliente($parametros);
		}


		//Ingereso del pedido
		$num=sizeof($nombreArticulo);
        $control=0;
        $suma=0;
        $sql="INSERT INTO pedidos SET nroPedido='".$this->consecutivoNroPedido()."', 
        idCliente=".$this->filtroNumerico($idCliente).", idVendedor='".$this->decrypt($id, publickey)."', fechaPedido='".fechaActual."',
        valorPedido='".$this->filtroNumerico($this->normalizacionDeCaracteres($valorTotal))."'
        ";
        mysql_query($sql);
        $idPedido=mysql_insert_id();
        while ($control<$num) {
        	# code...

         $sql="INSERT INTO itemsPedido SET idPedido='".intval($idPedido)."', nombreArticulo='".$this->filtroStrings($nombreArticulo[$control], 2)."',
        		valorUnidad='".$this->filtroNumerico($this->normalizacionDeCaracteres($valorUnidad[$control]))."',
        		cantidad='".$this->filtroNumerico($this->normalizacionDeCaracteres($cantidad[$control]))."'";
        		if (mysql_query($sql)) {
        			# code...
        			$control++;
        		}
        		else
        		{
        			exit();
        		}
  

        }

        return $idPedido;

	conectar::desconectar();

}





//Ingreso Crédito
public function ingresarCredito($idPedido, $efectivo)
{
	conectar::conexiones();
	$efectivo=$this->filtroNumerico($this->normalizacionDeCaracteres($efectivo));
	$idPedido=$this->filtroNumerico($idPedido);

	//Ingreso el  crédito
	$sql="UPDATE pedidos SET estado=2, debe='".$this->datospedido($this->encrypt($idPedido, publickey), "valorPedido")."'  WHERE id='".$idPedido."'";
	mysql_query($sql);
	$sql="INSERT INTO creditos SET idFactura='".$idPedido."', fechaAbono='".fechaActual."', estado=1";
	if (mysql_query($sql)) {
		# code...
		$idCredito=mysql_insert_id();
		if($efectivo>=0)
		{
			//Ingreso tirilla de abono
			if($this->abonarACredito($idCredito, $efectivo)==1)
			{
				$sql="UPDATE pedidos SET debe='".($this->datospedido($this->encrypt($idPedido, publickey), "valorPedido")-$efectivo)."'  WHERE id='".$idPedido."'";
				mysql_query($sql);
				return 1;//ok
			}
			else
			{
				return 0;//Error
			}	
		}
		//Actualizo el estado del pedido a  "en credito"
		

	}
	conectar::desconectar();
}


//Ingreso tirilla de abono


public  function abonarACredito($idCredito, $abono)
{
	conectar::conexiones();

	//Verifico que el valor abonado sea menor al valor adeudado

		//Procedo a abonar
		
		$sql="INSERT INTO abonosCredito SET idCredito='".$this->filtroNumerico($idCredito)."',
		fechaAbono='".fechaActual."',
		valorAbono='".$this->filtroNumerico($this->normalizacionDeCaracteres($abono))."'";
		if (mysql_query($sql)) {
			# code...

			return 1;
		}
		else
		{
			0;//Error
		}



	conectar::desconectar();
}





///Creo los clientees
public  function crearCliente($parametros)
{
	conectar::conexiones();
	extract($parametros);
	$sql="INSERT INTO clientes SET
	nombresApellidos='".$this->filtroStrings($nombresApellidos,2)."', 
	identificacion='".$this->normalizacionDeCaracteres($this->filtroNumerico($identificacion))."',

	telefonos='".$this->filtroStrings($telefonos, 1)."', email='".$this->filtrarEmail($email)."'";

	if (mysql_query($sql)) {
		# code...
		return mysql_insert_id();
	}
	conectar::desconectar();
}





//Verificacion del cliente

private function verificacionCliente($identificacion)
{
	conectar::conexiones();
	$identificacion=$this->filtroNumerico($this->normalizacionDeCaracteres($identificacion));
	$sql="SELECT id, identificacion FROM clientes  WHERE identificacion='".intval($identificacion)."'";
	$query=mysql_query($sql);
	if (mysql_num_rows($query)>0) {
		# code...
		$rs=mysql_fetch_array($query);
		return $rs["id"];
	}
	else
	{
		return 0;
	}
	conectar::desconectar();
}



public  function consecutivoNroPedido()
{
	conectar::conexiones();
	$sql="SELECT MAX(nroPedido) FROM pedidos";
	 $rs=mysql_fetch_array(mysql_query($sql));
	 
	 if ($rs[0]==NULL) {
	 	# code...
	 	return 1;
	 }
	 else
	 {
	 	return $rs[0]+1;
	 }
	conectar::desconectar();
}










//Filtro Strings
private function filtroStrings($parametro, $tipo)
{
	//tipo[0]=minuscula  [1]=MAYUSCULA [2]=Tipo Oracion

	if($tipo==0)
	{
		//Minúscula
		return mb_convert_case(filter_var($parametro, FILTER_SANITIZE_STRING), MB_CASE_LOWER , "UTF-8");
	}
	elseif ($tipo==1) {
		# MAYÚSCULA...
		return mb_convert_case(filter_var($parametro, FILTER_SANITIZE_STRING), MB_CASE_UPPER , "UTF-8");
	}
	elseif ($tipo==2) {
		# Tipo Oración...
		return mb_convert_case(filter_var($parametro, FILTER_SANITIZE_STRING), MB_CASE_TITLE , "UTF-8");
	}
	else
	{
		//Tipo Oración
		return mb_convert_case(filter_var($parametro, FILTER_SANITIZE_STRING), MB_CASE_TITLE , "UTF-8");
	}
}




//Filtro de numeros

private function filtroNumerico($parametro)
{
  if(intval(filter_var($parametro, FILTER_VALIDATE_INT)==TRUE))
  {
    return intval($parametro);
  }
  elseif(intval(filter_var($parametro, FILTER_VALIDATE_INT)==FALSE))
  {
    return 0;
  }
}





//Filtro con decimal en punto (.) 
private function filtroNumericoDecimal($parametro)
{
  
  if(intval(filter_var($parametro, FILTER_SANITIZE_NUMBER_FLOAT)==TRUE))
  {
    return intval($parametro);
  }
  elseif(intval(filter_var($parametro, FILTER_SANITIZE_NUMBER_FLOAT)==FALSE))
  {
    return 0;
  }

}




//Filtro  todos los emails
private function filtrarEmail($original_email)
{
	$clean_email = filter_var($original_email,FILTER_SANITIZE_EMAIL);
	if ($original_email == $clean_email && filter_var($original_email,FILTER_VALIDATE_EMAIL))
	{
	return $original_email;
	}

}










private function filtrocaracteres($parametro){
      $encontrar    = array( ".", ",", " ", "=", "_"," ", "#","`:","+", "-", "(", ")");
      $remplazar = array( "");
      return str_ireplace($encontrar, $remplazar,$parametro);
  
}

private function remplazartildesyotros($parametro) {
		$encontrar = array("á", "é", "í", "ó", "ú", " ", "ñ", "Á", "É", "Í", "Ó", "Ú", "Ä", "Ë", "Ï", "Ö", "Ü", "ä", "ë", "ï", "ö", "ü");
		$remplazar = array("a", "e", "i", "o", "u", "_", "n", "A", "E", "I", "O", "U", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
		return str_ireplace($encontrar, $remplazar, $parametro);
	}

public  function normalizacionDeCaracteres($parametros)
{

  return $this->remplazartildesyotros($this->filtrocaracteres(mb_convert_case($parametros, MB_CASE_LOWER , "UTF-8")));

}




}

?>