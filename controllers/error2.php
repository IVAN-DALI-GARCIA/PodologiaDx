<?php 

class Error2 extends Controller {
    
    function __construct() {
        parent::__construct();
        $this->view->mensaje = 'Error al cargar recurso o no existe el recurso';
        $this->view->render('error/index');
        // echo '<p>Error al cargar recurso</p>';
    }
}



?>