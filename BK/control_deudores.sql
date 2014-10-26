-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2014 a las 15:00:52
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda_ropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion_producto`
--

CREATE TABLE IF NOT EXISTS `clasificacion_producto` (
  `Id_clasificacion` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clasificacion_producto`
--

INSERT INTO `clasificacion_producto` (`Id_clasificacion`, `clasificacion`) VALUES
('CLA-BEBES', 'Bebes'),
('CLA-FEMEN', 'Femenino'),
('CLA-MASCU', 'Masculino'),
('CLA-NIFEM', 'NiÃ±as'),
('CLA-NIMAS', ' NiÃ±os');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Id_cliente` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_cliente`, `nombre`, `apellidos`, `direccion`, `celular`, `telefono`) VALUES
('70818616', 'Christian Jordan', 'Zegarra Alvarado', 'Jr. Felipe Yap #294', '#952820247', '042-505424'),
('71879961', 'Jhoselyn Brigith', 'Guevera Rojas', 'Jr. Sucre #87', '#969823433', '042-521940');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `Id_color` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Color` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`Id_color`, `Color`) VALUES
('C01-VERDE', 'Verde'),
('C02-AZMAR', 'AzÃºl marino'),
('C03-AZUL', 'AzÃºl'),
('C03-ROJO', 'Rojo'),
('C04-CREMA', 'Crema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deuda`
--

CREATE TABLE IF NOT EXISTS `deuda` (
  `Id_deuda` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_tipoPago` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_deuda` date NOT NULL,
  `Id_cliente` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deuda`
--

INSERT INTO `deuda` (`Id_deuda`, `Id_tipoPago`, `Fecha_deuda`, `Id_cliente`) VALUES
('DEUD00001', 'PAGO_0001', '2014-10-12', '70818616'),
('DEUD00002', 'PAGO_0001', '2014-10-07', '71879961');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `Id_Marca` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Marca` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`Id_Marca`, `Marca`) VALUES
('M01LACOST', 'Lacoste');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `Id_Pago` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Pago` date NOT NULL,
  `Id_deuda` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`Id_Pago`, `Fecha_Pago`, `Id_deuda`) VALUES
('PAGO00001', '2014-10-19', 'DEUD00001'),
('PAGO00002', '2014-10-26', 'DEUD00001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `Id_Producto` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `material` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Marca` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_tipo` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_Producto`, `producto`, `material`, `Id_Marca`, `Id_tipo`) VALUES
('PROD00001', 'Polo manga cero', 'AlgodÃ³n', 'M01LACOST', 'T009POLOM'),
('PROD00002', 'PantalÃ³n de vestir', 'Tela', 'M01LACOST', 'T008PANTM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoventa`
--

CREATE TABLE IF NOT EXISTS `productoventa` (
  `cod_busqueda` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Producto` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_color` varchar(9) COLLATE utf8_spanish_ci DEFAULT '',
  `Id_talla` varchar(9) COLLATE utf8_spanish_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productoventa`
--

INSERT INTO `productoventa` (`cod_busqueda`, `Id_Producto`, `Id_color`, `Id_talla`) VALUES
('A78D9F6C5', 'PROD00001', 'C03-ROJO', 'TALLA-00S'),
('FF84A5D5D', 'PROD00002', 'C02-AZMAR', 'TALLA-00M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recordatorio`
--

CREATE TABLE IF NOT EXISTS `recordatorio` (
  `Id_Recordatorio` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_pago` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE IF NOT EXISTS `talla` (
  `Id_talla` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Talla` varchar(4) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`Id_talla`, `Talla`) VALUES
('TALLA-3XL', '3XL'),
('TALLA-00L', 'L'),
('TALLA-00M', 'M'),
('TALLA-00S', 'S'),
('TALLA-0XS', 'XS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE IF NOT EXISTS `tipo_pago` (
  `Id_tipoPago` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pago` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`Id_tipoPago`, `tipo_pago`) VALUES
('PAGO_0001', 'Diario'),
('PAGO_0002', 'Semanal'),
('PAGO_0003', 'No definido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE IF NOT EXISTS `tipo_producto` (
  `Id_tipo` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_clasificacion` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`Id_tipo`, `Id_clasificacion`, `Tipo`) VALUES
('T001BLUSA', 'CLA-FEMEN', 'Blusa'),
('T002CAMIS', 'CLA-FEMEN', 'Camisa'),
('T003PANTF', 'CLA-FEMEN', 'PantalÃ³n'),
('T004SHORT', 'CLA-FEMEN', 'Shorts'),
('T005INTER', 'CLA-FEMEN', 'Ropa Interior'),
('T006FALDA', 'CLA-FEMEN', 'Faldas'),
('T007POLOF', 'CLA-FEMEN', 'Polo'),
('T008PANTM', 'CLA-MASCU', 'PantalÃ³n'),
('T009POLOM', 'CLA-MASCU', 'Polo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `cod_busqueda` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Deuda` varchar(9) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `Catidad_Productos` int(10) NOT NULL,
  `costo` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`cod_busqueda`, `Id_Deuda`, `Catidad_Productos`, `costo`, `total`) VALUES
('A78D9F6C5', 'DEUD00001', 2, 25, 50),
('FF84A5D5D', 'DEUD00002', 1, 75, 75);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacion_producto`
--
ALTER TABLE `clasificacion_producto`
 ADD PRIMARY KEY (`Id_clasificacion`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
 ADD PRIMARY KEY (`Id_color`);

--
-- Indices de la tabla `deuda`
--
ALTER TABLE `deuda`
 ADD PRIMARY KEY (`Id_deuda`), ADD KEY `Id_cliente` (`Id_cliente`), ADD KEY `Id_tipoPago` (`Id_tipoPago`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
 ADD PRIMARY KEY (`Id_Marca`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
 ADD PRIMARY KEY (`Id_Pago`), ADD KEY `Id_deuda` (`Id_deuda`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`Id_Producto`), ADD KEY `producto_ibfk_1` (`Id_Marca`), ADD KEY `Id_tipo` (`Id_tipo`), ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `productoventa`
--
ALTER TABLE `productoventa`
 ADD PRIMARY KEY (`cod_busqueda`), ADD KEY `Id_Producto` (`Id_Producto`), ADD KEY `Id_color` (`Id_color`), ADD KEY `Id_talla` (`Id_talla`);

--
-- Indices de la tabla `recordatorio`
--
ALTER TABLE `recordatorio`
 ADD PRIMARY KEY (`Id_Recordatorio`), ADD KEY `recordatorio_ibfk_1` (`Id_pago`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
 ADD PRIMARY KEY (`Id_talla`), ADD KEY `Talla` (`Talla`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
 ADD PRIMARY KEY (`Id_tipoPago`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
 ADD PRIMARY KEY (`Id_tipo`), ADD KEY `Id_clasificacion` (`Id_clasificacion`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
 ADD PRIMARY KEY (`cod_busqueda`,`Id_Deuda`), ADD KEY `Id_Deuda` (`Id_Deuda`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deuda`
--
ALTER TABLE `deuda`
ADD CONSTRAINT `deuda_ibfk_1` FOREIGN KEY (`Id_cliente`) REFERENCES `cliente` (`Id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `deuda_ibfk_2` FOREIGN KEY (`Id_tipoPago`) REFERENCES `tipo_pago` (`Id_tipoPago`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`Id_deuda`) REFERENCES `venta` (`Id_Deuda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_Marca`) REFERENCES `marca` (`Id_Marca`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`Id_tipo`) REFERENCES `tipo_producto` (`Id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productoventa`
--
ALTER TABLE `productoventa`
ADD CONSTRAINT `productoventa_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`),
ADD CONSTRAINT `productoventa_ibfk_2` FOREIGN KEY (`Id_color`) REFERENCES `color` (`Id_color`),
ADD CONSTRAINT `productoventa_ibfk_3` FOREIGN KEY (`Id_talla`) REFERENCES `talla` (`Id_talla`);

--
-- Filtros para la tabla `recordatorio`
--
ALTER TABLE `recordatorio`
ADD CONSTRAINT `recordatorio_ibfk_1` FOREIGN KEY (`Id_pago`) REFERENCES `pagos` (`Id_Pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
ADD CONSTRAINT `tipo_producto_ibfk_1` FOREIGN KEY (`Id_clasificacion`) REFERENCES `clasificacion_producto` (`Id_clasificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`Id_Deuda`) REFERENCES `deuda` (`Id_deuda`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`cod_busqueda`) REFERENCES `productoventa` (`cod_busqueda`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
