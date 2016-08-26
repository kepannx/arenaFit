
<?php 
require("data/libreria.lib/libreria.clases.php");
$validar=new validar();
//$clave= key;
extract($_REQUEST);
    if
        (isset($usuario))
     {
        echo "<b>usuario: </b>".$user=$validar->encrypt($usuario, $clave);
        echo "<br><b>contrasena: </b>".$pass=$validar->encrypt($contrasena, $clave);;
        echo "<hr><h4>desencriptado</h4>";
        echo $validar->decrypt($user, $clave)."<br>";
        echo $validar->decrypt($pass, $clave);
        /*
        echo "<b>usuario: </b>".$user=$validar->encrypt($usuario, publickey);
        echo "<br><b>contrasena: </b>".$pass=$validar->encrypt($contrasena, publickey);;
        echo "<hr><h4>desencriptado</h4>";
        echo $validar->decrypt($user, publickey)."<br>";
        echo $validar->decrypt($pass, publickey);
*/

        if(isset($texto))
        {
            echo "Texto Desencriptado: ".$validar->decrypt($texto, $clave);
            //echo "Texto Desencriptado: ".$validar->decrypt($texto, publickey);*/
        }
     }
?>
<title><?php echo titulo; ?></title>
<form action="" method="POST">
    <p>usuario</p>
    <input type="text" name="usuario">
    <p>contraseña</p>
    <input type="text" name="contrasena">
    <input type="submit" value="generar">
<hr>

    <h2>Desencriptador</h2>
    <p>Texto</p>
    <textarea name="texto" id="" cols="30" rows="10"></textarea>
    <br><br>
    <select name="clave" id="" require>
        <option value="">Seleccione Clave</option>
        <option value="<?php echo key ?>">Privada</option>
        <option value="<?php echo publickey ?>">Pública</option>
    </select>
    <input type="submit" value="Desencriptar">
</form>

<?php

/*
    //Herramienta para verificación de caracter especial + para los
    $control=0;
    $caracterControl="+";
    $n=0;
    $array= array();
    $a=0;
    while ($n<10000) {
        # code...
        $mystring=$validar->encrypt($n, key);
        if(strpos($mystring, $caracterControl)==TRUE)
        {
            $array[$a]=$n;
            $a++;
            $n++;
        }
        $n++;
    }
   var_dump($array);

*/
?>




<?php 
$fechaPrestamo="25-08-2015";
/*

if(intval(filter_var($fechaPrestamo, FILTER_VALIDATE_INT)==TRUE))
    {
        //Convierto a Fecha normal;
        $fecha=date('d-m-Y', $fechaPrestamo);
    }//Miro si el parametro es numerico o no!
elseif (intval(filter_var($fechaPrestamo, FILTER_VALIDATE_INT)==FALSE)) {
    # code...
     $fecha=$fechaPrestamo;
}
*/
   //echo  strtotime("now");
    ?>


