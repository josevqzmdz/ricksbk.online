<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   
   <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-6.1.2-web/css/all.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/fonts/poppins/poppins.css')}}">
   <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
   <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
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
                       <a href="{{ route('index') }}" class="menu__icon menu__link ">
                        <i class="fa-solid fa-house"></i>
                        <span class="menu__overlay">Home</span>
                       </a>
                    </li>

                    <li class="menu__option">
                        <a href="{{route('sobre-mi')}}" class="menu__icon menu__link ">
                         <i class="fa-solid fa-user"></i>
                         <span class="menu__overlay">Sobre mi</span>
                        </a>
                     </li>

                     <li class="menu__option">
                        <!-- TODO: agregar direcciones cuando hector los termine -->
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
        <section class="content__page">
            <h1 class="page__name">Ricardo Ayala</h1>
            <h2 class="page__job">Desarrollador Web</h2>
        </section>
      </main>

   </div>


</body>
</html>