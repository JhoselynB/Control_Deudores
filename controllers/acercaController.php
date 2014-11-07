<?php

class acercaController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->_view->titulo = 'Acerca del Sistema';
        $this->_view->renderizar('index', 'acerca');
    }
}

