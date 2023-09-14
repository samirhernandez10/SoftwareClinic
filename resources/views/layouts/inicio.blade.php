@extends('layouts.app_menu')

@section('title', 'Inicio')
@section('content')


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  </head>
    <body>
    <h2>Bienvenidos a Software Clínico</h2>
		<p>¡Bienvenido al Software Clínico! Este software es una herramienta completa y 
      eficiente para la gestión de los procesos clínicos en cualquier tipo de centro médico. 
      Con nuestro software, podrás acceder a una plataforma intuitiva y personalizable que te permitirá 
      agilizar y optimizar la atención al paciente, la gestión administrativa y la toma de decisiones gerenciales. 
      ¡Estamos seguros de que encontrarás en nuestro software clínico una solución 
      a medida para tu centro médico!</p>
    
  </body>
  @endsection       
