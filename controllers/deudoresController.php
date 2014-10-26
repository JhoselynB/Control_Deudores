<?php

class deudoresController extends Controller{
    public function __construct() {
        parent::__construct();
    }
// metodos para llamr el controlador index
    public function index()
    {
        $this->_view->titulo = 'Deudores';
        $this->_view->renderizar('index','deudores');
    }
}

