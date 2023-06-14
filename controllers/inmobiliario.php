<?php
class Inmobiliario extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('/servicios/inmobiliario/index');
    }
    function saludo(){
        echo "<p>Metodo saludo</p>";
    }
}
?>