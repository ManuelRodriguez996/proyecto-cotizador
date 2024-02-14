<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<?php
include("conexion.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d78302bb95.js" crossorigin="anonymous"></script>
    <title>Cotizador</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="container-form formulario">
        <h2>Cotiza tu seguro</h2>

        <hr>

        <h3>Datos de tu auto</h3>

        <form class="container-form formprecotizacion">

            <span id="anio_del_auto-error" class="error-message"></span>
            <label for="anio_del_auto">Año</label>
            <select name="anio_del_auto_name" id="anio_del_auto"
                class="input-text error-input input_auto input_version">
                <option value="" selected>Selecione el Año</option>


            </select>

            <br>

            <span id="marca_del_auto-error" class="error-message"></span>
            <label for="marca_del_auto">Marca</label>
            <select name="marca_del_auto_name" id="marca_del_auto"
                class="input-text error-input input_auto input_version">
                <option value="">Selecione la Marca</option>

            </select>

            <span id="modelo_del_auto-error" class="error-message"></span>
            <label for="modelo_del_auto">Modelo</label>
            <select name="modelo_del_auto_name" id="modelo_del_auto" class="input-text error-input input_version">
                <option value="">Selecione un Modelo</option>

            </select>

            <br>

            <span id="version_del_auto-error" class="error-message"></span>
            <label for="version_del_auto">Versión</label>
            <select name="version_del_auto_name" id="version_del_auto" class="input-text error-input">
                <option value="">Selecciona una Version</option>
            </select>

            <br>

            <input type="checkbox" name="uso_particular" class="checkbox" id="checkboxx">
            <label for="checkboxx" id="palabra">Mi auto es de uso particular</label>

            <div>
                <p>Tu auto debe funcionar bien y estar en buenas condiciones de chapa, pintura, cristales, ópticas y
                    ruedas.</p>
            </div>

            <div class="alerta" id="ocultarcartel">
                <p><i class="fa-solid fa-circle-exclamation"></i> Por este medio solo podemos asegurar autos de uso
                    particular.
                    <br>
                    Si tu auto es de uso comercial, podés Llamarnos a nuestro numero telefonico al <a
                        href="index.php">0810-555-5500</a>.
                </p>
            </div>

            <hr>

            <h3>Datos Personales</h3>

            <span id="provincia-error" class="error-message"></span>
            <label for="provincia">Provincia</label>
            <select name="provincia_name" id="provincia" class="input-text error-input input_datospersonales">
                <option value="">Elije una Provincia</option>

            </select>


            <span id="codigo_postal-error" class="error-message"></span>
            <label for="codigo_postal" class="label-error">Código Postal</label>
            <input type="number" name="codigo_postal_name" id="codigo_postal" class="input-text error-input">



            <span id="localidad-error" class="error-message"></span>
            <label for="localidad">Localidad</label>
            <select name="localidad_name" id="localidad" class="input-text error-input input_datospersonales">
                <option value="">Elije una Localidad</option>

            </select>

            <br>

            <span id="email-error" class="error-message"></span>
            <label for="email">Mail</label>
            <input type="email" name="email_name" class="input-text error-input" id="email">

            <br>

            <span id="codigo_de_area-error" class="error-message"></span>
            <label for="codigo_de_area">Código área
            </label>
            <input type="number" name="codigo_de_area_name" class="input-text error-input" id="codigo_de_area">

            <span id="numero_de_telefono-error" class="error-message"></span>
            <label for="numero_de_telefono">Número</label>
            <input type="number" name="numero_de_telefono_name" class="input-text error-input" id="numero_de_telefono">

            <hr>

            <input onclick="validaciones_Datos()" type="submit" value="Ver precios" name="enviar-datos"
                class="submit_contacto">
        </form>
    </div>
    <?php include("card.php"); ?>
    <?php include("footer.php"); ?>

</body>

</html>

<script>
    $(document).ready(function () {
        $('form').submit(function (event) {
            event.preventDefault();


            var datos_a_validar = [
                { nombre: "anio_del_auto", regex: /^\d+$/, mensaje: "El año ingresado no es válido. Debe ser un número." },
                { nombre: "marca_del_auto", regex: /^[a-zA-Z0-9]+$/, mensaje: "La marca ingresada no es válida. Debe contener solo letras y espacios." },
                { nombre: "modelo_del_auto", regex: /^[a-zA-Z0-9]+$/, mensaje: "El modelo ingresado no es válido. Debe contener solo letras, numeros y espacios." },
                { nombre: "version_del_auto", regex: /^[a-zA-Z0-9\s]+$/, mensaje: "La versión ingresada no es válida. Debe contener letras, números y espacios." },
                { nombre: "codigo_postal", regex: /^\d{4}$/, mensaje: "El código postal ingresado no es válido. Debe tener 4 dígitos." },
                { nombre: "localidad", regex: /^[a-zA-Z0-9]+$/, mensaje: "La localidad ingresada no es válida. Debe contener solo letras, numeros y espacios." },
                { nombre: "email", regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, mensaje: "El correo electrónico ingresado no es válido." },
                { nombre: "codigo_de_area", regex: /^\d{3}$/, mensaje: "El código de área ingresado no es válido. Debe tener 3 digitos (por ejemplo 011*)." },
                { nombre: "numero_de_telefono", regex: /^\d+$/, mensaje: "El número de teléfono ingresado no es válido." }
            ];

            for (var i = 0; i < datos_a_validar.length; i++) {

                var input_nombre = datos_a_validar[i].nombre;
                var regex = datos_a_validar[i].regex;
                var mensaje = datos_a_validar[i].mensaje;
                var valor = $('#' + input_nombre).val();

                if (valor === "" || !regex.test(valor)) {
                    $('#' + input_nombre + '-error').css('color', 'red').text(mensaje).show();
                    $('label[for="' + input_nombre + '"]').css('display', 'none');
                } else {
                    $('#' + input_nombre).css('color', '');
                    $('#' + input_nombre + '-error').hide();
                    $('label[for="' + input_nombre + '"].label-error');
                }
            }
            if ($('.error-input').length === 0) {
                $(this).unbind('submit').submit();
            }
        })
    })

    function validaciones_Datos() {

        var anio_del_auto_Valor = $('select[name=anio_del_auto_name]').val();
        var marca_del_auto_Valor = $('select[name=marca_del_auto_name] option:selected').text();
        var modelo_del_auto_Valor = $('select[name=modelo_del_auto_name] option:selected').text();
        var version_del_auto_Valor = $('select[name=version_del_auto_name] option:selected').text();
        var codigo_postal_Valor = $('input[name=codigo_postal_name]').val();
        var provincia_Valor = $('select[name=provincia_name] option:selected').text();
        var localidad_Valor = $('select[name=localidad_name] option:selected').text();
        var email_Valor = $('input[name=email_name]').val();
        var codigo_de_area_Valor = $('input[name=codigo_de_area_name]').val();
        var numero_de_telefono_Valor = $('input[name=numero_de_telefono_name]').val();

        $.ajax({
            url: 'validaciones.php',
            method: 'POST',
            data: {

                anio_del_auto_Peticion: anio_del_auto_Valor,
                marca_del_auto_Peticion: marca_del_auto_Valor,
                modelo_del_auto_Peticion: modelo_del_auto_Valor,
                version_del_auto_Peticion: version_del_auto_Valor,
                codigo_postal_Peticion: codigo_postal_Valor,
                provincia_Peticion: provincia_Valor,
                localidad_Peticion: localidad_Valor,
                email_Peticion: email_Valor,
                codigo_de_area_Peticion: codigo_de_area_Valor,
                numero_de_telefono_Peticion: numero_de_telefono_Valor
            },
            success: function (respuesta) {
                json_respuesta = JSON.parse(respuesta);
                if (json_respuesta.estado_Precliente === "1" && json_respuesta.estado_Precotizacion === "1") {
                    buscarCotizacion();
                    $('body').append('<input type="hidden" name="numero_precotizacion" value="'+json_respuesta.numero_precotizacion+'">');
                    $('body').append('<input type="hidden" name="numero_precliente" value="'+json_respuesta.numero_precliente+'">');
                    alert("Los datos fueron ingresados correctamente");
                } else {
                    alert("Algo a fallado al ingresar los datos")
                }
            }


        })
        
    }


    $('#checkboxx').change(function () {
        if (this.checked) {
            $('#ocultarcartel').hide();
        } else {
            $('#ocultarcartel').show();
        }
    });

    $.ajax({
        url: "api_data.php",
        method: 'GET', 
        // dataType: 'json',
        data: { tipos: 'years', url_pagina: 1 },
        success: function (data_anio) {
            // info = JSON.parse(data);
            // console.log(data_anio);
            // Iterar sobre los datos recibidos y agregar opciones al select
            $.each(data_anio, function (index, item) {
                if (item >= 2015 && item <= 2020) {
                    $('#anio_del_auto').append('<option value="' + item + '">' + item + '</option>');
                }
            });
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener datos de la API:', error);
        }
    });

    $('#anio_del_auto').on('change', function () {
        Anio = $('#anio_del_auto').val();
        console.log(Anio, 'valor del año');
    })

    $.ajax({
        url: "api_data.php",
        method: 'GET',
        data: { tipos: 'makes', url_pagina: 1 },
        dataType: 'json',
        success: function (data_marca) {
            info = data_marca;
            $.each(info.data, function (indice, valor) {
                // console.log(indice);
                // console.log(valor);
                $('#marca_del_auto').append('<option value="' + valor.id + '">' + valor.name + '</option>');
            })

        },
        error: function (xhr, status, error) {
            console.error('Error al obtener datos de la API:', error);

        }
    })




    $('.input_auto').on('change', function () {
        Anio = $('#anio_del_auto').val();
        marca = $('#marca_del_auto').val();
        console.log(marca, 'Valor de la marca');
        if (marca == "" || Anio == "") {
            return;
        }

        $.ajax({
            url: "api_data.php",
            method: 'GET',
            data: { tipos: 'models', parametros: { year: Anio, make_id: marca }, url_pagina: 1 },
            dataType: 'json',
            success: function (modelos) {
                info = modelos;
                $('#modelo_del_auto').html('<option value="">Selecione un Modelo</option>');
                $.each(info.data, function (indice, valor) {
                    // console.log(indice);
                    // console.log(valor);
                    $('#modelo_del_auto').append('<option value="' + valor.id + '">' + valor.name + '</option>');

                })
                if ($('#modelo_del_auto option').length == "1") {
                    $('#modelo_del_auto').append('<option value="" selected> No existe modelo con esta marca y año</option>');
                }

            }
        })
    })

    $('.input_version').on('change', function () {
        Anio = $('#anio_del_auto').val();
        marca = $('#marca_del_auto').val();
        modelo = $('#modelo_del_auto').val();
        // .HTML REMPLAZA EL CONETENIDO EN ESTE CASO LA <OPCION>
        $('#version_del_auto').html('<option value="">Selecione una Version</option>');

        if (Anio == "" || marca == "" || modelo == "") {
            return;
        }
        $.ajax({
            url: "api_data.php",
            method: "GET",
            data: { tipos: 'trims', parametros: { make_model_id: modelo, year: Anio }, url_pagina: 1 },
            dataType: 'json',
            success: function (versiones) {
                info = versiones;
                $.each(info.data, function (indice, valor) {
                    // console.log(indice);
                    // console.log(valor);
                    $('#version_del_auto').append('<option value="' + valor.id + '">' + valor.description + '</option>');

                })
                if ($('#version_del_auto option').length == "1") {
                    $('#version_del_auto').append('<option value=""  selected> No existe version con esta marca y año</option>');
                }
            }
        })
    })

    $.ajax({
        url: "api_data.php",
        method: "GET",
        data: { tipos: 'provincias', url_pagina: 2, parametros: { max: "24" } },
        dataType: 'json',
        success: function (respuesta) {
            info = respuesta;
            $.each(info.provincias, function (indice, valor) {
                $('#provincia').append('<option value="' + valor.nombre + '">' + valor.nombre + '</option>');
            })
        }
    })


    $('.input_datospersonales').on('change', function () {
        provincia = $('#provincia').val();
        // console.log(provincia);

        $.ajax({
            url: "api_data.php",
            method: "GET",
            data: { tipos: 'localidades', url_pagina: 2, parametros: { max: "1000", provincia: provincia } },
            dataType: 'json',
            success: function (respuesta) {
                info = respuesta;
                // console.log(respuesta);
                $.each(info.localidades, function (indice, valor) {
                    // console.log(indice);
                    // console.log(valor);
                    $('#localidad').append('<option value="' + valor.id + '">' + valor.nombre + '</option>');

                })
            }
        })
    })


</script>