    

    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
        </div>
        <!--end logo-->
        <body class="dark-sidenav navy-sidenav">
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Principal</li>
                <li>
                    <a href="javascript: void(0);"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Panel Control</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index"><i
                                    class="ti-control-record"></i>Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('sales-index') }}"><i
                                    class="ti-control-record"></i>Ventas</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Area Asistencial</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Historia Clinica <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-email-inbox') }}">Medicina general</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Especialistas</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Cirugia</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Urgencia</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Generación de informes y estadísticas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Enfermeria <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                 <li><a href="{{ route('apps-email-inbox') }}">Plan de cuidados de enfermería</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Evoluciones</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Organizacion Turnos</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Impresion Turnos</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Informes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Ambulancia <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-email-inbox') }}">Registro y Seguimiento</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Programacion de Servicios</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Registro de incidentes y emergencias</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Seguimiento de rutas y tiempo de respuesta</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Control de inventario médico</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Generación de informes y estadísticas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Terapias <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-email-inbox') }}">Fisica</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">respiratoria</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Fonoaudiologia</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Ocupacional</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Psicologia</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Reporte</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Area Administrativa</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Recepción de pacientes <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-email-inbox') }}">Creacion de paciente</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Actualización</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Buscar</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Eliminar</a></li>
                                <li><a href="{{ route('apps-email-inbox') }}">Informe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Cita médica <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-calendar') }}">Programadas</a></li>
                                <li><a href="{{ route('apps-calendar') }}">No programadas</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Informes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Facturación <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-calendar') }}">Ambulatorio</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Hospitalización</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Cirugías</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Urgencia</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Reporte</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Talento Humano <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-email-inbox') }}">Nomina</a></li>
                                <li><a href="{{ route('apps-email-read') }}">Cargos</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Unidad Funcional</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Auditoría <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-calendar') }}">Administración</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Concurrente</a></li>
                                <li><a href="{{ route('apps-calendar') }}">Facturación</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Cuentas Medicas <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-email-inbox">Armado de Cuentas</a></li>
                                <li><a href="apps-email-read">Cuentas de Cobro</a></li>
                                <li><a href="apps-email-read">Informe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Inventario <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-email-inbox">Entrada</a></li>
                                <li><a href="apps-email-read">Despacho</a></li>
                                <li><a href="apps-email-read">Salida</a></li>
                                <li><a href="apps-email-read">Traslados</a></li>
                                <li><a href="apps-email-read">Unidosis</a></li>
                                <li><a href="apps-email-read">Kardex</a></li>
                                <li><a href="apps-email-read">Bodega</a></li>
                                <li><a href="apps-email-read">Informe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Laboratorio <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-email-inbox">Entrada</a></li>
                                <li><a href="apps-email-read">Despacho</a></li>
                                <li><a href="apps-email-read">Salida</a></li>
                                <li><a href="apps-email-read">Traslados</a></li>
                                <li><a href="apps-email-read">Unidosis</a></li>
                                <li><a href="apps-email-read">Kardex</a></li>
                                <li><a href="apps-email-read">Bodega</a></li>
                                <li><a href="apps-email-read">Informe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Cartera <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-email-inbox">Gestion</a></li>
                                <li><a href="apps-email-read">Gestion de Pagos</a></li>
                                <li><a href="apps-email-read">Utilidades</a></li>
                                <li><a href="apps-email-read">Informe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Contabilidad <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-email-inbox">Pagos</a></li>
                                <li><a href="apps-email-read">Radicacion</a></li>
                                <li><a href="apps-email-read">Radicacion Cuenta Cobro</a></li>
                                <li><a href="apps-email-read">Docuemntos Contables</a></li>
                                <li><a href="apps-email-read">Caja Menor</a></li>
                                <li><a href="apps-email-read">Cuenta de Cobro</a></li>
                                <li><a href="apps-email-read">Reembolso</a></li>
                                <li><a href="apps-email-read">Pago Nomina</a></li>
                                <li><a href="apps-email-read">Utilidades y Configuracion</a></li>
                                <li><a href="apps-email-read">Informe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apps-chat') }}"><i
                                    class="ti-control-record"></i>Chat</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apps-contact-list') }}"><i
                                    class="ti-control-record"></i>Lista de Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apps-calendar') }}"><i
                                    class="ti-control-record"></i>Calendario</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apps-files') }}"><i
                                    class="ti-control-record"></i>Archivo</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apps-invoice') }}"><i
                                    class="ti-control-record"></i>Factura</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apps-tasks') }}"><i
                                    class="ti-control-record"></i>Tareas</a></li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Proyecto <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-project-overview') }}">Descripción general</a></li>
                                <li><a href="{{ route('apps-project-projects') }}">Proyectos</a></li>
                                <li><a href="{{ route('apps-project-board') }}">Junta</a></li>
                                <li><a href="{{ route('apps-project-teams') }}">Equipo</a></li>
                                <li><a href="{{ route('apps-project-files') }}">Archivo</a></li>
                                <li><a href="{{ route('apps-new-project') }}">Nuevo proyecto</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Tienda <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('apps-ecommerce-products') }}">Productos</a></li>
                                <li><a href="{{ route('apps-ecommerce-product-list') }}">Lista de Productos</a></li>
                                <li><a href="{{ route('apps-ecommerce-product-detail') }}">Detalle del producto</a></li>
                                <li><a href="{{ route('apps-ecommerce-cart') }}">Carrito</a></li>
                                <li><a href="{{ route('apps-ecommerce-checkout') }}">Verificar- chek</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);"><i data-feather="lock"
                            class="align-self-center menu-icon"></i><span>Autenticación</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth-login') }}"><i
                                    class="ti-control-record"></i>Acceso</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth-register') }}"><i
                                    class="ti-control-record"></i>Regsitrarse</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth-recover-pw') }}"><i
                                    class="ti-control-record"></i>Recuperar contraseña</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth-lock-screen') }}"><i
                                    class="ti-control-record"></i>Bloquear pantalla</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth-404') }}"><i
                                    class="ti-control-record"></i>Error 404</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth-500') }}"><i
                                    class="ti-control-record"></i>Error 500</a></li>
                    </ul>
                </li>

                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">Componentes y adicionales</li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="box"
                            class="align-self-center menu-icon"></i><span>interfaz de usuario</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Elementos <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('ui-alerts') }}">Alertas</a></li>
                                <li><a href="{{ route('ui-avatar') }}">Avatar</a></li>
                                <li><a href="{{ route('ui-buttons') }}">Botones</a></li>
                                <li><a href="{{ route('ui-badges') }}">Insignias</a></li>
                                <li><a href="{{ route('ui-cards') }}">Tarjetas</a></li>
                                <li><a href="{{ route('ui-carousels') }}">Carruseles</a></li>
                                <li><a href="{{ route('ui-check-radio') }}"><span>Check & Radio</span></a></li>
                                <li><a href="{{ route('ui-dropdowns') }}">Listas deplegables</a></li>
                                <li><a href="{{ route('ui-grids') }}">Cuadrículas</a></li>
                                <li><a href="{{ route('ui-images') }}">Imágenes</a></li>
                                <li><a href="{{ route('ui-list') }}">Lista</a></li>
                                <li><a href="{{ route('ui-modals') }}">Modals</a></li>
                                <li><a href="{{ route('ui-navs') }}">Navegadores</a></li>
                                <li><a href="{{ route('ui-navbar') }}">barra de navegación</a></li>
                                <li><a href="{{ route('ui-offcanvas') }}">Offcanvas <span
                                class="badge badge-soft-success ms-auto">Nuevo-new</span></a></li>
                                <li><a href="{{ route('ui-paginations') }}">Paginacion</a></li>
                                <li><a href="{{ route('ui-popover-tooltips') }}">Ventana emergente</a></li>
                                <li><a href="{{ route('ui-progress') }}">Progreso</a></li>
                                <li><a href="{{ route('ui-spinners') }}">Spinners</a></li>
                                <li><a href="{{ route('ui-tabs-accordions') }}">Tablaturas y acordeones</a></li>
                                <li><a href="{{ route('ui-toasts') }}">tostadas</a></li>"ui-typography">Tipografía</a></li>
                                <li><a href="{{ route('ui-videos') }}">Videos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Avanzada UI <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('advanced-clipboard') }}">Tablero de clip</a></li>
                                <li><a href="{{ route('advanced-highlight') }}">Destacar</a></li>
                                <li><a href="{{ route('advanced-idle-timer') }}">Temporizador inactivo</a></li>
                                <li><a href="{{ route('advanced-kanban') }}">Kanban</a></li>
                                <li><a href="{{ route('advanced-lightbox') }}">Caja ligera</a></li>
                                <li><a href="{{ route('advanced-nestable') }}">Lista anidable</a></li>
                                <li><a href="{{ route('advanced-rangeslider') }}">Deslizador de rango</a></li>
                                <li><a href="{{ route('advanced-ratings') }}">Calificaciones</a></li>
                                <li><a href="{{ route('advanced-ribbons') }}">Cintas</a></li>
                                <li><a href="{{ route('advanced-session') }}">Hora de término de la sesión</a></li>
                                <li><a href="{{ route('advanced-sweetalerts') }}">Dulces alertas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Formularios <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('forms-advanced') }}">Elementos avanzados</a></li>
                                <li><a href="{{ route('forms-elements') }}">Elementos basicos</a></li>
                                <li><a href="{{ route('forms-editors') }}">Editoras</a></li>
                                <li><a href="{{ route('forms-uploads') }}">Subir archivo</a></li>
                                <li><a href="{{ route('forms-repeater') }}">Reloj de repetición</a></li>
                                <li><a href="{{ route('forms-validation') }}">Validación</a></li>
                                <li><a href="{{ route('forms-wizard') }}">Mago</a></li>
                                <li><a href="{{ route('forms-x-editable') }}">Editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Gráficos <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('charts-apex') }}">Apéndice</a></li>
                                <li><a href="{{ route('charts-chartjs') }}">Gráficos</a></li>
                                <li><a href="{{ route('charts-flot') }}">Flotador</a></li>
                                <li><a href="{{ route('charts-morris') }}">Morris</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('tables-basic') }}">Básica</a></li>
                                <li><a href="{{ route('tables-datatable') }}">Data tables</a></li>
                                <li><a href="{{ route('tables-editable') }}">Editable</a></li>
                                <li><a href="{{ route('tables-responsive') }}">Responsive</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('icons-dripicons') }}">Dripicons</a></li>
                                <li><a href="{{ route('icons-feather') }}">Pluma</a></li>
                                <li><a href="{{ route('icons-fontawesome') }}">Font awesome</a></li>
                                <li><a href="{{ route('icons-materialdesign') }}">Diseño de materiales</a></li>
                                <li><a href="{{ route('icons-themify') }}">Tematizar</a></li>
                                <li><a href="{{ route('icons-typicons') }}">Tipicos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>mapas <span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('maps-google') }}">Google Maps</a></li>
                                <li><a href="{{ route('maps-leaflet') }}">Mapas de folletos</a></li>
                                <li><a href="{{ route('maps-vector') }}">Vector Mapas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Plantilla de correo electrónico<span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('email-templates-alert') }}">Correo electrónico de alerta</a></li>
                                <li><a href="{{ route('email-templates-basic') }}">Basic Action Email</a></li>
                                <li><a href="{{ route('email-templates-billing') }}">Facturación Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Empresa<span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('empresa.index') }}">Crear Empresa</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Configuracion del Sistema<span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('estado_civil.index') }}">Estado Civil</a></li>
                                <li><a href="{{ route('grupo_sangre.index') }}">Grupo Sanguineo</a></li>
                                <li><a href="{{ route('tipos_identificacion.index') }}">Tipo de identificacion</a></li>
                                <li><a href="{{ route('sexo.index') }}">Sexo</a></li>
                                <li><a href="{{ route('tipo_edad.index') }}">Tipo Edad</a></li>
                                <li><a href="{{ route('zonaresidencial.index') }}">Zona Residencial</a></li>
                                <li><a href="{{ route('escolaridad.index') }}">Escolaridad</a></li>
                                <li><a href="{{ route('departamento.index') }}">Departamento</a></li>
                                <li><a href="{{ route('municipio.index') }}">Municipio</a></li>
                                <li><a href="{{ route('barrio.index') }}">Barrio</a></li>
                                <li><a href="{{ route('etnia.index') }}">Etnia</a></li>
                                <li><a href="{{ route('poblacion.index') }}">Poblacion Especial</a></li>
                                <li><a href="{{ route('salario_minimo.index') }}">Salario Minimo</a></li>
                                <li><a href="{{ route('manual.index') }}">Manual</a></li>
                                <li><a href="{{ route('email-templates-basic') }}">Basic Action Email</a></li>
                                <li><a href="{{ route('email-templates-billing') }}">Facturación Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Procedimientos<span
                                    class="menu-arrow left-has-menu"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('tipoprocrips.index') }}">Finalidad Procedimiento</a></li>
                                <li><a href="{{ route('tipoprocedimiento.index') }}">Tipo Procedimiento</a></li>
                                <li><a href="{{ route('tipofinproced.index') }}">Finalidad de la Consulta</a></li>
                                <li><a href="{{ route('tipoconceptoagrup.index') }}">Codigo Del Concepto Rips AD</a></li>
                                <li><a href="{{ route('procedimiento.index') }}">Procedimientos</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="widgets"><i data-feather="layers"
                            class="align-self-center menu-icon"></i><span>Widgets</span><span
                            class="badge badge-soft-success menu-arrow">Nuevo-New</span></a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i data-feather="file-plus"
                            class="align-self-center menu-icon"></i><span>Pagina</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-blogs') }}"><i
                                    class="ti-control-record"></i>Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-faqs') }}"><i
                                    class="ti-control-record"></i>FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-pricing') }}"><i
                                    class="ti-control-record"></i>Precios</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-profile') }}"><i
                                    class="ti-control-record"></i>Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-starter') }}"><i
                                    class="ti-control-record"></i>Página de inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-timeline') }}"><i
                                    class="ti-control-record"></i>Cronología</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pages-treeview') }}"><i
                                    class="ti-control-record"></i>Vista de árbol</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>