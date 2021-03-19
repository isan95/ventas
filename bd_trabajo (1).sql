-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-04-2019 a las 23:29:42
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_trabajo`
--
CREATE DATABASE IF NOT EXISTS `bd_trabajo` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bd_trabajo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Nombres` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_documento` int(40) NOT NULL,
  `cliente_password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rol_cliente` int(22) NOT NULL,
  `id_cliente` int(50) NOT NULL,
  `identificacion` int(30) NOT NULL,
  `foto_cliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Nombres`, `Apellidos`, `Correo`, `Celular`, `Tipo_documento`, `cliente_password`, `rol_cliente`, `id_cliente`, `identificacion`, `foto_cliente`) VALUES
('ADMIN', 'ADMIN', 'enriquepuchej22@hotmail.com', '123456780', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 26, 123456, '2.png'),
('ENRIQUE', 'PUCHE', 'enriquepuchej22@hotmail.com', '3006848131', 1, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2, 27, 123456789, 'person.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_venta`
--

CREATE TABLE `cliente_venta` (
  `id_cliente_venta` int(11) NOT NULL,
  `id_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_venta` varchar(22) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente_venta`
--

INSERT INTO `cliente_venta` (`id_cliente_venta`, `id_cliente`, `id_venta`, `Fecha`) VALUES
(1, '26', '12', NULL),
(4, '27', '13', NULL),
(9, '27', '14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` varchar(22) COLLATE utf8_spanish_ci NOT NULL,
  `marca_vehiculo` varchar(22) COLLATE utf8_spanish_ci NOT NULL,
  `modelo_vehiculo` date NOT NULL,
  `numero_chasis` int(22) NOT NULL,
  `precio` int(22) NOT NULL,
  `imagen_vehiculo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `marca_vehiculo`, `modelo_vehiculo`, `numero_chasis`, `precio`, `imagen_vehiculo`, `disponibilidad`) VALUES
('12', 'sero', '2019-02-13', 324324234, 40000000, 'ventas.png', 1),
('13', 'chevrolet', '2019-04-08', 13, 351654, 'vlcsnap-2019-02-28-18h11m30s702.png', 0),
('14', 'Tesla', '2019-04-07', 14, 6864, 'box.png', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_venta`
--
ALTER TABLE `cliente_venta`
  ADD PRIMARY KEY (`id_cliente_venta`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `cliente_venta`
--
ALTER TABLE `cliente_venta`
  MODIFY `id_cliente_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
