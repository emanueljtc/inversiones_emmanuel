-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2016 a las 08:07:21
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 98),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(9, 8, NULL, NULL, 'display', 15, 16),
(10, 1, NULL, NULL, 'Personals', 18, 37),
(11, 10, NULL, NULL, 'lista_pdf', 19, 20),
(12, 10, NULL, NULL, 'index', 21, 22),
(13, 10, NULL, NULL, 'view', 23, 24),
(14, 10, NULL, NULL, 'add', 25, 26),
(15, 10, NULL, NULL, 'edit', 27, 28),
(16, 10, NULL, NULL, 'delete', 29, 30),
(17, 10, NULL, NULL, 'getPalabraByPersonal', 31, 32),
(18, 10, NULL, NULL, 'searchjson', 33, 34),
(19, 10, NULL, NULL, 'search', 35, 36),
(20, 1, NULL, NULL, 'Positions', 38, 51),
(21, 20, NULL, NULL, 'lista_pdf', 39, 40),
(22, 20, NULL, NULL, 'index', 41, 42),
(23, 20, NULL, NULL, 'view', 43, 44),
(24, 20, NULL, NULL, 'add', 45, 46),
(25, 20, NULL, NULL, 'edit', 47, 48),
(26, 20, NULL, NULL, 'delete', 49, 50),
(27, 1, NULL, NULL, 'Users', 52, 69),
(28, 27, NULL, NULL, 'login', 53, 54),
(29, 27, NULL, NULL, 'logout', 55, 56),
(30, 27, NULL, NULL, 'index', 57, 58),
(31, 27, NULL, NULL, 'view', 59, 60),
(32, 27, NULL, NULL, 'add', 61, 62),
(33, 27, NULL, NULL, 'edit', 63, 64),
(34, 27, NULL, NULL, 'delete', 65, 66),
(35, 27, NULL, NULL, 'peligro', 67, 68),
(36, 1, NULL, NULL, 'Wakes', 70, 85),
(37, 36, NULL, NULL, 'lista_pdf', 71, 72),
(38, 36, NULL, NULL, 'index', 73, 74),
(39, 36, NULL, NULL, 'view', 75, 76),
(40, 36, NULL, NULL, 'getCargoByPersonal', 77, 78),
(41, 36, NULL, NULL, 'add', 79, 80),
(42, 36, NULL, NULL, 'edit', 81, 82),
(43, 36, NULL, NULL, 'delete', 83, 84),
(44, 1, NULL, NULL, 'AclExtras', 86, 87),
(45, 1, NULL, NULL, 'CakePdf', 88, 89),
(46, 1, NULL, NULL, 'DebugKit', 90, 97),
(47, 46, NULL, NULL, 'ToolbarAccess', 91, 96),
(48, 47, NULL, NULL, 'history_state', 92, 93),
(49, 47, NULL, NULL, 'sql_explain', 94, 95);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, 1, 'User', 1, NULL, 2, 3),
(6, NULL, 'Group', 4, NULL, 5, 6),
(8, NULL, 'Group', 5, NULL, 7, 8),
(9, NULL, 'Group', 1, NULL, 9, 12),
(10, NULL, 'Group', 2, NULL, 13, 16),
(11, 9, 'User', 4, NULL, 10, 11),
(12, 10, 'User', 5, NULL, 14, 15);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 9, 1, '1', '1', '1', '1'),
(3, 10, 1, '-1', '-1', '-1', '-1'),
(4, 10, 16, '-1', '-1', '-1', '-1'),
(5, 10, 43, '-1', '-1', '-1', '-1'),
(6, 10, 12, '1', '1', '1', '1'),
(7, 10, 36, '1', '1', '1', '1'),
(8, 10, 29, '1', '1', '1', '1'),
(9, 10, 13, '1', '1', '1', '1'),
(10, 10, 15, '1', '1', '1', '1'),
(11, 10, 14, '1', '1', '1', '1'),
(12, 10, 19, '1', '1', '1', '1'),
(13, 10, 18, '1', '1', '1', '1'),
(14, 10, 17, '1', '1', '1', '1'),
(15, 10, 23, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-06-07 04:54:08', '2016-06-07 04:54:08'),
(2, 'Secretaria(o)', '2016-06-07 04:54:17', '2016-06-07 04:54:17');

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
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `personals`
--

INSERT INTO `personals` (`id`, `position_id`, `date_reg`, `dni`, `name`, `last_name`, `born_date`, `sex`, `age`, `cell_phone`, `phone`, `email`, `address`, `status`) VALUES
(3, 1, '2009-01-03', 19221592, 'Luis', 'Mendez ', '1989-04-12', 'Masculino', 22, '04120486034', '02460002222', 'luismedezinfomatica@gmail.com', 'San Juan de los Morros, Urb. Pariapan Bloque 2', 'Activo'),
(7, 3, '2016-05-31', 18971787, 'Emanuel', 'Torres', '1990-07-04', 'Masculino', 26, '04165615973', '02464315404', 'emanueljtc@gmail.com', 'Las Palmas Calle Vargas Numero 9 - San Juan de los Morros', 'Activo'),
(11, 1, '02-06-2016', 18971789, 'Luis', 'Teran', '25-05-1995', 'Masculino', 21, '0412567999', '02464315404', 'j@h.com', 'Banco Obrero', 'Inactivo'),
(13, 2, '21-06-2007', 18978654, 'Luisa', 'Moronta', '05-06-1987', 'Femenino', 29, '0412345698', '0244567893', 'luisa32m@gmail.com', 'Maracay - El Limon', 'Activo'),
(14, 4, '12-06-2016', 5678456, 'Petra', 'Barrios', '14-04-1955', 'Femenino', 61, '0424567876', '', '', 'Maracay - Barrio Bolivar', 'Activo');

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
(1, 'Gerente', 6, 30, 180),
(2, 'Secretaria', 8, 25, 200),
(3, 'Tecnico', 8, 45, 360),
(4, 'Obrero', 5, 30, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `fullname` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`, `fullname`) VALUES
(1, 'emanuel', 'd143986d124c2041066b4888b2492736fd1d1aa2', 1, '2016-06-07 04:28:19', '2016-06-07 04:32:29', 'Emanuel Torres'),
(4, 'alba', '0351173e3db051b8a42fbbf85ea62403fb54303a', 1, '2016-06-07 05:15:44', '2016-06-07 05:15:44', 'Alba Pedraza'),
(5, 'MariaJo', 'fc7f678b2389480bca36411d0e25442890df5e9f', 2, '2016-06-07 05:17:10', '2016-06-12 13:07:57', 'Maria Jimenez');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `wakes`
--

INSERT INTO `wakes` (`id`, `personal_id`, `position_id`, `payment_day`, `holiday`, `extra_hours`, `amount`, `payment_type`, `start`, `end`, `salary_date`) VALUES
(8, 7, 3, '2016-06-03', 1, 0, 540, 'Reglamentario', '01-06-2016', '15-06-2016', '5040'),
(9, 7, 3, '2016-06-07', 3, 0, 1620, 'Adelantado', '01-06-2016', '15-06-2016', '5040');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
