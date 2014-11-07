<?php

class deudoresController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        //agregamos un titulo a la pagina
        $this->_view->titulo = 'Lista de deudores';
        //index = nombre del archivo index.phtml
        $this->_view->renderizar('index', 'deudores');
    }
}