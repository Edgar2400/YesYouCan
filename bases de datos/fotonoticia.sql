-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2018 a las 06:34:51
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
-- Estructura de tabla para la tabla `fotonoticia`
--

CREATE TABLE `fotonoticia` (
  `idFoto` int(4) NOT NULL,
  `idNoticia` varchar(6) NOT NULL,
  `nombreFoto` varchar(300) NOT NULL,
  `tamanio` varchar(300) NOT NULL,
  `tipo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotonoticia`
--

INSERT INTO `fotonoticia` (`idFoto`, `idNoticia`, `nombreFoto`, `tamanio`, `tipo`) VALUES
(14, '14', '02oinforme.png', '128540', 'image/png'),
(15, '15', '0accionesConcretas.png', '782349', 'image/png'),
(16, '16', '0Arrayanes.png', '86209', 'image/png'),
(17, '17', '0bienemprendo.png', '82727', 'image/png'),
(18, '18', '0buenosAires.png', '74245', 'image/png'),
(19, '19', '0degolladoPuerto.png', '95330', 'image/png'),
(20, '20', '0entregaAC.png', '124849', 'image/png'),
(21, '21', '0expoUniversitaria.png', '88955', 'image/png'),
(22, '22', '0laResolana.png', '103354', 'image/png'),
(23, '23', '0manoConMano.png', '145701', 'image/png'),
(24, '24', '0recorriduUBR.png', '91971', 'image/png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotonoticia`
--
ALTER TABLE `fotonoticia`
  ADD PRIMARY KEY (`idFoto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotonoticia`
--
ALTER TABLE `fotonoticia`
  MODIFY `idFoto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
