-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2021 a las 18:01:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `insumo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialobjetos`
--

CREATE TABLE `historialobjetos` (
  `id` int(11) NOT NULL,
  `codigo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreUsuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `cantidad` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `costo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ubicacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `historialobjetos`
--

INSERT INTO `historialobjetos` (`id`, `codigo`, `nombreUsuario`, `nombre`, `id_ubicacion`, `cantidad`, `costo`, `ubicacion`, `descripcion`, `fecha`) VALUES
(1, '10001', 'Alcides Brito', 'impresora', 1, '77', '22', 'imago', 'jkk', '2021-04-06 15:31:08'),
(2, '10002', 'Alcides Brito', 'computadoras de escritorio', 1, '100', '135', 'imago', 'computadoras de mesa , color negras', '2021-04-06 15:36:49'),
(3, '10002', 'Alcides Brito', 'computadoras de escritorio', 3, '50', '135', 'david chiriquí', 'para los administradores', '2021-04-06 15:37:34'),
(4, '10002', 'Alcides Brito', 'computadoras de escritorio', 3, '30', '135', 'david chiriquí', 'bla bla', '2021-04-06 15:49:37'),
(5, '10003', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '88', 'imago', 'jj', '2021-04-06 16:13:26'),
(6, '10003', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '88', 'imago', 'jj', '2021-04-06 16:14:17'),
(7, '10003', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '88', '', 'kkk', '2021-04-06 16:14:35'),
(8, '10003', 'Alcides Brito', 'computadoras de escritorio', 1, '88', '00', 'imago', 'kk', '2021-04-06 16:15:21'),
(9, '10003', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '88', '', 'kkk', '2021-04-06 16:18:16'),
(10, '10003', 'Alcides Brito', 'computadoras de escritorio', 1, '22', '77', 'imago', 'kkk', '2021-04-06 16:19:57'),
(11, '10003', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '88', '', 'kkk', '2021-04-06 16:22:09'),
(12, '10003', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '8', '', 'jj', '2021-04-06 16:22:28'),
(13, '10003', 'Alcides Brito', 'celulares', 3, '77', '77', '', 'kk', '2021-04-06 16:22:53'),
(14, '10003', 'Alcides Brito', 'celulares', 3, '77', '77', '', 'kk', '2021-04-06 16:22:59'),
(15, '10003', 'Alcides Brito', 'teclado inalambrico', 1, '22', '20', 'imago', 'hhh', '2021-04-06 16:23:21'),
(16, '10003', 'Alcides Brito', 'teclado inalambrico', 1, '22', '20', 'imago', 'hhh', '2021-04-06 16:30:47'),
(17, '10004', 'Alcides Brito', 'teclado inalambrico', 2, '22', '50', 'Galera tocumen', 'kkkk', '2021-04-06 16:31:23'),
(18, '10004', 'Alcides Brito', 'celulares', 2, '99', '88', '', 'kkk', '2021-04-06 16:31:45'),
(19, '10005', 'Alcides Brito', 'computadoras de escritorio', 2, '4', '20', 'Galera tocumen', 'kkk', '2021-04-06 16:33:26'),
(20, '10005', 'Alcides Brito', 'computadoras de escritorio', 2, '4', '20', 'Galera tocumen', 'kkk', '2021-04-06 16:33:49'),
(21, '10005', 'Alcides Brito', 'computadoras de escritorio', 2, '4', '20', 'Galera tocumen', 'kkk', '2021-04-06 16:35:15'),
(22, '10005', 'Alcides Brito', 'computadoras de escritorio', 2, '4', '20', 'Galera tocumen', 'kkk', '2021-04-06 16:36:33'),
(23, '10005', 'Alcides Brito', 'computadoras de escritorio', 2, '4', '20', 'Galera tocumen', 'kkk', '2021-04-06 16:37:59'),
(24, '10005', 'Alcides Brito', 'computadoras de escritorio', 2, '4', '20', 'Galera tocumen', 'kkk', '2021-04-06 16:38:09'),
(25, '10003', 'Alcides Brito', 'celulares', 3, '77', '77', '', 'kk', '2021-04-06 16:40:06'),
(26, '10003', 'Alcides Brito', 'celulares', 3, '77', '77', '', 'kk', '2021-04-06 16:41:40'),
(27, '10003', 'Alcides Brito', 'celulares', 3, '77', '77', '', 'kk', '2021-04-06 16:42:02'),
(28, '10003', 'Alcides Brito', 'celulares', 3, '77', '77', '', 'kk', '2021-04-06 16:44:27'),
(29, '10005', 'Alcides Brito', 'celulares', 1, '70', '66', 'imago', 'll', '2021-04-06 16:45:52'),
(30, '10005', 'Alcides Brito', 'cuadernos', 2, '77', '88', '', 'kk', '2021-04-06 16:53:18'),
(31, '10002', 'Alcides Brito', 'computadoras de escritorio', 3, '20', '135', 'david chiriquí', 'para los en--', '2021-04-06 18:47:44'),
(32, '10002', 'Alcides Brito', 'computadoras de escritorio', 3, '20', '135', 'david chiriquí', 'para los en--', '2021-04-06 18:47:44'),
(33, '10001', 'Alcides Brito', 'impresora negra', 3, '27', '22', 'david chiriquí', 'oiq', '2021-04-06 18:48:46'),
(34, '10001', 'Alcides Brito', 'impresora negra', 3, '27', '22', 'david chiriquí', 'oiq', '2021-04-06 18:48:46'),
(35, '10002', 'Alcides Brito', 'computadoras de escritorio', 2, '30', '135', 'Galera tocumen', 'f', '2021-04-06 18:49:56'),
(36, '10004', 'Alcides Brito', 'celulares', 1, '50', '88', 'imago', 'g', '2021-04-06 18:51:38'),
(37, '10001', 'Alcides Brito', 'impresora negra', 3, '50', '22', 'david chiriquí', 'gg', '2021-04-06 18:53:00'),
(38, '10002', 'Alcides Brito', 'computadoras de escritorio', 0, '25', '135', '', 'd', '2021-04-06 18:56:56'),
(39, '10002', 'Alcides Brito', 'computadoras de escritorio', 2, '15', '135', 'Galera tocumen', 'ff', '2021-04-06 18:57:32'),
(40, '10003', 'Alcides Brito', 'teclado inalambrico', 2, '2', '20', 'Galera tocumen', 'g', '2021-04-06 18:58:39'),
(41, '10003', 'Alcides Brito', 'teclado inalambrico', 3, '5', '20', 'david chiriquí', 'hh', '2021-04-06 19:07:06'),
(42, '10004', 'Alcides Brito', 'funda de cementos', 1, '500', '1000', 'imago', 'nunc ullamcorper metus, in pulvinar ante dui nec felis. Fusce mattis vehicula gravida. Integer non ex nunc. Pellentesque at elit ligula. Phasellus posuere blandit ipsum', '2021-04-06 19:09:08'),
(43, '10004', 'Alcides Brito', 'funda de cementos', 3, '100', '1000', 'david chiriquí', 'hdhd', '2021-04-06 19:09:58'),
(44, '10004', 'Alcides Brito', 'funda de cementos', 2, '20', '1000', 'Galera tocumen', 'ff', '2021-04-06 19:10:26'),
(45, '10004', 'Alcides Brito', 'cementos blanco', 1, '10', '1000', 'imago', 'uu', '2021-04-06 20:08:14'),
(46, '10004', 'Alcides Brito', 'cementos blanco', 1, '10', '1000', 'imago', 'uu', '2021-04-06 20:08:14'),
(47, '10005', 'Alcides Brito', 'lapiz', 4, '100', '5', 'Utp Universidad', 'hshs', '2021-04-06 21:05:29'),
(48, '10005', 'Alcides Brito', 'lapiz', 1, '50', '5', 'imago', 'f', '2021-04-06 21:05:57'),
(49, '10005', 'Alcides Brito', 'lapiz', 1, '50', '5', 'imago', 'f', '2021-04-06 21:05:57'),
(50, '10006', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '3', 'imago', 'ff', '2021-04-06 21:41:44'),
(51, '10007', 'Alcides Brito', 'celulares', 3, '77', '2', 'david chiriquí', '222', '2021-04-06 21:47:35'),
(52, '10007', 'Alcides Brito', 'Computadoras de escritorio', 3, '77', '2', 'david chiriquí', 'gg', '2021-04-06 21:48:13'),
(53, '10007', 'Alcides Brito', 'celulares', 2, '77', '4', 'Galera tocumen', 'tt', '2021-04-06 21:48:43'),
(54, '10008', 'Alcides Brito', 'Computadoras de escritorio', 3, '77', '2', '', 'gg', '2021-04-06 21:48:56'),
(55, '10009', 'Alcides Brito', 'teclado inalambrico', 3, '77', '77', 'david chiriquí', 'ff', '2021-04-06 21:49:37'),
(56, '10009', 'Alcides Brito', 'lapiz', 3, '77', '77', '', 'ff', '2021-04-06 21:50:11'),
(57, '10009', 'Alcides Brito', 'Computadoras de escritorio', 3, '77', '77', '', 'ff', '2021-04-06 21:50:25'),
(58, '10002', 'Alcides Brito', 'computadoras de escritorio', 5, '22', '135', 'Gamboa edificios', 'ggg', '2021-04-06 21:50:48'),
(59, '10002', 'Alcides Brito', 'computadoras de escritorio', 5, '22', '135', 'Gamboa edificios', 'ggg', '2021-04-06 21:50:48'),
(60, '10001', 'Alcides Brito', 'impresora negra', 5, '10', '22', '', 'ee', '2021-04-06 21:59:28'),
(61, '10001', 'Alcides Brito', 'impresora negra', 5, '10', '22', '', 'ee', '2021-04-06 21:59:28'),
(62, '10004', 'Alcides Brito', 'cementos ', 3, '4', '1000', 'david chiriquí', 't', '2021-04-08 18:38:20'),
(63, '10004', 'Alcides Brito', 'cementos ', 3, '4', '1000', 'david chiriquí', 't', '2021-04-08 18:38:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos`
--

CREATE TABLE `objetos` (
  `id` int(11) NOT NULL,
  `codigo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreUsuario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `cantidad` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `costo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ubicacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `objetos`
--

INSERT INTO `objetos` (`id`, `codigo`, `nombreUsuario`, `nombre`, `id_ubicacion`, `cantidad`, `costo`, `ubicacion`, `descripcion`, `fecha`) VALUES
(1, '10001', 'Alcides Brito', 'impresora negra', 1, '2', '22', 'imago', 'ee', '2021-04-06 21:59:27'),
(2, '10002', 'Alcides Brito', 'computadoras de escritorio', 1, '20', '135', 'imago', 'f', '2021-04-06 18:49:56'),
(3, '10002', 'Alcides Brito', 'computadoras de escritorio', 3, '10', '135', 'david chiriquí', 'ff', '2021-04-06 18:57:32'),
(4, '10002', 'Alcides Brito', 'computadoras de escritorio', 3, '30', '135', 'david chiriquí', 'computadoras i5', '2021-04-06 18:45:01'),
(5, '10003', 'Alcides Brito', 'teclado inalambrico', 1, '5', '20', 'imago', 'hh', '2021-04-06 19:07:06'),
(6, '10004', 'Alcides Brito', 'celulares', 2, '49', '88', '', 'g', '2021-04-06 18:51:37'),
(7, '10005', 'Alcides Brito', 'cuadernos', 2, '25', '88', '', 'cuardernos de gocu', '2021-04-06 19:22:32'),
(8, '10003', 'Alcides Brito', 'teclado inalambrico', 3, '5', '20', 'david chiriquí', 'hh', '2021-04-06 19:07:06'),
(9, '10004', 'Alcides Brito', 'funda de cementos', 1, '400', '1000', 'imago', 'hdhd', '2021-04-06 19:09:58'),
(10, '10004', 'Alcides Brito', 'funda de cementos', 3, '80', '1000', 'david chiriquí', 'ff', '2021-04-06 19:10:26'),
(11, '10004', 'Alcides Brito', 'cementos ', 2, '6', '1000', 'Galera tocumen', 't', '2021-04-08 18:38:20'),
(12, '10004', 'Alcides Brito', 'cementos blanco', 1, '10', '1000', 'imago', 'uu', '2021-04-06 20:08:14'),
(13, '10005', 'Alcides Brito', 'lapiz', 4, '50', '5', 'Utp Universidad', 'f', '2021-04-06 21:05:57'),
(14, '10005', 'Alcides Brito', 'lapiz', 1, '50', '5', 'imago', 'f', '2021-04-06 21:05:57'),
(15, '10006', 'Alcides Brito', 'Computadoras de escritorio', 1, '77', '3', 'imago', 'ff', '2021-04-06 21:41:44'),
(16, '10007', 'Alcides Brito', 'Computadoras de escritorio', 3, '77', '2', 'david chiriquí', 'gg', '2021-04-06 21:48:12'),
(17, '10008', 'Alcides Brito', 'Computadoras de escritorio', 3, '77', '2', '', 'gg', '2021-04-06 21:48:56'),
(18, '10009', 'Alcides Brito', 'Computadoras de escritorio', 3, '77', '77', '', 'ff', '2021-04-06 21:50:25'),
(19, '10002', 'Alcides Brito', 'computadoras de escritorio', 5, '22', '135', 'Gamboa edificios', 'ggg', '2021-04-06 21:50:48'),
(20, '10001', 'Alcides Brito', 'impresora negra', 4, '78', '22', 'Utp Universidad', 'f', '2021-04-06 21:55:10'),
(21, '10001', 'Alcides Brito', 'impresora negra', 5, '33', '22', 'Gamboa edificios', 'f', '2021-04-06 21:55:37'),
(22, '10001', 'Alcides Brito', 'impresora negra', 4, '10', '22', 'Utp Universidad', 'f', '2021-04-06 21:55:55'),
(23, '10001', 'Alcides Brito', 'impresora negra', 5, '20', '22', 'Gamboa edificios', 'ee', '2021-04-06 21:59:12'),
(24, '10001', 'Alcides Brito', 'impresora negra', 5, '10', '22', '', 'ee', '2021-04-06 21:59:28'),
(25, '10004', 'Alcides Brito', 'cementos ', 3, '4', '1000', 'david chiriquí', 't', '2021-04-08 18:38:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `ubicacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `ubicacion`, `ruta`, `fecha`) VALUES
(1, 'imago', 'imago', '2021-04-06 15:30:10'),
(2, 'Galera tocumen', 'galera-tocumen', '2021-04-06 15:35:07'),
(3, 'david chiriquí', 'david-chiriqui', '2021-04-06 15:35:15'),
(4, 'Utp Universidad', 'utp-universidad', '2021-04-06 21:04:50'),
(5, 'Gamboa edificios', 'gamboa-edificios', '2021-04-06 21:10:54'),
(6, 'Galera panama', 'galera-panama', '2021-04-06 21:37:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rol` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `rol`, `foto`, `fecha`) VALUES
(2, 'Alcides Brito', 'Ramon', '$2a$07$asxx54ahjppf45sd87a5auQMPl.w2jnnYIhkLSeUMDOyGj2124bfS', 'Administrador', 'vistas/imagenes/usuarios//805.png', '2021-02-25 19:41:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historialobjetos`
--
ALTER TABLE `historialobjetos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historialobjetos`
--
ALTER TABLE `historialobjetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
