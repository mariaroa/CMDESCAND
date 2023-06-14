<?php
class Servicios extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('/servicios/index');
    }
    function saludo(){
        echo "<p>Metodo saludo</p>";
    }
}
?>