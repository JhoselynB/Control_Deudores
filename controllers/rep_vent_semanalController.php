<?php

class rep_vent_semanalController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->_view->titulo = 'Reporte de ventas semanal';
        $this->_view->renderizar('index', 'mantenimiento');
    }
}