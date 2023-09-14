@extends('layouts.app_menu')

<main>   
    <h1>Lista de Pacientes</h1>
    <h2>Bienvenidos a Software Clínico</h2>
		<p>¡Bienvenido al Software Clínico! Este software es una herramienta completa y eficiente para la gestión de los procesos clínicos en cualquier tipo de centro médico. Con nuestro software, podrás acceder a una plataforma intuitiva y personalizable que te permitirá agilizar y optimizar la atención al paciente, la gestión administrativa y la toma de decisiones gerenciales. ¡Estamos seguros de que encontrarás en nuestro software clínico una solución a medida para tu centro médico!
    </p>
    <a href="{{ route('login') }}" class="button">Iniciar sesión</a>
		<a href="{{ route('register') }}" class="button">Registrarse</a>
  </main>
 