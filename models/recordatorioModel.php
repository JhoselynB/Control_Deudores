<?php


class recordatorioModel extends Model {

    //creamos el metodo constructor que llame al metodo constructor padre
    public function __construct() {
        parent::__construct();
    }

    //metodo para obtener los datos
    public function getRecordatorio() {
        $recordatorio = $this->_db->query("SELECT deuda.Id_cliente as dni, nombre as nombre, apellidos as apellido, 
                                                  direccion as direccion, telefono as telefono, celular as celular, total as totalDeuda
                                           FROM pagos as pagos 
                                           INNER JOIN venta as venta ON venta.Id_deuda = pagos.Id_deuda
                                           INNER JOIN productoventa as prodventa ON venta.cod_busqueda = prodventa.cod_busqueda
                                           INNER JOIN deuda as deuda ON deuda.Id_deuda = venta.Id_deuda
                                           INNER JOIN cliente as cliente ON cliente.Id_cliente = deuda.Id_cliente where pagos.estado >= 0 and pagos.Fecha_Pago = CURDATE()
                                           ORDER BY deuda.Fecha_deuda"
                );
        return $recordatorio->fetchall();
    }
    
    public function getFechaPago(){
        $fechaPago = $this->_db->query("");
        return $fechaPago->fetchall();
    }
}
