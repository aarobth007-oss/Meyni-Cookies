-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2026 a las 00:39:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `meyni_cookies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenmc`
--

CREATE TABLE `ordenmc` (
  `Cliente_ID` int(11) DEFAULT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Correo_electronico` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Nacionalidad` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Codigo_postal` varchar(10) DEFAULT NULL,
  `Colonia` varchar(100) DEFAULT NULL,
  `Tipo_de_Galleta` varchar(100) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `IVA` decimal(10,2) DEFAULT NULL,
  `Total` decimal(10,2) DEFAULT NULL,
  `Contacto_de_emergencia` varchar(100) DEFAULT NULL,
  `Comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordenmc`
--

INSERT INTO `ordenmc` (`Cliente_ID`, `Nombres`, `Apellidos`, `Correo_electronico`, `Telefono`, `Nacionalidad`, `Estado`, `Codigo_postal`, `Colonia`, `Tipo_de_Galleta`, `Cantidad`, `IVA`, `Total`, `Contacto_de_emergencia`, `Comentarios`) VALUES
(1234, 'Angel Adrian', 'Robles Thomson', 'aarobth007@gmail.com', '6624616039', 'Mexico', 'Sonora', '83179', 'El Chaparal', 'chocolate', 4, 7.20, 208.80, '6623079549', 'Casa verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñamc`
--

CREATE TABLE `reseñamc` (
  `id` int(11) NOT NULL,
  `Numero_Venta` varchar(50) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Correo_electronico` varchar(100) DEFAULT NULL,
  `Calificacion` int(11) DEFAULT NULL,
  `Opinion` text DEFAULT NULL,
  `Sugerencias_adicionales` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseñamc`
--

INSERT INTO `reseñamc` (`id`, `Numero_Venta`, `Nombre`, `Correo_electronico`, `Calificacion`, `Opinion`, `Sugerencias_adicionales`) VALUES
(1, '1234', 'Angel Adrian', 'aarobth007@gmail.com', 5, 'Muy buenas galletas', 'Mas variedad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reseñamc`
--
ALTER TABLE `reseñamc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reseñamc`
--
ALTER TABLE `reseñamc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
