<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OBRAS CIVILES ERR S.A.S</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/main.css" />
  </head>
  <body>
    <!--|-->
    <!--Encabezado Pagina-->
    <header class="container-fluid bg-primary d-flex justify-content-center">
      <a  href="https://walink.co/cfe36b"><p class="text-light mb-0 p-2 fs-6">Contactanos +57 3193173722</p></a>
    </header>

    <!--Menu-->
    <nav class="navbar  navbar-expand-lg bg-light p-3" id="menu">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><span class="text-primary fs-5 fw-bold">Obras Civiles</span></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!--Inicio-->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"
                >Inicio</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#intro">Nosotros</a>
            </li>
            <!--Link-->
            <li class="nav-item">
              <a class="nav-link" href="#equipo">Equipo</a>
            </li>

            <!--Link-->
            <li class="nav-item">
              <a class="nav-link" href="#seccion-contacto">Contacto</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#local">Ubicación</a>
            </li>

            <!--Lista desplegable(ayudará para enlazar con el inicio de sesion)
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Usuarios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="login.php">Ingresar</a></li>
              </ul>
            </li> -->
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="email"
              placeholder="Correo Electronico"
              aria-label="email"
            />
            <button class="btn btn-primary btn-primary-success" type="button">
              Deja tu correo
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!--SLIDER IMAGENES-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <!--intervalo databsinterval 3000 pendiente: organizar imagen pantalla completa-->
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="../public/img/IMG2.jpg" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="../public/img/IMG1.jpg" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="../public/img/IMG3.jpg" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="../public/img/IMG4.jpg" class="d-block w-100" alt="slide">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="../public/img/IMG5.jpg" class="d-block w-100" alt="slide">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

    </div>

    <!--Introduccion w=width% mx: horizontal, fs fontsize--->

    <section class="w-50 mx-auto text-center pt-5" id="intro">
      <h1 class="p-3 fs-2 border-top border-3">Una empresa unica para todas tus necesidades<span class="text-primary"> OBRAS CIVILES ERR S.A.S</span></h1>
      <p class="p-3 fs-4">Somos una empresa de servicios de gerencia e interventoría en proyectos de construcción, creada en 2012 para brindar a sus clientes calidad, eficiencia, precio y oportunidad, con un acompañamiento integral en el que se pone a disposición el conocimiento y experiencia de sus profesionales.</p>
    </section>

    <!--Servicios
    pendiente: cambiar a los servicios de la empresa-->
    <section class="container-fluid">
      <div class="row w-75 mx-auto  servicio-fila">

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex  my-5 icono-wrap">
          <img src="../public/img/ciudad.png." alt="ciudad" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1 fw-b">Urbanos</h3>
            <p class="px-4 ">
              <ul class="text-center ">
              <li>Urbanismos</li>
              <li>Mantenimiento</li>
              <li>Remodelaciones</li>
              <li>Edificios</li>
              
            </ul></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
          <img src="../public/img/rural.png" alt="rural" width="180" height="160">
          <div>
          <h3 class="fs-5 mt-4 px-4 pb-1 fw-bd">Rurales</h3>
            <p class="px-4 ">
              <ul class="text-center ">
              <li>Vivienda</li>
              <li>Acueductos</li>
              <li>Escenarios Deportivos</li>
              <li>Vías y puentes</li>
            </ul></p>
          </div>
        </div>

      </div>
      <div class="row w-75 mx-auto  servicio-fila">

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
          <img src="../public/img/industria.png" alt="industria&comercio" width="180" height="160">
          <div>
          <h3 class="fs-5 mt-4 px-4 pb-1">Industria  & Comercio</h3>
            <p class="px-4 ">
              <ul class="text-center ">
              <li>Bodegas</li>
              <li>Fachadas y cubiertas</li>
              <li>Mantenimiento</li>
              <li>Redes</li>
              
            </ul></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
          <img src="../public/img/estudio.png" alt="estudio&diseño" width="180" height="160">
          <div>
          <h3 class="fs-5 mt-4 px-4 pb-1">Estudios & Diseño</h3>
            <p class="px-4 ">
              <ul class="text-center ">
              <li>Consultorias</li>
              <li>Estudio de suelos</li>
              <li>Topográficos</li>
              <li>Diseño Estructurales</li>
              
            </ul></p>
          </div>
        </div>

      </div>
    </section>

    <!--ACERCA DE NOSOTROS-->
    <section>
      <div class="container w-50 m-auto text-center" id="equipo">
          <h1 class="mb-5 fs-2">Equipo pequeño con <span class="text-primary">resultados Grandes</span>.</h1>
          <p class="fs-4 ">Siempre buscamos las personas adecuadas para que trabajen con nosotros. Si te sientes listo para este reto, te esperamos!</p>
      </div>
  
      <div class="mt-5 text-center">
          <img id="img-equipo" src="../public/img/equipo1.jpg" alt="equipo">
      </div>
  
      <div id="local" class="border-top border-2">
          <div class="mapa"></div>
          <div>
              <div class="wrapper-local">
                  <h2>Ubicados en Medellín, Colombia</h2>
                  <h2 class="text-primary mb-4" id="typewriter"></h2>
                  <p class="fs-5 text-body">Elijimos Medellín para nuestra oficina con el objetivo de estar cerca a nuestros clientes. Estamos ubicados en la CLL48D#93-47. Conocenos!</p>
                  <section class="d-flex justify-content-start" id="numeros-local">
                      <div>
                          <p class="text-primary fs-5">200</p>
                          <p>Dias de Sol</p>
                      </div>
                      <div>
                          <p class="text-primary fs-5">100%</p>
                          <p>Aprobado</p>
                      </div>
                      <div>
                          <p class="text-primary fs-5">24 °C</p>
                          <p>Temperatura</p>
                      </div>
                </section>
              </div>
          </div>
      </div>
  
  </section>
    <!---->
    <!--Seccion Contactos-->

<section id="seccion-contacto" class="border-bottom border-secondary border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>

<!--Contenedor Formulario-->

  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="../public/img/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contactanos</h2>
        <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p>
      </div>

     

      <form   method="POST" data-netlify="true" action="../controlador/contactanos.php">     
            <div class= "mb-3">           
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>
 
          
            <div class="mb-3">            
              <input type="input" class="form-control" id="name" name="name" placeholder="Carlos Maya">
            </div>
      

            <div class="mb-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

          <div class="mb-3">       
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
          </div>
      </form>
  
  </div>
</section>

<!--FOOTER-->
<footer class="w-100 d-flex align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3 pt-3">Obras Civiles &copy; Todos los Derechos Reservados 2022</p>
  <div id="iconos">
    <a href="#"><i class="bi bi-linkedin"></i></a>
    <a href="https://walink.co/cfe36b"><i class="bi bi-whatsapp"></i></a> 
  </div>
</footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="../public/js/main.js"></script>
  </body>
</html>
