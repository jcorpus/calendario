-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2019 a las 05:28:27
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendario`
--
CREATE DATABASE IF NOT EXISTS `calendario` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `calendario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `textColor` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `modalidad` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `description`, `color`, `textColor`, `start`, `end`, `modalidad`) VALUES
(132, 'prestamo verde', '', '#0aaf33', '#fff', '2019-03-09 09:00:00', '2019-03-09 09:00:00', 'auditorio'),
(135, 'alv azil', '', '#1d5ee9', '#fff', '2019-03-09 09:00:00', '2019-03-09 09:00:00', 'presencial'),
(136, 'rojoooo', 'dffklgd', '#c22e28', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'virtual'),
(137, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#c22e28', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'virtual'),
(138, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#1d5ee9', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'presencial'),
(139, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#0aaf33', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'auditorio'),
(140, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#1d5ee9', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'presencial'),
(141, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#1d5ee9', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'presencial'),
(142, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#1d5ee9', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'presencial'),
(143, 'VALORIZACIÓN Y LIQUIDACION DE OBRAS CON LA NUEVA LEY DE CONTRATACIONES DEL ESTADO Y SU REGLAMENTO DS 30225 y SUS MODIFICACIONES BLASD', '', '#1d5ee9', '#fff', '2019-03-10 09:00:00', '2019-03-10 09:00:00', 'presencial'),
(144, 'fdgdfgdfg', '', '#1d5ee9', '#fff', '2019-02-27 09:00:00', '2019-02-27 09:00:00', 'presencial'),
(145, 'jojojo', '', '#c22e28', '#fff', '2019-03-09 09:00:00', '2019-03-09 09:00:00', 'virtual'),
(146, 'codigo', '', '#0aaf33', '#fff', '2019-02-25 09:00:00', '2019-02-25 09:00:00', 'auditorio'),
(147, 'ella no te ama prro', '', '#c22e28', '#fff', '2019-03-01 09:00:00', '2019-03-01 09:00:00', 'virtual'),
(148, 'verde', '', '#0aaf33', '#fff', '2019-03-06 09:00:00', '2019-03-06 09:00:00', 'auditorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
