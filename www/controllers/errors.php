<?php

class Errors extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->message = "Hay un error al cargar el recurso";
        $this->view->render('errors/index');
    }
}
