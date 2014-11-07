<?php

class indexController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        //Creamos una variable para que nos devuelva un modelo instanciado
        //en este caso las consultas de postModel
        $recordatorio = $this->loalModel('index');
        
        //obtenemos los datos con el metodo getRecordatorio()
        $this->_view->record = $recordatorio->getPagos();
        
        //Enviamos algunos parametros al index como el titulo de la pagina
        //y el boton del menu a quedar marcado como activo
        $this->_view->titulo = 'Venta de Ropas - SonneJ';
        $this->_view->renderizar('index', 'inicio');
    }
}