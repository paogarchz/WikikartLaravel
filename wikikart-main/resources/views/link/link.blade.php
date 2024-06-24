<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Kart</title>

    <!--
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/icon-wikikart.png" type="image/svg+xml">

    <link rel="stylesheet" href="assets/linkstyle/css/css.css">
    <link rel="stylesheet" href="assets/linkstyle/css2/style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>

     <!--header-->
     <header>
     <a href="{{ url('/home') }}" class="logo2"><img src="{{asset('assets/peachstyle/img/nombre.png')}}"></a>
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
            <h1>I'm<br><span>Link</span></h1>
            <h3></h3>
            <a href="#" class="btn">Conoceme más!</a>
        </div>
     </section>

     <!--about-->
     <section class="about" id="about">
        <div class="about-img">
        <img src="{{asset('assets/linkstyle/img/1.png')}}">
        </div>
        <div class="about-text">
            <h2>A cerca de mi </h2>
            <h4>Hola! Soy un caballero del Reino Hyrule</h4>
            <p>Link es el protector del Reino Hyrule. Apareció por primera vez en The Legend of Zelda. para NES. 
                Link fue creado por Shigeru Miyamoto y el va a rescatar al reino y a la princesa Zelda de Ganondorf.
            Sus apariciones:</p>
            <div class="about-gri">
                <div class="about-in">
                    <h5>1.  The Legend of Zelda: Skyward Sword (2011)</h5>
                </div>
                <div class="about-in">
                    <h5>2.  The Legend of Zelda: Ocarina of Time (1998)</h5>
                </div>
                <div class="about-in">
                    <h5>3. The Legend of Zelda: Majora's Mask (2000)</h5>
                </div>
                <div class="about-in">
                    <h5>4. Zelda II: The Adventure of Link (1987)</h5>
                </div>
            </div>
            <a href="#" class="btn">Contactanos!</a>

        </div>
     </section>

     <!--opponents-->
     <section class="Opponents" id="opponents">
        <div class="main-text">
            <h2>Habilidades</h2>
            <h4>Que habilidades utiliza link</h4>
        </div>

        <div class="services-content">
            <div class="box">
            <img src="{{asset('assets/linkstyle/img/opponents1.png')}}" alt="serv1">
                
                <h3>Ultramano</h3>
                <p>Ultrahand es la habilidad que permite levantar, mover y rotar objetos. 
                    Es similar a la habilidad Magnesis de zelda: Ser salvaje
                    permite a Link simplemente mover objetos sin esfuerzo y la 
                    habilidad Ultrahand tiene la ventaja para fusionar objetos. </p>
            </div>

            <div class="box">
                <img src="{{asset('assets/linkstyle/img/opponents2.png')}}" alt="serv2">
                <h3>Fusible</h3>
                <p>Si bien la mecánica de durabilidad habitual no se ha eliminado por completo con Lágrimas del Reinoel 
                    capacidad de fusionar materiales con las armas y escudos de Link aumenta su durabilidad, así como 
                    también aumenta su daño o les agrega un nuevo efecto. </p>
            </div>

            <div class="box">
                <img src="{{asset('assets/linkstyle/img/opponents3.png')}}" alt="serv3">
                <h3>Ascender</h3>
                <p>La habilidad Ascender le da a Link una forma nueva e interesante de explorar el mapa en Lágrimas 
                    del Reino. Ascend permite a Link a levántate a través de objetos sólidos y crea atajos. 
                    Esto funciona en laderas, techos e incluso algunos enemigos.</p>
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
                <img src="{{asset('assets/linkstyle/img/portfolio1.jpg')}}" alt="works1">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo Switch</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>The Legend of Zelda Tears of the Kingdom</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/linkstyle/img/portfolio2.jpg')}}" alt="works2">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Wii U</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>The Legend of Zelda Breath of the Wild</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/linkstyle/img/portfolio3.jpg')}}" alt="works3">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Switch</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>The Legend of Zelda Breath of the Wild</h3>
            </div>
            
            <div class="row">
                <img src="{{asset('assets/linkstyle/img/portfolio4.jpg')}}" alt="works4">
                <div class="main-row">
                    <div class="row-text">
                        <h6>SNES</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>The Legend of Zelda A Link to the Past</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/linkstyle/img/portfolio5.jpg')}}" alt="works5">
                <div class="main-row">
                    <div class="row-text">
                        <h6>GBA</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>The Legend of Zelda A Link to the Past</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/linkstyle/img/portfolio6.jpg')}}" alt="works6">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Wii</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>The Legend Of Zelda Links Awakening</h3>
            </div>
        </div>
    </section>

     <!--contact-->
     <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Mi personalidad!</h2>
            <h4>Vamos a divertirnos!</h4>
            <p>El héroe zurdo, que dejó de serlo en su llegada a Wii por el uso del mando como espada, 
                no puede rivalizar en popularidad con Mario, la mascota por excelencia de Nintendo, pero 
                hablar de videojuegos y no incluir al personaje hyliano es un insulto a la historia del medio.

                Link se ha ganado el derecho a ser el protagonista de una de las sagas más prolíficas y 
                laureadas del sector, un éxito que empezó desde su primera entrega en NES hace más de 25 
                años pero que le catapultó a la fama con 'Ocarina of Time', considerado uno de los mejores 
                juegos de la historia.</p>
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
              <img src="{{asset('assets/linkstyle/img/peaches.jpg')}}" class="cover-image" />
            </div>
            
            <!-- Logo Code -->
            <img src="{{asset('assets/linkstyle/img/Mario.png')}}" class="logo" />
            
            <!-- Character image Code -->
            <img src="{{asset('assets/linkstyle/img/mario18.png')}}" class="character" />
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