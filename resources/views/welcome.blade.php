
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Software Clinic</title>
    <link rel="stylesheet" type="text/css" href="/css/styleapp.css">
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <nav class="nav_Software">
      <img class="logo" src="/images/softlogo.png" alt="Software Clínico">
      <h2>Software Clinic</h2>
       <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
        <img src="/images/.jpg" alt="">
          <p class="Bienvenido">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
        <a href="{{ route('login.destroy') }}" class="cerrar_sesion">Cerrar Sesion</a>
        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="sesion">Acceso</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="sesion_register">Registrarse</a>
        </li>
      @endif
      </ul>
    </nav>
    <h2 class="titulo_inicial">Bienvenidos a Software Clínico</h2>
	<p class="parrafo_inicial">¡Bienvenido al Software Clínico! Este software es una herramienta completa y eficiente para la gestión de los procesos clínicos en cualquier tipo de centro médico. Con nuestro software, podrás acceder a una plataforma intuitiva y personalizable que te permitirá agilizar y optimizar la atención al paciente, la gestión administrativa y la toma de decisiones gerenciales. ¡Estamos seguros de que encontrarás en nuestro software clínico una solución a medida para tu centro médico!
    </p>
  </body>
  @yield('content')
</html>