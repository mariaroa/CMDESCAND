<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>
<div class="card bg-dark text-white">
    <div class="row row-banner">
        <div class="col-md-6">
            <img class="card-img img-fluid img-tour-overlay" src="<?php echo constant('URL') ?>public/images/prueba.jpg" alt="Card image">
        </div>
        <div class="col-md-6 hide-on-mobile">
            <img class="card-img img-fluid img-tour-overlay" src="<?php echo constant('URL') ?>public/images/prueba.jpg" alt="Card image">
        </div>
    </div>
    <div class="tour-overlay">
        <div class="text-overlay">"Explora un mundo de posibilidades con nuestra realidad 360 y escáner de vanguardia."</div>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">ARQUITECTURA-INGENIERIA- BIM</strong>
                    <p class="card-text mb-auto">En construcción es una herramienta de uso en distintas fases de un proyecto.</p>
                    <a class="continua"class="continua" href="#"><br>Continua leyendo...</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: auto;" src="<?php echo constant('URL') ?>public/images/arquitectura.png" data-holder-rendered="true">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: auto;" src="<?php echo constant('URL') ?>public/images/inmobiliaria.png" data-holder-rendered="true">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">INMOBILIARIO Y COMERCIAL</strong>
                    <p class="card-text mb-auto">Las visitas virtuales ofrecen a los agentes inmobiliarios la oportunidad de resaltar las características únicas.</p>
                    <a class="continua"href="#">Continua leyendo...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">HOSTELERIA</strong>
                        <p class="card-text mb-auto">Las visitas virtuales 360 en hostelería ofrecen una serie de ventajas para los negocios del sector.</p>
                        <a class="continua"href="#">Continua leyendo...</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: auto;" src="<?php echo constant('URL') ?>public/images/hosteleria.png" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: auto;" src="<?php echo constant('URL') ?>public/images/seguros.png" data-holder-rendered="true">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">SEGUROS Y PATRIMONIO</strong>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a class="continua"href="#">Continua leyendo...</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
require 'views/footer/index.php';
?>