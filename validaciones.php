<?php

if (isset($_POST)) {
    $anio_del_auto = $_POST["anio_del_auto_Peticion"];
    $marca_del_auto = $_POST["marca_del_auto_Peticion"];
    $modelo_del_auto = $_POST["modelo_del_auto_Peticion"];
    $version_del_auto = $_POST["version_del_auto_Peticion"];

    $codigo_postal = $_POST["codigo_postal_Peticion"];
    $localidad = $_POST["localidad_Peticion"];
    $provincia = $_POST["provincia_Peticion"];
    $email = $_POST["email_Peticion"];
    $codigo_de_area = $_POST["codigo_de_area_Peticion"];
    $numero_de_telefono = $_POST["numero_de_telefono_Peticion"];

} else {
    die;
}

include("conexion.php");

validar_campo($anio_del_auto, "/^\d+$/", "Año Invalido");
validar_campo($marca_del_auto, "/[a-zA-Z0-9]+/", "Marca del auto Invalido");
validar_campo($modelo_del_auto, "/[a-zA-Z0-9]+/", "Modelo del auto Invalido");
validar_campo($version_del_auto, "/[a-zA-Z0-9]+/", "Version del auto Invalido");
validar_campo($codigo_postal, "/\d{4}/", "Codigo postal Invalido");
validar_campo($localidad, "/[a-zA-Z0-9]+/", "Localidad Invalida");
validar_campo($email, "/[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", "Email Invalido");
validar_campo($codigo_de_area, "/^\d{3}$/", "Codigo de area Invalido");
validar_campo($numero_de_telefono, "/^\d+$/", "Numero de telefono Invalido");


$query = "INSERT INTO precliente (codigo_postal, localidad, provincia, email, codigo_de_area, numero_de_telefono) VALUES (?, ?, ?, ?, ?,?)";

$query2 = "INSERT INTO precotizacion (anio_del_auto, marca_del_auto, modelo_del_auto, version_del_auto, id_precliente) VALUES (?, ?, ?, ?, ?)";

$params = array($codigo_postal, $localidad, $provincia, $email, $codigo_de_area, $numero_de_telefono);



$respuesta = array();


$preparacion = prepararConsulta($base_de_datos, $query, $params);

$id_precliente = $base_de_datos->lastInsertId();

if ($preparacion['estado'] == 1) {
    $respuesta['precliente'] = "El Precliente se guardo exitosamente ";
    $respuesta['estado_Precliente'] = "1";
    $respuesta['numero_precliente'] = $id_precliente;
} else {
    $respuesta['error'] = $preparacion['mensaje_Error'];
    $respuesta['estado_Precliente'] = "2";
}

$params2 = array($anio_del_auto, $marca_del_auto, $modelo_del_auto, $version_del_auto, $id_precliente);

$preparacion2 = prepararConsulta($base_de_datos, $query2, $params2);
if ($preparacion2['estado'] == 1) {
    $respuesta['precotizacion'] = "La Precotizacion se guardo exitosamente ";
    $respuesta['estado_Precotizacion'] = "1";
    $respuesta['numero_precotizacion'] = $base_de_datos->lastInsertId();
} else {
    $respuesta['error2'] = $preparacion2['mensaje_Error'];
    $respuesta['estado_Precotizacion'] = "2";
}
echo json_encode($respuesta);


// creo 2 funciones para validar campos vacios y validar el regex
function validar_campo($variable, $regex, $mensaje_Error)
{
    if (preg_match($regex, $variable) && !($variable === "" || $variable === NULL)) {

    } else {
        $error_Validacion['error_Validacion'] = $mensaje_Error;
        echo json_encode($error_Validacion);
        die;
    }
}

//creo una funcion para preparar consultas y ejecutarla
function prepararConsulta($conexion, $query, $params)
{

    try {
        $preparacion = $conexion->prepare($query);
        $preparacion->execute($params);
        $estado = "1";
        $mensaje_Error = "";


    } catch (PDOException $error) {
        $mensaje_Error = "Error al preparar la consulta: " . $error->getMessage();
        $estado = "2";
    }
    return ['mensaje_Error' => $mensaje_Error, 'estado' => $estado];
}


