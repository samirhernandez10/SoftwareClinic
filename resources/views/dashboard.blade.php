<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Software Clinic</title>
    <link rel="stylesheet" type="text/css" href="/css/styleapp.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<h2 class="titulo_inicial">Bienvenidos a Software Clínico</h2>
	<p class="parrafo_inicial">¡Bienvenido al Software Clínico! Este software es una herramienta completa y eficiente para la gestión de los procesos clínicos en cualquier tipo de centro médico. Con nuestro software, podrás acceder a una plataforma intuitiva y personalizable que te permitirá agilizar y optimizar la atención al paciente, la gestión administrativa y la toma de decisiones gerenciales. ¡Estamos seguros de que encontrarás en nuestro software clínico una solución a medida para tu centro médico!
    </p>

    <div class="container_btn">
        <a href="{{ route('inicio') }}" class="btn btn-primary">Vamos al Software</a>
    </div>