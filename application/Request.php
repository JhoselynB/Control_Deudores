<?php

class Request {

    private $_controlador;
    private $_metodos;
    private $_argumentos;

    public function __construct() {
        if (isset($_GET['url'])) {
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $url = array_filter($url);
            
            $this->_controlador = strtolower(array_shift($url));
            $this->_metodos = strtolower(array_shift($url));
            $this->_argumentos = $url;
        }

        if (!$this->_controlador) {
            $this->_controlador = DEFAULT_CONTROLLER;
        }

        if (!$this->_metodos) {
            $this->_metodos = 'index';
        }

        if (!isset($this->_argumentos)) {
            $this->_argumentos = array();
        }
    }

    public function getControlador() {
        return $this->_controlador;
    }
    
    public function getMetodo() {
        return $this->_metodos;
    }
    public function getArgumentos() {
        return $this->_argumentos;
    }

}
