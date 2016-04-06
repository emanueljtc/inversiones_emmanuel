-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-04-2016 a las 22:14:41
-- Versión del servidor: 5.5.47-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `arte_cristal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fecha_reg` date NOT NULL,
  `cedula` int(25) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` int(1) NOT NULL,
  `edad` int(3) NOT NULL,
  `celular` int(20) NOT NULL,
  `telefono_local` int(20) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `fecha_reg`, `cedula`, `nombres`, `apellidos`, `fecha_nac`, `sexo`, `edad`, `celular`, `telefono_local`, `correo`, `direccion`, `cargo`) VALUES
(1, '2016-03-17', 18971787, 'Emanuel ', 'Torres Clemente', '1996-07-04', 0, 25, 18971787, 2147483647, 'emanueljtc@gmail.com', 'Las palmas ', 'Jefe'),
(2, '2016-03-19', 18889223, 'Luis', 'Mendez', '2002-03-19', 0, 28, 2147483647, 2147483647, 'luis@gmail.com', 'Pariapan', 'Jefe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
