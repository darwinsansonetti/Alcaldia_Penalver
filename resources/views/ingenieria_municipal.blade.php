@extends('layout.layout_page')

@section('styles')
<style>
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        ul {
            padding-left: 20px; /* Asegura espacio a la izquierda */
            list-style-type: disc !important; /* Fuerza las viñetas */
        }
        li {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('content')

	<!-- ===================================================
		Loading Transition
	==================================================== -->
	<div id="loader-wrapper">
		<div id="loader"></div>
	</div>

	<!-- 
	=============================================
		Theme Inner Banner
	============================================== 
	-->
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Ingenieria Municipal</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
            <h4 class="fw-bold mt-3">CERRAMIENTO DE CALLES</h4><br/>
            <p class="mt-3 text-end">Consiste en la Solicitud de Permisos para la Ejecución de Trabajos de Obras sobre la Vía Pública, dentro de la Jurisdicción del Municipio Peñalver.</p>
            <p class="mt-3 text-end">Es el permiso que se debe solicitar todo aquel que necesite hacer uso de las vías públicas municipales, esto incluye desde los trabajos de las empresas prestatarias del servicio de agua y servicio eléctrico, hasta un maratón,  una actividad cultural, o vaciar una losa con  camión premezclado.</p><br/>
            
            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>En caso de persona autorizada, además de la copia de la Cédula de Identidad, deberá presentar autorización por escrito. (Notariada).</li>
                <li>Documentos de propiedad del terreno</li>

                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo)</li>
                <li>Solvencia municipal vigente</li>
                <li>A nombre del propietario actual (original y copia).</li>
                <li>Solvencia del profesional responsable de la obra</li>
                <li>Solvencia vigente del profesional responsable de la obra, emitida por el Colegio de Ingenieros de Venezuela.</li>
                <li>Memoria descriptiva</li>
                <li>Memoria Descriptiva de los trabajos a ejecutar, donde se especifique cada obra a realizar, lapsos, horarios propuestos, días estimados y cualquier otra información relevante.</li>
                <li>Cuadro de Cronograma de Actividades</li>
                <li>Plano(s) debidamente firmados y sellados por el profesional responsable, debe incluir N° de C.I.V.</li>
                <li>Pago de Tasa Administrativa respectiva (consultar)</li>
                <li>Carta Aval Del Concejo Comunal (Importante).</li>
                <li>Aval emanado por cada una de las empresas de servicios públicos o privados ELEORIENTE , HIDROCARIBE</li>
            </ul>
            <p class="mt-3 text-end">Nota:Si va a cerrar la calle por otro motivo distinto a un trabajo de construcción anexar carta explicativa.</p>
            <p class="mt-3 text-end">No se aceptarán solicitudes que no cumplan con la totalidad de los requisitos. Su recepción no implica aceptación. Los horarios, lapsos y demás condicionantes estarán sujetos a evaluación y modificación por parte de la dirección de Ingeniería Municipal.</p><br/>

            <h4 class="fw-bold mt-3">DENUNCIAS</h4><br/>
            <p class="mt-3 text-end">En Ingeniería Municipal Se puede realizar vía escrita la denuncia por construcciones ilegales o violación a las variables urbanas. Debe contener Exposición de Motivos, dirección exacta, teléfono y email para que se puedan realizar las inspecciones pertinentes.</p><br/>
            
            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail</li>
                <li>Explicación de Motivos para realizar la inspección correspondiente</li>
                <li>Croquis de ubicación exacta</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">CERTIFICADO DE TERMINACION DE OBRAS EN EDIFICACIONES - TERMINACIÓN DE OBRAS URBANÍSTICAS EN PARCELA
            CERTIFICADO DE TERMINACION DE OBRAS EN EDIFICACIONES</h4><br/>
            <p class="mt-3 text-end">Tiene por objeto obtener la Constancia de Recepción de la “Certificación de Terminación de Obra en Edificaciones”, consignada por el Propietario y el Profesional Responsable de la Obra, la cual es evaluada junto a la documentación anexa, presentada por los interesados.
            La Dirección de Ingeniería Municipal emite un Oficio en el cual se deja constancia de la documentación recibida y de la verificación de que la Obra se ejecutó de acuerdo a los Permisos y/o Construcción</p><br/>
            
            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>En caso de persona autorizada, además de la copia de la Cédula de Identidad, deberá presentar autorización por escrito. (Notariada)</li>
                <li>Acta de Inspección Final de Obra conforme (original y copia)</li>
                <li>Constancias de Variables urbanas). [Original y copia]</li>
                <li>Oficio emanado del “Ministerio para el Poder Popular para el Ambiente”, referente al Estudio de Impacto Ambiental y Sociocultural (en el caso  que  amerite). [Original y copia].</li>
            </ul><br/>            

            <h4 class="fw-bold mt-3">CONFORMIDAD DE USO</h4><br/>
            <p class="mt-3 text-end">Es la certificación que se otorga, previa solicitud del interesado, a todo inmueble destinado a usos comerciales admitidos en los planos adjuntos a la Ordenanza de Zonificación vigente. La conformidad de uso es el permiso que otorga la Alcaldía para ejercer una actividad comercial en un espacio determinado (piso, local, empresa, oficina, etc.). Este permiso asegura que el ejercicio de esta actividad está en concordancia con el Ordenamiento Urbano, que cuenta con el aval de los vecinos de la zona y que responde a necesidades de la comunidad.Para otorgar o no una Conformidad de Uso se toman en cuenta la Zonificación (actividades comerciales permitidas en la dirección señalada), el tipo de actividad que se quieres realizar, si el local dispone de un depósito, si el Consejo Comunal está de acuerdo con el ejercicio de esa actividad económica, si satisface una necesidad de la comunidad y si no disturbe la paz de los vecinos.
                                        Después de haber solicitado y obtenido la Conformidad de Uso.
                                        NO arriende un local antes de pedir la Conformidad de Uso y tenerla aprobada.</p><br/>
            
            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Documentos de propiedad del terreno o copia del contrato de arrendamiento</li>
                <li>Copia Certificada del Registro Mercantil, en caso de que el propietario sea una persona jurídica (C.A., S.R.L., S.A., etc.) (Original y Copia) y N° de RIF.</li>
                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente a nombre del propietario actual (original y copia).</li>
            
                <li>Copia de la cédula de identidad del representante de la empresa</li>
                <li>Croquis de ubicación exacta.</li>
                <li>Copia del registro mercantil</li>
                <li>Aprobación del consejo comunal para su funcionamiento</li>
                <li>En caso de ser un colegio o locales nuevos deberá presentar variables urbanas aprobadas para ese uso, memoria descriptiva, foto de la estructura.</li>
            </ul><br/>           

            <h4 class="fw-bold mt-3">CLASIFICACIÓN DE ZONA O ZONIFICACIÒN</h4><br/>
            <p class="mt-3 text-end">El presente trámite se realiza a los fines de obtener información acerca de cómo está Zonificada una Parcela determinada.
            Es importante destacar el hecho de que este trámite, es solo de Carácter Informativo, y en ese sentido, no podrá entenderse como autorización alguna, a los fines de desarrollar cualquier construcción y/o instalación de algún uso.</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>Documentos de propiedad del terreno</li>
                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma </li>
                <li>Copia Certificada del Registro Mercantil, en caso de que el propietario sea una persona jurídica (C.A., S.R.L., S.A., etc.) (Original y Copia) y N° de RIF.</li>

                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente. A nombre del propietario actual (original y copia).</li>
                <li>Croquis de ubicación y Dirección Precisa de la Parcela a consulta</li>
            </ul>
            <p class="mt-3 text-end">Todos los recaudos deben consignarse en carpeta marrón que deberá estar identificado con etiqueta colocada en el centro de la portada,  con gancho y en el estricto orden establecido.</p><br/>
                 

            <h4 class="fw-bold mt-3">VARIABLES URBANAS FUNDAMENTALES</h4><br/>
            <p class="mt-3 text-end">Es un requisito indispensable para que el Ministerio del Poder Popular para el Ambiente otorgue el Permiso del Ambiente. El informe de Variables Fundamentales indica para qué puede utilizarse un terreno o parcela de acuerdo a su zonificación y otros criterios tales como la altura, el retiro, puestos de estacionamiento, porcentajes de construcción, restricciones ambientales, entre otros. Es el primer paso de cualquier desarrollo, entendiendo por desarrollo desde una casa hasta un Centro Comercial y tiene un valor meramente informativo.
            La Constancia de Variables Fundamentales es el informe que indica que la obra cumple con las variables fundamentales (zonificación, altura, retiro, etc.)</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>En caso de persona autorizada, además de la copia de la Cédula de Identidad, deberá presentar autorización por escrito. (Notariada).</li>
                <li>Documentos de propiedad del terreno</li>
                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma </li>

                <li>Copia Certificada del Registro Mercantil, en caso de que el propietario sea una persona jurídica (C.A., S.R.L., S.A., etc.) (Original y Copia) y N° de RIF.</li>
                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente </li>

                <li>Plano de ubicación del inmueble indicando la dirección exacta de la parcela</li>
                <li>Levantamiento topográfico, si es una parcela unifamiliar o desarrollo urbanístico.</li>
                <li>Foto de las condiciones del terreno</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">DEMOLICIÓN</h4><br/>
            <p class="mt-3 text-end">Es el permiso para demoler una  estructura o edificación.
                Tiene por objeto obtener la Autorización de la Dirección de Ingeniería Municipal para la ejecución de los trabajos de Demolición Total de una edificación ubicada dentro de la jurisdicción del Municipio Fernando de Peñalver. La referida Demolición se efectuará una vez obtenida la respectiva Autorización mediante Oficio emanado de esta Dependencia.</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>Documentos de propiedad del terreno</li>
                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma</li>

                <li>Copia Certificada del Registro Mercantil, en caso de que el propietario sea una persona jurídica (C.A., S.R.L., S.A., etc.) (Original y Copia) y N° de RIF.</li>
                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente a nombre del propietario actual (original y copia)</li>

                <li>Solvencia del profesional responsable de la obra</li>
                <li>Solvencia vigente del profesional responsable de la obra, emitida por el Colegio de Ingenieros de Venezuela.</li>
                <li>Fianza de daños a terceros por el doble del valor de la obra (Original y Copia)</li>

                <li>Carta notariada mediante la cual se certifica que el inmueble se encuentra deshabitado (Original y Copia)  </li>
                <li>Croquis de ubicación del inmueble</li>
                <li>Fotografía de la edificación a demoler</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">PERMISO DE HABITABILIDAD</h4><br/>
            <p class="mt-3 text-end">El  Permiso de habitabilidad es el que se entregará una vez concluida la construcción y 
                después de haber cumplido con todos los requisitos al momento de construir.  El permiso de  habitabilidad es 
                el documento que garantiza el cumplimiento de los niveles mínimos de habitabilidad exigibles a las viviendas, 
                locales comerciales, tanto de nueva ocupación (cédula de nueva ocupación) como viviendas usadas (cédula de segunda ocupación).  
                Tiene la función de acreditar, además de que la vivienda es habitable, la solidez del edificio, y de continuar vigilando para 
                que las viviendas cumplan y especialmente mantengan unas condiciones de habitabilidad dignas a lo largo del tiempo. 
                En los casos de nueva ocupación, la cédula de habitabilidad verifica que se haya acreditado el cumplimento de calidad y es 
                imprescindible para poder darse de alta de servicios de agua, gas y electricidad. Asimismo, también es obligatoria para 
                alquilar o vender una vivienda.</p>
            <p class="mt-3 text-end">Los datos que constan en la cédula son:- La dirección de la vivienda o local - La superficie útil- Las estancias y los espacios que lo componen en el momento de su emisión- Su umbral máximo de ocupación.</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>Fotocopia del recibo de agua – luz</li>
                <li>Croquis de ubicación</li>

                <li>Documento de propiedad</li>
                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma</li>
                <li>Recibo de pago del derecho de frente vigente</li>

                <li>Fotocopia de habitabilidad por los bomberos ( para comercio)</li>
                <li>Fotocopia de habitabilidad sanitaria</li>
                <li>Un juego de planos firmados por esta dirección</li>
                <li>Fotocopia del permiso de construcción</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">SOLICITUD DE INSPECCIÓN FINAL</h4><br/>
            <p class="mt-3 text-end">Se solicita cuando se han terminado las obras de construcción en conformidad con el proyecto aprobado en Ingeniería. Se realiza una Inspección en la cual se debe cumplir con todas las Variables Fundamentales de manera satisfactoria. Es el paso previo antes de solicitar  el Permiso de Habitabilidad</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente</li>

                <li>A nombre del propietario actual (original y copia)</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">ANEXO A OBRAS NUEVAS/REFACCIÓN</h4><br/>
            <p class="mt-3 text-end">Permiso que se otorga a solicitud del interesado para realizar modificaciones a una Obra. Si es antes de haber concluido obras se pide bajo la figura del Anexo a Obras Nuevas. Si es una modificación luego de que haya un permiso, se solicita bajo la figura de la Refacción</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>Documentos de propiedad del terreno</li>
                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma</li>

                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente a  nombre del propietario actual (original y copia).</li>
                <li>Solvencia del profesional responsable de la obra
                Solvencia vigente del profesional responsable de la obra, emitida por el Colegio de Ingenieros de Venezuela.</li>
                <li>Memoria descriptiva donde se expliquen las nuevas obras</li>
                <li>Planos de construcción donde se indiquen las ampliaciones</li>
            </ul>
            <p class="mt-3 text-end">Tres (3) juegos de planos de estructura, Instalaciones Sanitaria, Instalaciones Eléctricas, Instalaciones de Seguridad.
            Estudios de suelo firmado por los profesionales encargados.</p><br/>

            <h4 class="fw-bold mt-3">CONSTRUCCIÓN DE OBRA MENOR</h4><br/>
            <p class="mt-3 text-end">Es la emisión de una autorización para trabajos de reparación sin modificar las Variables Urbanas Fundamentales. Se conceptuarán como obras menores aquellas de sencilla técnica y que no precisen elementos estructurales. Son aquéllas que por su escasa entidad, sencillez constructiva y pequeña cuantía no precisan ni de proyecto técnico ni de memoria descriptiva. Estas reparaciones incluyen desde remodelaciones, hacer una pared nueva, quitar una, cambio de cerámica, y cualquier otra que no modifique la estructura original.</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>En caso de tratarse de Propiedad Horizontal y de ser trabajos sobre áreas comunes, la solicitud deberá ser tramitada por el Presidente de la Junta de Condominio o alguno de sus miembros y, de no formar parte de ésta, presentar la debida autorización; así mismo, el solicitante deberá acreditar su cualidad con Copia Certificada del Documento de Propiedad, Acta Constitutiva donde se nombra la Junta de Condominio, entre otros.</li>
                <li>Documentos de propiedad del terreno</li>

                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma</li>
                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente a nombre del propietario actual (original y copia).</li>
                <li>Memoria descriptiva</li>
                <li>Carta explicativa de los trabajos a realizar en el inmueble</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">CONSTRUCCIÓN DE OBRA MAYOR</h4><br/>
            <p class="mt-3 text-end">Obra mayor es toda aquella que modifique elementos estructurales, aumente superficie de vivienda, cree nuevas estancias o cambie la composición de la fachada.
            Son aquéllas para las que se requiere la elaboración y aprobación de proyecto técnico completo con los profesionales responsables en cada una de las ramas y con las factibilidades de servicios respectivas.</p>
            <p class="mt-3 text-end">DE CONFORMIDAD CON  LO ESTABLECIDO EN EL ARTICULO 84 DE LA LEY   ORGANICA DE ORDENACIÒN URBANÍSTICA, PUBLICADA EN LA GACETA OFICIAL N° 33.868, DE FECHA 16/12/87</p><br/>

            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <ul>
                <li>Solicitud por escrito dirigida al Ingeniero Municipal indicando:</li>
                <li>Nombre, apellido, copia de la Cédula de Identidad del Propietario, número de teléfono y/o e-mail.</li>
                <li>Nombre, apellido, firma, copia de la Cédula de Identidad del profesional responsable, número de teléfono y/o e-mail.</li>
                <li>Copia Certificada del Documento de Propiedad (Sello Húmedo), Certificado por Catastro (si el propietario es persona jurídica, acta constitutiva de la misma </li>
                <li>Copia Certificada del Documento de Propiedad. (En caso de Integración de Parcelas, Reparcelamiento o Rectificación de Áreas y Linderos, anexar Documento de Propiedad Registrado de la Parcela Resultante, Certificado).</li>

                <li>Copia Certificada del Registro Mercantil, en caso de que el propietario sea una persona jurídica (C.A., S.R.L., S.A., etc.) (Original y Copia) y N° de RIF.</li>
                <li>Ficha catastral vigente</li>
                <li>Solvencia municipal vigente a nombre del propietario actual (original y copia).</li>
                <li>Solvencia vigente del profesional responsable de la obra, emitida por el Colegio de Ingenieros de Venezuela.</li>
                <li>Memoria descriptiva</li>
                <li>Planos de topografía</li>
                <li>Tres (3) copias de los planos correspondientes al levantamiento topográfico de la parcela original, en donde se indique:</li>
            
                <li>Área, Topografía, Longitud y Ángulos de los Linderos de la Parcela Original. Definición del Contexto inmediato sin esquemas de arquitectura a escala convencional, con Cuadro de Coordenadas REGVEN Datum WGS 84, indicar “Norte”, Curvas Principales de Nivel.</li>
                <li>Planos de ubicación y construcción</li>
                <li>Tres (3) juegos- Planos de ubicación  certificada por catastro</li>
                <li>Tres (3) juegos de planos de estructura, Instalaciones Sanitaria, Instalaciones Eléctricas, Instalaciones de Seguridad.</li>
                <li>Estudios de suelo firmado por los profesionales encargados.</li>
                <li>Fotos de las condiciones del terreno.</li>
                <li>Factibilidad de servicio</li>
                <li>Constancia de factibilidad de suministro de servicios públicos, emitida por Eleoriente, Hidrocaribe (Agua, Cloacas y Electricidad)</li>
                <li>Acta de no vulnerabilidad emitida por protección civil del municipio (en caso de cercanía de quebradas, ríos, montañas)</li>
                <li>Variables urbanas</li>
            </ul>
            <p class="mt-3 text-end">Todos los recaudos deberán ser consignados dentro de una carpeta de fibra, tamaño carta (en excelente estado), con gancho a la izquierda. No serán aceptadas carpetas plásticas, de manila o con espiral.
            Todos los planos deberán estar firmados por el propietario y el profesional responsable.</p><br/>
        
        </div>
    </div>

@endsection