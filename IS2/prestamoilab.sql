-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 00:31:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prestamoilab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `nombre` varchar(250) NOT NULL,
  `matricula` varchar(9) NOT NULL,
  `prestamo` int(1) NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mac`
--

CREATE TABLE `mac` (
  `numero` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estadoMac` varchar(20) DEFAULT NULL,
  `disponibilidad` tinyint(4) DEFAULT NULL,
  `Teclado_numero` int(11) NOT NULL,
  `Mouse_numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mac`
--

INSERT INTO `mac` (`numero`, `descripcion`, `estadoMac`, `disponibilidad`, `Teclado_numero`, `Mouse_numero`) VALUES
(1, 'Mac blanca', 'Bueno', 0, 1, 1),
(2, 'Mac blanca', 'Bueno', 1, 2, 2),
(3, 'Mac blanca', 'Bueno', 0, 3, 3),
(4, 'Mac blanca', 'Bueno', 1, 4, 4),
(5, 'Mac blanca', 'Bueno', 1, 5, 5),
(6, 'Mac blanca', 'Bueno', 1, 6, 6),
(7, 'Mac blanca', 'Bueno', 1, 7, 7),
(8, 'Mac blanca', 'Bueno', 1, 8, 8),
(9, 'Mac blanca', 'Bueno', 1, 9, 9),
(11, 'Mac blanca', 'Bueno', 1, 11, 11),
(12, 'Mac blanca', 'Bueno', 1, 12, 12),
(13, 'Mac blanca', 'Bueno', 1, 13, 13),
(14, 'Mac blanca', 'Bueno', 1, 14, 14),
(16, 'Mac blanca', 'Bueno', 1, 16, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouse`
--

CREATE TABLE `mouse` (
  `numero` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estadoMouse` varchar(20) DEFAULT NULL,
  `disponibilidad` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mouse`
--

INSERT INTO `mouse` (`numero`, `descripcion`, `estadoMouse`, `disponibilidad`) VALUES
(1, 'Mouse inalambrico blanco', 'Bueno', NULL),
(2, 'Mouse inalambrico blanco', 'Bueno', NULL),
(3, 'Mouse inalambrico blanco', 'Bueno', NULL),
(4, 'Mouse inalambrico blanco', 'Bueno', NULL),
(5, 'Mouse inalambrico blanco', 'Bueno', NULL),
(6, 'Mouse inalambrico blanco', 'Bueno', NULL),
(7, 'Mouse inalambrico blanco', 'Bueno', NULL),
(8, 'Mouse inalambrico blanco', 'Bueno', NULL),
(9, 'Mouse inalambrico blanco', 'Bueno', NULL),
(11, 'Mouse inalambrico blanco', 'Bueno', NULL),
(12, 'Mouse inalambrico blanco', 'Bueno', NULL),
(13, 'Mouse inalambrico blanco', 'Bueno', NULL),
(14, 'Mouse inalambrico blanco', 'Bueno', NULL),
(16, 'Mouse inalambrico blanco', 'Bueno', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `nombre` varchar(150) NOT NULL,
  `matricula` int(10) NOT NULL,
  `equipo` int(10) NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`nombre`, `matricula`, `equipo`, `activo`) VALUES
('Jonathan', 201739966, 3, 0),
('Inocente', 201739966, 3, 0),
('jonathan', 201739966, 4, 0),
('jonathan', 201739966, 1, 0),
('jonathan', 201739966, 3, 0),
('GERARDO', 201758049, 7, 0),
('GERARDO', 20109099, 2, 0),
('GERARDO', 20109099, 3, 0),
('GERARDO', 20109099, 3, 1),
('GERARDO', 20109099, 1, 1);

-- --------------------------------------------------------
-- Estructura para tabla registro
CREATE TABLE `registro` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `matricula` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `apellido`, `matricula`, `correo`) VALUES
('Jonathan', 'Gargallo', 201739966, 'nintendo_game123@hotmail.com'),
('jonathan', 'Gargallo', 214536987, 'nintendogame1123@gmail.com'),
('GERARDO','martinez',20109099,'miles@gmail.com');
--
-- Estructura de tabla para la tabla `teclado`
--

CREATE TABLE `teclado` (
  `numero` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estadoTeclado` varchar(20) DEFAULT NULL,
  `disponibilidad` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `teclado`
--

INSERT INTO `teclado` (`numero`, `descripcion`, `estadoTeclado`, `disponibilidad`) VALUES
(1, 'Teclado inalambrico blanco', 'Bueno', NULL),
(2, 'Teclado inalambrico blanco', 'Bueno', NULL),
(3, 'Teclado inalambrico blanco', 'Bueno', NULL),
(4, 'Teclado inalambrico blanco', 'Bueno', NULL),
(5, 'Teclado inalambrico blanco', 'Bueno', NULL),
(6, 'Teclado inalambrico blanco', 'Bueno', NULL),
(7, 'Teclado inalambrico blanco', 'Bueno', NULL),
(8, 'Teclado inalambrico blanco', 'Bueno', NULL),
(9, 'Teclado inalambrico blanco', 'Bueno', NULL),
(11, 'Teclado inalambrico blanco', 'Bueno', NULL),
(12, 'Teclado inalambrico blanco', 'Bueno', NULL),
(13, 'Teclado inalambrico blanco', 'Bueno', NULL),
(14, 'Teclado inalambrico blanco', 'Bueno', NULL),
(16, 'Teclado inalambrico blanco', 'Bueno', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mac`
--
ALTER TABLE `mac`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `Mouse_numero` (`Mouse_numero`),
  ADD KEY `Teclado_numero` (`Teclado_numero`);

--
-- Indices de la tabla `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `teclado`
--
ALTER TABLE `teclado`
  ADD PRIMARY KEY (`numero`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mac`
--
ALTER TABLE `mac`
  ADD CONSTRAINT `mac_ibfk_1` FOREIGN KEY (`Mouse_numero`) REFERENCES `mouse` (`numero`),
  ADD CONSTRAINT `mac_ibfk_2` FOREIGN KEY (`Teclado_numero`) REFERENCES `teclado` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
