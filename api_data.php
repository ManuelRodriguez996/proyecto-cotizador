<?php
//Definis variables
header('Content-Type: application/json');

if (!empty($_GET['parametros'])) {

    $años = $_GET['parametros'];
} else {
    $años = "";
}
$url_pagina = $_GET['url_pagina'];

if ($url_pagina == 1) {
    $url = 'https://carapi.app/api/';

} else if ($url_pagina == 2) {
    $url = 'https://apis.datos.gob.ar/georef/api/';

}



$tipos_datos = $_GET['tipos'];
//FIN DE DEFINIR VARIABLES

//DEFINIS UNA FUNCION. UNA FUNCION TRABAJA DE MANERA GENERAL, CON PARAMETROS NO ESPECIFICOS

function obtenerDatosConCurl($url, $tipos_datos, $parametros = array())
{
    $url = $url . $tipos_datos;
    // Inicializar cURL
    $curl = curl_init();

    // Construir la URL con los parámetros si se proporcionaron
    if (!empty($parametros)) {

        $url .= '?' . http_build_query($parametros);
    }

    // Configurar las opciones de cURL
    curl_setopt_array(
        $curl,
        array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true, // Devolver el resultado en lugar de imprimirlo
            CURLOPT_FOLLOWLOCATION => true, // Seguir redirecciones
            CURLOPT_REFERER => $url, // Establecer el referer como la misma URL
        )
    );

    // Ejecutar la solicitud cURL
    $respuesta = curl_exec($curl);

    // Verificar errores
    if ($respuesta === false) {
        // Si hay un error, puedes manejarlo aquí
        echo 'Error cURL: ' . curl_error($curl);
    }

    // Cerrar la sesión cURL
    curl_close($curl);

    // Devolver la respuesta
    return $respuesta;
}
$respuesta = obtenerDatosConCurl($url, $tipos_datos, $años);
echo $respuesta;


?>