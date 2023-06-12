<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <h1 class="servicios-title text-center">Arquitectura-Ingenieria-BIM</h1>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo constant('URL') ?>public/images/panoramica.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo constant('URL') ?>public/images/panoramica.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo constant('URL') ?>public/images/panoramica.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container container-servicios">
    <div class="row description-arquitectura">
        <div class="col-lg-6 ">
            <p>En construcción es una herramienta de uso en distintas fases de un proyecto.</p>
            <br>
            <ul>
                <li>En la planificación de la construcción</li>
                <li>Gestión de la construcción</li>
                <li>La seguridad de la construcción</li>
                <li>La inspección de la construcción</li>
            </ul>
        </div>
        <div class="col-lg-6 beneficios">
            <h2>Beneficios</h2>
            <ul>
                <li>Seguridad (Dimensional).</li>
                <li>Confianza en la información exacta como construida.</li>
                <li>Ahorro de costes del proyecto.</li>
                <li>Riesgo del proyecto reducido.</li>
                <li>Disminución en errores de prefabricación.</li>
                <li>Estudios virtuales de constructibilidad.</li>
                <li>Tours virtuales de seguridad</li>
            </ul>
        </div>
        <div class="col-lg-12">
            <p>En donde se destacan:</p>
            <ul>
                <li><strong>Reducción de costos:</strong> La simulación de diferentes escenarios y soluciones en el Gemelo Digital puede ayudar a identificar y corregir problemas potenciales antes de que ocurran en el sitio de construcción, lo que reduce los costos y evita retrasos.</li>
                <li><strong>Optimización de recursos:</strong> El uso de un Gemelo Digital puede ayudar a los contratistas a optimizar el uso de recursos y materiales, lo que reduce el desperdicio y mejora la sostenibilidad del proyecto.</li>
            </ul>
        </div>
</div>


<?php
require 'views/footer/index.php';
?>