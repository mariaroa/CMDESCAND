<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <header style="margin: 0 2% 0 2%;" class="d-flex flex-wrap justify-content-center py-3 mb-4">
        <a href="./index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="/images/cmdescand_logo.png" class="img-fluid"  alt="logo">
        </a>   
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="/index.php" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Acerca de</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
          </ul>
    </header>
    <div class="row row-cols-1">
      <div class="col">
          <img class="img-fluid mx-auto d-block" src="/images/tablet_test.png" alt="">
          <div class="embed-responsive embed-responsive-16by9 position-absolute video_test">
            <iframe class="embed-responsive-item frame" src="https://floorfy.com/tour/1516986?sound=no&load=true"></iframe>
          </div> 
      </div>
    </div>
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Nuestros Servicios</h2>
  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark-subtle rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Arquitectura e Ingenieria</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/images/arquitectura.png" alt="Arquitectura" width="80" height="80" class="rounded-circle border border-white">
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark-subtle rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Hosteleria</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/images/hosteleria.png" alt="Hosteleria" width="80" height="80" class="rounded-circle border border-white">
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark-subtle rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Comercio</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/images/comercio.png" alt="Comercio" width="80" height="80" class="rounded-circle border border-white">
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark-subtle rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Inmobiliaria</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/images/inmobiliaria.png" alt="Inmobiliaria" width="80" height="80" class="rounded-circle border border-white">
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark-subtle rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Seguros y Patrimonio</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/images/seguros.png" alt="Seguros" width="80" height="80" class="rounded-circle border border-white">
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
=======
<?php
require_once 'libs/app.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/view.php';

require_once 'config/config.php';
$app = new App();
?>
>>>>>>> develop_v1
