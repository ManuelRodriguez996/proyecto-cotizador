<?php
include('conexion.php');

$cotizacion = $_POST['cotizacion_id'];
$codigo_cotizacion = $_POST['codigo_cobertura'];


$query = "UPDATE precotizacion SET codigo_cotizacion = '$codigo_cotizacion' WHERE id='$cotizacion'";
try{
    $base_de_datos->query($query);
    echo json_encode(['mensaje'=>'Cotizacion guardada con exito']);
}catch(PDOException){
    echo json_encode(['mensaje'=>'Error al guardar cotizacion: '.$e->getMessage()]);
}