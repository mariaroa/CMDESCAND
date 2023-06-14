<?php
class App{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url']:NULL;
        $url = rtrim($url,'/');
        $url = explode('/', $url);
        if (empty($url[0])) {
            $controlador = 'controllers/main.php';
            require_once $controlador;
            $controlador = new main();
            $controlador->loadModel('main');
            return false;
        }
        $controlador = 'controllers/'.$url[0].'.php';
        if (file_exists($controlador)) {
            require_once $controlador;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
    }
        else{
            require_once 'controllers/ErrorPlatform.php';
            $controlador = new ErrorPlatform();
	}        
    }
}
?>