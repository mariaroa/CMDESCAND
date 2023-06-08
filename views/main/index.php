
<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>
    <div class="row row-cols-1">
      <div class="col">
          <img class="img-fluid mx-auto d-block" src="<?php echo constant('URL') ?>public/images/tablet_test.png" alt="">
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
                  <img src="../../public/images/arquitectura.png" alt="Arquitectura" width="80" height="auto" class="rounded-circle border border-white">
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
                  <img src="../../public/images/hosteleria.png" alt="Hosteleria" width="80" height="auto" class="rounded-circle border border-white">
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
                  <img src="../../public/images/comercio.png" alt="Comercio" width="80" height="auto" class="rounded-circle border border-white">
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
                  <img src="../../public/images/inmobiliaria.png" alt="Inmobiliaria" width="80" height="auto" class="rounded-circle border border-white">
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
                  <img src="../../public/images/seguros.png" alt="Seguros" width="80" height="auto" class="rounded-circle border border-white">
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
<?php
require 'views/footer/index.php';
?>
<script src="../../public/js/index.js"></script>