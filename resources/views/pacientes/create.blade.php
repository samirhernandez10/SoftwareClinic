@extends('layouts.app_menu')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <form id="formulario" action="{{ route('pacientes.store') }}" method="POST">
    @csrf

    <link rel="stylesheet" type="text/css" href="/css/style_menu.css">
	<link rel="stylesheet" type="text/css" href="/css/stylepaciente.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <h2>Agregar Paciente</h2>
    <br>
    <div class="form-row">
					<div class="form-group col-md-6">
						<label for="id_tipo_identificacion">Tipo de Documento:</label>
						<select id="id_tipo_identificacion" name="id_tipo_identificacion">
							<option value=" "></option>
							<option value="AS">Adulto sin Identificacion</option>
           					<option value="CC">Cedula de Ciudadania</option>
            				<option value="CD">Carnet Diplomatico</option>
           				    <option value="CE">Cedula Extranjeria</option>
            				<option value="CN">Certificado Nacido Vivo</option>
           				    <option value="DE">Documento Extranjero</option>
            			    <option value="MS">Menor sin Indentificacion</option>
                            <option value="NA">No Aplica</option>
                            <option value="NI">NIT</option>
                            <option value="NU">Numero Unico Identificacion</option>
            				<option value="PA">Pasaporte</option>
           				    <option value="PE">Permiso especial de Permanencia</option>
            				<option value="RC">Registro Civil de Nacimiento</option>
           					<option value="SC">Salvoconducto</option>
           					<option value="SI">Sin Identificacion</option>
          				    <option value="TI">Tarjeta de Identidad</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="no_documento">Numero De Identificacion:</label>
						<input type="text" id="no_documento" name="no_documento"required>
					</div> 
					<div class="form-group col-md-6">
						<label for="nombre1">Primer Nombre:</label>
						<input type="text" id="nombre1" name="nombre1" >
					</div>        
          			<div class="form-group col-md-6">
						<label for="nombre2">Segundo Nombre:</label>
						<input type="text" id="nombre2" name="nombre2">
					</div>
					<div class="form-group col-md-6">
						<label for="apellido1">Primer Apellido:</label>
						<input type="text" id="apellido1" name="apellido1">
					</div>
          			<div class="form-group col-md-6">
						<label for="apellido2">Segundo Apellido:</label>
						<input type="text" id="apellido2" name="apellido2">
					</div>
				    <div class="form-group col-md-6">
						<label for="fecha_nac">Fecha de Nacimiento:</label>
						<input type="date" id="fecha_nac" name="fecha_nac" onchange="calcularEdad()">
					</div>
					<div class="form-group col-md-6">
						<label for="edad">Edad:</label>
						<input type="number" id="edad" name="edad" readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="genero">Género:</label>
						<select id="genero" name="genero"required>
							<option value=" "></option>
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
							<option value="otro">Otro</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="eps">EPS:</label>
						<input type="text" id="eps" name="eps">
					</div>			
				    <div class="form-group col-md-6">
						<label for="correo">Correo Electrónico:</label>
						<input type="email" id="correo" name="correo">
					</div>
					<div class="form-group col-md-6">
						<label for="direccion">Direccion:</label>
						<input type="text" id="direccion" name="direccion">
					</div>
					
					<div class="form-group col-md-6">
						<label for="id_etnia">Etnia:</label>
						<select id="id_etnia" name="id_etnia">
							<option value=" "></option>
							<option value="ROM">ROM (gitano)</option>
							<option value="Raizal">Raizal (archipiélago de San Andrés y Providencia)</option>
							<option value="Palanquero">Palanquero de San Basilio</option>
							<option value="Negro">Negro(a), Mulato(a), Afrocolombiano(a) o Afro descendiente</option>
							<option value="Otras_etnias">Otras etnias ND No definido</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="id_estado_civil">Estado Civil:</label>
						<select id="id_estado_civil" name="id_estado_civil">
							<option value=" "></option>
							<option value="casado">Casado</option>
							<option value="soltero">Soltero</option>
							<option value="otro">Otro</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="telefono">Teléfono:</label>
						<input type="tel" id="telefono" name="telefono">
					</div>
					<div class="form-group col-md-6">
						<label for="tipo_afiliado">Tipo Afiliado:</label>
						<select id="tipo_afiliado" name="tipo_afiliado">
							<option value=" "></option>
							<option value="contributivo">Contributivo cotizante</option>
							<option value="Contributivo_beneficiario">Contributivo beneficiario</option>
							<option value="Contributivo_adicional">Contributivo adicional</option>
							<option value="Subsidiado">Subsidiado</option>
							<option value="Sinregimen">Sin régimen</option>
							<option value="otro">Otro</option>
							<option value="TomadorARL">Tomador/Amparado ARL</option>
							<option value="TomadorSOAT">Tomador/Amparado SOAT</option>
							<option value="Tomadorsalud">Tomador/Amparado Planes voluntario de salud</option>
						</select>
						</div>			
						</div>
				<button type="submit" id="guardar-btn" class="guardar-btn" onclick="return guardar()"><i class="fas fa-save"></i> Guardar</button>
				<button type="submit" id="imprimirRegistros-btn"class="imprimirRegistros-btn" onclick="imprimir()"><i class="fas fa-print"></i>Imprimir</button>
				<button type="submit" id="limpiar-btn"class="limpiar-btn"onclick="return limpiar()"><i class="fas fa-ban"></i> Limpiar</button>
				<button type="submit" id="buscar-btn"class="buscar-btn"onclick="return Buscar()"><i class="fas fa-search"></i> Buscar</button>
				</form>
				<br><br>
				@extends('layouts.app_footers')