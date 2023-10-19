
<?php

class Blog extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->render('blog/index');
        // echo '<p>Nuevo controladr main</p>';
    }
}



?>