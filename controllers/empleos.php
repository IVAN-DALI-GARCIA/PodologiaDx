
<?php

class Empleos extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->render('empleos/index');
        // echo '<p>Nuevo controladr main</p>';
    }
}



?>