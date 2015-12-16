-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2015 a las 03:58:52
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estanquillo_giraldo_beta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_productos`
--

CREATE TABLE IF NOT EXISTS `ingreso_productos` (
  `ingreso_productos_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `ingreso_productos_cantidad` int(11) NOT NULL,
  `ingreso_productos_valor_pagado_total` int(11) NOT NULL,
  `ingreso_productos_valor_unidad_producto` int(11) NOT NULL,
  `ingreso_productos_valor_a_vender_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `inventario_producto_id` int(11) NOT NULL,
  `inventario_cantidad_actual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `prod_id` int(11) NOT NULL,
  `prod_nombre` varchar(50) NOT NULL,
  `prod_precio_entrada` int(11) NOT NULL,
  `prod_precio_salida` int(11) NOT NULL,
  `prod_precio_especial` int(11) NOT NULL,
  `tipo_general_id` int(11) NOT NULL,
  `tipo_especifico_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`prod_id`, `prod_nombre`, `prod_precio_entrada`, `prod_precio_salida`, `prod_precio_especial`, `tipo_general_id`, `tipo_especifico_id`) VALUES
(1, 'guaro', 12000, 15000, 15000, 1, 1),
(2, 'ron', 15000, 16000, 16000, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE IF NOT EXISTS `temporal` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `ganancia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_especifico`
--

CREATE TABLE IF NOT EXISTS `tipo_especifico` (
  `tipo_especifico_id` int(11) NOT NULL,
  `tipo_especifico_nombre` varchar(50) NOT NULL,
  `tipo_general_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_general`
--

CREATE TABLE IF NOT EXISTS `tipo_general` (
  `tipo_general_id` int(11) NOT NULL,
  `tipo_general_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_especifica`
--

CREATE TABLE IF NOT EXISTS `venta_especifica` (
  `venta_especifica_id` int(11) NOT NULL,
  `precio_vendido` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `venta_especifica_cantidad` int(11) NOT NULL,
  `venta_especifica_fecha` int(11) NOT NULL,
  `id_venta_general` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_general`
--

CREATE TABLE IF NOT EXISTS `venta_general` (
  `venta_general_id` int(11) NOT NULL,
  `venta_general_fecha` datetime NOT NULL,
  `venta_general_total_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingreso_productos`
--
ALTER TABLE `ingreso_productos`
  ADD PRIMARY KEY (`ingreso_productos_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `tipo_especifico_id` (`tipo_especifico_id`),
  ADD KEY `tipo_general_id` (`tipo_general_id`);

--
-- Indices de la tabla `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_especifico`
--
ALTER TABLE `tipo_especifico`
  ADD PRIMARY KEY (`tipo_especifico_id`),
  ADD KEY `tipo_general_id` (`tipo_general_id`);

--
-- Indices de la tabla `tipo_general`
--
ALTER TABLE `tipo_general`
  ADD PRIMARY KEY (`tipo_general_id`);

--
-- Indices de la tabla `venta_especifica`
--
ALTER TABLE `venta_especifica`
  ADD PRIMARY KEY (`venta_especifica_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `venta_general`
--
ALTER TABLE `venta_general`
  ADD PRIMARY KEY (`venta_general_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingreso_productos`
--
ALTER TABLE `ingreso_productos`
  MODIFY `ingreso_productos_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_especifico`
--
ALTER TABLE `tipo_especifico`
  MODIFY `tipo_especifico_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_general`
--
ALTER TABLE `tipo_general`
  MODIFY `tipo_general_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta_especifica`
--
ALTER TABLE `venta_especifica`
  MODIFY `venta_especifica_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta_general`
--
ALTER TABLE `venta_general`
  MODIFY `venta_general_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
