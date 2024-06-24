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

    <link rel="stylesheet" href="assets/peachstyle/css/css.css">
    <link rel="stylesheet" href="assets/peachstyle/css2/style.css">

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
            <h1>I'm<br><span>Peach</span></h1>
            <h3></h3>
            <a href="#" class="btn">Conoceme más!</a>
        </div>
     </section>

     <!--about-->
     <section class="about" id="about">
        <div class="about-img">
            <img src="{{asset('assets/peachstyle/img/1.png')}}">
        </div>
        <div class="about-text">
            <h2>A cerca de mi </h2>
            <h4>Hola! Soy la princesa del Reino Champiñón</h4>
            <p>La Princesa Peach es la princesa del Reino Champiñón. Apareció por primera vez en Super Mario Bros. para NES. 
                Peach fue creada por Shigeru Miyamoto y es la damisela en apuros en la mayoría de los juegos de Mario.
            Sus apariciones:</p>
            <div class="about-gri">
                <div class="about-in">
                    <h5>1.  Super Mario Bros</h5>
                </div>
                <div class="about-in">
                    <h5>2.  Super Mario Bros 2</h5>
                </div>
                <div class="about-in">
                    <h5>3. Super Mario 3D World.</h5>
                </div>
                <div class="about-in">
                    <h5>4. Super Smash Bros. Melee</h5>
                </div>
            </div>
            <a href="#" class="btn">Contactanos!</a>

        </div>
     </section>

     <!--opponents-->
     <section class="Opponents" id="opponents">
        <div class="main-text">
            <h2>Habilidades</h2>
            <h4>Pese a ser representada a menudo como una damisela en apuros, ella a demostrado poseer varias habilidades</h4>
        </div>

        <div class="services-content">
            <div class="box">
                <img src="{{asset('assets/peachstyle/img/mini3.png')}}" alt="serv1">
                <h3>Flotar</h3>
                <p>Su habilidad característica es la de poder flotar en el aire durante unos segundos. vista en Super Mario Bros. 2 y Super Mario 3D World, además de en la saga de Super Smash Bros. Ella también puede hacer uso de su poco peso y de su vestido para descender lentamente en el aire.</p>
            </div>

            <div class="box">
                <img src="{{asset('assets/peachstyle/img/mini4.png')}}" alt="serv2">
                <h3>Dotes Curativos</h3>
                <p> Ella demuestra tener dotes curativas, pudiendo sanar e incluso revivir a sus aliados que que han caído debilitados en batalla. Al usar su emoción de calma, ella puede curar su vida. Su emoción de ira la envuelve en un aura de fuego, que derrota y daña a los enemigos al contacto.</p>
            </div>

            <div class="box">
                <img src="{{asset('assets/peachstyle/img/minipeach.png')}}" alt="serv3">
                <h3>Magia</h3>
                <p>Peach con su magia es la única capaz de transformar, también puede causar que sus oponentes se duerman, permitiendo al equipo atacar sin arriesgarse a recibir daño, e incluso en este juego se desmuestra que Peach puede hacer uso de poderes psíquicos para atacar a sus oponentes.</p>
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
            <img src="{{asset('assets/peachstyle/img/portfolio1.jpg')}}" alt="works1">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo Switch</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario 3D World</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/peachstyle/img/portfolio2.jpg')}}" alt="works2">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo Switch</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario Kart</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/peachstyle/img/portfolio3.jpg')}}" alt="works3">
                <div class="main-row">
                    <div class="row-text">
                        <h6>GameBoy</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Super Mario Odyssey</h3>
            </div>
            
            <div class="row">
            <img src="{{asset('assets/peachstyle/img/portfolio4.jpg')}}" alt="works4">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo 64</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Party</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/peachstyle/img/portfolio5.jpg')}}" alt="works5">
                <div class="main-row">
                    <div class="row-text">
                        <h6>Nintendo</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Kart Deluxe</h3>
            </div>

            <div class="row">
            <img src="{{asset('assets/peachstyle/img/portfolio6.jpg')}}" alt="works6">
                <div class="main-row">
                    <div class="row-text">
                        <h6>X-box</h6>
                    </div>
                    <div class="row-icon">
                        <i class='bx bx-heart' ></i>
                    </div>
                </div>
                <h3>Mario Kart 7</h3>
            </div>
        </div>
    </section>

     <!--contact-->
     <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Mi personalidad!</h2>
            <h4>Vamos a divertirnos!</h4>
            <p>La princesa Peach es amable, dulce, cordial, valiente y amigable. Al ser una princesa, Peach posee buenos modales y se expresa con un lenguaje moderado y educado con la gente, incluyendo a sus amigos. Ella ha demostrado tener gusto por el color rosa, las aventuras, la acción y es muy buena preparando bocadillos y postres, especialmente pasteles.</p>
            <div class="contact-list">
                <li><a href="#">Mexico, Pachuca, Hidalgo</a></li>
                <li><a href="#">Wikikart@gmail.com</a></li>
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
            <img src="{{asset('assets/peachstyle/img/peaches.jpg')}}" class="cover-image" />
            </div>
            
            <!-- Logo Code -->
            <img src="{{asset('assets/peachstyle/img/Mario.png')}}" class="logo" />
            
            <!-- Character image Code -->
            <img src="{{asset('assets/peachstyle/img/mario18.png')}}" class="character" />
        </div>

     </section>

     <div class="last-text">
        <p>© Developed 2023 by KKOTAS GAMES</p>
     </div>


     <!--scroll top-->

     <a href="#" class="top"><i class='bx bx-chevron-up-circle' ></i></i></a>


     <!--sustom scrollreveal link-->

     <script src="https://unpkg.com/scrollreveal"></script>

    <!--custom js link-->
    <script type="text/javascript" src="js/Mario website.js"></script>
    
</body>
</html>
