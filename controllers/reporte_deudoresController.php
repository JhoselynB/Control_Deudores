<?php

class reporte_deudoresController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->_view->titulo = 'Reporte deudores actualizada';
        $this->_view->renderizar('index', 'mantenimiento');
    }
}
