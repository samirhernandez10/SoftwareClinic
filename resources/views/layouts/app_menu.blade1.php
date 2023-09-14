<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" type="text/css" href="/css/style_menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></head>
</head>
<header class="menu-container">
		    <div class="logo-container">
			    <img class="logo" src="/images/Logo HMO.png" alt="Software Clínico">
			    <h1>Software Clínico</h1>
		    </div>
        <nav>
        <ul class="menu">
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li class="dropdown">
                <a href="#">Área Asistencial</a>
                <ul class="dropdown-content">
                    <li class="dropdown">
                        <a href="#">Médico</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Historia clínica</a></li>
                            <li><a href="#">Especialistas</a></li>
                            <li><a href="#">Cirugía</a></li>
                            <li><a href="#">Urgencia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Enfermería</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Evoluciones</a></li>
                            <li><a href="#">Relacion Turno</a></li>
                            <li><a href="#">Informe</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Terapias</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Fisicas</a></li>
                            <li><a href="#">Respiratorias</a></li>
                            <li><a href="#">Fonoaudiologia</a></li>
                            <li><a href="#">Ocupacional</a></li>
                            <li><a href="#">Informe</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Área Administrativa</a>
                <ul class="dropdown-content">
                    <li class="dropdown">
                        <a href="#">Recepción de pacientes</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('empresa.index') }}">Informacion De Usuario</a></li>
                            <li><a href="#">Actualización</a></li>
                            <li><a href="#">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Cita médica</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Programadas</a></li>
                            <li><a href="#">No programadas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Facturación</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Ambulatorio</a></li>
                            <li><a href="#">Hospitalización</a></li>
                            <li><a href="#">Cirugías</a></li>
                            <li><a href="#">Urgencia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Archivo</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Historia Clinicas</a></li>
                            <li><a href="#">Cuentas de Cobro</a></li>
                            <li><a href="#">Informe</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Talento Humano</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Nomina</a></li>
                            <li><a href="#">Cargos</a></li>
                            <li><a href="#">Unidad Funcional</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Auditoría</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Administración</a></li>
                            <li><a href="#">Concurrente</a></li>
                            <li><a href="#">Facturación</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Cuentas Medicas</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Armado de Cuentas</a></li>
                            <li><a href="#">Cuentas de Cobro</a></li>
                            <li><a href="#">Informe</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Inventario</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Entrada</a></li>
                            <li><a href="#">Despacho</a></li>
                            <li><a href="#">Salida</a></li>
                            <li><a href="#">Traslados</a></li>
                            <li><a href="#">Unidosis</a></li>
                            <li><a href="#">Kardex</a></li>
                            <li><a href="#">Bodega</a></li>
                            <li><a href="#">Informe</a></li>
                        </ul>
                        <li class="dropdown">
                        <a href="#">Laboratorio</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Entrada</a></li>
                            <li><a href="#">Despacho</a></li>
                            <li><a href="#">Salida</a></li>
                            <li><a href="#">Traslados</a></li>
                            <li><a href="#">Unidosis</a></li>
                            <li><a href="#">Kardex</a></li>
                            <li><a href="#">Bodega</a></li>
                            <li><a href="#">Informe</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#">Cartera</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Gestion</a></li>
                            <li><a href="#">Gestion de Pagos</a></li>
                            <li><a href="#">Gestion de Pagos</a></li>
                            <li><a href="#">Utilidades</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Informes</a>
                <li class="dropdown">
                <a href="#">Configuracion</a>
                <ul class="dropdown-content">
                    <li class="dropdown">
                        <a href="#">General</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('tipos_identificacion.index') }}">Tipos Identificacion</a></li>
                            <li><a href="{{ route('sexo.index') }}">Tipo Sexo</a></li>
                            <li><a href="{{ route('tipo_edad.index') }}">Tipo Edad</a></li>
                            <li><a href="{{ route('departamento.index') }}">Departamento</a></li>
                            <li><a href="{{ route('municipio.index') }}">Municipio</a></li>
                            <li><a href="{{ route('barrio.index') }}">Barrio</a></li>
                            <li><a href="{{ route('estado_civil.index') }}">Estado Civil</a></li>
                            <li><a href="{{ route('etnia.index') }}">Etnia</a></li>
                            <li><a href="{{ route('poblacion.index') }}">Poblacion Especial</a></li>
                            <li><a href="{{ route('salario_minimo.index') }}">Salario Minimo</a></li>
                            <li><a href="{{ route('manual.index') }}">Manual</a></li>
                            <li><a href="{{ route('manualgrupos.index') }}">Grupo Manual</a></li>
                            
                            
                            
                            
                        </ul>
                        <li class="dropdown">
                        <a href="#">Activos</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('tipos_identificacion.index') }}">Grupo Equipos</a></li>
                            <li><a href="{{ route('sexo.index') }}">Categorias</a></li>
                            <li><a href="{{ route('tipo_edad.index') }}">Marca</a></li>
                            <li><a href="{{ route('departamento.index') }}">Motivo Traslado</a></li>
                            <li><a href="{{ route('municipio.index') }}">Ubicacion</a></li>
                        </ul>
                        <li class="dropdown">
                        <a href="#">Procedimientos</a>
                        <ul class="dropdown-content">
                        <li><a href="{{ route('tipoclaseproc.index') }}">Clase Procedimiento</a></li>
                        <li><a href="{{ route('tipoprocrips.index') }}">Tipo Procedimiento Rips</a></li>
                        <li><a href="{{ route('tipoprocedimiento.index') }}">Tipo Procedimiento</a></li>
                        <li><a href="{{ route('tipofinproced.index') }}">Tipo Fin Procedimiento</a></li>
                        <li><a href="{{ route('tipoconceptoagrup.index') }}">Grupo Tipo Procedimiento</a></li>
                        <li><a href="{{ route('procedimiento.index') }}">Procedimientos</a></li>
                        <li><a href="{{ route('paquetes.index') }}">Paquetes Procedimientos</a></li>
                        </ul>
                        <li class="dropdown">
                        <a href="#">Patologias CIE10</a>
                        <li class="dropdown">
                        <a href="#">Anticipos</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('tipos_identificacion.index') }}">Concepto</a></li>
                            <li><a href="{{ route('sexo.index') }}">Tipo de Anticipo</a></li>
                        </ul>
                        <li class="dropdown">
                        <a href="#">Empresa</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('empresa.index') }}">Lista De Empresas</a></li>
                            <li><a href="{{ route('sexo.index') }}">Preguntas</a></li>
                            <li><a href="{{ route('tipos_identificacion.index') }}">Tipo de Respuesta</a></li>
                            <li><a href="{{ route('sexo.index') }}">Clasificacion</a></li>
                            <li><a href="{{ route('tipos_identificacion.index') }}">Ocurrencia</a></li>
                        </ul>
            </nav>
</header>
<body>

@yield('content')
</body>

</html>