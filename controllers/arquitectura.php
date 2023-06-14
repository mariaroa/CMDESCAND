<?php
class Arquitectura extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('/servicios/arquitectura/index');
    }
    function saludo(){
        echo "<p>Metodo saludo</p>";
    }
}
?>