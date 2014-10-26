<?php

class indexController extends Controller{
    public function __construct() {
        parent::__construct();
    }
// metodo para llamr al controlador index
    public function index()
    {
        $this->_view->titulo = 'Portada';
        $this->_view->renderizar('index','inicio');
    }
}

