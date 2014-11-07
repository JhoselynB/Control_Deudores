<?php

class Database extends PDO {

    private $instancia = null;
    public static $_servidor = null;
    private $driver = "mysql";
    private $DB_NAME = "tienda_ropa";
    private $DB_HOST = "localhost";
    private $DB_PORT = "3306";
    private $DB_USER = "root";
    private $DB_PASS = "";

    public function __construct() {
        if (!is_null($this->instancia)) {
            return self::$instancia;
        }
        $dsn = $this->driver . ':dbname=' . $this->DB_NAME . '; host=' . $this->DB_HOST . '; port=' . $this->DB_PORT;
        $password = trim($this->DB_PASS);
        try {
            $this->instancia = parent::__construct($dsn, $this->DB_USER, $password, array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));
            return $this->instancia;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function cerrar() {
        $this->instancia = null;
    }

}
