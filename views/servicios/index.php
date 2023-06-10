<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>

<div class="card bg-dark text-white">
    <div class="row row-banner">
        <div class="col-md-6">
            <img class="card-img img-fluid img-tour-overlay" src="<?php echo constant('URL') ?>public/images/prueba.jpg" alt="Card image">
        </div>
        <div class="col-md-6">
            <img class="card-img img-fluid img-tour-overlay" src="<?php echo constant('URL') ?>public/images/prueba.jpg" alt="Card image">
        </div>
    </div>
    <div class="tour-overlay">
        <div class="text-overlay">"Explora un mundo de posibilidades con nuestra realidad 360 y escáner de vanguardia."</div>
    </div>
</div>
<div class="container mt-3 container-servicios">
    <div class="row">
        <div class="col-lg-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 360px; height: 240px;" src="<?php echo constant('URL') ?>public/images/cocina.jpg" data-holder-rendered="true">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 360px; height: 240px;" src="<?php echo constant('URL') ?>public/images/panoramica.jpg" data-holder-rendered="true">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Featured post</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 360px; height: 240px;" src="<?php echo constant('URL') ?>public/images/cocina.jpg" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 360px; height: 240px;" src="<?php echo constant('URL') ?>public/images/panoramica.jpg" data-holder-rendered="true">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Featured post</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'views/footer/index.php';
?>