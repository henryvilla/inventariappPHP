<?php
//SOBRE EL REQUERIMIENTO
$id_requerimiento = filter_input(INPUT_POST, 'id_requerimiento');
$tip_producto = filter_input(INPUT_POST, 'tip_producto');
$tip_requerimiento = filter_input(INPUT_POST, 'tip_requerimiento');
//RESPONSABILIDAD DEL REQUERIMIENTO
$id_atm = filter_input(INPUT_POST, 'id_atm');
$status = filter_input(INPUT_POST, 'status');
$responsable = filter_input(INPUT_POST, 'responsable');
$fecha = filter_input(INPUT_POST, 'fecha');
$proyecto = filter_input(INPUT_POST, 'proyecto');
$grupo = filter_input(INPUT_POST, 'grupo');
$per_prog = filter_input(INPUT_POST, 'per_prog');
$proveedor = filter_input(INPUT_POST, 'proveedor');
$departamento    = filter_input(INPUT_POST, 'departamento');
$provincia = filter_input(INPUT_POST, 'provincia');
$distrito = filter_input(INPUT_POST, 'distrito');
$direccion = filter_input(INPUT_POST, 'direccion');
$locacion = filter_input(INPUT_POST, 'locacion');
$zona = filter_input(INPUT_POST, 'zona');
$contacto = filter_input(INPUT_POST, 'contacto');
$tel_contacto = filter_input(INPUT_POST, 'tel_contacto');
$email_contacto = filter_input(INPUT_POST, 'email_contacto');
$mark_old = filter_input(INPUT_POST, 'mark_old');
$model_old = filter_input(INPUT_POST, 'model_old');
$serie_old = filter_input(INPUT_POST, 'serie_old');
$mark_new = filter_input(INPUT_POST, 'mark_new');
$model_new = filter_input(INPUT_POST, 'model_new');
$serie_new = filter_input(INPUT_POST, 'serie_new');
$mueble_new = filter_input(INPUT_POST, 'mueble_new');
$denom_new = filter_input(INPUT_POST, 'denom_new');
$ip_local_atm = filter_input(INPUT_POST, 'ip_local_atm');
$mascara = filter_input(INPUT_POST, 'mascara');
$ip_gw = filter_input(INPUT_POST, 'ip_gw');
$ip_tandem = filter_input(INPUT_POST, 'ip_tandem');
$puerto = filter_input(INPUT_POST, 'puerto');
$ip_local_alarmas = filter_input(INPUT_POST, 'ip_local_alarmas');
$inversion = filter_input(INPUT_POST, 'inversion');
$igv = filter_input(INPUT_POST, 'igv');
$descripcion_general = filter_input(INPUT_POST, 'descripcion_general');

include '../scritp_requerimiento/conexion.php';
$conexion = Conectarse();
$query=" call ingresar_requerimiento ('$tip_producto','$tip_requerimiento')";
mysql_query($query,$conexion);
?>
 