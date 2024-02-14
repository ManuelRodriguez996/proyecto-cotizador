<?php
$marca = $_GET['marca'];
if ($marca >= 1 && $marca <= 50) {
    $array = [
        'companias' =>
            [
                'RUS' =>
                    [
                        'coberturas' =>
                            [
                                'A1' =>
                                    ['Descripcion' => 'Nuestra cobertura para automóviles va más allá de simples colisiones. Protegemos tu vehículo contra accidentes, robo, daños a terceros y desastres naturales. Además, ofrecemos asistencia en carretera y servicios de reparación de confianza. Con nosotros, tu auto estará protegido en cualquier situación.', 'cuota' => '28000', 'vigencia' => '6', 'tipo' => 'TR', 'suma_asegurada' => 4000000] //vigencia en meses, TR = Todo Riesgo
                                ,
                                'B2' =>
                                    ['Descripcion' => 'Nuestra cobertura de responsabilidad civil te protege contra reclamos legales y daños a terceros. Desde accidentes automovilísticos hasta lesiones personales en tu propiedad, estamos aquí para cubrir los costos legales y las indemnizaciones. Con nosotros, puedes tener la tranquilidad de que estás protegido en caso de cualquier eventualidad.', 'cuota' => '15000', 'vigencia' => '6', 'tipo' => 'RCA']  //RCA = Responsabilidad Civil
                            ],
                    ],
                'LA_CAJA' => [
                    'coberturas' =>
                        [
                            'C-328' =>
                                ['Descripcion' => 'En Seguros La Caja, ofrecemos una cobertura completa de "todo riesgo" para proteger tus bienes y activos de cualquier eventualidad. Ya sea tu hogar, tu automóvil o tu negocio, nuestro seguro te brinda tranquilidad al cubrir una amplia gama de riesgos, desde accidentes hasta desastres naturales. Confía en nosotros para salvaguardar lo que más valoras con nuestra protección integral y confiable.', 'cuota' => '26000', 'vigencia' => '6', 'tipo' => 'TR', 'suma_asegurada' => 4000000] //vigencia en meses, TR = Todo Riesgo
                            ,
                            'D15' =>
                                ['Descripcion' => 'En Seguros La Caja, nos especializamos en ofrecer cobertura integral de responsabilidad civil. Protegemos tus activos y te brindamos tranquilidad frente a reclamos legales y daños a terceros. Confía en nosotros para proteger tu negocio y tu patrimonio con nuestras soluciones ágiles y confiables.', 'cuota' => '13000', 'vigencia' => '6', 'tipo' => 'RCA']  //RCA = Responsabilidad Civil
                        ],
                ]
            ]
    ];
} else {
    $array = [
        'companias' =>
            [
                'RUS' =>
                    [
                        'coberturas' =>
                            [
                                'A2' =>
                                    ['Descripcion' => 'En nuestra cobertura para vehículos, te ofrecemos una protección sólida y asequible. Nos comprometemos a resguardar tu automóvil contra accidentes, robos y daños a terceros, brindándote la tranquilidad que necesitas para conducir con confianza. Además, con nuestra asistencia en carretera y servicios de reparación confiables, puedes estar seguro de que tu vehículo estará protegido en todo momento, sin importar las circunstancias. Confía en nosotros para mantener tu auto seguro y en óptimas condiciones, sin sacrificar tu presupuesto.', 'cuota' => '22000', 'vigencia' => '6', 'tipo' => 'TR', 'suma_asegurada' => 2000000] //vigencia en meses, TR = Todo Riesgo
                                ,
                                'B3' =>
                                    ['Descripcion' => 'Nuestra cobertura de responsabilidad civil está diseñada específicamente para proteger tu vehículo contra reclamos legales y daños a terceros. Desde accidentes automovilísticos hasta lesiones personales en tu propiedad, estamos aquí para cubrir los costos legales y las indemnizaciones, proporcionándote la tranquilidad que necesitas en caso de cualquier eventualidad. Con nosotros, puedes conducir con confianza sabiendo que estás protegido por una cobertura integral y confiable.', 'cuota' => '10000', 'vigencia' => '6', 'tipo' => 'RCA']  //RCA = Responsabilidad Civil
                            ],
                    ],
                'LA_CAJA' => [
                    'coberturas' =>
                        [
                            'C-250' =>
                                ['Descripcion' => 'En Seguros La Caja, entendemos la importancia de proteger tu vehículo con una cobertura integral. Nuestro seguro "todo riesgo" está diseñado para brindarte tranquilidad en cualquier situación. Desde accidentes hasta desastres naturales, estamos aquí para salvaguardar tu inversión y ofrecerte la protección que necesitas. Confía en nosotros para mantener tu vehículo protegido y tu mente tranquila, sabiendo que estás respaldado por nuestra experiencia y fiabilidad en todo momento.', 'cuota' => '15000', 'vigencia' => '6', 'tipo' => 'TR', 'suma_asegurada' => 2000000] //vigencia en meses, TR = Todo Riesgo
                            ,
                            'D20' =>
                                ['Descripcion' => 'En Seguros La Caja, nos comprometemos a brindarte una cobertura completa de responsabilidad civil. Con nuestra especialización en esta área, protegemos tus activos y te ofrecemos tranquilidad frente a posibles reclamos legales y daños a terceros. Confía en nosotros para salvaguardar tu vehículo y tu patrimonio con soluciones ágiles y confiables que se adaptan a tus necesidades específicas. Con Seguros La Caja, tu tranquilidad está garantizada en cada viaje..', 'cuota' => '8000', 'vigencia' => '6', 'tipo' => 'RCA']  //RCA = Responsabilidad Civil
                        ],
                ]
            ]
    ];
}
echo json_encode($array);

?>