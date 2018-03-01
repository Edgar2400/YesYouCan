-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2018 a las 06:35:38
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
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(4) NOT NULL,
  `tituloNoticia` varchar(100) NOT NULL,
  `detallesNoticia` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `tituloNoticia`, `detallesNoticia`) VALUES
(14, '2° Informe de Gobierno', '2° Informe de Gobierno'),
(15, 'Acciones Concretas', 'Acciones Concretas'),
(16, 'Camino Arrayanes', 'Camino Arrayanes'),
(17, 'Bienemprendo', 'Bienemprendo'),
(18, 'Buenos Aires', 'Buenos Aires'),
(19, 'Degollado - La Loma', 'Degollado - La Loma'),
(20, 'Entrega Aciones Concretas', 'Entrega Aciones Concretas'),
(21, 'Expo Universitaria', 'Expo Universitaria'),
(22, 'La Resolana', 'La Resolana'),
(23, 'Mano con Mano', 'Mano con Mano'),
(24, 'Recorrido UBR', 'Recorrido UBR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
