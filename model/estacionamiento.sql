-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2024 a las 21:49:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionarapido`
--

CREATE TABLE `estacionarapido` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cod_espacio` varchar(100) NOT NULL,
  `piso` varchar(100) NOT NULL,
  `vehiculo` varchar(100) NOT NULL,
  `matricula` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Volcado de datos para la tabla `estacionarapido`
--

INSERT INTO `estacionarapido` (`id`, `nombre`, `apellido`, `cod_espacio`, `piso`, `vehiculo`, `matricula`) VALUES
(16, 'Wirson Jose ', 'Martinez', '321-A-45', '1-H', 'Fiat', '123GA8'),
(17, 'Jose Daniel', 'Ramirez', '123D-0', '1-J', 'Corsa ', '235B32'),
(20, 'Yicsimar', 'Hernandez', '12345P-E', '1-A', 'Moto           ', '123-34B'),
(21, 'Victor', 'Ledezma', '12QW-QW-QW', '1-G', 'Camoneta Ford', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estacionarapido`
--
ALTER TABLE `estacionarapido`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cod-espacio` (`cod_espacio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estacionarapido`
--
ALTER TABLE `estacionarapido`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
