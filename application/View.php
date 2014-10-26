<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View{
    private $_controlador;
    public function __construct(Request $peticion) {
        $this->_controlador = $peticion->getControlador();
    }
    public function renderizar($vista, $item = false)
            
                {
       $menu = array(
            //Menu Inicio
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL
            ),
            
            //Menu Ventas
            array(
                'id' => 'ventas',
                'titulo' => 'Ventas',
                'enlace' => BASE_URL.'ventas'
            ),
            //Menu Deudores
            array(
                'id' => 'deudores',
                'titulo' => 'Deudores',
                'enlace' => BASE_URL.'deudores'
            ),
           //Menu Matenimiento
            array(
                'id' => 'mantenimiento',
                'titulo' => 'Mantenimiento',
                'enlace' => BASE_URL.'mantenimiento'
            ),
            // Menu Acerca de 
            array(
                'id' => 'acerca',
                'titulo' => 'Acerca de',
                'enlace' => BASE_URL.'acerca'
            ),
           //Menu Registro Mantenimiento
            array(
                'id' => 'registro_producto',
                'titulo' => 'Registro',
                'enlace' => BASE_URL.'registro_producto'
            ),
           //Reportes diarios
            array(
                'id' => 'reportes_semanales',
                'titulo' => 'Reportes Semanales',
                'enlace' => BASE_URL.'reportes_semanales'
            ),
           array(
                'id' => 'reportes_mensuales',
                'titulo' => 'Reportes Mensuales',
                'enlace' => BASE_URL.'reportes_mensuales'
            ),
              array(
                'id' => 'reportes_por_fecha',
                'titulo' => 'Reportes por Fecha',
                'enlace' => BASE_URL.'reportes_por_fecha'
            ),
               array(
                'id' => 'reportes_deudores',
                'titulo' => 'Reportes Deudores',
                'enlace' => BASE_URL.'reportes_deudores'
            ),
        );
        
        $_layoutParams= array(
           
            'ruta_css' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/css/',
            'ruta_img' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/img/',
            'ruta_js' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/js/',
             'menu' => $menu 
        );
        
        $rutaView =ROOT . 'views'. DS . $this->_controlador . DS . $vista . '.phtml'  ;
     
        if(is_readable($rutaView)){
          include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header.php';
          include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS .'footer.php' ; 
          include_once $rutaView;
          
      }
      else{
          throw new Exception('Error de vista');   
      }
      
          }
}