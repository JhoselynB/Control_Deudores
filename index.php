<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)). DS);/*Ruta raiz de nuestra aplicacion*/
define('APP_PATH',ROOT. 'application'. DS);
define('APP_DATA',ROOT. 'Base_Datos'. DS);

require_once APP_PATH. 'Bootstrap.php';
require_once APP_PATH. 'Config.php';
require_once APP_PATH. 'Controller.php';
require_once APP_PATH. 'Model.php';
require_once APP_PATH. 'Registro.php';
require_once APP_PATH. 'Request.php';
require_once APP_PATH. 'View.php';
require_once APP_DATA. 'Base_Datos.php';
require_once APP_DATA. 'Consultas_Mysql.php';

try {
   Bootstrap::run(new Request); 
} catch (Exception $e) {
  echo $e->getMessage(); 
}

