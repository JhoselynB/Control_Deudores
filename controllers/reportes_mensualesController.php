<?php

class reportes_mensualesController extends Controller{
    public function __construct() {
        parent::__construct();// Para llamar al costructor padre
    }

    public function index()
    {
        $this->_view->titulo = 'Mantenimiento';
        $this->_view->renderizar('index', 'mantenimiento');
    }
    
}

