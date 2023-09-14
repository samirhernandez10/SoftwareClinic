<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoIdentificacionController;
use App\Http\Controllers\TipoEdadController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\BarrioController;
use App\Http\Controllers\EstadoCivilController;
use App\Http\Controllers\EtniaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PoblacionController;
use App\Http\Controllers\TipoProcedRipsController;
use App\Http\Controllers\TipoProcedimientoController;
use App\Http\Controllers\TipoFinProcedController;
use App\Http\Controllers\TipoConceptoAgrupProcedimientoController;
use App\Http\Controllers\TipoMetodoController;
use App\Http\Controllers\SalarioMinimoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\ZonaResidencialController;
use App\Http\Controllers\EscolaridadController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\CausaExternaController;
use App\Http\Controllers\TipoDiagnosticoController;
use App\Http\Controllers\TipoAmbitoController;
use App\Http\Controllers\PersonalAtiendeController;
use App\Http\Controllers\TipoActoQuirurgicoController;
use App\Http\Controllers\PatologiaController;
use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\TipoRegimenController;
use App\Http\Controllers\TipoContratacionController;
use App\Http\Controllers\TipoAseguramientoController;
use App\Http\Controllers\PaqueteProcedimientoController;
use App\Http\Controllers\TipoPlanController;
use App\Http\Controllers\GrupoSangreController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeginController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('auth/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('auth/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('auth/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('auth/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('auth/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('auth/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/inicio', [HomeController::class, 'index'])->name('inicio');
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/ui-carousels', function () {return view('ui-carousels');})->name('ui-carousels');
Route::get('/_create_new_doctor', function () {return view('_create_new_doctor');})->name('_create_new_doctor');
Route::get('/_doctor_list', function () {return view('_doctor_list');})->name('_doctor_list');
Route::get('/_edit_invoice', function () {return view('_edit_invoice');})->name('_edit_invoice');
Route::get('/auth-login', function () {return view('auth-login');})->name('auth-login');

Route::get('/_footer', function () {return view('_footer');})->name('_footer');
Route::get('/_header', function () {return view('_header');})->name('_header');
Route::get('/_invoice_list', function () {return view('_invoice_list');})->name('_invoice_list');
Route::get('/_invoice_recit', function () {return view('_invoice_recit');})->name('_invoice_recit');
Route::get('/_invoice_setup', function () {return view('_invoice_setup');})->name('_invoice_setup');
Route::get('/_left_sideber', function () {return view('_left_sideber');})->name('_left_sideber');
Route::get('/add_product', function () {return view('add_product');})->name('add_product');
Route::get('/advanced-animation', function () {return view('advanced-animation');})->name('advanced-animation');
Route::get('/advanced-clipboard', function () {return view('advanced-clipboard');})->name('advanced-clipboard');
Route::get('/advanced-highlight', function () {return view('advanced-highlight.blad');})->name('advanced-highlight');
Route::get('/advanced-kanban', function () {return view('advanced-kanban');})->name('advanced-kanban');
Route::get('/advanced-lightbox', function () {return view('advanced-lightbox');})->name('advanced-lightbox');
Route::get('/advanced-nestable', function () {return view('advanced-nestable');})->name('advanced-nestable');
Route::get('/advanced-rangeslider', function () {return view('advanced-rangeslider');})->name('advanced-rangeslider');
Route::get('/advanced-ratings', function () {return view('advanced-ratings');})->name('advanced-ratings');
Route::get('/advanced-ribbons', function () {return view('advanced-ribbons');})->name('advanced-ribbons');
Route::get('/advanced-session', function () {return view('advanced-session');})->name('advanced-session');
Route::get('/advanced-sweetalerts', function () {return view('advanced-sweetalerts');})->name('advanced-sweetalerts');
Route::get('/apps-calendar', function () {return view('apps-calendar');})->name('apps-calendar');
Route::get('/apps-chat', function () {return view('apps-chat');})->name('apps-chat');
Route::get('/apps-contact-list', function () {return view('apps-contact-list');})->name('apps-contact-list');
Route::get('/apps-ecommerce-cart', function () {return view('apps-ecommerce-cart');})->name('apps-ecommerce-cart');
Route::get('/apps-ecommerce-checkout', function () {return view('apps-ecommerce-checkout');})->name('apps-ecommerce-checkout');
Route::get('/apps-ecommerce-product-detail', function () {return view('apps-ecommerce-product-detail');})->name('apps-ecommerce-product-detail');
Route::get('/apps-ecommerce-product-list', function () {return view('apps-ecommerce-product-list');})->name('apps-ecommerce-product-list');
Route::get('/apps-ecommerce-products', function () {return view('apps-ecommerce-products');})->name('apps-ecommerce-products');
Route::get('/apps-email-inbox', function () {return view('apps-email-inbox');})->name('apps-email-inbox');
Route::get('/apps-email-read', function () {return view('apps-email-read');})->name('apps-email-read');
Route::get('/apps-files', function () {return view('apps-files');})->name('apps-files');
Route::get('/apps-invoice', function () {return view('apps-invoice');})->name('apps-invoice');
Route::get('/apps-new-project', function () {return view('apps-new-project');})->name('apps-new-project');
Route::get('/apps-project-board', function () {return view('apps-project-board');})->name('apps-project-board');
Route::get('/apps-project-files', function () {return view('apps-project-files');})->name('apps-project-files');
Route::get('/apps-project-overview', function () {return view('apps-project-overview');})->name('apps-project-overview');
Route::get('/apps-project-projects', function () {return view('apps-project-projects');})->name('apps-project-projects');
Route::get('/apps-project-teams', function () {return view('apps-project-teams');})->name('apps-project-teams');
Route::get('/apps-tasks', function () {return view('apps-tasks');})->name('apps-tasks');
Route::get('/auth-404', function () {return view('auth-404');})->name('auth-404');
Route::get('/auth-500', function () {return view('auth-500');})->name('auth-500');
Route::get('/auth-lock-screen', function () {return view('auth-lock-screen');})->name('auth-lock-screen');
Route::get('/auth-recover-pw', function () {return view('auth-recover-pw');})->name('auth-recover-pw');
Route::get('/auth-register', function () {return view('auth-register');})->name('auth-register');
Route::get('/begincreate', function () {return view('begincreate');})->name('begincreate');
Route::get('/charts-apex', function () {return view('charts-apex');})->name('charts-apex');
Route::get('/charts-chartjs', function () {return view('charts-chartjs');})->name('charts-chartjs');
Route::get('/charts-flot', function () {return view('charts-flot');})->name('charts-flot');
Route::get('/charts-morris', function () {return view('charts-morris');})->name('charts-morris');
Route::get('/email-templates-alert', function () {return view('email-templates-alert');})->name('email-templates-alert');
Route::get('/email-templates-basic', function () {return view('email-templates-basic');})->name('email-templates-basic');
Route::get('/email-templates-billing', function () {return view('email-templates-billing');})->name('email-templates-billing');
Route::get('/advanced-idle-timer', function () {return view('advanced-idle-timer');})->name('advanced-idle-timer');
Route::get('/forms-advanced', function () {return view('forms-advanced');})->name('forms-advanced');
Route::get('/forms-editors', function () {return view('forms-editors');})->name('forms-editors');
Route::get('/forms-elements', function () {return view('forms-elements');})->name('forms-elements');
Route::get('/forms-repeater', function () {return view('forms-repeater');})->name('forms-repeater');
Route::get('/forms-uploads', function () {return view('forms-uploads');})->name('forms-uploads');
Route::get('/forms-validation', function () {return view('forms-validation');})->name('forms-validation');
Route::get('/forms-wizard', function () {return view('forms-wizard');})->name('forms-wizard');
Route::get('/forms-x-editable', function () {return view('forms-x-editable');})->name('forms-x-editable');
Route::get('/horizontal-index', function () {return view('horizontal-index');})->name('horizontal-index');
Route::get('/horizontal-starter', function () {return view('horizontal-starter');})->name('horizontal-starter');
Route::get('/horizontal-top-dark.blade', function () {return view('horizontal-top-dark.blade');})->name('horizontal-top-dark.blade');
Route::get('/icons-dripicons', function () {return view('icons-dripicons');})->name('icons-dripicons');
Route::get('/icons-feather', function () {return view('icons-feather');})->name('icons-feather');
Route::get('/icons-fontawesome', function () {return view('icons-fontawesome');})->name('icons-fontawesome');
Route::get('/icons-materialdesign', function () {return view('icons-materialdesign');})->name('icons-materialdesign');
Route::get('/icons-themify', function () {return view('icons-themify');})->name('icons-themify');
Route::get('/icons-typicons', function () {return view('icons-typicons');})->name('icons-typicons');
Route::get('/index', function () {return view('index');})->name('index');
Route::get('/maps-google', function () {return view('maps-google');})->name('maps-google');
Route::get('/maps-leaflet', function () {return view('maps-leaflet');})->name('maps-leaflet');
Route::get('/maps-vector', function () {return view('maps-vector');})->name('maps-vector');
Route::get('/new_invoice', function () {return view('new_invoice');})->name('new_invoice');
Route::get('/pages-blogs', function () {return view('pages-blogs');})->name('pages-blogs');
Route::get('/pages-faqs', function () {return view('pages-faqs');})->name('pages-faqs');
Route::get('/pages-pricing', function () {return view('pages-pricing');})->name('pages-pricing');
Route::get('/pages-profile', function () {return view('pages-profile');})->name('pages-profile');
Route::get('/pages-starter', function () {return view('pages-starter');})->name('pages-starter');
Route::get('/pages-timeline', function () {return view('pages-timeline');})->name('pages-timeline');
Route::get('/pages-treeview', function () {return view('pages-treeview');})->name('pages-treeview');
Route::get('/profile_setup', function () {return view('profile_setup');})->name('profile_setup');
Route::get('/recepcion_paciente', function () {return view('recepcion_paciente');})->name('recepcion_paciente');
Route::get('/sales-index', function () {return view('sales-index');})->name('sales-index');
Route::get('/service_list', function () {return view('service_list');})->name('service_list');
Route::get('/tables-basic', function () {return vi-badgesiew('tables-basic');})->name('tables-basic');
Route::get('/tables-datatable', function () {return view('tables-datatable');})->name('tables-datatable');
Route::get('/tables-editable', function () {return view('tables-editable');})->name('tables-editable');
Route::get('/tables-responsive', function () {return view('tables-responsive');})->name('tables-responsive');
Route::get('/ui-alerts', function () {return view('ui-alerts');})->name('ui-alerts');
Route::get('/ui-avatar', function () {return view('ui-avatar');})->name('ui-avatar');
Route::get('/ui-badges', function () {return view('ui-badges');})->name('ui-badges');
Route::get('/ui-buttons', function () {return view('ui-buttons');})->name('ui-buttons');
Route::get('/ui-cards', function () {return view('ui-cards');})->name('ui-cards');
Route::get('/ui-check-radio', function () {return view('ui-check-radio');})->name('ui-check-radio');
Route::get('/ui-dropdowns', function () {return view('ui-dropdowns');})->name('ui-dropdowns');
Route::get('/ui-grids', function () {return view('ui-grids');})->name('ui-grids');
Route::get('/ui-images', function () {return view('ui-images');})->name('ui-images');
Route::get('/ui-list', function () {return view('ui-list');})->name('ui-list');
Route::get('/ui-modals', function () {return view('ui-modals');})->name('ui-modals');
Route::get('/ui-navbar', function () {return view('ui-navbar');})->name('ui-navbar');
Route::get('/ui-navs', function () {return view('ui-navs');})->name('ui-navs');
Route::get('/ui-offcanvas', function () {return view('ui-offcanvas');})->name('ui-offcanvas');
Route::get('/ui-paginations', function () {return view('ui-paginations');})->name('ui-paginations');
Route::get('/ui-popover-tooltips', function () {return view('ui-popover-tooltips');})->name('ui-popover-tooltips');
Route::get('/ui-progress', function () {return view('ui-progress');})->name('ui-progress');
Route::get('/ui-spinners', function () {return view('ui-spinners');})->name('ui-spinners');
Route::get('/ui-tabs-accordions', function () {return view('ui-tabs-accordions');})->name('ui-tabs-accordions');
Route::get('/ui-toasts', function () {return view('ui-toasts');})->name('ui-toasts');
Route::get('/ui-typography', function () {return view('ui-typography');})->name('ui-typography');
Route::get('/ui-videos', function () {return view('ui-videos');})->name('ui-videos');
Route::get('/view_appointment_list', function () {return view('view_appointment_list');})->name('view_appointment_list');
Route::get('/view_change_password', function () {return view('view_change_password');})->name('view_change_password');
Route::get('/view_create_appointment', function () {return view('view_create_appointment');})->name('view_create_appointment');
Route::get('/view_create_patient', function () {return view('view_create_patient');})->name('view_create_patient');
Route::get('/view_create_patient_appointment', function () {return view('view_create_patient_appointment');})->name('view_create_patient_appointment');
Route::get('/view_create_users', function () {return view('view_create_users');})->name('view_create_users');
Route::get('/view_edit_emergency_stop', function () {return view('view_edit_emergency_stop');})->name('view_edit_emergency_stop');
Route::get('/view_edit_generic', function () {return view('view_edit_generic');})->name('view_edit_generic');
Route::get('/view_edit_patient', function () {return view('view_edit_patient');})->name('view_edit_patient');
Route::get('/view_edit_prescription', function () {return view('view_edit_prescription');})->name('view_edit_prescription');
Route::get('/view_emergency_stop', function () {return view('view_emergency_stop');})->name('view_emergency_stop');
Route::get('/view_emergency_stop_list', function () {return view('view_emergency_stop_list');})->name('view_emergency_stop_list');
Route::get('/view_patient_info', function () {return view('view_patient_info');})->name('view_patient_info');
Route::get('/view_patient_list', function () {return view('view_patient_list');})->name('view_patient_list');
Route::get('/view_payment_form', function () {return view('view_payment_form');})->name('view_payment_form');
Route::get('/view_payment_list', function () {return view('view_payment_list');})->name('view_payment_list');
Route::get('/view_prescription_list', function () {return view('view_prescription_list');})->name('view_prescription_list');
Route::get('/view_schedul_edit', function () {return view('view_schedul_edit');})->name('view_schedul_edit');
Route::get('/view_schedule_list', function () {return view('view_schedule_list');})->name('view_schedule_list');
Route::get('/view_setup_schedule', function () {return view('view_setup_schedule');})->name('view_setup_schedule');
Route::get('/view_setup_timezone', function () {return view('view_setup_timezone');})->name('view_setup_timezone');
Route::get('/view_today_appointment_list', function () {return view('view_today_appointment_list');})->name('view_today_appointment_list');
Route::get('/view_today_get_appointment_list', function () {return view('view_today_get_appointment_list');})->name('view_today_get_appointment_list');
Route::get('/view_today_patient_list', function () {return view('view_today_patient_list');})->name('view_today_patient_list');
Route::get('/view_today_prescription_list', function () {return view('view_today_prescription_list');})->name('view_today_prescription_list');
Route::get('/view_user_list', function () {return view('view_user_list');})->name('view_user_list');
Route::get('/view_user_profile', function () {return view('view_user_profile');})->name('view_user_profile');
Route::get('/widgets', function () {return view('widgets');})->name('widgets');


Route::get('/estado_civil/index', [EstadoCivilController::class, 'index'])->name('estado_civil.index');
Route::get('/estado_civil/create', [EstadoCivilController::class, 'create'])->name('estado_civil.create');
Route::post('/estado_civil', [EstadoCivilController::class, 'store'])->name('estado_civil.store');
Route::delete('/estado_civil/{estado_civil}', [EstadoCivilController::class, 'destroy'])->name('estado_civil.destroy');


Route::get('/tipos_identificacion/index', [TipoIdentificacionController::class, 'index'])->name('tipos_identificacion.index');
Route::get('/tipos_identificacion/create', [TipoIdentificacionController::class, 'create'])->name('tipos_identificacion.create');
Route::delete('/tipos_identificacion/{tipos_identificacion}', [TipoIdentificacionController::class, 'destroy'])->name('tipos_identificacion.destroy');
Route::post('/tipos_identificacion', [TipoIdentificacionController::class, 'store'])->name('tipos_identificacion.store');

Route::get('/sexo/index', [SexoController::class, 'index'])->name('sexo.index');
Route::get('/sexo/create', [SexoController::class, 'create'])->name('sexo.create');
Route::post('/sexo', [SexoController::class, 'store'])->name('sexo.store');
Route::delete('/sexo/{sexo}', [SexoController::class, 'destroy'])->name('sexo.destroy');

Route::get('/tipo_edad/index', [TipoEdadController::class, 'index'])->name('tipo_edad.index');
Route::get('/tipo_edad/create', [TipoEdadController::class, 'create'])->name('tipo_edad.create');
Route::post('/tipo_edad', [TipoEdadController::class, 'store'])->name('tipo_edad.store');
Route::delete('/tipo_edad/{tipo_edad}', [TipoEdadController::class, 'destroy'])->name('tipo_edad.destroy');

Route::get('/departamento/index', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('/departamento', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::delete('/departamento/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
Route::get('/departamento/import', [DepartamentoController::class, 'import'])->name('departamento.import');

Route::get('/municipio/index', [MunicipioController::class, 'index'])->name('municipio.index');
Route::get('/municipio/create', [MunicipioController::class, 'create'])->name('municipio.create');
Route::post('/municipio', [MunicipioController::class, 'store'])->name('municipio.store');
Route::delete('/municipio/{municipio}', [MunicipioController::class, 'destroy'])->name('municipio.destroy');

Route::get('/barrio/index', [BarrioController::class, 'index'])->name('barrio.index');
Route::get('/barrio/create', [BarrioController::class, 'create'])->name('barrio.create');
Route::post('/barrio', [BarrioController::class, 'store'])->name('barrio.store');
Route::delete('/barrio/{barrio}', [BarrioController::class, 'destroy'])->name('barrio.destroy');

Route::get('/etnia/index', [EtniaController::class, 'index'])->name('etnia.index');
Route::get('/etnia/create', [EtniaController::class, 'create'])->name('etnia.create');
Route::post('/etnia', [EtniaController::class, 'store'])->name('etnia.store');
Route::delete('/etnia/{etnia}', [EtniaController::class, 'destroy'])->name('etnia.destroy');

Route::get('/poblacion/index', [PoblacionController::class, 'index'])->name('poblacion.index');
Route::get('/poblacion/create', [PoblacionController::class, 'create'])->name('poblacion.create');
Route::post('/poblacion', [PoblacionController::class, 'store'])->name('poblacion.store');
Route::delete('/poblacion/{poblacion}', [PoblacionController::class, 'destroy'])->name('poblacion.destroy');

Route::get('/salario_minimo/index', [SalarioMinimoController::class, 'index'])->name('salario_minimo.index');
Route::get('/salario_minimo/create', [SalarioMinimoController::class, 'create'])->name('salario_minimo.create');
Route::post('/salario_minimo', [SalarioMinimoController::class, 'store'])->name('salario_minimo.store');
Route::delete('/salario_minimo/{salario_minimo}', [SalarioMinimoController::class, 'destroy'])->name('salario_minimo.destroy');

Route::get('/manual/index', [ManualController::class, 'index'])->name('manual.index');
Route::get('/manual/create', [ManualController::class, 'create'])->name('manual.create');
Route::post('/manual', [ManualController::class, 'store'])->name('manual.store');
Route::delete('/manual/{manuales}', [ManualController::class, 'destroy'])->name('manual.destroy');

Route::get('/tipoprocrips/index', [TipoProcedRipsController::class, 'index'])->name('tipoprocrips.index');
Route::get('/tipoprocrips/create', [TipoProcedRipsController::class, 'create'])->name('tipoprocrips.create');
Route::post('/tipoprocrips', [TipoProcedRipsController::class, 'store'])->name('tipoprocrips.store');
Route::delete('/tipoprocrips/{tipoprocrips}', [TipoProcedRipsController::class, 'destroy'])->name('tipoprocrips.destroy');

Route::get('/tipoprocedimiento/index', [TipoProcedimientoController::class, 'index'])->name('tipoprocedimiento.index');
Route::get('/tipoprocedimiento/create', [TipoProcedimientoController::class, 'create'])->name('tipoprocedimiento.create');
Route::post('/tipoprocedimiento', [TipoProcedimientoController::class, 'store'])->name('tipoprocedimiento.store');
Route::delete('/tipoprocedimiento/{id_tipoprocedimiento}', [TipoProcedimientoController::class, 'destroy'])->name('tipoprocedimiento.destroy');

Route::get('/tipofinproced/index', [TipoFinProcedController::class, 'index'])->name('tipofinproced.index');
Route::get('/tipofinproced/create', [TipoFinProcedController::class, 'create'])->name('tipofinproced.create');
Route::post('/tipofinproced', [TipoFinProcedController::class, 'store'])->name('tipofinproced.store');
Route::delete('/tipofinproced/{tipofinproced}', [TipoFinProcedController::class, 'destroy'])->name('tipofinproced.destroy');

Route::get('/tipoconceptoagrup/index', [TipoConceptoAgrupProcedimientoController::class, 'index'])->name('tipoconceptoagrup.index');
Route::get('/tipoconceptoagrup/create', [TipoConceptoAgrupProcedimientoController::class, 'create'])->name('tipoconceptoagrup.create');
Route::post('/tipoconceptoagrup', [TipoConceptoAgrupProcedimientoController::class, 'store'])->name('tipoconceptoagrup.store');
Route::delete('/tipoconceptoagrup/{tipoconceptoagrup}', [TipoConceptoAgrupProcedimientoController::class, 'destroy'])->name('tipoconceptoagrup.destroy');

Route::get('/procedimiento/index', [ProcedimientoController::class, 'index'])->name('procedimiento.index');
Route::get('/procedimiento/create', [ProcedimientoController::class, 'create'])->name('procedimiento.create');
Route::post('/procedimiento', [ProcedimientoController::class, 'store'])->name('procedimiento.store');
Route::delete('/procedimiento/{procedimiento}', [ProcedimientoController::class, 'destroy'])->name('procedimiento.destroy');

Route::get('/zonaresidencial/index', [ZonaResidencialController::class, 'index'])->name('zonaresidencial.index');
Route::get('/zonaresidencial/create', [ZonaResidencialController::class, 'create'])->name('zonaresidencial.create');
Route::post('/zonaresidencial', [ZonaResidencialController::class, 'store'])->name('zonaresidencial.store');
Route::delete('/zonaresidencial/{zonaresidencial}', [ZonaResidencialController::class, 'destroy'])->name('zonaresidencial.destroy');


Route::get('/grupo_sangre/index', [GrupoSangreController::class, 'index'])->name('grupo_sangre.index');
Route::get('/grupo_sangre/create', [GrupoSangreController::class, 'create'])->name('grupo_sangre.create');
Route::post('/grupo_sangre', [GrupoSangreController::class, 'store'])->name('grupo_sangre.store');
Route::delete('/grupo_sangre/{grupo_sangre}', [GrupoSangreController::class, 'destroy'])->name('grupo_sangre.destroy');

Route::get('/escolaridad/index', [EscolaridadController::class, 'index'])->name('escolaridad.index');
Route::get('/escolaridad/create', [EscolaridadController::class, 'create'])->name('escolaridad.create');
Route::post('/escolaridad', [EscolaridadController::class, 'store'])->name('escolaridad.store');
Route::delete('/escolaridad/{escolaridad}', [EscolaridadController::class, 'destroy'])->name('escolaridad.destroy');


Route::get('/empresa/index', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('/empresa', [EmpresaController::class, 'store'])->name('empresa.store');
Route::delete('/empresa/{empresa}', [EmpresaController::class, 'destroy'])->name('empresa.destroy');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


