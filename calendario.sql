-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2019 a las 08:43:19
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
  `title` varchar(550) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `textColor` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `modalidad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ponente` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `description`, `color`, `textColor`, `start`, `end`, `modalidad`, `ponente`) VALUES
(15, 'DERECHO PENAL - MODULO I:DERECHO PENAL - PARTE GENERAL: TEORíA DEL DELITO (CLASE 2) HORA: 9AM A 1PM', '', '#1d5ee9', '#fff', '2019-04-27 09:00:00', '2019-04-27 13:00:00', 'presencial', ''),
(16, 'ANALISIS Y DISEÑO DE ALBAÑILERÍA CON ETABS CLASE 3 Y 4', '', '#1d5ee9', '#fff', '2019-04-28 09:00:00', '2019-04-28 19:00:00', 'presencial', ''),
(17, 'SSOMA - MODULO I: EVALUACION DE LINEA BASE DEL SGSST, POLITICA, OBJETIVOS, PROGRAMAS Y DOCUMENTOS DEL SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO', '', '#1d5ee9', '#fff', '2019-05-04 09:00:00', '2019-05-04 19:00:00', 'presencial', ''),
(18, 'METRADOS 2018-2 - MODULO VI: PROGRAMACION DE OBRAS CON MS PROJECT (CLASE  3 Y 4)', '', '#1d5ee9', '#fff', '2019-05-05 09:00:00', '2019-05-05 19:00:00', 'presencial', ''),
(19, 'DERECHO PENAL - MODULO II:DERECHO PENAL – PARTE ESPECIAL: DELITOS CONTRA LA LIBERTAD, DELITOS CONTRA EL PATRIMONIO, DELITO DE TRáFICO ILíCITO DE DROGAS. DELITOS SOCIOECONóMICOS (CLASE 1) HORA: 9AM A 1PM', '', '#1d5ee9', '#fff', '2019-05-11 09:00:00', '2019-05-11 19:00:00', 'presencial', ''),
(20, 'VALORIZACIÓN Y LIQUIDACIÓN DE OBRAS CLASE 3 Y 4', '', '#1d5ee9', '#fff', '2019-05-05 09:00:00', '2019-05-05 19:00:00', 'presencial', 'ING ELENA QUEVEDO HARO'),
(21, 'ING VIAL - PAVIMENTOS MODULO I: ADMINISTRACION Y EJECUCION DE CONTRATOS', '', '#1d5ee9', '#fff', '2019-05-12 09:00:00', '2019-05-12 19:00:00', 'presencial', ''),
(22, 'SSOMA - MODULO II/ SIG - MODULO I: INTERPRETACION E IMPLEMENTACION DEL SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO SEGUN LA LEY 29783', '', '#1d5ee9', '#fff', '2019-05-19 09:00:00', '2019-05-19 19:00:00', 'presencial', ''),
(23, 'DERECHO PENAL - MODULO II: – PARTE ESPECIAL: DELITOS CONTRA LA LIBERTAD, DELITOS CONTRA EL PATRIMONIO, DELITO DE TRáFICO ILíCITO DE DROGAS. DELITOS SOCIOECONóMICOS (CLASE 2) HORA: 9AM A 1PM', '', '#1d5ee9', '#fff', '2019-05-25 09:00:00', '2019-05-25 19:00:00', 'presencial', ''),
(24, 'ING VIAL - PAVIMENTOS MODULO II: TECNOLOGIA DE ASFALTO Y MEZCLAS ASFALTICAS', '', '#1d5ee9', '#fff', '2019-05-26 09:00:00', '2019-05-26 19:00:00', 'presencial', ''),
(25, 'SSOMA - MODULO III/ SIG - MODULO II: POLITICA, REGLAMENTO DE SEGURIDAD Y SALUD EN EL TRABAJO', '', '#1d5ee9', '#fff', '2019-06-02 09:00:00', '2019-06-02 19:00:00', 'presencial', ''),
(26, 'DERECHO PENAL - MODULO III: DELITOS CONTRA LA ADMINISTRACIóN PúBLICA: ANáLISIS DOCTRINARIO Y JURISPRUDENCIAL. (CLASE 1) HORA: 9AM A 1PM', '', '#1d5ee9', '#fff', '2019-06-08 09:00:00', '2019-06-08 19:00:00', 'presencial', ''),
(27, 'RESIDENCIA - METRADOS - EXPEDIENTES - MODULO I: INVIERTE.PE CLASE 1 Y 2', '', '#1d5ee9', '#fff', '2019-06-09 09:00:00', '2019-06-09 19:00:00', 'presencial', ''),
(28, 'ING VIAL - PAVIMENTOS MODULO III: TECNOLOGIAS DE CONCRETO Y MEZCLAS DE CONCRETO', '', '#1d5ee9', '#fff', '2019-06-09 09:00:00', '2019-06-09 19:00:00', 'presencial', ''),
(29, 'SSOMA - MODULO IV: INVESTIGACION DE ACCIDENTES, INCIDENTES Y ENFERMEDADES OCUPACIONALES', '', '#1d5ee9', '#fff', '2019-06-15 09:00:00', '2019-06-15 19:00:00', 'presencial', ''),
(30, 'SIG - MODULO III: INTERPRETACION E IMPLEMENTACION DE SISTEMAS DE GESTION DE LA CALIDAD SEGUN LA NORMA ISO 9001 (TEMA 1)', '', '#1d5ee9', '#fff', '2019-06-15 09:00:00', '2019-06-15 19:00:00', 'presencial', ''),
(31, 'DERECHO PENAL - MODULO III: DELITOS CONTRA LA ADMINISTRACIóN PúBLICA: ANáLISIS DOCTRINARIO Y JURISPRUDENCIAL. (CLASE 2) HORA: 9AM A 1PM', '', '#1d5ee9', '#fff', '2019-06-22 09:00:00', '2019-06-22 19:00:00', 'presencial', ''),
(32, 'RESIDENCIA - METRADOS - EXPEDIENTES - MODULO I: INVIERTE.PE CLASE 3 Y 4', '', '#1d5ee9', '#fff', '2019-06-23 09:00:00', '2019-06-23 19:00:00', 'presencial', ''),
(33, 'ING VIAL - PAVIMENTOS MODULO IV: DISEÑO DE PAVIMENTOS ASFALTICOS', '', '#1d5ee9', '#fff', '2019-06-23 09:00:00', '2019-06-23 19:00:00', 'presencial', ''),
(34, 'SSOMA - MODULO V: IDENTIFICACION DE PELIGROS, EVALUACION DE RIESGOS Y DETERMINACION DE MEDIDAS DE CONTROL (METODOLOGIA IPERC, LINEA BASE, CONTINUO Y ESPECIFICO)', '', '#1d5ee9', '#fff', '2019-06-29 09:00:00', '2019-06-29 19:00:00', 'presencial', ''),
(35, 'SIG - MODULO III: INTERPRETACION E IMPLEMENTACION DE SISTEMAS DE GESTION DE LA CALIDAD SEGUN LA NORMA ISO 9001 (TEMA 2)', '', '#1d5ee9', '#fff', '2019-06-29 09:00:00', '2019-06-29 19:00:00', 'presencial', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
