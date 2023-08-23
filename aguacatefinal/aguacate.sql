-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2023 a las 06:14:29
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aguacate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `placa` varchar(10) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`placa`, `marca`, `color`, `cliente`) VALUES
('ae', 'audi', 'azul', 4),
('af', 'mazda', 'rojo', 3),
('az', 'mercedez', 'rojo', 2),
('d1', 'ford', 'azul', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cedula`, `nombre`) VALUES
(1, 'jairo'),
(2, 'vanesa'),
(3, 'luz'),
(4, 'juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parquear`
--

CREATE TABLE `parquear` (
  `idParqueo` int(11) NOT NULL,
  `horaIngreso` datetime DEFAULT NULL,
  `horaSalida` datetime DEFAULT NULL,
  `puesto` int(11) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parquear`
--

INSERT INTO `parquear` (`idParqueo`, `horaIngreso`, `horaSalida`, `puesto`, `placa`) VALUES
(21, '2023-08-23 06:12:31', '0000-00-00 00:00:00', 1, 'af'),
(23, '2023-08-23 06:13:05', '0000-00-00 00:00:00', 2, 'az'),
(24, '2023-08-23 06:13:44', '0000-00-00 00:00:00', 3, 'ae'),
(25, '2023-08-23 06:14:15', '0000-00-00 00:00:00', 4, 'd1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `idPiso` int(11) NOT NULL,
  `piso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`idPiso`, `piso`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(11) NOT NULL,
  `puestos` int(11) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `puestos`, `piso`, `estado`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 4, 1, 1),
(5, 5, 1, 0),
(6, 6, 1, 0),
(7, 7, 1, 0),
(8, 8, 1, 0),
(9, 9, 1, 0),
(10, 10, 1, 0),
(11, 1, 2, 0),
(12, 2, 2, 0),
(13, 3, 2, 0),
(14, 4, 2, 0),
(15, 5, 2, 0),
(16, 6, 2, 0),
(17, 7, 2, 0),
(18, 8, 2, 0),
(19, 9, 2, 0),
(20, 10, 2, 0),
(21, 1, 3, 0),
(22, 2, 3, 0),
(23, 3, 3, 0),
(24, 4, 3, 0),
(25, 5, 3, 0),
(26, 6, 3, 0),
(27, 7, 3, 0),
(28, 8, 3, 0),
(29, 9, 3, 0),
(30, 10, 3, 0),
(31, 1, 4, 1),
(32, 2, 4, 0),
(33, 3, 4, 0),
(34, 4, 4, 0),
(35, 5, 4, 0),
(36, 6, 4, 0),
(37, 7, 4, 0),
(38, 8, 4, 0),
(39, 9, 4, 0),
(40, 10, 4, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `pertenece` (`cliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `parquear`
--
ALTER TABLE `parquear`
  ADD PRIMARY KEY (`idParqueo`),
  ADD KEY `parquea` (`puesto`),
  ADD KEY `parqueado` (`placa`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`idPiso`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tener2` (`piso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parquear`
--
ALTER TABLE `parquear`
  MODIFY `idParqueo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `idPiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `pertenece` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`cedula`);

--
-- Filtros para la tabla `parquear`
--
ALTER TABLE `parquear`
  ADD CONSTRAINT `parquea` FOREIGN KEY (`puesto`) REFERENCES `puestos` (`id`),
  ADD CONSTRAINT `parqueado` FOREIGN KEY (`placa`) REFERENCES `autos` (`placa`);

--
-- Filtros para la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD CONSTRAINT `tener2` FOREIGN KEY (`piso`) REFERENCES `pisos` (`idPiso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
