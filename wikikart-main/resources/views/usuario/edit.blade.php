
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
    <title>Editar usuario</title>

</head>
        @extends('layouts.app')
@section('content')
<body>
<style>
  /* Los estilos principales del login */

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    overflow: hidden; /* Evita la barra de desplazamiento horizontal */  
}

body *{
    box-sizing: border-box;
}

.main-login {
    position: relative; 
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1; 
}

/* Contenedor de video y formulario de inicio de sesión */

.video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0; /* Coloca el video detrás de otros elementos */
}

#background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Lado izquierdo del login*/

.left-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.left-login-image{
    width: 35vw;
}

/* Si se requeire poner titulo

.left-login > h1{
    color: #77ffc0;
} */

.right-login{
    width:50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
/* Lado derecho del login*/

.form-container{
    width:60%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 35px;
    backdrop-filter: blur(10px);
    border-radius: 10px;
    border: 2px solid #ff0000;
    overflow: hidden;
  
   }

   .form-container:hover {
    box-shadow: 0 0 60px #ff0000;
}



 .formbox h2{
    text-align: center;
    font-size: 35px;
    color: #fff;

}

.formbox .input-box{
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #fff;
    margin: 30px 0;
    position: relative;
    position: relative;
    display: flex;
    align-items: center; 
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    padding-right: 28px;
    color: #fff; 
}

.input-box label{
    position: absolute;
    top:50%;
    left:0;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    transition: .3s ease;
}


/* Estilo para el icono */
.icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 5px; /* Ajusta la posición del icono a la derecha */
    font-size: 24px;
}

.input-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box input:focus~ label,
.input-box input:valid ~ label{
    top: -5px;
    color:#ff0000;
    font-weight: 600;
}

.remmeber-password{
    font-size: 14px;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
}

.remmeber-password label input{
    accent-color: #ff0000;
    margin-right: 3px;

}

.remmeber-password a{
    color:#fff;
    font-weight: 600;
}

.btn{
    background-color: #fff;
    width: 100%;
    height: 45px;
    outline: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    /* Estilo para el icono 
    background: #ff0000;
    box-shadow: rgba(0,0,0,0.4);*/
    background: linear-gradient(90deg,transparent,#ff0000);
    animation: animate1 1s linear infinite;
}

.btn:hover{
    background: #ff0000;
    color: #050801;
    box-shadow: 0 0 5px #ff0000,
                0 0 25px #ff0000,
                0 0 50px #ff0000,
                0 0 200px #ff0000;
     -webkit-box-reflect:below 1px 
     linear-gradient(transparent);
}

a:nth-child(1){
    filter: hue-rotate(270deg);
}
.create-account {
    font-size: 14.5px;
    text-align: center;
    margin: 25px;
}

@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}

.create-account p a{
    color: #fff;
    font-weight: 600;
    text-decoration:none ;
}
.create-account p a:hover{
    color: #ff0000;
    font-weight: 600;
}




@media only screen and (max-width: 950px){
    .form-container{
        width: 85%;
    }
    .icon {
        font-size: 18px; /* Ajusta el tamaño del icono en pantallas pequeñas */
    }
    .formbox .input-box {
        width: 100%; /* Reducir aún más el ancho en pantallas más pequeñas */
    }
    .input-box input {
        font-size: 14px; /* Ajusta el tamaño de fuente para pantallas móviles si es necesario */
    }
}


@media only screen and (max-width: 600px){
    .main-login{
        flex-direction: column;
    }
    .left-login{
        width: 100%;
        height: auto;  
    }
    .right-login{
        width: 100%;
        height: auto;  
    }
    .left-login-image{
        width: 50vw;
    }
    .formbox.login{
        width: 90%;
    }
    .icon {
        font-size: 16px; /* Tamaño de icono aún más reducido en pantallas móviles */
    }
    .input-box input {
        font-size: 14px; /* Ajusta el tamaño de fuente para pantallas móviles si es necesario */
    }
}
    }
</style>
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
                    <h2>Editar usuario</h2>
                    <form action="{{ url('/usuario/'.$usuario->id) }}" method="post">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="input-box">
                            <span class="icon">
                                <i class='bx bx-user'></i>
                            </span>
                            <input type="text" name="usuario" value="{{ $usuario->usuario }}">
                            <label for="usuario">Usuario en Mario Kart</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class='bx bx-ghost'></i>
                            </span>
                            <input type="text" name="personaje" value="{{ $usuario->personaje }}">
                            <label for "personaje">Personaje favorito</label>
                        </div>
                        <div class="input-box">
                            <span class "icon">
                                <i class='bx bx-barcode-reader'></i>
                            </span>
                            <input type="text" name="codigo" value="{{ $usuario->codigo }}">
                            <label for="codigo">Código amigo Switch</label>
                        </div>
                        <input type="submit" value="Actualizar usuario" class="btn">
                    </form>
                    <div class="create-account">
                        <a href="{{ url('usuario/') }}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
</html>


