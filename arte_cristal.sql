-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2016 a las 18:22:05
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

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
-- Estructura de tabla para la tabla `personals`
--

CREATE TABLE IF NOT EXISTS `personals` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `position_id` int(11) NOT NULL,
  `date_reg` date NOT NULL,
  `dni` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `born_date` date NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `cell_phone` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `personals`
--

INSERT INTO `personals` (`id`, `position_id`, `date_reg`, `dni`, `name`, `last_name`, `born_date`, `sex`, `age`, `cell_phone`, `phone`, `email`, `address`) VALUES
(1, 1, '2016-05-01', 18971787, 'Emanuel', 'Torres', '1990-07-01', 'Masculino', 25, '04165615973', '02464315404', 'emanueljtc@gmail.com', 'Las Palmas'),
(2, 1, '2016-05-01', 123213245, 'Pedro', 'Perez', '2016-05-01', 'M', 34, '0412234567', '02164315404', 'j@h.com', 'Peralta'),
(3, 1, '0000-00-00', 19221592, 'Luis', 'Mendez', '1989-04-12', 'Masculino', 27, '04120486034', '0246000888', 'luismedezinfomatica@gmail.com', 'Pariapan Bloque 2'),
(4, 1, '2013-01-01', 23455678, 'Mariannis', 'Romero', '1990-09-05', 'Femenino', 25, '0412345786', '0244567894', 'mar_romero_i@hotmail.com', 'La Morita'),
(5, 2, '2013-05-04', 18789450, 'Maria', 'Salgado', '1990-07-04', 'Femenino', 25, '0414567823', '0244567890', 'm-salgado@gmail.com', 'Av Bolivar'),
(6, 1, '2016-05-04', 12456789, 'Ana', 'Palma', '1987-10-09', 'Femenino', 29, '0412376903', '0244567892', 'j@gmail.com', 'Lomas del Avila'),
(8, 3, '2016-02-12', 1241242, 'Luis', 'Berroteron', '1998-05-30', 'Masculino', 27, '04126728912', '23124313', 'br@gmail.com', 'Berroteron Las CASITAS'),
(9, 2, '2016-05-30', 17221892, 'Maria', 'Maria Guerra', '1998-12-02', 'Femenino', 28, '23132', '123123', 'mariag@gmail.com', 'Urb. Maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(255) NOT NULL,
  `hour_worked` decimal(10,0) NOT NULL,
  `time_value` decimal(10,0) NOT NULL,
  `daily_salary` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `positions`
--

INSERT INTO `positions` (`id`, `position`, `hour_worked`, `time_value`, `daily_salary`) VALUES
(1, 'Gerente', '6', '30', '180'),
(2, 'Secretaria', '8', '25', '200'),
(3, 'Tecnico', '8', '45', '360'),
(4, 'Tecnico', '3', '2', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wakes`
--

CREATE TABLE IF NOT EXISTS `wakes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `payment_day` date NOT NULL,
  `holiday` int(3) NOT NULL,
  `extra_hours` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `salary_date` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `wakes`
--

INSERT INTO `wakes` (`id`, `personal_id`, `position_id`, `payment_day`, `holiday`, `extra_hours`, `amount`, `payment_type`, `start`, `end`, `salary_date`) VALUES
(8, 3, 0, '2016-05-31', 23, 12, '6750', 'Adelantado', '15-05-2016', '02-06-2016', '3240'),
(10, 5, 0, '2016-05-31', 23, 12, '7350', 'Adelantado', '21-05-2016', '31-05-2016', '2000'),
(11, 4, 0, '2016-05-31', 23, 11, '6750', 'Adelantado', '01-05-2016', '30-05-2016', '5220');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
