<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   
   <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-6.1.2-web/css/all.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/fonts/poppins/poppins.css')}}">
   <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
   <link rel="stylesheet" href="{{ asset('css/scroll.css') }}">
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio</title>
</head>
<body>
    @include('index')
    @include('sobre-mi')
  <!-- Layout  -->
   <div class="layout">
    <!-- barra lateral (info usuario) -->
     <aside class="layout__aside">
        <section class="aside__user-info">
            <!-- info general usuario -->
             <div class="user-info__general">
                <div class="user-info__container-image">
                    <img src="{{ asset('assets/img/default-user.jpg')}}" alt="foto de perfil usuario" class="user-info__image">
                </div>
                <h2 class="user-info__name">Ricardo Ayala</h2>
                <h2 class="user-info__job">Desarrollador Web</h2>
             </div>
             <!--menu de navegacion-->
            <nav class="layout__menu">
                <ul class="menu__list">

                    <li class="menu__option">
                       <a href="{{ route('index')}}" class="menu__icon menu__link ">
                        <i class="fa-solid fa-house"></i>
                        <span class="menu__overlay">Home</span>
                       </a>
                    </li>

                    <li class="menu__option">
                        <a href="{{ route('sobre-mi')}}" class="menu__icon menu__link ">
                         <i class="fa-solid fa-user"></i>
                         <span class="menu__overlay">Sobre mi</span>
                        </a>
                     </li>
                    
                     <!-- TODO: agregar direcciones cuando hector los termine -->
                     <li class="menu__option">
                        <a href="#" class="menu__icon menu__link ">
                         <i class="fa-solid fa-graduation-cap"></i>
                         <span class="menu__overlay">Estudios</span>
                        </a>
                     </li>

                     <li class="menu__option">
                        <a href="#" class="menu__icon menu__link ">
                         <i class="fa-solid fa-briefcase"></i>
                         <span class="menu__overlay">Portfolio</span>
                        </a>
                     </li>

                     <li class="menu__option">
                        <a href="#" class="menu__icon menu__link ">
                         <i class="fa-solid fa-book"></i>
                         <span class="menu__overlay">Blog</span>
                        </a>
                     </li>

                     <li class="menu__option">
                        <a href="#" class="menu__icon menu__link ">
                         <i class="fa-solid fa-envelope"></i>
                         <span class="menu__overlay">Contacto</span>
                        </a>
                     </li>

                </ul>
            </nav>
             <!--links a redes sociales-->
            <div class="user-info__links"></div>
            <ul class="links__social">
                
                <li class="social__option">
                    <a href="#" class="social__link">
                        <i class="social__icon fa-brands fa-youtube"></i>
                    </a>   
                </li>

                <li class="social__option">
                    <a href="#" class="social__link">
                        <i class="social__icon fa-brands fa-linkedin"></i>
                    </a>   
                </li>

                <li class="social__option">
                    <a href="#" class="social__link">
                        <i class="social__icon fa-brands fa-instagram"></i>
                    </a>   
                </li>
            </ul>
             <!--boton -->
            <div class="user-info__button">
                <a href="" class="user-info__btn">Descargar CV</a>
            </div>


             <!--footer-->
             <footer class="user-info__footer">
                &copy; 2025 Ricardo Ayala
             </footer>
        </section>
     </aside>

     <!-- contenido principal  -->
      <main class="layout__content">
        <section class="content__page content__about">
            <!-- este contenido cambia para cada pagina del sitio web -->
            <header class="about__header">
                <h1 class="about__title">Sobre <span class="title__color">Mi</span></h1>
            </header>





            <section class="about__personal-info">
                <article class="personal-info__bio">
                    <p class="personal-info__description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                         Accusamus cumque temporibus quaerat ipsa nam aliquid, 
                         deserunt beatae. Facere aliquam blanditiis totam voluptates
                          omnis placeat odio deleniti, sit praesentium quo quisquam!
                    </p>
                </article>
                <div class="personal-info__data">
                    <ul class="personal-info__list">
                        <li class="personal-info__option">
                            <span class="personal-info__title">Edad</span>
                            <span class="personal-info__value">25</span>
                        </li>

                        <li class="personal-info__option">
                            <span class="personal-info__title">Pais</span>
                            <span class="personal-info__value">Mexico</span>
                        </li>

                        <li class="personal-info__option">
                            <span class="personal-info__title">Direccion</span>
                            <span class="personal-info__value">Ejemplo Calle</span>
                        </li>

                        <li class="personal-info__option">
                            <span class="personal-info__title">Correo:</span>
                            <span class="personal-info__value">Correo@ejemplo.com</span>
                        </li>

                        <li class="personal-info__option">
                            <span class="personal-info__title">Telefono:</span>
                            <span class="personal-info__value">1234567890</span>
                        </li>

                    </ul>
                </div>
            </section>
<!-- -------------------------------------------------------------------------------------- -->
            <section class="about__services">
                <header class="service__header">
                    <h2 class="services__title">
                        lo que <span class="title__color">hago</span>
                    </h2>
                </header>

                <div class="services_container">
                    <article class="services__service">
                        <div class="service__icon">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <div class="service__content">
                            <h3 class="service__title">Programacion</h3>
                            <p class="service__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Impedit, praesentium. Voluptatum veniam nesciunt totam 
                                 tempore praesentium voluptates placeat culpa. Natus minus
                                  beatae minima molestiae eos molestias perferendis reiciendis, 
                                  mollitia corrupti!</p>
                        </div>
                    </article>

                    <article class="services__service">
                        <div class="service__icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <div class="service__content">
                            <h3 class="service__title">Formacion</h3>
                            <p class="service__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Impedit, praesentium. Voluptatum veniam nesciunt totam 
                                 tempore praesentium voluptates placeat culpa. Natus minus
                                  beatae minima molestiae eos molestias perferendis reiciendis, 
                                  mollitia corrupti!</p>
                        </div>
                    </article>

                    <article class="services__service">
                        <div class="service__icon">
                            <i class="fa-solid fa-computer"></i>
                        </div>
                        <div class="service__content">
                            <h3 class="service__title">Desarrollo Web</h3>
                            <p class="service__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Impedit, praesentium. Voluptatum veniam nesciunt totam 
                                 tempore praesentium voluptates placeat culpa. Natus minus
                                  beatae minima molestiae eos molestias perferendis reiciendis, 
                                  mollitia corrupti!</p>
                        </div>
                    </article>

                    <article class="services__service">
                        <div class="service__icon">
                            <i class="fa-solid fa-terminal"></i>
                        </div>
                        <div class="service__content">
                            <h3 class="service__title">Administracion de Sistemas</h3>
                            <p class="service__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Impedit, praesentium. Voluptatum veniam nesciunt totam 
                                 tempore praesentium voluptates placeat culpa. Natus minus
                                  beatae minima molestiae eos molestias perferendis reiciendis, 
                                  mollitia corrupti!</p>
                        </div>
                    </article>

                </div>
            </section>
<!-- -------------------------------------------------------------------------------------- -->
            <section class="about__reviews">
                <header class="reviews__hader">
                    <h3 class="reviews__title">
                        Reseñas
                    </h3>
                </header>

                <div class="reviews__container">
                    <article class="reviews__review">
                        <div class="review__imgage-container">
                            <img src="{{ asset('assets/img/testimonio1.jpg')}}" alt="Cara de un cliente" class="review__image">
                        </div>

                        <div class="review__description">
                            <p class="review__text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Unde optio obcaecati adipisci rerum eligendi facilis,
                                 impedit cumque quo deserunt, mollitia nesciunt, deleniti 
                                 atque fugiat debitis maiores inventore nam officia quasi!
                            </p>
                        </div>

                        <div class="review__author">
                            <div class="review__author-info">
                                <h4 class="review__name">Ana Lopez</h4>
                                <h5 class="review__company">Develoers S.A</h5>
                            </div>

                            <div class="review__author-icon">
                                <icon class="review__icon fa-solid fa.quote-right"></icon>
                            </div>
                        </div>

                    </article>


                    <article class="reviews__review">
                        <div class="review__imgage-container">
                            <img src="{{  asset('assets/img/testimonio2.jpg')}}" alt="Cara de un cliente" class="review__image">
                        </div>

                        <div class="review__description">
                            <p class="review__text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Unde optio obcaecati adipisci rerum eligendi facilis,
                                 impedit cumque quo deserunt, mollitia nesciunt, deleniti 
                                 atque fugiat debitis maiores inventore nam officia quasi!
                            </p>
                        </div>

                        <div class="review__author">
                            <div class="review__author-info">
                                <h4 class="review__name">Ruben MArtinez</h4>
                                <h5 class="review__company">FullStack S.L</h5>
                            </div>

                            <div class="review__author-icon">
                                <icon class="review__icon fa-solid fa.quote-right"></icon>
                            </div>
                        </div>

                    </article>


                </div>
            </section>

<!-- -------------------------------------------------------------------------------------- -->

            <section class="about__clients">
            <header class="clients__header">
                <h2 class="clients__title">
                    Clientes
                </h2>
            </header>
            <div class="clients__container">
                <article class="clients__items">
                    <a href="#" class="clients__link">
                        <img src="{{ asset('assets/img/cliente-1.png')}}" alt="imagen cliente" class="clients__image">
                    </a>
                </article>

                <article class="clients__items">
                    <a href="#" class="clients__link">
                        <img src="{{ asset('assets/img/cliente-2.png')}}" alt="imagen cliente" class="clients__image">
                    </a>
                </article>

                <article class="clients__items">
                    <a href="#" class="clients__link">
                        <img src="{{ asset('assets/img/cliente-3.png')}}" alt="imagen cliente" class="clients__image">
                    </a>
                </article>

                <article class="clients__items">
                    <a href="#" class="clients__link">
                        <img src="{{ asset('assets/img/cliente-4.png')}}" alt="imagen cliente" class="clients__image">
                    </a>
                </article>

                <article class="clients__items">
                    <a href="#" class="clients__link">
                        <img src="{{ asset('assets/img/cliente-5.png')}}" alt="imagen cliente" class="clients__image">
                    </a>
                </article>

              
            </div>

            </section>
<!-- -------------------------------------------------------------------------------------- -->
            <section class="about__prices">
    <header class="prices__header">
        <h2 class="prices__title">
            Precios </h2>
    </header>

    <div class="prices__container">
        <article class="prices__box">
            <div class="prices__subtitle">
                <spam class="prices__text">Normal</spam>

            </div>
            <div class="prices__price">
                <span class="prices__number"> 20$ </span>
                <small class="prices__advice">Al mes</small>
            </div>

            <div class="prices__buy">
                <a href="#" class="prices__btn">
                    Prueba Gartis
                </a>
            </div>

            <div class="prices__reward">
                un curso de desarrollo web
            </div>
            <div class="prices__reward">
              Soporte a preguntas y dudas
            </div>

            <div class="prices__reward">
              Certificado de finalizacion
            </div>



        </article>

        <article class="prices__box">
            <div class="prices__subtitle">
                <spam class="prices__text">Premium</spam>

            </div>
            <div class="prices__price">
                <span class="prices__number"> 50$ </span>
                <small class="prices__advice">Al mes</small>
            </div>

            <div class="prices__buy">
                <a href="#" class="prices__btn">
                    Prueba Gartis
                </a>
            </div>

            <div class="prices__reward">
               6 cursos de desarrollo web
            </div>
            <div class="prices__reward">
              Soporte a preguntas prioritario
            </div>

            <div class="prices__reward">
              Certificado de finalizacion
            </div>



        </article>
    </div>
            </section>
<!-- -------------------------------------------------------------------------------------- -->
<section class="about__extra">
    <header class="extra__header">
        <h2 class="extra__title">Informacion  <span class="title__color">Extra</span></h2>
    </header>

    <div class="extra__container">

        <article class="extra__info">
            <i class="extra__icon fa-solid  fa fa-heart" ></i>
            <h4 class="extra__subtitle">Alumnos contentos</h4>
            <span class="extra__quantity">375,000</span>
        </article>

        <article class="extra__info">
            <i class="extra__icon fa-solid  fa fa-clock" ></i>
            <h4 class="extra__subtitle">Horas de contenido</h4>
            <span class="extra__quantity">800</span>
        </article>

        <article class="extra__info">
            <i class="extra__icon fa-solid  fa fa-star" ></i>
            <h4 class="extra__subtitle">Puntuacion</h4>
            <span class="extra__quantity">10</span>
        </article>

    </div>
</section>




        </section>
      </main>

   </div>


</body>
</html>