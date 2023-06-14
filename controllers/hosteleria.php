<?php
class Hosteleria extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('/servicios/hosteleria/index');
    }
    function saludo(){
        echo "<p>Metodo saludo</p>";
    }
}
?>