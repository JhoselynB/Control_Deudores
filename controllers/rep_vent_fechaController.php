<?php

class rep_vent_fechaController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->_view->titulo = 'Reporte de ventas por fecha';
        $this->_view->renderizar('index', 'mantenimiento');
    }
}