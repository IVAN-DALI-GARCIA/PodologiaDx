<?php

class Sucursales extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->render('sucursales/index');
        // echo '<p>Nuevo controladr main</p>';
    }
}
