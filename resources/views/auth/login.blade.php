@extends('layouts.app')

@section('title', 'Login')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/stylelogin-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Estilos para dispositivos móviles */
      @media (max-width: 480px) {
        .container{
          position: relative;
          margin-left: auto;
          width: 480px;
          height: 480px;
          padding: 20px 20px;
          background: #fff;
          box-shadow: 0 7px 10px rgba(0,0,0,0.7);
          perspective: 1700px;
          border-radius: 15px;
}
      .container .cover{
         top: 0;
         left: 50%;
         height: 100%;
         width: 50%;
         z-index: 98;
          transition: all 1s ease;
          transform-origin: left;
          transform-style: preserve-3d;
}

        .logo {
          /* Ajusta los estilos del logo según tus necesidades */
        }

        /* Agrega más estilos específicos para dispositivos móviles */
      }
    </style> 
  
  </head>
   <body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img class="logo" src="/images/fondologin4.jpg" alt="Software Clínico">
        <div class="text">
          <span class="text-1">Cada nuevo amigo es una <br> nueva aventura</span>
          <span class="text-2">Vamos a conectarnos</span>
        </div>
      </div>
    </div>
    <form method="POST" action="">
    @csrf
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Iniciar Sesion</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Ingresa tu Correo" required id="email" name="email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Ingresa tu contraseña" id="password" name="password" required>
              </div>
              <div class="text"><a href="{{ route('password.request') }}">Has olvidado tu contraseña?</a></div>
              <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>
              <div class="button input-box">
                <input type="submit" value="Iniciar Sesion">
              </div>
              <div class="text sign-up-text">¿No tienes una cuenta? <label>Regístrese ahora</label></div>
            </div>
  </form>
  </div>
  </div>
</div>

@endsection