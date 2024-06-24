<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Kart</title>

    <!--
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/icon-wikikart.png" type="image/svg+xml">

    <link rel="stylesheet" href="assets/Luigistyle/css/css.css">
    <link rel="stylesheet" href="assets/Luigistyle/css2/style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>

     <!--header-->
     <header>
        <a href="{{ url('/home') }}" class="logo2"><img src="{{asset('assets/peachstyle/img/nombre.png')}}" alt="logo"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#opponents">Personajes</a></li>
            <li><a href="#adventures">Aventuras</a></li>
            <li><a href="#contact">Contactanos</a></li>
        </ul>
     </header>

     <!--home-->
     <section class="home" id="home">
        <div class="home-text">
            <h4>Hola!</h4>
            <h1>I'm<br><span>Waluigi</span></h1>
            <h3></h3>
            <a href="#" class="btn">Conoceme más!</a>
        </div>
     </section>

     <!--about-->
     <section class="about" id="about">
        <div class="about-img">
        <img src="{{asset('assets/Luigistyle/img/1.png')}}">
        </div>
        <div class="about-text">
            <h2>A cerca de mi </h2>
            <h4>Hola! Soy conocido por ser el rival de Luigi, el hermano de Mario, de manera similar a cómo Wario es el rival de Mario.</h4>
            <p>Waluigi es un personaje de la franquicia de videojuegos de Nintendo. Debutó por primera vez en "Mario Tennis" para la Nintendo 64 en el año 2000.</p>
            <div class="about-gri">
                <div class="about-in">
                    <h5>1. "Mario Tennis" (Nintendo 64, 2000) - Debutó como un personaje jugable en este juego de tenis.</h5>
                </div>
                <div class="about-in">
                    <h5>2. "Mario Party 3" (Nintendo 64, 2000) - Apareció como un personaje jugable en este juego de mesa y minijuegos.</h5>
                </div>
                <div class="about-in">
                    <h5>3. "Mario Tennis: Power Tour" (Game Boy Advance, 2005) - Waluigi es un personaje jugable en esta entrega portátil de la serie Mario Tennis.</h5>
                </div>
                <div class="about-in">
                    <h5>4. "Mario Kart series" - Ha sido un personaje jugable en varios juegos de la serie Mario Kart, incluyendo "Mario Kart: Double Dash!!" (GameCube, 2003), "Mario Kart DS" (Nintendo DS, 2005), "Mario Kart Wii" (Wii, 2008), "Mario Kart 7" (Nintendo 3DS, 2011), y "Mario Kart 8" (Wii U, 2014) y "Mario Kart 8 Deluxe" (Nintendo Switch, 2017).</h5>
                </div>
                <div class="about-in">
                    <h5>5. "Super Mario series" - Aunque no ha protagonizado un juego principal, Waluigi ha hecho apariciones menores en algunos juegos de la serie Super Mario, como en "Super Mario 64 DS" (Nintendo DS, 2004) y "Super Mario 3D World" (Wii U, 2013).</h5>
                </div>
                <div class="about-in">
                    <h5>6. "Mario & Sonic at the Olympic Games" series - Ha sido un personaje jugable en varios juegos de esta serie, como "Mario & Sonic at the Olympic Games" (varias consolas, a partir de 2007).</h5>
                </div>
                <div class="about-in">
                    <h5>7. "Super Smash Bros. series" - Waluigi aparece como un asistente en "Super Smash Bros. Brawl" (Wii, 2008), "Super Smash Bros. for Wii U" (Wii U, 2014) y "Super Smash Bros. Ultimate" (Nintendo Switch, 2018).</h5>
                </div>
                <div class="about-in">
                    <h5>Y... en realidad en muchos más además de los que vienen.</h5>
                </div>


            </div>
            <a href="#" class="btn">Contactanos!</a>

        </div>
     </section>

     <!--opponents-->
     <section class="Opponents" id="opponents">
        <div class="main-text">
            <h2>Oponentes</h2>
            <h4>Ellos... los que no me dejan triunfar!</h4>
        </div>

        <div class="services-content">
            <div class="box">
            <img src="{{asset('assets/Luigistyle/img/opponents1.png')}}" alt="serv1">
                <h3>Luigi</h3>
                <p>Waluigi a menudo se considera el rival de Luigi, y compiten en varios juegos de deportes y carreras. Es su principal rival.</p>
            </div>

            <div class="box">
            <img src="{{asset('assets/Luigistyle/img/opponents2.png')}}" alt="serv2">
                <h3>Mario</h3>
                <p>Aunque no es un enemigo principal, Waluigi a veces se cruza con Mario en juegos deportivos y otros títulos de la serie.</p>
            </div>

            <div class="box">
            <img src="{{asset('assets/Luigistyle/img/opponents3.png')}}" alt="serv3">
                <h3>Bowser</h3>
                <p>Aunque no es un enemigo principal, Waluigi a veces compite contra Bowser en juegos de deportes y carreras.</p>
            </div>
        </div>
     </section>

    <!--adventures-->

    <section class="Adventures" id="adventures">
        <div class="main-text">
            <h2>Mis aventuras</h2>
            <h4>Juegos</h4>
        </div>

        <div class="portfolio-content">
            <div class="row">
            <img src="{{asset('assets/Luigistyle/img/portfolio1.jpg')}}" alt="works1">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo 64</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Tennis</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/Luigistyle/img/portfolio2.jpg')}}" alt="works2">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo 64</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Party 3</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/Luigistyle/img/portfolio3.jpg')}}" alt="works3">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Gameboy Advance</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Power Tennis</h3>
            </div>
            
            <div class="row">
            <img src="{{asset('assets/Luigistyle/img/portfolio4.jpg')}}" alt="works4">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Varias Plataformas</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Kart Series</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/Luigistyle/img/portfolio5.jpg')}}" alt="works5">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Wii</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario & Sonic at the Olympic Games</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/Luigistyle/img/portfolio6.jpg')}}" alt="works6">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo Switch</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Smash Bros Ultimate</h3>
            </div>
        </div>
    </section>

     <!--contact-->
     <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Mi personalidad!</h2>
            <h4>Vamos a divertirnos!</h4>
            <p>Mi personalidad se destaca por ser altamente competitiva y apasionada por sobresalir en los juegos. Siempre busco superar los desafíos y demostrar mis habilidades, aunque a veces esto me lleve a tomar medidas poco convencionales para lograrlo. A menudo me siento inspirado por la fama y éxito de otros personajes en la franquicia Mario, lo que me impulsa a esforzarme al máximo. Mi comportamiento puede parecer un poco exagerado, pero en el fondo, mi objetivo principal es demostrar mi valía en el mundo de los videojuegos y destacar en mi propia forma única. En lugar de verme como malo, me considero un personaje que añade un toque de diversión y desafío a los juegos de Mario.</p>
            <div class="contact-list">
                <li><a href="#">Sonobe, Kyoto, Japan</a></li>
                <li><a href="#">SuperMario@gmail.com</a></li>
                <li><a href="#">123-456-7890</a></li>
            </div>
            <div class="contact-icons">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
            </div>
        </div>

    	<div class="card">
            <!-- Cover image Code -->
            <div class="wrapper">
            <img src="{{asset('assets/Luigistyle/img/waluigi.jpg')}}" class="cover-image" />
            </div>
            
            <!-- Logo Code -->
            <img src="{{asset('assets/Luigistyle/img/Mario.png')}}" class="logo" />
            
            <!-- Character image Code -->
            <img src="{{asset('assets/Luigistyle/img/mario18.png')}}" class="character" />
        </div>

     </section>

     <div class="last-text">
        <p>© Developed 2023 by KKOTAS G</p>
     </div>


     <!--scroll top-->

     <a href="#" class="top"><i class='bx bx-chevron-up-circle' ></i></i></a>


     <!--sustom scrollreveal link-->

     <script src="https://unpkg.com/scrollreveal"></script>

    <!--custom js link-->
    <script type="text/javascript" src="js/Mario website.js"></script>
    
</body>
</html>