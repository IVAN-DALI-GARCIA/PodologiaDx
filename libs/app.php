<?php 
require_once 'controllers/error2.php';


class App {
    function __construct() {
        // echo '<p>Nueva app</p>';
        $url = isset ($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            return false;
        }
      
        $archivoController = 'controllers/' . $url[0] . '.php';
                
        
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controler = new $url[0]; 
            if (isset($url[1])) {
                $controler->{$url[1]}();
            } 
        } else {
            $controler = new Error2();
        }


    }
}


?>