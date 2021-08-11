-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2021 a las 16:55:55
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emkt`
--
CREATE DATABASE IF NOT EXISTS `emkt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `emkt`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `SP_AddEmpRequest`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AddEmpRequest` (IN `nombre_in` VARCHAR(60), IN `apellido_in` VARCHAR(60), IN `edad_in` TINYINT(11), IN `correo_in` VARCHAR(60), IN `habilidad` VARCHAR(30))  INSERT INTO emkt VALUES(NULL,nombre_in,apellido_in,edad_in,correo_in,habilidad)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emkt`
--
-- Creación: 10-08-2021 a las 16:30:57
-- Última actualización: 10-08-2021 a las 20:29:21
--

DROP TABLE IF EXISTS `emkt`;
CREATE TABLE IF NOT EXISTS `emkt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `edad` tinyint(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `habilidad` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emkt`
--

INSERT INTO `emkt` (`id`, `nombre`, `apellido`, `edad`, `email`, `habilidad`) VALUES
(1, 'René Alejandro ', 'Alvarez Urrutia', 25, 'renealvarez28496@gmail.com', 'PHP'),

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
