<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <h1 class="servicios-title text-center">Inmobiliario y Comercial</h1>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo constant('URL') ?>public/images/tour-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo constant('URL') ?>public/images/tour-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo constant('URL') ?>public/images/tour-2.jpg" class="d-block w-100" alt="...">
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
    <div class="row description-inmobiliario">
        <div class="col-lg-6">
            <p>Promocionamos tus espacios, instalaciones o cualquier proyecto mediante el desarrollo de experiencias audiovisuales inmersivas con el diseño y producción de Tours de Realidad Virtual en plataformas multimediales, con la vinculación de fotografías, videos, renders y montajes en 360 grados.</p>
            <img class="rounded mx-auto d-block" src="<?php echo constant('URL') ?>public/images/casa_test.png" alt="">
        </div>
        <div class="col-lg-6">
            <p>Es la integración de dos o más imágenes de 360 grados en una interfaz de multimedia, un tour virtual 360 duplica el tráfico de usuarios y reduce los tiempos de  venta o alquiler de un inmueble. 
            <br>Las visitas virtuales ofrecen a los agentes inmobiliarios la oportunidad de resaltar las características únicas de las propiedades ofertadas. Además, dar a los compradores una mirada detallada del interior, el exterior y sus condiciones </p>
            <h2>Tour Virtual 360</h2>
            <ul>
                <li>Ahorro de tiempo y dinero</li>
                <li>Mayor alcance y visibilidad +40% de clientes Potenciales</li>
                <li>Mejora de la experiencia del cliente</li>
                <li>Diferenciación y competitividad</li>
                <li>Facilidad de creación y personalización</li>
            </ul>
        </div>
        <div class="col-lg-12">
            <p>En general, las visitas virtuales 360 son una herramienta muy valiosa para las inmobiliarias que buscan ofrecer una experiencia más completa y satisfactoria a sus clientes.</p>
            <h2>Beneficios de crear tours virtuales</h2>
            <p>Los "recorridos" virtuales simulan vistas físicas, lo que le permite interactuar, ver y recorrer cada centímetro de una propiedad. Esto reduce drásticamente el tiempo para encontrar, vender o alquilar una propiedad. Nuestros recorridos son una experiencia inmersiva, que puede llevarse a cabo en la comodidad de su hogar. Esto viene con muchas ventajas y beneficios:</p>
            <img class="rounded mx-auto d-block" src="<?php echo constant('URL') ?>public/images/captura_inmobiliaria.png" alt="">
        </div>
        <div class="col-lg-6">
            <ul>
                <li>Cuando los potenciales inquilinos o compradores visitan la propiedad virtualmente y conocen la distribución, proporciones, tamaños, detalles, luz, etc... de una propiedad, hace que las visitas físicas posteriores sean mucho más efectivas.</li>
                <li>Reduce en un 70% las visitas físicas innecesarias.</li>
                <li>Puedes alquilar y vender propiedades en la mitad de tiempo (con menos visitas físicas). Ahorra tiempo, ahorra dinero. <br>Por ejemplo: Si en promedio necesitas 10 visitas físicas para vender o alquilar una casa, solo necesitarás 5 si usas primero las visitas virtuales.</li>
                <li>Puede encontrar mejor a su ¨mejor cliente¨ filtrando prospectos escépticos o desinteresados. En última instancia, esto le dará tiempo para capturar y  comercializar una cartera de bienes raíces más grande.</li>
                <li> La forma en que comercializa su propiedad es crucial en el proceso de venta-alquiler.</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <p>La tecnología de realidad virtual aumenta el posicionamiento orgánico de tu agencia en los portales inmobiliarios, potenciando la exposición y las ventas.</p>
            <ul>
                <li>Para el sector inmobiliario, un gemelo digital en forma de recorrido virtual en 3D ayuda a los agentes a ganar más vendiendo propiedades más rápido y a un  precio más alto</li>
                <li> Para viajes y hospitalidad , los recorridos en 3D aumentan las reservas, impulsan tasas de ocupación más altas y aumentan las tasas de participación.</li>
                <li> Para seguros y restauración , los gemelos digitales son la solución de documentación de pérdidas más rápida y completa que ayuda a cerrar reclamos más rápido, permite la visualización y el ajuste remotos y reduce las disputas en reclamos de propiedad.</li>
                <li>Para la gestión de instalaciones , los gemelos digitales son una forma eficaz y eficiente de inspeccionar edificios existentes, gestionar el mantenimiento y desarrollar planes de remodelación.</li>
            </ul>
        </div>
</div>

<?php
require 'views/footer/index.php';
?>