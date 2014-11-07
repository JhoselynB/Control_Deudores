<?php

class ConsultasMySQL extends Model {

    //INDEX - deudas pendientes a pagar
    protected function selectPagos($tabla) {
        $getproducto = $this->_db->query("SELECT deuda.Id_cliente as dni, nombre as nombre, apellidos as apellido, 
                               direccion as direccion, telefono as telefono, celular as celular, deuda.total as deuda
                               FROM $tabla as pagos 
                               INNER JOIN venta as venta ON venta.Id_deuda = pagos.Id_deuda
                               INNER JOIN productoventa as prodventa ON venta.cod_busqueda = prodventa.cod_busqueda
                               INNER JOIN deuda as deuda ON deuda.Id_deuda = venta.Id_deuda
                               INNER JOIN cliente as cliente ON cliente.Id_cliente = deuda.Id_cliente where pagos.estado = 0 and pagos.Fecha_Pago = CURDATE()
                               GROUP BY cliente.Id_cliente
                               ORDER BY deuda.Fecha_deuda");
        $this->_db->cerrar();
        return $getproducto->fetchall();
    }

    //Registro de productos - MANTENIMIENTO
    //Consultas MYSQL
    public function selectProductos($tabla, $tablaInner, $id) {
        $SQL = "SELECT * FROM $tabla as pv 
                INNER JOIN $tablaInner as cp ON cp.Id_clasificacion = pv.Id_clasificacion";
        $SQLCOUNT = "SELECT count(*) as cantidad FROM $tabla as pvv 
                INNER JOIN $tablaInner as cpp ON cpp.Id_clasificacion = pvv.Id_clasificacion";
        $where = "WHERE cod_busqueda like'%$id[0]%'
                        or producto like'%$id[0]%' 
                        or material like'%$id[0]%'
                        or talla like'%$id[0]%'
                        or color like'%$id[0]%'
                        or clasificacion like'%$id[0]%'";
        
        $SQL_ordenar = "ORDER BY clasificacion";

        if (!($id == NULL)) {
            $SQL = $SQL.' INNER JOIN ('.$SQLCOUNT.' '.$where.')as t '.$where;
        } else {
            $SQL = $SQL.' INNER JOIN ('.$SQLCOUNT.')as t '.$SQL_ordenar;
        }
        $stmt = $this->_db->prepare($SQL);
        $stmt->execute($id);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function selectClasifProducto($tabla) {
        $getclasificacion = $this->_db->query("SELECT * FROM $tabla");
        $this->_db->cerrar();
        return $getclasificacion->fetchall();
    }

    public function insertProducto($datos, $table) {
        $insert = $this->_db->prepare("INSERT INTO `$table` VALUES (?, ?, ?, ?, ?, ?)");
        $insert->execute($datos);

        if ($insert) {
            echo '<div class="regcorrecto">Producto: ' . $datos[1] . ' {' . $datos[0] . '} agregado correctamente</div>';
        } else {
            echo '<div class="regerror">Error al registrar producto: ' . $datos[1] . ' {' . $datos[0] . '}</div>';
        }
    }

    public function deleteProducto($id, $tabla) {
        $delete = $this->_db->prepare("DELETE FROM $tabla WHERE cod_busqueda = '$id[0]'");
        $delete->execute($id);

        if ($delete) {
            echo '<div class="regcorrecto">Producto eliminado!</div>';
        } else {
            echo '<div class="regerror">Error al eliminar producto</div>';
        }
    }

}
