-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 05:58:36
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `royalfilm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idioma` text NOT NULL,
  `clasificacion` varchar(20) NOT NULL,
  `duracion` int(11) NOT NULL,
  `estreno` date NOT NULL,
  `urlpelicula` varchar(200) NOT NULL,
  `sinopsis` text NOT NULL,
  `director` text NOT NULL,
  `reparto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre`, `idioma`, `clasificacion`, `duracion`, `estreno`, `urlpelicula`, `sinopsis`, `director`, `reparto`) VALUES
(1, 'THOR', 'Español', 'Todo público', 60, '2021-12-16', 'https://www.youtube.com/watch?v=r6t0czGbuGI', 'hombre que picó una araña', 'stan lee', 'tom holland'),
(2, 'RAPIDO Y FURIOSO 9', 'Ingles', 'Todo público', 60, '2021-11-05', 'https://www.youtube.com/watch?v=t3DpuQrBivU', 'jhj', 'jason statham', 'kevin'),
(3, 'SHANG CHI', 'Ingles', '+12 años', 66, '2021-11-03', 'https://www.youtube.com/watch?v=t3DpuQrBivU', 'jhj', 'kevin', 'brayan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
