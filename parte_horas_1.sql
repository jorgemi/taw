-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2018 a las 09:07:15
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `parte_horas`
--
CREATE DATABASE IF NOT EXISTS `parte_horas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `parte_horas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `nif_cliente` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`nif_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nif_cliente`, `Nombre`) VALUES
('S4711001J', 'Junta de Castilla y León');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE IF NOT EXISTS `comunidad` (
  `id` int(10) unsigned NOT NULL,
  `comunidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `capital_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`id`, `comunidad`, `capital_id`) VALUES
(1, 'Andalucía', 6152),
(2, 'Aragón', 8113),
(3, 'Principado de Asturias', 5009),
(4, 'Illes Balears', 836),
(5, 'Canarias', 5252),
(6, 'Cantabria', 5823),
(7, 'Castilla y León', 7415),
(8, 'Castilla - La Mancha', 6934),
(9, 'Cataluña', 881),
(10, 'Comunitat Valenciana', 7219),
(11, 'Extremadura', 712),
(12, 'Galicia', 2198),
(13, 'Comunidad de Madrid ', 4356),
(14, 'Región de Murcia', 4588),
(15, 'Comunidad Foral de Navarra', 4815),
(16, 'País Vasco', 46),
(17, 'La Rioja', 4124),
(18, 'Ceuta', 8115),
(19, 'Melilla', 8116);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `nif_empresa` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `poblacion` int(4) NOT NULL,
  PRIMARY KEY (`nif_empresa`),
  KEY `poblacion` (`poblacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`nif_empresa`, `nombre`, `poblacion`) VALUES
('B39740170', 'Cisga', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE IF NOT EXISTS `poblacion` (
  `id_poblacion` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_poblacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`id_poblacion`, `nombre`, `provincia`) VALUES
(1, 'Santander', NULL),
(2, 'Valladolid', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `cod_proyecto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_cliente` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_proyecto`),
  KEY `cod_cliente` (`cod_cliente`),
  KEY `cod_cliente_2` (`cod_cliente`),
  KEY `cod_cliente_3` (`cod_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`cod_proyecto`, `descripcion`, `cod_cliente`) VALUES
('CM-416M0140', 'Servicio Outsourcing JCYL', 'S4711001J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(1) NOT NULL,
  `descripcion` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Gestor'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `id_trabajo` int(3) NOT NULL,
  `descripcion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_trabajo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`id_trabajo`, `descripcion`) VALUES
(99, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nif` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(2) NOT NULL,
  `id_proyecto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_trabajo` int(3) NOT NULL,
  `path` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`nif`),
  KEY `empresa` (`empresa`,`rol`),
  KEY `rol` (`rol`),
  KEY `empresa_2` (`empresa`),
  KEY `rol_2` (`rol`),
  KEY `cod_proyecto` (`id_proyecto`,`id_trabajo`),
  KEY `id_proyecto` (`id_proyecto`),
  KEY `id_trabajo` (`id_trabajo`),
  KEY `path` (`path`),
  KEY `empresa_3` (`empresa`),
  KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nif`, `password`, `nombre`, `empresa`, `rol`, `id_proyecto`, `id_trabajo`, `path`) VALUES
('012345a', '926e27eecdbc7a18858b3798ba99bddd', 'pepe', 'B39740170', 1, 'CM-416M0140', 99, '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`poblacion`) REFERENCES `poblacion` (`id_poblacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`nif_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`cod_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`id_trabajo`) REFERENCES `trabajo` (`id_trabajo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_7` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nif_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
