<?php

class mantenimientoModel extends ConsultasMySQL {

    private $_table = "productoventa";
    private $_tableClasi = "clasificacion_producto";
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getProductos($id) {
        $datos = $this->selectProductos($this->_table, $this->_tableClasi, $id);
        return $datos;
    }
    
    public function getCntReg($id){
        $datos = $this->selectCantproductos($this->_table, $id);
        return $datos;
    }
    
    public function getClasificacionProducto(){
        $datos = $this->selectClasifProducto($this->_tableClasi);
        return $datos;
    }
}