<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,">
    <link rel="stylesheet" type="text/css" href="/css/stylenav.css">

    <title>@yield('title') - SoftwareClinic</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="">
    <nav class="nav_Software">
      <div class="contenedor_title">
          <img class="logo" src="/images/softlogo.png" alt="Software Clínico">
          <h2 class="text-2xl font-bold">SoftwareClinic</h2>
      </div>
      <ul class="px-16 ml-auto flex justify-end ">
      @if(auth()->check())
        <li >
          <p class="welcome">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li >
          <a href="{{ route('login.destroy') }}" class="close">Cerrar Sesion</a>
        </li>
      @else
        <li >
          <a href="{{ route('login.index') }}" class="sesion">Iniciar Sesion</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="sesion_register">Registrar</a>
        </li>
      @endif
      </ul>
    </nav>
    @yield('content')
  </body>
</html>