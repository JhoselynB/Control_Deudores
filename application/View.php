<?php

class View{
    private $_controlador;
    
    public function __construct(Request $peticion) {
        $this->_controlador = $peticion->getControlador();
    }
    
    public function renderizar($vista, $item = false){
        //Creamos un array para el menu del template default con un array asociativo
        $menu = array(
            //Inicio [0]
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL
            ),
            //Ventas [1]
            array(
                'id' => 'ventas',
                'titulo' => 'Ventas',
                'enlace' => BASE_URL.'ventas'
            ),
            //Deudores [2]
            array(
                'id' => 'deudores',
                'titulo' => 'Deudores',
                'enlace' => BASE_URL.'deudores'
            ),
            //Mantenimiento [3]
            array(
                'id' => 'mantenimiento',
                'titulo' => 'Mantenimiento',
                'enlace' => BASE_URL.'mantenimiento'
            ),
            //Acerca de [4]
            array(
                'id' => 'acerca',
                'titulo' => 'Acerca de',
                'enlace' => BASE_URL.'acerca'
            ),
            //Submenus Mantenimiento
            //Registro de productos [5]
            array(
                'id' => 'registro',
                'titulo' => 'Registro de Productos',
                'enlace' => BASE_URL.'registro_productos'
            ),
            //Reporte deudores [6]
            array(
                'id' => 'reportedeudores',
                'titulo' => 'Deudores',
                'enlace' => BASE_URL.'reporte_deudores'
            ),
            //Reporte ventas semanal [7]
            array(
                'id' => 'semanal',
                'titulo' => 'Semanal',
                'enlace' => BASE_URL.'rep_vent_semanal'
            ),
            //Reporte ventas mensual [8]
            array(
                'id' => 'mensual',
                'titulo' => 'Mensual',
                'enlace' => BASE_URL.'rep_vent_mensual'
            ),
            //Reporte ventas por fecha [9]
            array(
                'id' => 'fecha',
                'titulo' => 'Por Fecha',
                'enlace' => BASE_URL.'rep_vent_fecha'
            ),
        );
        
        //creamos un array para definir la ruta del archivo css, js, img
        //para las vistas en general
        $_layoutParams = array(
            //css - js - img para el template por default de la pagina
            'ruta_css' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/css/',
            'ruta_js' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/js/',
            'ruta_img' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/img/',
            
            //css - js - img para las vistas
            'ruta_css_vista' => BASE_URL.'views/'.$this->_controlador.'/css/',
            'ruta_js_vista' => BASE_URL.'views/'.$this->_controlador.'/js/',
            'ruta_img_vista' => BASE_URL.'views/'.$this->_controlador.'/img/',
            
            //rutas public
            'ruta_img_pub' => BASE_URL.'public/img/',
            'ruta_css_pub' => BASE_URL.'public/css/',
            'ruta_js_pub' => BASE_URL.'public/js/',
            
            //otras rutas
            'ruta_index' => ROOT.'views/'.$this->_controlador,
            'menu' => $menu
        );
        
        //ruta del archivo phtml de la vista que usaremos
        $rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';
        
        //verificamos que el archivo este disponible y accesible
        if(is_readable($rutaView)){
            //Incluimos el header y footer del template
            include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header.php';
            include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer.php';
        }else{
            //Si no encuentra la vista se emite un mensaje de error
            include  ROOT.'public/notView.php';
        }
    }
}