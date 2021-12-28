-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2021 a las 16:24:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

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
(1, '10001', 'Carlos', 'Computadora Laptop', 8, '1', '645', 'Oficina Imago', 'i7 6ta generacion, 8 RAM, 250GB SSD', '2021-12-23 14:33:32'),
(2, '10002', 'Carlos', 'Cafetera', 8, '1', '45', 'Oficina Imago', '', '2021-12-23 14:48:57'),
(3, '10003', 'Carlos', 'Bocina', 8, '1', '16', 'Oficina Imago', '', '2021-12-23 14:51:18'),
(4, '10004', 'Carlos', 'g', 8, '1', '66', 'Oficina Imago', '', '2021-12-23 14:51:48'),
(5, '10005', 'Carlos', 'celulares', 8, '5', '478', 'Oficina Imago', '', '2021-12-23 15:26:36'),
(6, '10001', 'Alcides Brito', 'Computadora de mesa', 9, '1', '645', 'Gamboa', 'g', '2021-12-23 15:39:04'),
(7, '10001', 'Alcides Brito', 'Computadora de mesa', 9, '1', '645', 'Gamboa', 'g', '2021-12-23 15:39:04'),
(8, '10006', 'Alcides Brito', 'calculadores', 0, '10', '43', '', 'ho', '2021-12-23 15:52:42'),
(9, '10006', 'Alcides Brito', 'calculadores', 0, '10', '43', '', 'ho', '2021-12-23 15:52:42'),
(10, '10005', 'Alcides Brito', 'celulares', 9, '3', '478', 'Gamboa', 'ho', '2021-12-23 15:53:15'),
(11, '10005', 'Alcides Brito', 'celulares', 9, '3', '478', 'Gamboa', 'ho', '2021-12-23 15:53:15'),
(12, '10006', 'Alcides Brito', 'calculadores', 9, '3', '43', '', 'ho', '2021-12-23 15:53:48'),
(13, '10006', 'Alcides Brito', 'calculadores', 9, '3', '43', '', 'ho', '2021-12-23 15:53:48'),
(14, '10006', 'Alcides Brito', 'calculadores', 10, '4', '43', 'Chiriquí UTP', 'ho', '2021-12-23 15:54:09'),
(15, '10006', 'Alcides Brito', 'calculadores', 10, '4', '43', 'Chiriquí UTP', 'ho', '2021-12-23 15:54:09'),
(16, '10006', 'Alcides Brito', 'calculadores', 9, '1', '43', 'Gamboa', 'ho', '2021-12-23 15:54:37'),
(17, '10006', 'Alcides Brito', 'calculadores', 9, '1', '43', 'Gamboa', 'ho', '2021-12-23 15:54:37'),
(18, '10006', 'Alcides Brito', 'calculadores', 0, '1', '43', '', 't', '2021-12-23 16:01:49'),
(19, '10006', 'Alcides Brito', 'calculadores', 0, '1', '43', '', 't', '2021-12-23 16:01:49'),
(20, '10006', 'Alcides Brito', 'calculadores', 13, '44', '43', '', 'h', '2021-12-23 16:09:27'),
(21, '10006', 'Alcides Brito', 'calculadores', 13, '44', '43', '', 'h', '2021-12-23 16:09:27'),
(22, '10006', 'Alcides Brito', 'calculadores', 13, '6', '43', '', 'h', '2021-12-23 16:11:06'),
(23, '10006', 'Alcides Brito', 'calculadores', 13, '6', '43', '', 'h', '2021-12-23 16:11:07'),
(24, '10006', 'Alcides Brito', 'calculadores', 11, '3', '43', '', 'h', '2021-12-23 16:14:02'),
(25, '10006', 'Alcides Brito', 'calculadores', 11, '3', '43', '', 'h', '2021-12-23 16:14:02'),
(26, '10006', 'Alcides Brito', 'calculadores', 12, '3', '43', '', 'h', '2021-12-23 16:14:34'),
(27, '10006', 'Alcides Brito', 'calculadores', 12, '3', '43', '', 'h', '2021-12-23 16:14:34'),
(28, '10006', 'Alcides Brito', 'calculadores', 13, '4', '43', '', 'h', '2021-12-23 16:16:17'),
(29, '10006', 'Alcides Brito', 'calculadores', 13, '4', '43', '', 'h', '2021-12-23 16:16:17'),
(30, '10006', 'Alcides Brito', 'calculadores', 13, '5', '43', '', 'h', '2021-12-23 16:17:41'),
(31, '10006', 'Alcides Brito', 'calculadores', 13, '5', '43', '', 'h', '2021-12-23 16:17:41'),
(32, '10006', 'Alcides Brito', 'calculadores', 13, '15', '43', '', 'h', '2021-12-23 16:21:17'),
(33, '10006', 'Alcides Brito', 'calculadores', 13, '15', '43', '', 'h', '2021-12-23 16:21:17'),
(34, '10006', 'Alcides Brito', 'calculadores', 0, '5', '43', '', 'h', '2021-12-23 16:21:47'),
(35, '10006', 'Alcides Brito', 'calculadores', 0, '5', '43', '', 'h', '2021-12-23 16:21:47'),
(36, '10006', 'Alcides Brito', 'calculadores', 13, '5', '43', 'Azuero UTP', 'h', '2021-12-23 16:23:53'),
(37, '10006', 'Alcides Brito', 'calculadores', 13, '5', '43', 'Azuero UTP', 'h', '2021-12-23 16:23:53'),
(38, '10006', 'Alcides Brito', 'calculadores', 12, '4', '43', 'Santiago UTP', 'f', '2021-12-23 16:27:42'),
(39, '10006', 'Alcides Brito', 'calculadores', 12, '4', '43', 'Santiago UTP', 'f', '2021-12-23 16:27:42'),
(40, '10006', 'Alcides Brito', 'calculadores', 12, '3', '43', 'Santiago UTP', 'd', '2021-12-23 16:31:04'),
(41, '10006', 'Alcides Brito', 'calculadores', 12, '3', '43', 'Santiago UTP', 'd', '2021-12-23 16:31:04'),
(42, '10006', 'Alcides Brito', 'calculadores', 8, '2', '43', 'Oficina Imago', 'la paso', '2021-12-23 16:37:11'),
(43, '10006', 'Alcides Brito', 'calculadores', 8, '2', '43', 'Oficina Imago', 'la paso', '2021-12-23 16:37:11'),
(44, '10007', 'Alcides Brito', 'Agendas', 11, '2000', '1500', 'Penonomé UTP', 'Agendas para admisnistrativos', '2021-12-23 16:40:17'),
(45, '10007', 'Alcides Brito', 'Agendas', 11, '2000', '1500', 'Penonomé UTP', 'Agendas para admisnistrativos', '2021-12-23 16:42:13'),
(46, '10007', 'Alcides Brito', 'Agendas', 9, '498', '1500', '', 'k', '2021-12-23 16:51:38'),
(47, '10007', 'Alcides Brito', 'Agendas', 9, '498', '1500', '', 'k', '2021-12-23 16:51:38'),
(48, '10007', 'Alcides Brito', 'Agendas', 8, '2', '1500', 'Oficina Imago', 'h', '2021-12-23 16:53:01'),
(49, '10007', 'Alcides Brito', 'Agendas', 8, '2', '1500', 'Oficina Imago', 'h', '2021-12-23 16:53:01'),
(50, '10007', 'Alcides Brito', 'Agendas', 13, '200', '1500', 'Azuero UTP', 'es', '2021-12-23 16:56:18'),
(51, '10007', 'Alcides Brito', 'Agendas', 13, '200', '1500', 'Azuero UTP', 'es', '2021-12-23 16:56:18'),
(52, '10007', 'Alcides Brito', 'Agendas', 12, '50', '1500', 'Santiago UTP', '', '2021-12-23 16:58:26'),
(53, '10007', 'Alcides Brito', 'Agendas', 12, '50', '1500', 'Santiago UTP', '', '2021-12-23 16:58:26'),
(54, '10007', 'Alcides Brito', 'Agendas', 10, '50', '1500', 'Chiriquí UTP', '', '2021-12-23 17:00:50'),
(55, '10007', 'Alcides Brito', 'Agendas', 10, '50', '1500', 'Chiriquí UTP', '', '2021-12-23 17:00:50'),
(56, '10007', 'Alcides Brito', 'Agendas', 8, '25', '1500', 'Oficina Imago', '', '2021-12-23 17:02:20'),
(57, '10007', 'Alcides Brito', 'Agendas', 8, '25', '1500', 'Oficina Imago', '', '2021-12-23 17:02:20'),
(58, '10009', 'Alcides Brito', 'Mescladora', 12, '2', '433', 'Santiago UTP', '', '2021-12-23 20:33:45'),
(59, '10009', 'Alcides Brito', 'Mescladora de cemento', 9, '1', '433', 'Gamboa', '', '2021-12-23 20:38:15'),
(60, '10009', 'Alcides Brito', 'Mescladora de cemento', 9, '1', '433', 'Gamboa', '', '2021-12-23 20:38:15'),
(61, '10009', 'Alcides Brito', 'Mescladora de cemento', 12, '1', '433', 'Santiago UTP', '', '2021-12-23 21:05:05'),
(62, '10009', 'Alcides Brito', 'Mescladora de cemento', 12, '1', '433', 'Santiago UTP', '', '2021-12-23 21:05:05'),
(63, '10007', 'Alcides Brito', 'Agendas', 13, '97', '1500', 'Azuero UTP', 'k', '2021-12-23 21:14:26'),
(64, '10007', 'Alcides Brito', 'Agendas', 13, '97', '1500', 'Azuero UTP', 'k', '2021-12-23 21:14:26'),
(65, '10010', 'Alcides Brito', 'Botas', 10, '500', '456', 'Chiriquí UTP', '', '2021-12-23 21:26:53'),
(66, '10010', 'Alcides Brito', 'Botas', 11, '100', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:04:29'),
(67, '10010', 'Alcides Brito', 'Botas', 11, '100', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:04:29'),
(68, '10010', 'Alcides Brito', 'Botas', 11, '100', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:05:18'),
(69, '10010', 'Alcides Brito', 'Botas', 11, '100', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:05:18'),
(70, '10010', 'Alcides Brito', 'Botas', 0, '100', '456', '', '43 talla', '2021-12-23 22:08:46'),
(71, '10010', 'Alcides Brito', 'Botas', 0, '100', '456', '', '43 talla', '2021-12-23 22:08:46'),
(72, '10010', 'Alcides Brito', 'Botas', 11, '50', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:09:44'),
(73, '10010', 'Alcides Brito', 'Botas', 11, '50', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:09:44'),
(74, '10010', 'Alcides Brito', 'Botas', 11, '50', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:10:26'),
(75, '10010', 'Alcides Brito', 'Botas', 11, '50', '456', 'Penonomé UTP', '43 talla', '2021-12-23 22:10:26'),
(76, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:20:46'),
(77, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:20:46'),
(78, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:21:35'),
(79, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:21:35'),
(80, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:22:21'),
(81, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:22:21'),
(82, '10010', 'Alcides Brito', 'Botas', 13, '100', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:33:14'),
(83, '10010', 'Alcides Brito', 'Botas', 13, '100', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:33:14'),
(84, '10010', 'Alcides Brito', 'Botas', 13, '49', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:33:55'),
(85, '10010', 'Alcides Brito', 'Botas', 13, '49', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:33:55'),
(86, '10010', 'Alcides Brito', 'Botas', 0, '6', '456', '', '43 talla', '2021-12-23 22:34:42'),
(87, '10010', 'Alcides Brito', 'Botas', 0, '6', '456', '', '43 talla', '2021-12-23 22:34:42'),
(88, '10010', 'Alcides Brito', 'Botas', 0, '5', '456', '', '43 talla', '2021-12-23 22:35:22'),
(89, '10010', 'Alcides Brito', 'Botas', 0, '5', '456', '', '43 talla', '2021-12-23 22:35:22'),
(90, '10010', 'Alcides Brito', 'Botas', 13, '10', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:35:56'),
(91, '10010', 'Alcides Brito', 'Botas', 13, '10', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:35:56'),
(92, '10010', 'Alcides Brito', 'Botas', 12, '10', '456', 'Santiago UTP', '43 talla', '2021-12-23 22:52:49'),
(93, '10010', 'Alcides Brito', 'Botas', 12, '10', '456', 'Santiago UTP', '43 talla', '2021-12-23 22:52:49'),
(94, '10011', 'Alcides Brito', 'Celulares', 8, '100', '45', 'Oficina Imago', 'celulares hawei', '2021-12-27 18:43:25'),
(95, '10011', 'Alcides Brito', 'Celulares', 9, '50', '45', 'Gamboa', 'celulares hawei', '2021-12-27 18:43:42'),
(96, '10011', 'Alcides Brito', 'Celulares', 9, '50', '45', 'Gamboa', 'celulares hawei', '2021-12-27 18:43:42'),
(97, '10011', 'Alcides Brito', 'Celulares', 13, '50', '45', 'Azuero UTP', 'celulares hawei', '2021-12-27 18:44:52'),
(98, '10011', 'Alcides Brito', 'Celulares', 13, '50', '45', 'Azuero UTP', 'celulares hawei', '2021-12-27 18:44:52'),
(99, '10012', 'Alcides Brito', 'vasos', 12, '120', '45', 'Santiago UTP', '', '2021-12-27 18:45:55'),
(100, '10013', 'Alcides Brito', 'botella', 8, '44', '55', 'Oficina Imago', '', '2021-12-27 22:25:59'),
(101, '10013', 'Alcides Brito', 'botella', 9, '4', '55', 'Gamboa', '', '2021-12-27 22:26:16'),
(102, '10013', 'Alcides Brito', 'botella', 9, '4', '55', 'Gamboa', '', '2021-12-27 22:26:16'),
(103, '10013', 'Alcides Brito', 'botella', 11, '2', '55', 'Penonomé UTP', '', '2021-12-27 22:26:49'),
(104, '10013', 'Alcides Brito', 'botella', 11, '2', '55', 'Penonomé UTP', '', '2021-12-27 22:26:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `material` text NOT NULL,
  `imagen` text NOT NULL,
  `descripcion` text NOT NULL,
  `presupuesto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `codigo`, `material`, `imagen`, `descripcion`, `presupuesto`, `fecha`) VALUES
(23, '1001', 'Varilla', 'vistas/imagenes/materiales/Barilla/Barilla.jpg', '', 0, '2021-12-22 19:37:24'),
(24, '1002', 'Block', 'vistas/imagenes/materiales/Block/Block.jpg', '', 39, '2021-12-22 20:15:16'),
(25, '1003', 'Arena', 'vistas/imagenes/materiales/Arena/Arena.jpg', '', 0, '2021-12-22 16:23:03'),
(27, '1004', 'Cemento', 'vistas/imagenes/materiales/Cemento/Cemento.png', '', 332, '2021-12-22 19:37:00');

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
(1, '10001', 'Alcides Brito', 'Computadora de escritorio', 8, '0', '645', 'Oficina Imago', 'g', '2021-12-23 15:46:22'),
(2, '10002', 'Carlos', 'Cafetera', 8, '1', '45', 'Oficina Imago', '', '2021-12-23 14:48:57'),
(3, '10003', 'Carlos', 'Bocina', 8, '1', '16', 'Oficina Imago', '', '2021-12-23 14:51:18'),
(4, '10004', 'Carlos', 'g', 8, '1', '66', 'Oficina Imago', '', '2021-12-23 14:51:48'),
(5, '10005', 'Alcides Brito', 'celulares', 8, '0', '478', 'Oficina Imago', '', '2021-12-23 16:36:16'),
(6, '10006', 'Alcides Brito', 'calculadores', 8, '0', '43', 'Oficina Imago', '', '2021-12-23 16:35:38'),
(7, '10001', 'Alcides Brito', 'Computadora de mesa', 9, '1', '645', 'Gamboa', 'g', '2021-12-23 15:39:04'),
(8, '10006', 'Alcides Brito', 'calculadores', 0, '5', '43', '', 'n', '2021-12-23 15:48:15'),
(9, '10006', 'Alcides Brito', 'calculadores', 0, '1', '43', '', 'n', '2021-12-23 15:48:35'),
(10, '10006', 'Alcides Brito', 'calculadores', 0, '10', '43', '', 'ho', '2021-12-23 15:52:42'),
(11, '10005', 'Alcides Brito', 'celulares', 9, '3', '478', 'Gamboa', 'ho', '2021-12-23 15:53:15'),
(12, '10006', 'Alcides Brito', 'calculadores', 9, '3', '43', '', 'ho', '2021-12-23 15:53:48'),
(13, '10006', 'Alcides Brito', 'calculadores', 10, '2', '43', 'Chiriquí UTP', 'la paso', '2021-12-23 16:37:11'),
(14, '10006', 'Alcides Brito', 'calculadores', 9, '1', '43', 'Gamboa', 'ho', '2021-12-23 15:54:37'),
(15, '10006', 'Alcides Brito', 'calculadores', 0, '3', '43', '', 't', '2021-12-23 16:00:30'),
(16, '10006', 'Alcides Brito', 'calculadores', 0, '3', '43', '', 't', '2021-12-23 16:00:43'),
(17, '10006', 'Alcides Brito', 'calculadores', 0, '1', '43', '', 't', '2021-12-23 16:01:49'),
(18, '10006', 'Alcides Brito', 'calculadores', 13, '44', '43', '', 'h', '2021-12-23 16:09:27'),
(19, '10006', 'Alcides Brito', 'calculadores', 13, '6', '43', '', 'h', '2021-12-23 16:11:06'),
(20, '10006', 'Alcides Brito', 'calculadores', 11, '2', '43', '', '', '2021-12-23 16:32:50'),
(21, '10006', 'Alcides Brito', 'calculadores', 12, '3', '43', '', 'h', '2021-12-23 16:14:34'),
(22, '10006', 'Alcides Brito', 'calculadores', 13, '4', '43', '', 'h', '2021-12-23 16:16:17'),
(23, '10006', 'Alcides Brito', 'calculadores', 13, '5', '43', '', 'h', '2021-12-23 16:17:41'),
(24, '10006', 'Alcides Brito', 'calculadores', 13, '15', '43', '', 'h', '2021-12-23 16:21:17'),
(25, '10006', 'Alcides Brito', 'calculadores', 0, '5', '43', '', 'h', '2021-12-23 16:21:47'),
(26, '10006', 'Alcides Brito', 'calculadores', 13, '5', '43', 'Azuero UTP', 'h', '2021-12-23 16:23:53'),
(27, '10006', 'Alcides Brito', 'calculadores', 12, '4', '43', 'Santiago UTP', 'f', '2021-12-23 16:27:42'),
(28, '10006', 'Alcides Brito', 'calculadores', 12, '3', '43', 'Santiago UTP', 'd', '2021-12-23 16:31:04'),
(29, '10006', 'Alcides Brito', 'calculadores', 8, '0', '43', 'Oficina Imago', '', '2021-12-23 16:49:38'),
(30, '10007', 'Alcides Brito', 'Agendas', 11, '800', '1500', 'Penonomé UTP', 'es', '2021-12-23 16:56:18'),
(31, '10007', 'Alcides Brito', 'Agendas', 9, '401', '1500', '', 'k', '2021-12-23 21:14:26'),
(32, '10007', 'Alcides Brito', 'Agendas', 8, '1', '1500', 'Oficina Imago', '', '2021-12-23 16:54:52'),
(33, '10007', 'Alcides Brito', 'Agendas', 13, '100', '1500', 'Azuero UTP', '', '2021-12-23 17:00:50'),
(34, '10007', 'Alcides Brito', 'Agendas', 12, '50', '1500', 'Santiago UTP', '', '2021-12-23 16:58:26'),
(35, '10007', 'Alcides Brito', 'Agendas', 10, '25', '1500', 'Chiriquí UTP', '', '2021-12-23 17:02:20'),
(36, '10007', 'Alcides Brito', 'Agendas', 8, '25', '1500', 'Oficina Imago', '', '2021-12-23 17:02:20'),
(37, '10008', 'Alcides Brito', 'audifono', 12, '1000', '543', 'Santiago UTP', '', '2021-12-23 20:28:53'),
(38, '10009', 'Alcides Brito', 'Mescladora de cemento', 12, '0', '433', 'Santiago UTP', '', '2021-12-23 21:18:02'),
(39, '10009', 'Alcides Brito', 'Mescladora de cemento', 9, '0', '433', 'Gamboa', '', '2021-12-23 21:05:05'),
(40, '10009', 'Alcides Brito', 'Mescladora de cemento', 12, '0', '433', 'Santiago UTP', '', '2021-12-23 21:20:23'),
(41, '10007', 'Alcides Brito', 'Agendas', 13, '97', '1500', 'Azuero UTP', 'k', '2021-12-23 21:14:26'),
(42, '10009', 'Alcides Brito', 'Mescladora de cemento', 9, '0', '433', 'Gamboa', '', '2021-12-23 21:21:11'),
(43, '10009', 'Alcides Brito', 'Mescladora de cemento', 12, '0', '433', 'Santiago UTP', '', '2021-12-23 21:22:21'),
(44, '10009', 'Alcides Brito', 'Mescladora de cemento', 9, '1', '433', 'Gamboa', '', '2021-12-23 21:22:21'),
(45, '10010', 'Alcides Brito', 'Botas', 10, '30', '456', 'Chiriquí UTP', '43 talla', '2021-12-23 22:35:56'),
(46, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:21:35'),
(47, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:22:21'),
(48, '10010', 'Alcides Brito', 'Botas', 9, '50', '456', 'Gamboa', '43 talla', '2021-12-23 22:25:44'),
(49, '10010', 'Alcides Brito', 'Botas', 13, '100', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:33:14'),
(50, '10010', 'Alcides Brito', 'Botas', 13, '49', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:33:55'),
(51, '10010', 'Alcides Brito', 'Botas', 0, '6', '456', '', '43 talla', '2021-12-23 22:34:42'),
(52, '10010', 'Alcides Brito', 'Botas', 0, '5', '456', '', '43 talla', '2021-12-23 22:35:22'),
(53, '10010', 'Alcides Brito', 'Botas', 13, '10', '456', 'Azuero UTP', '43 talla', '2021-12-23 22:35:56'),
(54, '10011', 'Alcides Brito', 'Celulares', 8, '100', '45', 'Oficina Imago', 'celulares hawei', '2021-12-27 18:43:25'),
(55, '10012', 'Alcides Brito', 'vasos', 12, '120', '45', 'Santiago UTP', '', '2021-12-27 18:45:55'),
(56, '10013', 'Alcides Brito', 'botella', 8, '40', '55', 'Oficina Imago', '', '2021-12-27 22:26:16'),
(57, '10013', 'Alcides Brito', 'botella', 9, '2', '55', 'Gamboa', '', '2021-12-27 22:26:49'),
(58, '10013', 'Alcides Brito', 'botella', 11, '2', '55', 'Penonomé UTP', '', '2021-12-27 22:26:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `material` text NOT NULL,
  `solicitante` text NOT NULL,
  `proyecto` int(11) NOT NULL,
  `aprobado` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `enviado` int(11) NOT NULL,
  `recibido` int(11) NOT NULL,
  `email` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `codigo`, `material`, `solicitante`, `proyecto`, `aprobado`, `comentario`, `enviado`, `recibido`, `email`, `fecha`) VALUES
(25, 1000, '', '', 0, 0, '', 0, 0, 'obras@imagoogroup.com', '2021-12-14 20:26:25'),
(26, 1001, '[{\"material\":\"Arena\",\"cantidad\":\"3\"},{\"material\":\"Cemento\",\"cantidad\":\"1\"},{\"material\":\"Cemento\",\"cantidad\":\"1\"}]', ' lindsay ', 2, 0, '', 0, 0, '', '2021-12-14 20:27:00'),
(27, 1002, '[{\"material\":\"Block\",\"cantidad\":\"2000\"},{\"material\":\"Arena\",\"cantidad\":\"1\"},{\"material\":\"Cemento\",\"cantidad\":\"1\"}]', ' Alcides Brito ', 3, 0, '', 0, 0, '', '2021-12-15 21:31:28'),
(28, 1003, '[{\"material\":\"Barilla\",\"cantidad\":\"1\"},{\"material\":\"Block\",\"cantidad\":\"1\"}]', ' Alcides Brito ', 4, 0, '', 0, 0, '', '2021-12-17 19:38:39'),
(29, 1004, '[{\"material\":\"Varilla\",\"cantidad\":\"1\"},{\"material\":\"Block\",\"cantidad\":\"4\"},{\"material\":\"Cemento\",\"cantidad\":\"167\"}]', ' Alcides Brito ', 2, 0, 'lo quiero urgente', 0, 0, '', '2021-12-22 15:26:15'),
(30, 1005, '[{\"material\":\"Varilla\",\"cantidad\":\"3\",\"presupuesto\":\"642\"},{\"material\":\"Block\",\"cantidad\":\"1\",\"presupuesto\":\"53388\"}]', ' Alcides Brito ', 3, 0, '', 0, 0, '', '2021-12-22 16:56:28'),
(31, 1006, '[{\"material\":\"Varilla\",\"cantidad\":\"1\",\"presupuesto\":\"644\"},{\"material\":\"Block\",\"cantidad\":\"2\",\"presupuesto\":\"53387\"}]', ' Alcides Brito ', 3, 0, '', 0, 0, '', '2021-12-22 16:57:45'),
(32, 1007, '[{\"material\":\"Varilla\",\"cantidad\":\"500\",\"presupuesto\":\"145\"},{\"material\":\"Block\",\"cantidad\":\"1\",\"presupuesto\":\"53388\"}]', ' lindsay ', 2, 0, 'nesecito el pedido para mañana a las 6: 00 AM', 0, 0, '', '2021-12-22 18:52:22'),
(33, 1008, '[{\"material\":\"Block\",\"cantidad\":\"500\",\"presupuesto\":\"52889\"},{\"material\":\"Cemento\",\"cantidad\":\"1\",\"presupuesto\":\"5331\"}]', ' lindsay ', 4, 0, '', 0, 0, '', '2021-12-22 18:54:12'),
(34, 1009, '[{\"id\":\"23\",\"material\":\"Varilla\",\"cantidad\":\"1\",\"presupuesto\":\"644\"},{\"id\":\"24\",\"material\":\"Block\",\"cantidad\":\"1\",\"presupuesto\":\"53388\"}]', ' Alcides Brito ', 3, 0, '', 0, 0, '', '2021-12-22 19:27:02'),
(35, 1010, '[{\"id\":\"24\",\"material\":\"Block\",\"cantidad\":\"1\",\"presupuesto\":\"53388\"},{\"id\":\"23\",\"material\":\"Varilla\",\"cantidad\":\"2\",\"presupuesto\":\"643\"}]', ' Alcides Brito ', 2, 0, '', 0, 0, '', '2021-12-22 19:31:27'),
(36, 1011, '[{\"id\":\"24\",\"material\":\"Block\",\"cantidad\":\"5000\",\"presupuesto\":\"48389\"},{\"id\":\"23\",\"material\":\"Varilla\",\"cantidad\":\"500\",\"presupuesto\":\"145\"}]', ' lindsay ', 4, 0, '', 0, 0, '', '2021-12-22 19:35:46'),
(37, 1012, '[{\"id\":\"24\",\"material\":\"Block\",\"cantidad\":\"48000\",\"presupuesto\":\"389\"},{\"id\":\"27\",\"material\":\"Cemento\",\"cantidad\":\"5000\",\"presupuesto\":\"332\"}]', ' lindsay ', 4, 0, '', 0, 0, '', '2021-12-22 19:37:00'),
(38, 1013, '[{\"id\":\"23\",\"material\":\"Varilla\",\"cantidad\":\"145\",\"presupuesto\":\"0\"}]', ' lindsay ', 5, 0, '', 0, 0, '', '2021-12-22 19:37:24'),
(39, 1014, '[{\"id\":\"24\",\"material\":\"Block\",\"cantidad\":\"150\",\"presupuesto\":\"239\"}]', ' lindsay ', 5, 0, 'lo necesito para hoy', 0, 0, '', '2021-12-22 20:07:05'),
(40, 1015, '[{\"id\":\"24\",\"material\":\"Block\",\"cantidad\":\"200\",\"presupuesto\":\"39\"}]', ' lindsay ', 3, 0, '', 0, 0, '', '2021-12-22 20:15:16');

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
(8, 'Oficina Imago', 'oficina-imago', '2021-12-23 13:38:33'),
(9, 'Gamboa', 'gamboa', '2021-12-23 13:39:38'),
(10, 'Chiriquí UTP', 'chiriqui-utp', '2021-12-23 13:39:57'),
(11, 'Penonomé UTP', 'penonome-utp', '2021-12-23 13:44:25'),
(12, 'Santiago UTP', 'santiago-utp', '2021-12-23 13:45:18'),
(13, 'Azuero UTP', 'azuero-utp', '2021-12-23 13:46:57');

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
  `projecto` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `rol`, `foto`, `projecto`, `fecha`) VALUES
(2, 'Alcides Brito', 'Ramon', '$2a$07$asxx54ahjppf45sd87a5auQMPl.w2jnnYIhkLSeUMDOyGj2124bfS', 'Administrador', 'vistas/imagenes/usuarios/Ramon/Ramon.jpg', '', '2021-11-18 20:31:00'),
(16, 'lindsay', 'lindsy', '$2a$07$asxx54ahjppf45sd87a5auQMPl.w2jnnYIhkLSeUMDOyGj2124bfS', 'Administrador', 'vistas/imagenes/usuarios/lindsy/lindsy.jpg', '', '2021-12-06 16:15:29'),
(17, 'Carlos', 'Carlos', '$2a$07$asxx54ahjppf45sd87a5auQMPl.w2jnnYIhkLSeUMDOyGj2124bfS', 'Suplente', 'vistas/imagenes/usuarios/Carlos/Carlos.jpg', '', '2021-11-19 20:28:45'),
(46, 'Ana Arias', 'Ana', '$2a$07$asxx54ahjppf45sd87a5auQMPl.w2jnnYIhkLSeUMDOyGj2124bfS', 'SuperAdministrador', 'vistas/imagenes/usuarios/user.png', 'Oficina Imago', '2021-12-28 15:07:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historialobjetos`
--
ALTER TABLE `historialobjetos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
