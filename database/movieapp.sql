-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2021 a las 21:30:34
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movieapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Genero` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Sinopsis` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Trailer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Imagen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `Titulo`, `Genero`, `Sinopsis`, `Trailer`, `Imagen`, `Fecha_ingreso`) VALUES
(20, 'Your name', 'Romance ', 'Taki vive en Tokio y Mitsuha en un pequeño pueblo. Mientras duermen, intercambian cuerpos y comienzan a comunicarse entre ellos.', 'N0nvoAv5q8M', 'yourname.jpg', '2021-04-22 19:57:32'),
(21, 'Iron man', 'Accion', 'Iron Man es un superhéroe ficticio que aparece en los cómics estadounidenses publicados por Marvel Comics.', '8ugaeA-nMTc', 'iron.png', '2021-04-22 20:59:46'),
(23, 'Amor de gata', 'Romance ', 'La línea entre humanos y animales comienza a desdibujarse cuando una chica peculiar se transforma en una gata para llamar la atención de su enamorado.', 'f6onABRed1s', 'amor de gata.jpg', '2021-04-22 21:31:10'),
(24, 'Milagro de la celda 7', 'Drama', 'La historia de amor entre un padre mentalmente enfermo, acusado de asesinato, y su pequeña de seis años. La vida de Memo da un vuelco cuando es condenado a muerte por el crimen de la hija del comandante en 1983 y lo encierran en el Séptimo Distrito. ', 'wj6peAO7bMU', 'celda 7.jpg', '2021-04-24 01:43:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Passw` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Email`, `Passw`, `rol`) VALUES
(1, 'Kevinfeliz@gmail.com', '123456', 'admin'),
(2, 'jairomelo@gmail.com', '12345', 'user'),
(6, 'gerson@hotmail.com', '123456', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MAIL` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
