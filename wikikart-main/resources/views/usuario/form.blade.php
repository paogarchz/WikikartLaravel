<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link rel="shortcut icon" href="{{ asset('assets/images/icon-wikikart.png') }}" type="image/svg+xml">
    <title>Unete</title>
</head>
       @extends('layouts.app')
@section('content')
<body>

    <div class="video-container">
        <video autoplay muted loop id="background-video">
            <source src="{{ asset('assets/video/mariokartdeluxe.mp4') }}" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
    </div>

    <div class="main-login">
        <div class="left-login">

            <img src="{{ asset('assets/images/LogoPagina.png') }}" class="left-login-image"   alt="logopagina">
        </div>
        <div class="right-login">
            <div class="form-container">
        <div class="formbox login">
        <h2> {{$modo}} usuario </h2>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bx-user'></i>
                    </span>

                    <input type="text" name="usuario" value="{{ isset($usuario->usuario)?$usuario->usuario:'' }}">
                    <label for="usuario">Usuario en Mario Kart</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bx-ghost'></i>
                    </span>
                    <input type="text" name="personaje" value="{{ isset($usuario->personaje)?$usuario->personaje:'' }}">
                    <label for="personaje">Personaje favorito</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bx-barcode'  style="float: right;"></i>
                    </span>
                    <input type="text" name="codigo" value="{{ isset($usuario->codigo)?$usuario->codigo:'' }}">
                    <label for="codigo">Código amigo Switch</label>
                </div>
                <input type="submit" value="{{ $modo }} datos" class="btn">
                <div class="create-account">
                <a href="{{ url('usuario/') }}">Regresar</a>
                </div>
        </div>
      <!-- Fin de inicio sesion-->


</body>
                @endsection
</html>
