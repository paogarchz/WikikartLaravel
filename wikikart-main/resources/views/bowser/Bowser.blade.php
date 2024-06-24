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

    <link rel="stylesheet" href="assets/bowerstyle/css/css.css">
    <link rel="stylesheet" href="assets/bowerstyle/css2/style.css">

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
            <h1>I'm<br><span>Bowser</span></h1>
            <h3></h3>
            <a href="#" class="btn">Conoceme más!</a>
        </div>
     </section>

     <!--about-->
     <section class="about" id="about">
        <div class="about-img">
        <img src="{{asset('assets/bowerstyle/img/1.png')}}">
        </div>
        <div class="about-text">
            <h2>Acerca de mi </h2>
            <h4>¡Hola súbditos del Reino Champiñón y más allá! </h4>
            <p>Soy el magnífico Bowser, también conocido como el temible Rey Koopa. ¿La razón de mi grandiosa existencia? ¡Dominar el mundo y por supuesto, secuestrar a la encantadora
                 Princesa Peach! Con mi imponente caparazón, cuernos afilados y aliento de fuego, no hay desafío que no pueda superar. Me puedes encontrar en...</p>
            <div class="about-gri">
                <div class="about-in">
                    <h5>1.  Super Mario Bros</h5>
                </div>
                <div class="about-in">
                    <h5>2. Super Mario 64.</h5>
                </div>
                <div class="about-in">
                    <h5>3. Super Mario Galaxy .</h5>
                </div>
                <div class="about-in">
                    <h5>4. Super Mario Odyssey. </h5>
                </div>
            </div>
            <a href="#" class="btn">Contactanos!</a>

        </div>
     </section>

     <!--opponents-->
     <section class="Opponents" id="opponents">
        <div class="main-text">
            <h2>ALIADOS</h2>
            <h4>ESTOS SON MIS ALIADOS</h4>
        </div>

        <div class="services-content">
            <div class="box">
                <img src="{{asset('assets/bowerstyle/img/opponents1.png')}}" alt="serv1">
                <h3>Bowser Jr.</h3>
                <p> Si bien Bowser Jr. es el hijo de Bowser, su lealtad hacia su padre lo ha llevado a ser un aliado cercano en varias ocasiones. Juntos, han trabajado para intentar derrotar a Mario y capturar a la Princesa Peach.</p>
            </div>

            <div class="box">
            <img src="{{asset('assets/bowerstyle/img/opponents2.png')}}" alt="serv1">
                <h3>Kamek</h3>
                <p> Kamek es un mago Koopa y consejero de confianza de Bowser. A menudo, Kamek ha proporcionado apoyo mágico a Bowser, otorgándole poderes en sus planes para conquistar el Reino Champiñón.</p>
            </div>

            <div class="box">
            <img src="{{asset('assets/bowerstyle/img/opponents3.png')}}" alt="serv1">
                <h3>Fawful</h3>
                <p>Fawful es un personaje en los juegos "Mario & Luigi", donde a veces actúa como un aliado temporal de Bowser. Sin embargo, sus motivaciones suelen ser egoístas, y a Fawful ha traicionado a Bowser.</p>
            </div>
        </div>
     </section>

    <!--adventures-->

    <section class="Adventures" id="adventures">
        <div class="main-text">
            <h2>Mis Apariciones</h2>
            <h4>Juegos</h4>
        </div>

        <div class="portfolio-content">
            <div class="row">
                <img src="{{asset('assets/bowerstyle/img/portfolio1.jpg')}}" alt="works1">
                <div class="main-row">
                    <div class="row-text">
                        <h6> 1985</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario Bros.</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/bowerstyle/img/portfolio2.jpg')}}" alt="works2">
                <div class="main-row">
                    <div class="row-text">
                        <h6> 1996</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario 64</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/bowerstyle/img/portfolio3.jpg')}}" alt="works3">
                <div class="main-row">
                    <div class="row-text">
                        <h6> 2002</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario Sunshine</h3>
            </div>
            
            <div class="row">
                <img src="{{asset('assets/bowerstyle/img/portfolio4.jpg')}}" alt="works4">
                <div class="main-row">
                    <div class="row-text">
                        <h6> 2007</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario Galaxy</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/bowerstyle/img/portfolio5.jpg')}}" alt="works5">
                <div class="main-row">
                    <div class="row-text">
                        <h6> 2006</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>New Super Mario Bros.</h3>
            </div>

            <div class="row">
                <img src="{{asset('assets/bowerstyle/img/portfolio6.jpg')}}" alt="works6">
                <div class="main-row">
                    <div class="row-text">
                        <h6> 2017</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario Odyssey</h3>
            </div>
        </div>
    </section>

     <!--contact-->
     <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Mi personalidad!</h2>
            <h4>Deberias de temerme...</h4>
            <p>Bowser, el Rey Koopa, es conocido por su imponente presencia y fuerza descomunal. Aunque su principal objetivo es conquistar el Reino Champiñón y derrotar a Mario, muestra un lado paternal con su astuto hijo, Bowser Jr. Su personalidad audaz y amor por los desafíos se reflejan en su determinación. Aunque su deseo de capturar a la Princesa Peach puede parecer malévolo, se ha demostrado que tiene motivaciones más complejas en algunas ocasiones. Además, Bowser, a pesar de ser un villano, comparte un aprecio por la buena comida y tiene un estilo único que lo distingue en el universo de Mario. A través de su naturaleza feroz, habilidades mágicas y determinación, Bowser ha dejado una marca duradera en la historia de los videojuegos.</p>
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
              <img src="{{asset('assets/bowerstyle/img/Bowser.jpg')}}" class="cover-image" />
            </div>
            
            <!-- Logo Code -->
            <img src="{{asset('assets/bowerstyle/img/Mario.png')}}" class="logo" />
            
            <!-- Character image Code -->
            <img src="{{asset('assets/bowerstyle/img/Mario18.png')}}" class="character" />
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