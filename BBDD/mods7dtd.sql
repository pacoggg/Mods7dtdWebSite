-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2019 a las 12:32:06
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mods7dtd`
--
-- DROP DATABASE IF EXISTS `mods7dtd`;
CREATE DATABASE IF NOT EXISTS `mods7dtd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mods7dtd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sevenmods`
--

CREATE TABLE `sevenmods` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `version` varchar(10) NOT NULL,
  `web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sevenmods`
--

INSERT INTO `sevenmods` (`id`, `nombre`, `descripcion`, `autor`, `version`, `web`) VALUES
(1, 'Rifle Caza', 'AÃ±ade dos cargadores mÃ¡s para la municiÃ³n del rifle de 3 y 5 balas', 'KaftSpain/Darkaft', '1.0', 'Comunidad ArMoKaf'),
(2, 'Barrels and Alcohol', 'Barriles funcionales para fermentar las bebidas', 'DarKaft/KaftSpain', '1.0', 'Comunidad ArMoKaf'),
(3, 'Puertas Y Bloques', 'Nuevos bloques entre ellos la puerta de la prisiÃ³n utilizable, puerta garaje abatible y barrera de cemento.', 'KaftSpain', '0.4', 'Comunidad ArMoKaf'),
(4, 'Proyect Tesla', 'Electricidad inalÃ¡mbrica y mas luces incluida la roja.', 'DarKaft/KaftSpain, codigo para la inalambrica Zone', '2.4', 'Comunidad ArMoKaf'),
(5, 'Agua por doquier', 'Agua de lavamanos, nevera, grifos', 'KaftSpain', '0.4', 'Comunidad ArMoKaf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sevenmods`
--
ALTER TABLE `sevenmods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sevenmods`
--
ALTER TABLE `sevenmods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
