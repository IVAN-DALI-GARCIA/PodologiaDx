
<?php

class Preguntas extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->render('preguntas/index');
        // echo '<p>Nuevo controladr main</p>';
    }
}



?>