<table width="700" border="0" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; background-color:#fff " align="center"  bgcolor="#FFFFFF">
  <tr  bgcolor="#FFFFFF">
    <td colspan="2" rowspan="2"> <img src="" height="50"></td>
    <td width="156" align="right"><b>Remisión</b></td>
    <td width="180" align="center" style="color:#f00;"><b><?php // echo $datosOrden["nroOrden"]; ?></b></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><b>Fecha de Ingreso</b></td>
    <td></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="4" align="center"><b>INFORMACIÓN BÁSICA DEL CLIENTE</b></td>
  </tr>
  <tr>
    <td width="151"><b>Nombre del Cliente</b></td>
    <td width="195" bgcolor="#FFFFFF"><?php //echo $consulta->datosCliente($consulta->encrypt($datosOrden["idCliente"], publickey), "nombre") ?></td>
    <td><b>Teléfono</b></td>
    <td><?php// echo $consulta->datosCliente($consulta->encrypt($datosOrden["idCliente"], publickey), "telefono") ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><b>Email</b></td>
    <td><?php //echo $consulta->datosCliente($consulta->encrypt($datosOrden["idCliente"], publickey), "email") ?></td>
    <td><b>Celular</b></td>
    <td><?php //echo $consulta->datosCliente($consulta->encrypt($datosOrden["idCliente"], publickey), "celular") ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="4" align="center"><b>INFORMACIÓN BÁSICA DEL EQUIPO</b></td>
  </tr>
  

</table>
