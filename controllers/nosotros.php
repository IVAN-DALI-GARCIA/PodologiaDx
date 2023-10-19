
<?php

class Nosotros extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->render('nosotros/index');
        // echo '<p>Nuevo controladr main</p>';
    }
}



?>