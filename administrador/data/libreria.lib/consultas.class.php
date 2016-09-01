<?php
class consultas extends conectar {


/*******************************[CONSULTAS SQLS Y ENVIOS DE QUERYS]*********************************/



  public function sqlContactos($id) {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM contactos  where id='".$id."'";
    return mysql_query($sql, $this->conexion);
    conectar::desconectar();
  }



//datos del pedido
  public function sqlFactura($id) {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM  pedidos  where id='".$id."'";
    return mysql_query($sql, $this->conexion);
    conectar::desconectar();
  }



  //datos del pedido
  public function sqlCliente($id) {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM  clientes  where id='".$id."'";
    return mysql_query($sql, $this->conexion);
    conectar::desconectar();
  }

/*
  public function sqlImpuestos($id) {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM impuestos  where id='".$id."'";
    return mysql_query($sql);
    conectar::desconectar();
  }


  public function sqlAlmacen($id) {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM almacen  where id='".$id."'";
    return mysql_query($sql);
    conectar::desconectar();
  }

  public function sqlBodegas($id)
  {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM bodegas  where id='".$id."'";
    return mysql_query($sql);
    conectar::desconectar();
  }

*/
   public function sqlEmpleado($id)
  {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM sa  where id='".$id."'";
    return mysql_query($sql);
    conectar::desconectar();
  }




public function sqlItem($id)
  {
    conectar::conexiones();
    $id=$this->decrypt($id, publickey);
    $sql = "SELECT * FROM items  where id='".$id."'";
    return mysql_query($sql);
    conectar::desconectar();
  }










//*****************************SRINGS Y CONVERTIDORES****************************/
//String Para Tipo de Contactos
public  function stringTipoContacto($parametro)
{

    if (is_numeric($parametro)==TRUE) {
      # code...
        if ($parametro==0) {
          # code...
          return 'Cliente';
        }
        elseif ($parametro==1) {
          # code...
          return 'Provedor';
        }

        elseif ($parametro==2) {
          # code...
          return 'Cliente y Provedor';
        }
    }
    else
    {
      return "Error En Parámetro :/";
    }
}







//String para tipo de cargo

public  function stringTipoCargo($parametro)
{

  switch ($parametro) {
    case 1:
      # code...
      return "Vendedor";
      break;


    case 2:
      # code...
      return "Vendedor Externo";
      break;


    case 3:
      # code...
      return "Administrativo";
      break;

    case 4:
      # code...
      return "Otro";
      break;
    
    default:
      # code...
    return "No definido";
      break;
  }

}



//Datos de los clientes

public  function datosCliente($idCliente, $vector)
{
  conectar::conexiones();
   $sql="SELECT * FROM  clientes WHERE id='".intval($idCliente)."'";
  $query=mysql_query($sql);
  $rs=mysql_fetch_array($query);
  switch ($vector) 
    {
      case "nombresApellidos":
        # code...
        return  $rs["nombresApellidos"];
        break;


      case "identificacion":
        # code...
        return  $rs["identificacion"];
        break;

      case "telefonos":
        # code...
        return  $rs["telefonos"];
        break;


      case "email":
        # code...
        return  $rs["email"];
        break;


  

    }
  conectar::desconectar();

}





//Saco los datos de una factura en caso de necesitarla
public  function datosFactura($idFactura, $vector)
{
  conectar::conexiones();
  $sql="SELECT * FROM pedidos WHERE id='".$this->filtroNumerico($idFactura)."'";
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

    case 'debe':
      # code...
      return $rs["debe"];
      break;



    default:
      # code...
    return 'No hay datos';
      break;
  }
  conectar::desconectar();
}







/*********************************************[DATOS]************************************/



//**************[LISTAS]*****************************//

/*
public function listaContactos($id, $vector)
{
  conectar::conexiones();
  //[0]:clientes [1]:provedores [2]:cliente/provedor
  $sql="SELECT id, nombre, direccion, telefonos, email, tipo FROM contactos WHERE tipo='".intval($vector)."' ";
  $query=mysql_query($sql);
  while ($rs=mysql_fetch_array($query)) {
    # code...
    echo '<a href="'.$this->datospagina(5).'myBox/p.php?id='.$id.'&idP='.$this->encrypt($rs["id"], publickey).'">
        
        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
          <div class="panel panel-default">
          <div class="panel-body profile">
                <div class="profile-data">
                        <div class="profile-data-name">'.$rs["nombre"].'</div>
                        <div class="profile-data-title">'.$this->tipoUsuario($rs["tipo"]).'</div>
                    </div>
                </div>                                
              <div class="panel-body">                                    
                  <div class="contact-info">
                       <p><small>Teléfono</small><br/>'.$rs["telefonos"].'</p>
                      <p><small>Email</small><br/>'.$rs["email"].'</p>
                      <p><small>Dirección</small><br/>'.$rs["direccion"].'                                   
                  </div>
               </div>                                
          </div>
            <!-- END CONTACT ITEM -->
          </div>
    <a>';
  }


  conectar::desconectar();
}
*/








//Documentación Anexada 

public function documentacionAnexada($idContacto)
{
  conectar::conexiones();
  $sql="SELECT id, idContacto, nombreArchivo FROM documentosContacto WHERE idContacto='".$this->decrypt($idContacto, publickey)."'";
  $query=mysql_query($sql);
  echo '<div class="panel-body panel-body-table">';
  echo '<div class="table-responsive">';
  echo ' <table class="table table-bordered table-striped">';
  echo '<thead>
          <tr>
              <th width="70%">Nombre</th>
              <th width="30%"></th>
                                                   
          </tr>
      </thead>
    <tbody>
      ';

  while ($rs=mysql_fetch_array($query)) {
    # code...
    echo '<tr>
            <td><strong>'.$rs["nombreArchivo"].'</strong></td>
            <td>                                       
                <a href="'.$this->datospagina(5).'/data/comunes/documentacionAnexada.php?idP='.$idContacto.'&idD='.$this->encrypt($rs["id"], key).'" target="_BLANK">
                  <button type="button" class="btn btn-info">¿Quieres Verla?</button>
                </a>

            </td>
         </tr> ';
  }
  echo '<tbody></table>';
  echo '</div>';
  echo '</div>';
  conectar::desconectar();
}
//documentacionAnexadaAlmacen













//Lista de productos

public  function listaProductos($id)
{
  conectar::conexiones();
   $sql="SELECT id, nombreArticulo, ventaFinal, ventaProvedor FROM items";
  $query=mysql_query($sql);

  echo '<div class="table-responsive">
            <table id="dataTable1" class="table table-bordered table-striped-col">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Valor Normal</th>
                  <th>Valor Con Descuento</th>
                  <th></th>
                  
                </tr>
              </thead>
              
               ';
                             
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo ' <tr>
                  <td>'.$rs["nombreArticulo"].'</td>
                  <td align="center">$'.number_format($rs["ventaFinal"]).'</td>
                   <td align="center">$'.number_format($rs["ventaProvedor"]).'</td>
                  <td>

                  <a href="'.$this->datospagina(5).'/productos/producto.php?id='.$id.'&producto='.$this->encrypt($rs["id"], publickey).'">
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> ¿Quieres Editarlo?</button>
                  </a>

                  <a href="'.$this->datospagina(5).'/productos/lista.php?id='.$id.'&eliminar='.$this->encrypt($rs["id"]."-eliminar-0", publickey).'">
                      <button class="btn btn-danger"> <i class="fa fa-trash"></i> Necesitas Borrarlo?</button>
                  </a>
                  </td>
                </tr>
            ';
  }

  echo ' </tbody>
      </table>
    </div>
      ';
  conectar::desconectar();
}





//Facturas
public  function factura($idFactura, $vector)
{
  conectar::conexiones();
  $idFactura=$this->filtroNumerico($idFactura);
  $sql="SELECT *  FROM pedidos WHERE id='".intval($idFactura)."'";
  $query=mysql_query($sql);
  $rsP=mysql_fetch_array($query);

  if ($vector==1) {//media carta
    # code...
    echo '<table class="table table-bordered table-primary nomargin" id="noPrint">
                  <thead>
                    <tr>
                      
                      <th>Producto</th>
                      <th class="text-center">Valor</th>
                      <th class="text-center">Cantidad</th>
                      <th class="text-center">SubTotal</th>
                    </tr>
                  </thead>
                  <tbody>

          ';
      
 
        $sqlSub="SELECT * FROM itemsPedido  WHERE idPedido='".intval($idFactura)."'";
        $querySub=mysql_query($sqlSub);
        $numSub=mysql_num_rows($querySub);
        $sum=0;
  while ($rs=mysql_fetch_array($querySub)) {
        # code...
        
    echo '
                <tr>
                      <td >'.$rs["nombreArticulo"].'</td>
                      <td class="text-center">$'.number_format($rs["valorUnidad"]).'</td>
                      <td class="text-center">'.$rs["cantidad"].'</td>
                      <td class="text-center">$'.number_format(($rs["cantidad"]*$rs["valorUnidad"])).'</td>
                    </tr>
          ';
          $sum=$sum+($rs["cantidad"]*$rs["valorUnidad"]);
        }
            echo '</tbody>
                </table>
      <div class="row" id="noPrint">
        <div class="col-md-12">
          <h1 align="center" class="text-danger">Total Facturado <i>$ '.number_format($sum).'</i></h1>
        </div>
        </div>
          ';



  }
  elseif ($vector==2) {//Tirilla
    # code...

    echo '<table width="220" border="0" style="font-family:arial; font-size:13px;" align="center" topMargin="0">
  <tr>
    <td colspan="4" align="center">
        <img src="'.$this->datospagina(5).'/images/logo.png" width="220" align="center">
    '.$this->datospagina(0).'<br>'.$this->datospagina(1).'</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><b>Cajero</b></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2">Factura Nro</td>
    <td colspan="2" align="right">'.$this->datosFactura($idFactura, "nroPedido").'</td>
  </tr>
  <tr>
    <td colspan="2">Fecha</td>
    <td colspan="2" align="right">'.date('Y-m-d',$this->datosFactura($idPedido, "fechaPedido")).'</td>
  </tr>
  <tr>
    

    <td height="87" colspan="4">
      
      <hr>

    <table width="100%" border="0" style="font-size:13px" align="center">
      

      <tr>
        <td width="43%" align="center"><b>Producto</b></td>
        <td width="21%" align="center"><b>V</b></td>
        <td width="12%" align="center"><b>C</b></td>
        <td width="24%" align="center"><b>Sub</b></td>
      </tr>
       ';
       $sqlSub="SELECT * FROM itemsPedido  WHERE idPedido='".intval($idFactura)."'";
        $querySub=mysql_query($sqlSub);
        $numSub=mysql_num_rows($querySub);
        $sum=0;
  while ($rs=mysql_fetch_array($querySub)) {
     
        
        echo '<tr>
        <td align="left">'.$rs["nombreArticulo"].'</td>
        <td align="center">'.number_format($rs["valorUnidad"]).'</td>
        <td align="center">'.$rs["cantidad"].'</td>
        <td align="center">'.number_format(($rs["cantidad"]*$rs["valorUnidad"])).'</td>
      </tr>';


        }

      echo '
      
    


    </table>
    <hr>

    </td>
  </tr>
  <tr>
    <td colspan="3"><b>Efectivo</b></td>
    <td width="46">$ '.$_REQUEST['efectivo'] .'</td>
  </tr>

   <tr>
    <td colspan="3"><b>Cambio</b></td>
    <td width="46">$ '.number_format(($this->normalizacionDeCaracteres($_REQUEST['efectivo']) -  $this->datosFactura($idFactura, "valorPedido"))).'</td>
  </tr>
  
  <tr>
    <td colspan="3"><b>Valor Total</b></td>
    <td>$ '.number_format($this->datosFactura($idFactura, "valorPedido")).'</td>
  </tr>
  <tr>
    <td width="16">&nbsp;</td>
    <td width="86">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>';






  }
  conectar::desconectar(); 
}










//Consulta del valor devuelto
public  function consultaDevuelta($valorTotal, $efectivo)
{
  $efectivo=$this->filtroNumerico($this->normalizacionDeCaracteres($efectivo));
  $valorTotal=$this->filtroNumerico($this->normalizacionDeCaracteres($valorTotal));

  $devolver=$efectivo-$valorTotal;
  if ($devolver>0) {
    # code...
    return $devolver;
  }
  else
  {
    return 0;
  }


}







public  function listaFacturasDia($id, $vector)
{

//[1]:Ventas del día actual [2]:Ventas del mes [3]:Fecha Seleccionada
if ($vector==1) {
  # code...
  $sql="SELECT *  FROM pedidos WHERE fechaPedido BETWEEN ".fechaActualFija."  AND ".(fechaActualFija+86400)." ";
  $query=mysql_query($sql);
}
elseif ($vector==2) {
  # code...
  //$sql="SELECT *  FROM pedidos WHERE fechaPedido BETWEEN ".fechaActualFija."  AND ".(fechaActualFija+86400)." ";
}
elseif ($vector==3) {
  # code...
  $fecha1=strtotime($_REQUEST["fecha1"]);
  $fecha2=strtotime($_REQUEST["fecha2"]);
  $sql="SELECT *  FROM pedidos WHERE fechaPedido BETWEEN ".$fecha1."  AND ".$fecha2."";
  $query=mysql_query($sql);

}

  echo '<table id="dataTable1" class="table table-bordered table-striped-col">
              <thead>
                <tr>
                  <th>Estado</th>
                  <th>Nro Factura</th>
                  <th>Cliente</th>
                  <th>Fecha</th>
                  <th>Valor Factura</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>';


while ($rs=mysql_fetch_array($query)) {
  # code...
  echo '<tr>
                  <td>'.$this->stringEstado($rs["estado"]).'</td>
                  <td>'.$rs["nroPedido"].'</td>
                  <td>'.$this->datosCliente($rs["idCliente"], "nombresApellidos").'</td>
                  <td>'.$this->fechaHumana(date("Y-m-d", $rs["fechaPedido"])).'</td>
                  <td>$'.number_format($rs["valorPedido"]).'</td>

                  <td>
                    <a href="'.$this->datospagina(5).'/ventas/detalleFactura.php?id='.$id.'&f='.$this->encrypt($rs["id"], publickey).'" >
                      <button class="btn btn-primary">¿Necesitas Ver Mas Detalles?</button>
                    </a>
                      </td>
                </tr>';
}

echo '</tbody>
    </table>';


}







//Lista de Créditos
public  function listaCreditos($id, $vector)
{

  conectar::conexiones();

//[1]:Ventas del día actual [2]:Ventas del mes [3]:Fecha Seleccionada
if ($vector==1) {
  # code...
  $sql="SELECT *  FROM creditos  WHERE fechaAbono BETWEEN ".fechaActualFija."  AND ".(fechaActualFija+86400)."  ";

  
}
elseif ($vector==2) {
  # code...
  //$sql="SELECT *  FROM pedidos WHERE fechaPedido BETWEEN ".fechaActualFija."  AND ".(fechaActualFija+86400)." ";
   $sql="SELECT *  FROM pedidos  WHERE  estado !=1";


}
elseif ($vector==3) {
  # code...
  $fecha1=strtotime($_REQUEST["fecha1"]);
  $fecha2=strtotime($_REQUEST["fecha2"]);
  $sql="SELECT *  FROM pedidos WHERE fechaPedido BETWEEN ".$fecha1."  AND ".$fecha2." and  estado !=1";


}

elseif ($vector==4) {
  # code...
  //Miro el campo
  $campo=$this->filtroNumerico($_REQUEST["campo"]);
  if ($campo==2) {
    # identificacion del cliente...
  $parametro=$this->normalizacionDeCaracteres($this->filtroNumerico($_REQUEST["parametro"]));
  $sqlCliente="SELECT id, identificacion FROM clientes WHERE identificacion='".intval($parametro)."'";
  $queryCliente=mysql_query($sqlCliente);
  $rsCliente=mysql_fetch_array($queryCliente);
  $parametro=$rsCliente["id"];
  $sql="SELECT *  FROM pedidos  WHERE idCliente ='".intval($parametro)."' AND estado !=1";
  

  }
  elseif ($campo==3) {
    # numero de factura...
  $parametro=$this->normalizacionDeCaracteres($this->filtroNumerico($_REQUEST["parametro"]));
  $sql="SELECT *  FROM pedidos  WHERE nroPedido ='".intval($parametro)."' AND estado !=1";

  }



}
  echo '<table id="dataTable1" class="table table-bordered table-striped-col">
              <thead>
                <tr>
                  <th>Nro Factura</th>
                  <th>Cliente</th>
                  <th>Identificacion</th>
                  <th>Fecha</th>
                  <th>Valor Factura</th>
                  <th>Deuda</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>';

  $query=mysql_query($sql);
  $sum=0;
while ($rs=mysql_fetch_array($query)) {
  # code...
  echo '<tr>
                  <td>'.$rs["nroPedido"].'</td>
                  <td align="center">'.$this->datosCliente($rs["idCliente"], "nombresApellidos").'</td>
                   <td align="center">'.$this->datosCliente($rs["idCliente"], "identificacion").'</td>
                  <td align="center">'.$this->fechaHumana(date("Y-m-d",$rs["fechaPedido"])).'</td>
                  <td align="center">$'.number_format($rs["valorPedido"]).'</td>
                  <td align="center">$'.number_format($rs["debe"]).'</td>

                  <td>
                    <a href="'.$this->datospagina(5).'/ventas/detalleFactura.php?id='.$id.'&f='.$this->encrypt($rs["id"], publickey).'" >
                      <button class="btn btn-primary">¿Necesitas Ver Mas Detalles?</button>
                    </a>
                      </td>
                </tr>';

                $sum=$sum+$rs["debe"];
}

echo '</tbody>
    </table>
    

    ';

    echo '<br><hr>
    <div class="col-md-12">
      '.$this->avisos("error", "Total en Créditos: <h1 style='color:#fff'> $ ".number_format($sum)."</h1>").'
    </div>';


    conectar::conexiones();
}

//Valor de lo vendido hoy

public  function registroEnCajadelDia($vector)
{
  conectar::conexiones();
  if(!isset($vector))
  {
      $sql="SELECT *  FROM pedidos  WHERE fechaPedido BETWEEN ".fechaActualFija."  AND ".(fechaActualFija+86400)."  AND liquidado =1";

  }
  else
  {
    if ($vector==3) {
      # code...
      $fecha1=strtotime($_REQUEST["fecha1"]);
      $fecha2=strtotime($_REQUEST["fecha2"]);
      $sql="SELECT *  FROM pedidos WHERE fechaPedido BETWEEN ".$fecha1."  AND ".$fecha2." AND liquidado =1";

    }
  }
  $query=mysql_query($sql);
  $sum=0;
  while ($rs=mysql_fetch_array($query)) {
    # code...
    $sum=$sum+($rs["valorPedido"]-$rs["debe"]);
  }


   return  $sum;
  conectar::desconectar();
}




//RValor  de lo que se ha dado en credito hoy

public  function valorCreditosDia($parametro)
{
  conectar::conexiones();
  $sql="SELECT debe, estado, liquidado FROM pedidos  WHERE fechaPedido BETWEEN ".fechaActualFija."  AND ".(fechaActualFija+86400)."  AND liquidado =1 AND estado=2";
  $query=mysql_query($sql);
  $sum=0;
  while ($rs=mysql_fetch_array($query)) {
    # code...
    $sum=$sum+($rs["debe"]);
  }

  return $sum;
  conectar::desconectar();
}


/*************************Cajas**************************/

public  function menuListaCaja($id)
{

  conectar::conexiones();
  $sql="SELECT * FROM cajas";
  $query=mysql_query($sql);
  echo '<ul class="children">';
  while ($rs=mysql_fetch_array($query)) {
    # code...
    echo '<li><a href="'.$this->datospagina(5).'/cajas/caja.php?id='.$id.'&idCaja='.$this->encrypt($rs["id"], publickey).'">'.$rs["nombreCaja"].'</a> </li>';
  }
  echo '</ul>';
  conectar::desconectar();
}






//Abonos

public  function abonos($idfactura, $abono)
{
  conectar::conexiones();
  $idFactura=$this->decrypt($_REQUEST["f"], publickey);
  $abono=$this->filtroNumerico($this->normalizacionDeCaracteres($abono));

  $deuda=$this->datosFactura($idFactura, "debe");
  $deudaFinal=($deuda - $abono);
  //Inserto el subitem
  
  /*
  echo "<br>id Factura: ".$idFactura;
  echo "<br>Abono: ".$abono;
  echo "<br>Deuda: ".$deuda;
  echo "<br>Deuda Final:".$deudaFinal;
  */
  $sql="insert into itemsPedido SET nombreArticulo='Abono de credito a factura ".$this->datosFactura($idFactura, "nroPedido")."',

    valorUnidad='".intval($abono)."', idPedido='".intval($idPedido)."'";

    if (mysql_query($sql)) {
      # code...
      if($deudaFinal<=0)//convesión del estado y  deuda final
            {
              $estado=1;  //Canceló
              $deudaFinal=0;
            }
            else
            {
              $estado=2; //Aun debe
            }//fin de la convesión del estado y  deuda final
      
       $sqlPedidos="UPDATE pedidos SET debe='".$deudaFinal."', estado='".$estado."' WHERE id='".intval($idFactura)."'";
      if (mysql_query($sqlPedidos)) {

        # code...
        $sql="SELECT id, idFactura FROM creditos where idFactura='".intval($idFactura)."'";
        $rs=mysql_fetch_array(mysql_query($sql));
        $idCredito=$rs["id"];

        $sqlCredito="INSERT INTO abonosCredito SET idCredito='".intval($idCredito)."', fechaAbono='".fechaActualFija."', valorAbono='".intval($abono)."'";
        if (mysql_query($sqlCredito)) {
          # code...
          return 1;//Abono Hecho correctamente;

        } 
        else{
          return 0; //Error
        }

      

      }
         echo mysql_error();

    }



conectar::desconectar();

}




//Lista de los abonos

public  function listaDeAbonos($idFactura)
{
  conectar::conexiones();
  $idFactura=$this->filtroNumerico($idFactura);

  $sql="SELECT id, idFactura FROM creditos WHERE  idFactura='".intval($idFactura)."'";
  $query=mysql_query($sql);
  $rsCredito=mysql_fetch_array($query);

  $sql="SELECT idCredito, fechaAbono, valorAbono FROM abonosCredito WHERE idCredito='".$rsCredito["id"]."'";
  $query=mysql_query($sql);

  echo '
        <div class="col-md-12">
                  <h3><i class="fa fa-file"></i> Abonos Realizados</h3>


  <table class="table table-bordered table-primary nomargin" id="noPrint">
                  <thead>
                    <tr>  
                      <th class="text-center">Fecha Abono</th>
                      <th class="text-center">Valor</th>
                    </tr>
                  </thead>
                  <tbody>';
    

    //ciclo
    $sum=0;
    while ($rs=mysql_fetch_array($query)) {
            # code...
        echo ' <tr>
                      <td class="text-center">'.$this->fechaHumana(date("Y-m-d", $rs["fechaAbono"])).'</td>
                      <td class="text-center">$'.number_format($rs["valorAbono"]).'</td>
                    </tr>';
          
          $sum=$sum+$rs["valorAbono"];
          }



  //fin del ciclo

    echo '      <tbody>
          </table>
    <div class="row" id="noPrint">
        <div class="col-md-12">
          <h1 align="center" class="text-danger">Total Abonado <i>$ '.number_format($sum).'</i></h1>
        </div>
        </div>
</div>
    ';


  conectar::desconectar();
}









/**********************************[AJAX]***********************************/

public function jsonProductos()
{
  conectar::conexiones();
  $sql="SELECT id, nombreArticulo, ventaFinal FROM items";
  $query=mysql_query($sql);
  $array= array();
  $num=0;
  while ($rs=mysql_fetch_array($query)) {
    # code...
    $array[$num]='"'.$rs["id"].'|'.$rs["nombreArticulo"].'|'.$rs["ventaFinal"].'"';
    $num++;
  }
  $producto=implode(",", $array);
  return ''.$producto.'';

  conectar::desconectar();

}






/***********************[MENSAJES]******************************/

public function avisos($tipo, $mensaje)
{
  if ($tipo=="done") {
    echo '<div class="alert alert-success" id="noPrint" align="center" style="font-size:18px;">'.$mensaje.'</div>';
    # code...
  }
  elseif ($tipo=="aviso") {
    # code...
    echo '<div class="alert alert-info" id="noPrint" align="center" style="font-size:18px;"> <i class="fa fa-exclamation-circle"></i> '.$mensaje.'</div>';
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



/**********************[HTMLS]*************************/



public  function analizaSaldo($parametro)
{
  if (intval($parametro)) {
    # code...
      if($parametro>=0)
      {
        return '$ '.number_format($parametro);
      }
      elseif ($parametro<0) {
        # code...
        return '<span class="label label-danger label-form"> <i class="fa fa-warning"></i> '.number_format($parametro).'</span>';
      }
  }

}















/**************SELECTS*****************/
//Este es  la lista de los tipos de contacto que hay, si es un cliente  o provedor
public function tipoContacto($parametro)
{
  if($parametro==NULL)
  {
    $parametro=9999;
  }
	echo '<select class="form-control select" name="tipoContacto" required="" required onchange="showmeDatosFacturacion(this.value)" >
		   <option value="" '.$this->selected($parametro, 99999).'>Selecciona Uno</option>
           <option value="0" '.$this->selected($parametro, 0).' >Cliente</option>
           <option value="1" '.$this->selected($parametro, 1).'>Provedor</option>
           <option value="2" '.$this->selected($parametro, 2).'>Cliente y Provedor</option>
        </select>';
}




//Selecciono los tipos de régimen que existen
public function tipoRegimen($parametro)
{
	echo '<select class="form-control select" name="tipoRegimen" required="">
		   <option value="">¿A cuál régimen pertenece?</option>
           <option value="0" '.$this->selected($parametro, 0).' >Común</option>
           <option value="1" '.$this->selected($parametro, 1).' >Simplificado</option>
           <option value="2" '.$this->selected($parametro, 2).' >Persona Natural</option>
           <option value="3" '.$this->selected($parametro, 3).' >Persona Jurídica</option>
        </select>';


}










//String  tipo contratos
public  function stringTipoContrato($parametro)
{

  switch ($parametro) {
    case 1:
      # code...
    return "Termino Fijo";
      break;


    case 2:
      # code...
    return "Termino Indefinido";
      break;
    
    default:
      # code...
      break;
  }
}

//String Estados

public  function stringEstado($vector)
{
  switch ($vector) {
    case 1:
      return "<p class='text-success'><i class='fa fa-check'></i> Cancelado</p>";
      # code...
      break;

    case 2:
      return "<p class='text-danger'><i class='fa fa-warning'></i>  Crédito</p>";
      # code...
      break;
    
    default:
      # code...
      break;
  }
}




public  function stringBodega($parametro)
{
  $sql="SELECT nombre FROM  bodegas WHERE id='".$this->filtroNumerico($parametro)."'";
  $query=mysql_query($sql);
  $rs=mysql_fetch_array($query);
  return $rs["nombre"];
}

//selecciono el tipo de documento



//Selecciona los tipos de vehículos
public  function selectProvedores($parametro)
{
   conectar::conexiones();
  echo ' <select name="idProvedor"   class="form-control"  id="idProvedor" onchange="muestramebodegas(this.value)">
            <option value="">Selecciona</option>';
 $sql="SELECT id, tipo, nombre  FROM contactos WHERE tipo != 0";
  $query=mysql_query($sql);
    while ($rs=mysql_fetch_array($query)) {
      # code...
      echo '<option value="'.$rs["id"].'" '.$this->selected($parametro, $rs["id"]).'>'.$rs["nombre"].'</option>';
    }

         
         echo '</select>';
   conectar::desconectar();
}





public  function selectBancos($parametro)
{
  conectar::conexiones();
  $sql="SELECT id, nombre, tipo   FROM cajasBancos WHERE tipo = 2";
  $query=mysql_query($sql);
   echo ' <select name="banco"    id="banco"  class="form-control" onchange="activarComision()" disabled>
            <option value="">Selecciona</option>
   ';
   while ($rs=mysql_fetch_array($query)) {
     # code...
    echo '<option value="'.$rs["id"].'" '.$this->selected($parametro, $rs["id"]).'>'.$rs["nombre"].'</option>';
   }
   echo '</select>';
  conectar::desconectar();
}




//Select Bodegas

public  function selectBodegas($parametro)
{
  conectar::conexiones();
  //Debo identificar que tipo de régimen me mandó 
  $filtro=$this->datosContactos($parametro, "regimen");
  if($filtro==1  OR $filtro==2)
  {
    $sql="SELECT id, nombre FROM bodegas";
  }
  else
  { 
    $sql="SELECT id, nombre, regulada FROM bodegas WHERE regulada=1";
  }
  
  $query=mysql_query($sql);
   echo ' <select name="idBodega" class="form-control"  id="idBodega" >
            <option value="">Selecciona Una Bodega</option>
   ';
   while ($rs=mysql_fetch_array($query)) {
     # code...
    echo '<option value="'.$rs["id"].'" '.$this->selected($parametro, $rs["id"]).'>'.$rs["nombre"].'</option>';
   }
   echo '</select>';
  conectar::desconectar();
}









//************CHECKBOX********************/
public   function checkboxPortal($parametro)
{

 echo  '<input type="checkbox" name="portal" value="1" '.$this->selectedCheckbox($parametro).' /> ¿Habilitar Portal?'; 
}





//Checkbox  tipo de linea del vehículo
public function checkBoxTipoLinea($parametro)
{
  conectar::conexiones();
  $sql="SELECT * FROM tipoLinea WHERE  ";
  $query=mysql_query($sql);
 
   echo '<select multiple class="form-control select">';
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo '<option value="'.$rs["id"].'">'.$rs["tipo"].'</option>';
    //echo  '<label><input type="checkbox" name="portal" value="'.$rs["id"].'" '.$this->selectedCheckbox($parametro).' /> '.$rs["tipo"].'</label> | '; 
  }
  echo '</select>';

  conectar::desconectar();
}


//Kahanamoku 
//Checkbox  Marcas
public function checkBoxMarcas($parametro)
{
  conectar::conexiones();
  $sql="SELECT * FROM marcas";
  $query=mysql_query($sql);
 
 echo '<select multiple class="form-control select" >';
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo '<option>'.$rs["tipo"].'</option>';
    //echo  '<label><input type="checkbox" name="portal" value="'.$rs["id"].'" '.$this->selectedCheckbox($parametro).' /> '.$rs["tipo"].'</label> | '; 
  }
  echo '</select>';

  conectar::desconectar();
}





public function checkBoxSubLinea($parametro)
{
  conectar::conexiones();
  $sql="SELECT * FROM subLinea";
  $query=mysql_query($sql);
 
 echo '<select multiple class="form-control select">';
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo '<option>'.$rs["nombre"].'</option>';
    //echo  '<label><input type="checkbox" name="portal" value="'.$rs["id"].'" '.$this->selectedCheckbox($parametro).' /> '.$rs["tipo"].'</label> | '; 
  }
  echo '</select>';

  conectar::desconectar();
}








public function checkBoxGrupos($parametro)
{
  conectar::conexiones();
  $sql="SELECT * FROM grupos";
  $query=mysql_query($sql);
 
 echo '<select multiple class="form-control select">';
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo '<option>'.$rs["nombre"].'</option>';
    //echo  '<label><input type="checkbox" name="portal" value="'.$rs["id"].'" '.$this->selectedCheckbox($parametro).' /> '.$rs["tipo"].'</label> | '; 
  }
  echo '</select>';

  conectar::desconectar();
}









public function checkBoxSubGrupo($parametro)
{
  conectar::conexiones();
  $sql="SELECT * FROM subGrupos";
  $query=mysql_query($sql);
 
 echo '<select multiple class="form-control select">';
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo '<option>'.$rs["nombre"].'</option>';
    //echo  '<label><input type="checkbox" name="portal" value="'.$rs["id"].'" '.$this->selectedCheckbox($parametro).' /> '.$rs["tipo"].'</label> | '; 
  }
  echo '</select>';

  conectar::desconectar();
}







public function SeleccionRelacionAlmacenes($parametro)
{
  conectar::conexiones();
  $sql="SELECT  id, nombre FROM almacen";
  $query=mysql_query($sql);
 
 echo '<select multiple  name="relacion[]"  id="relacion" class="form-control select" >';
  while ($rs=mysql_fetch_array($query)) {
    # code...

    echo '<option value="'.$this->encrypt($rs["id"], publickey).'">'.$rs["nombre"].'</option>';
    //echo  '<label><input type="checkbox" name="portal" value="'.$rs["id"].'" '.$this->selectedCheckbox($parametro).' /> '.$rs["tipo"].'</label> | '; 
  }
  echo '</select>';

  conectar::desconectar();
}


/**********************[FLTROS]**************************/


public function tipoUsuario($parametro)
{

  if ($parametro==0) {
    # code...
    return "Cliente";
  }
  elseif ($parametro==1) {
    # code...
    return "Provedor";
  }
  elseif ($parametro==2) {
    # code...
      return "Cliente y Provedor";
  }
}





private function selected($parametro, $value)
  {
    if($parametro==$value)
    {
      return 'selected="select"';
    }
    else
    {
      return '';
    }
  }



//Me checkea o   descheckea los parametros
  private function selectedCheckbox($parametro)
  {
    if($parametro==1)
    {
      return 'checked';
    }
    else
    {
      return '';
    }
  }



//Checheo la existencia de alguna identificacion repetida

  public  function checkIdentificacionContacto($parametro)
  {
    conectar::conexiones();
    $sql="SELECT identificacion  FROM  contactos  WHERE identificacion='".$this->normalizacionDeCaracteres($parametro)."'";
    return mysql_num_rows(mysql_query($sql));
    conectar::desconectar();

  }







//Filtro Strings
public function filtroStrings($parametro, $tipo)
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




//Filtro  todos los emails
private function filtrarEmail($original_email)
{
  $clean_email = filter_var($original_email,FILTER_SANITIZE_EMAIL);
  if ($original_email == $clean_email && filter_var($original_email,FILTER_VALIDATE_EMAIL))
  {
  return $original_email;
  }

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




public   function fechaHumana($parametro)
{
  $fecha=explode('-',$parametro);
  if($fecha[2]>0){                 
  return $fecha[2].' de '.$this->meses($fecha[1]). ' del '.$fecha[0] ; 
  }
  else
  {
    return "No se ha asignado fecha";
  }
}
  



//Convierto los números de los meses en los meses string
private function meses($parametro)
  {
  switch($parametro)
    {
    
    case 01:
    return 'Enero';
    break;
    
    
    case 02:
    return 'Febrero';
    break;
    
    
    case 03:
    return 'Marzo';
    break;
    
    
    case 04:
    return 'Abril';
    break;
    
    
    case 05:
    return 'Mayo';
    break;
    
    
    case 06:
    return 'Junio';
    break;
    
    
    case 07:
    return 'Julio';
    break;
    
    
    case "08":
    return 'Agosto';
    break;
    
    
    case "09":
    return 'Septiembre';
    break;
    
    
    case "10":
    return 'Octubre';
    break;
    
    
    case "11":
    return 'Noviembre';
    break;
    
    
    case "12":
    return 'Diciembre';
    break;
    
    }
  
  }



























/******************************************[PITUFOS]***************************************************/


public  function selectBodegaRegulada($parametro)
{
  # code...

  echo '<select name="regulada" class="form-control" required>
          *<option value="1" '.$this->selected($parametro, 1).'>Si</option>
          <option value="0" '.$this->selected($parametro, 0).'>no</option>
        </select>
  ';
}


















}

?>