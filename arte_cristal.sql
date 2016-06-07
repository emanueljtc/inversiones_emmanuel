-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2016 a las 17:25:24
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `arte_cristal`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `new_procedure`()
BEGIN

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 96),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(9, 8, NULL, NULL, 'display', 15, 16),
(10, 1, NULL, NULL, 'Personals', 18, 35),
(11, 10, NULL, NULL, 'lista_pdf', 19, 20),
(12, 10, NULL, NULL, 'index', 21, 22),
(13, 10, NULL, NULL, 'view', 23, 24),
(14, 10, NULL, NULL, 'add', 25, 26),
(15, 10, NULL, NULL, 'edit', 27, 28),
(16, 10, NULL, NULL, 'delete', 29, 30),
(17, 10, NULL, NULL, 'searchjson', 31, 32),
(18, 10, NULL, NULL, 'search', 33, 34),
(19, 1, NULL, NULL, 'Positions', 36, 49),
(20, 19, NULL, NULL, 'lista_pdf', 37, 38),
(21, 19, NULL, NULL, 'index', 39, 40),
(22, 19, NULL, NULL, 'view', 41, 42),
(23, 19, NULL, NULL, 'add', 43, 44),
(24, 19, NULL, NULL, 'edit', 45, 46),
(25, 19, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'Users', 50, 67),
(27, 26, NULL, NULL, 'index', 51, 52),
(28, 26, NULL, NULL, 'view', 53, 54),
(29, 26, NULL, NULL, 'add', 55, 56),
(30, 26, NULL, NULL, 'edit', 57, 58),
(31, 26, NULL, NULL, 'delete', 59, 60),
(32, 26, NULL, NULL, 'login', 61, 62),
(33, 26, NULL, NULL, 'logout', 63, 64),
(34, 1, NULL, NULL, 'Wakes', 68, 83),
(35, 34, NULL, NULL, 'lista_pdf', 69, 70),
(36, 34, NULL, NULL, 'index', 71, 72),
(37, 34, NULL, NULL, 'view', 73, 74),
(38, 34, NULL, NULL, 'getCargoByPersonal', 75, 76),
(39, 34, NULL, NULL, 'add', 77, 78),
(40, 34, NULL, NULL, 'edit', 79, 80),
(41, 34, NULL, NULL, 'delete', 81, 82),
(42, 1, NULL, NULL, 'AclExtras', 84, 85),
(43, 1, NULL, NULL, 'CakePdf', 86, 87),
(44, 1, NULL, NULL, 'DebugKit', 88, 95),
(45, 44, NULL, NULL, 'ToolbarAccess', 89, 94),
(46, 45, NULL, NULL, 'history_state', 90, 91),
(47, 45, NULL, NULL, 'sql_explain', 92, 93),
(48, 26, NULL, NULL, 'initDB', 65, 66),
(49, NULL, NULL, NULL, 'controllers', 97, 98),
(50, NULL, NULL, NULL, 'controllers', 99, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, 1, 'User', 1, NULL, 2, 3),
(3, NULL, 'Group', 2, NULL, 7, 10),
(7, 3, 'User', 5, NULL, 8, 9),
(8, 1, 'User', 6, NULL, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 3, 1, '-1', '-1', '-1', '-1'),
(3, 3, 10, '1', '1', '1', '1'),
(4, 3, 34, '1', '1', '1', '1'),
(5, 3, 33, '1', '1', '1', '1'),
(6, 1, 50, '1', '1', '1', '1'),
(7, 3, 50, '-1', '-1', '-1', '-1'),
(8, 3, 16, '-1', '-1', '-1', '-1'),
(9, 3, 12, '1', '1', '1', '1'),
(10, 3, 41, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-06-03 04:17:57', '2016-06-03 04:17:57'),
(2, 'Secretari@', '2016-06-03 04:19:51', '2016-06-03 04:19:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personals`
--

CREATE TABLE IF NOT EXISTS `personals` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `position_id` int(11) NOT NULL,
  `date_reg` varchar(15) NOT NULL,
  `dni` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `born_date` varchar(15) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `cell_phone` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `personals`
--

INSERT INTO `personals` (`id`, `position_id`, `date_reg`, `dni`, `name`, `last_name`, `born_date`, `sex`, `age`, `cell_phone`, `phone`, `email`, `address`) VALUES
(3, 1, '2009-01-03', 19221592, 'Luis', 'Mendez ', '1989-04-12', 'Masculino', 22, '04120486034', '02460002222', 'luismedezinfomatica@gmail.com', 'Pariapan Bloque 2'),
(7, 3, '2016-05-31', 18971787, 'Emanuel', 'Torres', '1990-07-04', 'Masculino', 26, '04165615973', '02464315404', 'emanueljtc@gmail.com', 'Las Palmas Calle Vargas Numero 9 - San Juan de los Morros'),
(10, 3, '2016-05-31', 8444567, 'Teresa', 'MuÃ±oz', '1990-04-15', 'Femenino', 26, '0412234567', '2323242144', 'j@h.com', 'Pariapan Bloque 2'),
(11, 1, '02-06-2016', 18971789, 'Luis', 'Teran', '25-05-1995', 'Masculino', 21, '0412567999', '02464315404', 'j@h.com', 'Banco Obrero'),
(13, 2, '21-06-2007', 18978654, 'Luisa', 'Moronta', '05-06-1987', 'Femenino', 29, '0412345698', '0244567893', 'luisa32m@gmail.com', 'Maracay - El Limon');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `positions`
--

INSERT INTO `positions` (`id`, `position`, `hour_worked`, `time_value`, `daily_salary`) VALUES
(1, 'Gerente', 6, 30, 180),
(2, 'Secretaria', 8, 25, 200),
(3, 'Tecnico', 8, 45, 360);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(150) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, '', 'usuario', 'af2c788d78eeb431c402511d1831279a28ad173c', 1, '2016-06-03 04:18:31', '2016-06-03 04:18:31'),
(5, 'Juan David', 'juan', '0351173e3db051b8a42fbbf85ea62403fb54303a', 2, '2016-06-03 05:27:45', '2016-06-05 05:23:32'),
(6, 'Emanuel Torres', 'emanuel', 'd143986d124c2041066b4888b2492736fd1d1aa2', 1, '2016-06-05 05:16:01', '2016-06-05 05:16:01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `wakes`
--

INSERT INTO `wakes` (`id`, `personal_id`, `position_id`, `payment_day`, `holiday`, `extra_hours`, `amount`, `payment_type`, `start`, `end`, `salary_date`) VALUES
(8, 7, 3, '2016-06-03', 1, 0, 540, 'Reglamentario', '01-06-2016', '15-06-2016', '5040');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
