<?php

class registro_productosController extends Controller {

    private $_registro;
    private $tabla = 'productoventa';
    
    public function __construct() {
        parent::__construct();
        $this->_registro = $this->loalModel('mantenimiento');
    }

    public function index() {
        $datos;
        if ($this->datos = $_POST) {
            $datos = array($this->getTexto('buscar'));
        } else {
            $datos = NULL;
        }
        
        $this->_view->producto = $this->_registro->getProductos($datos);
        $this->_view->clasificacion = $this->_registro->getClasificacionProducto();
        $this->_view->titulo = 'Registro del Productos';
        $this->_view->renderizar('index', 'mantenimiento');

        if ($this->getInt('guardar') == 1) {
            $this->_view->datos = $_POST;
            $datos = array(
                trim($this->getTexto('codigo')),
                trim($this->getTexto('producto')),
                trim($this->getTexto('material')),
                trim($this->getTexto('talla')),
                trim($this->getTexto('color')),
                trim($this->getTexto('id_clasificacion'))
            );
            $this->_registro->insertProducto($datos, $this->tabla);
        }
    }
    
    public function eliminar($id){
        $cod_busqueda = array($id);
        $this->_registro->deleteProducto($cod_busqueda, $this->tabla);
        $this->redireccionar('registro_productos');
    }

}
