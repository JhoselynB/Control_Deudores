<?php

class ventasController extends Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->titulo = 'Ventas';
        $this->_view->renderizar('index','ventas');
    }
}

