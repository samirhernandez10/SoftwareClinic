
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
</head>
<main>   
<link rel="stylesheet" type="text/css" href="/css/styleinicio.css">

    <h2>Bienvenidos a Software Clínico</h2>
		<p>¡Bienvenido al Software Clínico! Este software es una herramienta completa y eficiente para la gestión de los procesos clínicos en cualquier tipo de centro médico. Con nuestro software, podrás acceder a una plataforma intuitiva y personalizable que te permitirá agilizar y optimizar la atención al paciente, la gestión administrativa y la toma de decisiones gerenciales. ¡Estamos seguros de que encontrarás en nuestro software clínico una solución a medida para tu centro médico!
    </p>
    <a href="{{ route('login') }}" class="button">Iniciar sesión</a>
		<a href="{{ route('register') }}" class="button">Registrarse</a>
  </main>
  @extends('layouts.app_footers')
 