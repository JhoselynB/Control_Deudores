-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2014 a las 17:37:41
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
('CLA-BEBES', 'BEBÉS'),
('CLA-FEMEN', 'FEMENINO'),
('CLA-MASCU', 'MASCULINO'),
('CLA-NIFEM', 'NIÑAS'),
('CLA-NIMAS', ' NIÑOS'),
('CLA-UNISE', 'UNISEX');

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
-- Estructura de tabla para la tabla `deuda`
--

CREATE TABLE IF NOT EXISTS `deuda` (
  `Id_deuda` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_tipoPago` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_deuda` date NOT NULL,
  `Id_cliente` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `cuotas` int(11) NOT NULL,
  `total` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deuda`
--

INSERT INTO `deuda` (`Id_deuda`, `Id_tipoPago`, `Fecha_deuda`, `Id_cliente`, `cuotas`, `total`) VALUES
('ASD2F1A6S', 'PAGO_0001', '2014-10-24', '70818616', 4, 90.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `Id_Pago` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Pago` date NOT NULL,
  `Id_deuda` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `estado` bit(1) NOT NULL,
  `cantidad` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`Id_Pago`, `Fecha_Pago`, `Id_deuda`, `estado`, `cantidad`) VALUES
('12AS56DF4', '2014-11-21', 'ASD2F1A6S', b'0', 0.00),
('56E4R21G3', '2014-11-07', 'ASD2F1A6S', b'0', 0.00),
('A8SDF21AS', '2014-10-31', 'ASD2F1A6S', b'1', 20.00),
('DFH46D5SF', '2014-11-14', 'ASD2F1A6S', b'0', 0.00),
('SDFLKGJLK', '2014-11-05', 'ASD2F1A6S', b'0', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoventa`
--

CREATE TABLE IF NOT EXISTS `productoventa` (
  `cod_busqueda` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `material` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `talla` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Id_clasificacion` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productoventa`
--

INSERT INTO `productoventa` (`cod_busqueda`, `producto`, `material`, `talla`, `color`, `Id_clasificacion`) VALUES
('3HJVLQR5', 'Corbata', 'Tela', NULL, 'AZUL', 'CLA-MASCU'),
('HOQ2QZPW', 'Pantalón de vestir', 'Tela', 'XXL', 'Negro', 'CLA-MASCU'),
('T8ZDJ2GNF', 'Corbata', 'Tela', 'S', 'Rojo', 'CLA-NIMAS'),
('VA71PLQLP', 'Polo cuello camisa', 'Algodón', 'S', 'CREMA', 'CLA-NIMAS');

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
('PAGO_0001', 'Semanal'),
('PAGO_0002', 'Mensual'),
('PAGO_0003', 'Fecha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `cod_busqueda` char(9) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Deuda` varchar(9) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `Catidad_Productos` int(10) NOT NULL,
  `costo` double(5,2) NOT NULL,
  `total` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`cod_busqueda`, `Id_Deuda`, `Catidad_Productos`, `costo`, `total`) VALUES
('3HJVLQR5', 'ASD2F1A6S', 3, 10.00, 30.00),
('VA71PLQLP', 'ASD2F1A6S', 4, 20.00, 80.00);

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
-- Indices de la tabla `deuda`
--
ALTER TABLE `deuda`
 ADD PRIMARY KEY (`Id_deuda`), ADD KEY `Id_cliente` (`Id_cliente`), ADD KEY `Id_tipoPago` (`Id_tipoPago`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
 ADD PRIMARY KEY (`Id_Pago`), ADD KEY `Id_deuda` (`Id_deuda`);

--
-- Indices de la tabla `productoventa`
--
ALTER TABLE `productoventa`
 ADD PRIMARY KEY (`cod_busqueda`), ADD KEY `Id_Marca` (`Id_clasificacion`), ADD KEY `Id_clasificacion` (`Id_clasificacion`), ADD KEY `Id_clasificacion_2` (`Id_clasificacion`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
 ADD PRIMARY KEY (`Id_tipoPago`);

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
-- Filtros para la tabla `productoventa`
--
ALTER TABLE `productoventa`
ADD CONSTRAINT `productoventa_ibfk_1` FOREIGN KEY (`Id_clasificacion`) REFERENCES `clasificacion_producto` (`Id_clasificacion`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`Id_Deuda`) REFERENCES `deuda` (`Id_deuda`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`cod_busqueda`) REFERENCES `productoventa` (`cod_busqueda`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
