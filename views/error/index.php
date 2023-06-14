<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>
<div class="container">
    <div class="row">
        <div class="d-flex align-items-center justify-content-center h-25 col-sm">
            <a href="https://www.flaticon.es/stickers-gratis/capataz" title="capataz stickers"></a>
            <img src="<?php echo constant('URL') ?>public/images/obrero.png" alt="">
        </div>
        <div class="col-sm">
            <div class="d-flex align-items-center justify-content-center h-75">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">404</h1>
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                    <p class="lead">
                        The page you’re looking for doesn’t exist.
                    </p>
                    <a href="index.html" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'views/footer/index.php';
?>