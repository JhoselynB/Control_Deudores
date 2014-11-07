<?php

class Model{
    protected $_db;
    
    public function __construct(){
        //Tenemodisponible el objeto Database
        $this->_db = new Database();
    }
}