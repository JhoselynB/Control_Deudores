<?php

class indexModel extends ConsultasMySQL {

    private $_table = 'pagos';
    
    public function __construct() {
        parent::__construct();
    }

    //Obtencion de pagos pendientes
    public function getPagos() {
        $datos = $this->selectPagos($this->_table);
        return $datos;
    }

}
