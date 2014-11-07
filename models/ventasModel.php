<?php
class ventasModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    public function getVentas(){
        $venta=  $this->_db->query("SELECT
pagos.Fecha_Pago,
deuda.cuotas,
deuda.Fecha_deuda,
CONCAT(cliente.nombre,' ',cliente.apellidos) AS Cliente,
cliente.direccion,
CONCAT(cliente.celular,'/',cliente.telefono) AS 'Tel/Cel',
tipo_pago.tipo_pago,
venta.cod_busqueda,
venta.Catidad_Productos,
venta.costo,
venta.total,
color.Color,
talla.Talla,
producto.material,
producto.producto,
marca.Marca,
tipo_producto.Tipo,
clasificacion_producto.clasificacion
FROM
pagos
INNER JOIN deuda ON pagos.Id_deuda = deuda.Id_deuda
INNER JOIN cliente ON deuda.Id_cliente = cliente.Id_cliente
INNER JOIN tipo_pago ON deuda.Id_tipoPago = tipo_pago.Id_tipoPago
INNER JOIN venta ON deuda.Id_deuda = venta.Id_Deuda
INNER JOIN productoventa ON productoventa.cod_busqueda = venta.cod_busqueda
INNER JOIN color ON color.Id_color = productoventa.Id_color
INNER JOIN talla ON productoventa.Id_talla = talla.Id_talla
INNER JOIN producto ON productoventa.Id_Producto = producto.Id_Producto
INNER JOIN marca ON producto.Id_Marca = marca.Id_Marca
INNER JOIN tipo_producto ON producto.Id_tipo = tipo_producto.Id_tipo
INNER JOIN clasificacion_producto ON tipo_producto.Id_clasificacion = clasificacion_producto.Id_clasificacion
") ;
        return $venta->fetchall();  
    }
    public function insertarProducto ($codigobusqueda){
        
    }
}

