<?php

class acercaController extends Controller{
    public function __construct() {
        parent::__construct();
    }
//metodo para llamr el controlador index
    public function index()
    {
        $this->_view->titulo = 'Acerca de';
        $this->_view->renderizar('index','acerca');
    }
}

