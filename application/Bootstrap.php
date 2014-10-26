<?php
// Procesa la llamda a los metodos y controladores
// Llama al controlador y al metodo que se envio o sino va al index

class Bootstrap {
    public static function run(Request $peticion)
    {
      $controller=$peticion->getControlador() . 'controller';
      $rutaController = ROOT.'controllers'.DS.$controller.'.php';
      $metodo = $peticion->getMetodos();
      $argumnetos= $peticion->getArgumentos();
      
      if (is_readable($rutaController)){
           require_once $rutaController;
           
          $controller = new $controller;
          
      if(is_callable(array($controller, $metodo))){
           
           $metodo = $peticion->getMetodos();
       }
 else {
       $metodo = 'index';    
       }
       if (isset($argumnetos)){
           call_user_func_array(array($controller,$metodo),$argumnetos); // En un arreglo le enviamos el nombre de la clase y parametros 
       }
 else {
          call_user_func_array(array($controller,$metodo));  
      }}
 else {
           throw  new Exception('No encontrado');
       }
      }
      }
