<?php

class Bootstrap{
    public static function run(Request $peticion){
        $controller = $peticion->getControlador().'Controller';
        $rutaController = ROOT.'controllers'.DS.$controller.'.php';
        $metodo = $peticion->getMetodo();
        $argumentos = $peticion->getArgumentos();
        
        if(is_readable($rutaController)){
            require_once $rutaController;
            
            $controller = new $controller;
            
            if(is_callable(array($controller, $metodo))){
                $metodo = $peticion->getMetodo();
            }else{
                $metodo = 'index';
            }
            
            //argumentos para llamar al indexController.php
            if(isset($argumentos)){
                call_user_func_array(array($controller, $metodo), $peticion->getArgumentos());
            }else{
                call_user_func(array($controller, $metodo));
            }
        }else{
            include ROOT.'public/notDirectory.php';
        }
    }
}