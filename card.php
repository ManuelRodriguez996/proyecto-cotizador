<div class="cartas_cobertura">
    <div class="cobertura_title">
        <h2>Todo Riesgo</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 tarjeta_coti">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/rus.png" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="card-body rus_tr">
                        <p class="descripcion"></p>
                        <h2 class="card-titulo">Cobertura</h2>
                        <p class="cobertura"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 tarjeta_coti">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/La-Caja-Seguros.png" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="card-body lacaja_tr">
                        <p class="descripcion"></p>
                        <h2 class="card-titulo">Cobertura</h2>
                        <p class="cobertura"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cobertura_title">
        <h2>Responsabilidad Civil</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 tarjeta_coti">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/rus.png" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="card-body rus_rca">
                        <p class="descripcion"></p>
                        <h2 class="card-titulo">Cobertura</h2>
                        <p class="cobertura"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 tarjeta_coti">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/La-Caja-Seguros.png" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="card-body lacaja_rca">
                        <p class="descripcion"></p>
                        <h2 class="card-titulo">Cobertura</h2>
                        <p class="cobertura"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick='insertar_cobertura()' id='insertar_cobertura'>Elegir cobertura</button>
</div>


<script>

    var cotizacion_seleccionada = '';

    function buscarCotizacion() {


        marca = $('select[name=marca_del_auto_name]').val();

        $.ajax({
            url: 'cotizacion.php',
            method: 'GET',
            data: { marca: marca },
            dataType: 'json',
            success: function (respuesta) {
                // console.log(respuesta);
                $.each(respuesta.companias, function (compania_string, compania_valor) {
                    // console.log(compania_string);
                    // console.log(compania_valor);
                    $.each(compania_valor.coberturas, function (cobertura_string, cobertura_valor) {
                        // console.log(cobertura_string);
                        // console.log(cobertura_valor);
                        if (compania_string == 'RUS') {
                            if (cobertura_valor.tipo == 'TR') {
                                $('.rus_tr .descripcion').attr('data-codigo', cobertura_string);
                                $('.rus_tr .descripcion').append(cobertura_valor.Descripcion);
                                $('.rus_tr .cobertura').append('<p> Cuota: $' + parseInt(cobertura_valor.cuota).toLocaleString('es-ES') + '</p>' + '<p> Vigencia:  ' + cobertura_valor.vigencia + ' Meses</p>' + '<p> Suma Asegurada: $' + parseInt(cobertura_valor.suma_asegurada).toLocaleString('es-ES') + ' </p>')
                            } if (cobertura_valor.tipo == 'RCA') {
                                $('.rus_rca .descripcion').attr('data-codigo', cobertura_string);
                                $('.rus_rca .descripcion').append(cobertura_valor.Descripcion)
                                $('.rus_rca .cobertura').append('<p> Cuota: $' + parseInt(cobertura_valor.cuota).toLocaleString('es-ES') + '</p>' + '<p> Vigencia:  ' + cobertura_valor.vigencia + ' Meses</p>')
                            }
                        }
                        if (compania_string == 'LA_CAJA') {
                            if (cobertura_valor.tipo == 'TR') {
                                $('.lacaja_tr .descripcion').attr('data-codigo', cobertura_string);
                                $('.lacaja_tr .descripcion').append(cobertura_valor.Descripcion)
                                $('.lacaja_tr .cobertura').append('<p> Cuota: $' + parseInt(cobertura_valor.cuota).toLocaleString('es-ES') + '</p>' + '<p> Vigencia:  ' + cobertura_valor.vigencia + ' Meses</p>' + '<p> Suma Asegurada: $' + parseInt(cobertura_valor.suma_asegurada).toLocaleString('es-ES') + ' </p>')
                            } if (cobertura_valor.tipo == 'RCA') {
                                $('.lacaja_rca .descripcion').attr('data-codigo', cobertura_string);
                                $('.lacaja_rca .descripcion').append(cobertura_valor.Descripcion)
                                $('.lacaja_rca .cobertura').append('<p> Cuota: $' + parseInt(cobertura_valor.cuota).toLocaleString('es-ES') + '</p>' + '<p> Vigencia:  ' + cobertura_valor.vigencia + ' Meses</p>')
                            }
                        }
                    })
                }); $('.cartas_cobertura').show();
                $('.formulario').hide();
            }
        })
    }

    $(document).on('click', '.tarjeta_coti', function () {
        $('.tarjeta_coti').not(this).removeClass('coti_selected');
        cotizacion_seleccionada = '';
        if ($(this).hasClass('coti_selected')) {
            $(this).removeClass('coti_selected');
        } else {
            $(this).addClass('coti_selected');
            cotizacion_seleccionada = $(this).find('.descripcion').attr('data-codigo');
        }
        console.log(cotizacion_seleccionada);
    })


    function insertar_cobertura() {
        numero_cotizacion = $('input[name=numero_precotizacion]').val();
        $.ajax({
            url: 'insertar_cobertura.php',
            method: 'POST',
            data: { cotizacion_id: numero_cotizacion, codigo_cobertura: cotizacion_seleccionada },
            dataType: 'json',
            success: function (respuesta) {
                console.log(respuesta);
                alert(respuesta.mensaje);
            }
        })
    }
</script>