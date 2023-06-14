<?php
class ErrorPlatform extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('/error/index');
    }
    function saludo(){
        echo "<p>Metodo saludo</p>";
    }
}
?>