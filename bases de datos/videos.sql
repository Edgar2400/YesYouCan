-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2018 a las 06:36:52
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `degollado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `idVideo` int(4) NOT NULL,
  `idNoticia` varchar(6) NOT NULL,
  `nombreVideo` varchar(300) NOT NULL,
  `tamanio` varchar(300) NOT NULL,
  `tipo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`idVideo`, `idNoticia`, `nombreVideo`, `tamanio`, `tipo`) VALUES
(14, '14', '0IntroInforme2.mp4', '18079783', 'video/mp4'),
(15, '15', '0AccionesConcretas.mp4', '45836314', 'video/mp4'),
(16, '16', '0Arrayanes.mp4', '30931245', 'video/mp4'),
(17, '17', '0Bienemprendo.mp4', '39606536', 'video/mp4'),
(18, '18', '0BuenosAires.mp4', '45225013', 'video/mp4'),
(19, '19', '0DegolladoPuerto.mp4', '33522314', 'video/mp4'),
(20, '20', '0EntregaAC.mp4', '47684671', 'video/mp4'),
(21, '21', '0ExpoUniversitaria.mp4', '46724884', 'video/mp4'),
(22, '22', '0LaResolanaSanRafael.mp4', '70816084', 'video/mp4'),
(23, '23', '0ManoConMano.mp4', '35254117', 'video/mp4'),
(24, '24', '0RecorridoUBR.mp4', '75963829', 'video/mp4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`idVideo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `idVideo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
