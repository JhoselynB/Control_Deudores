<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Controller {
    protected  $_view;
      abstract public function index();//De esta manera nos aseguramos de que siempre aya un meroso index en todos los contrladores
    public function __construct() {
        $this->_view = new View(new Request)  ;
    }

  
       
}