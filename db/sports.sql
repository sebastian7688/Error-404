-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2023 a las 21:17:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sports`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carito`
--

CREATE TABLE `carito` (
  `id` int(255) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carito`
--

INSERT INTO `carito` (`id`, `id_producto`, `id_usuario`, `fecha_alta`, `fecha_baja`) VALUES
(0, 20, 40, '0000-00-00 00:00:00', NULL),
(0, 20, 40, '0000-00-00 00:00:00', NULL),
(0, 18, 40, '0000-00-00 00:00:00', NULL),
(0, 19, 0, '0000-00-00 00:00:00', NULL),
(0, 17, 9, '0000-00-00 00:00:00', NULL),
(0, 13, 0, '2023-06-22 06:55:53', NULL),
(0, 15, 40, '2023-06-22 06:57:15', NULL),
(0, 16, 40, '2023-06-22 06:58:21', NULL),
(0, 14, 40, '2023-06-22 07:04:23', NULL),
(0, 20, 40, '2023-06-22 14:06:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

CREATE TABLE `categorías` (
  `id_categoria` int(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `deporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_deporte` int(255) NOT NULL,
  `deporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`id_deporte`, `deporte`) VALUES
(0, 'Otros'),
(1, 'Atletismo'),
(2, 'voley'),
(3, 'Bádminton'),
(4, 'futbol'),
(5, 'Boxeo'),
(7, 'Basket'),
(9, 'Artes Marciales'),
(10, 'Ciclismo'),
(13, 'Tenis'),
(15, 'Ping Pong'),
(17, 'Rugby'),
(18, 'Golf'),
(19, 'Natacion'),
(20, 'Surf'),
(21, 'Handball');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(15) UNSIGNED NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `texto` text NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `imagen` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `texto`, `fecha_alta`, `imagen`) VALUES
(3, 'adawdawdawdawd', 'wwadwadadwawdawdawdawdaw', 'dawdawdwadadwawawdawwdawdaw', '2023-05-03 00:00:00', 0x4172726179),
(4, 'awdhahdiwhaidhiwahdiajidjalwd', 'adkuawhduhawildhliawjdiljawkdja', 'aduawhkudkhdkuhawudhawukhdkuawd', '2023-05-03 00:00:00', 0x4172726179),
(5, 'GHISTAIDNAHIWDJAWD', 'SOY MUY CAPOOOOOOOOOO', 'WAZA INSANOS ATACAN BERMUDA CON EL FIN DE CONQUISTAR CHAKALITAS FF', '2023-05-03 00:00:00', 0x4172726179),
(6, 'RICARDO MARTINEZ', 'SOY BIPOLAR', 'NOSE PORQUE HAGO ESTO SI LA PAGA ES MALA', '2023-05-03 00:00:00', 0x4172726179),
(7, 'prueba 1', 'es solo una prueba ', 'nada mas no joda', '2023-05-03 09:39:06', 0x4172726179),
(8, 'prueba 2', 'ni modo segunda prueba', 'aahsauauwildwhawhiqd', '2023-05-03 09:39:44', 0x4172726179),
(9, 'tercera prueba', 'porfavor matenme', 'no puedo creer que esto sea un huevo de pascua', '2023-05-03 09:40:30', 0x4172726179),
(10, 'ESTO DEBE APARECER AL PRINCIPIO', 'nada', 'nada mas que decir', '2023-05-03 09:47:37', 0x4172726179);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) UNSIGNED NOT NULL,
  `nombre_prod` varchar(150) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `id_deporte` int(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `id_usuario` int(100) NOT NULL,
  `imagen` mediumblob NOT NULL ,
  `descuento` int(11) DEFAULT NULL,
  `cantidad` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_prod`, `descripcion`, `texto`, `id_deporte`, `precio`, `fecha_alta`, `id_usuario`, `imagen`, `descuento`, `cantidad`) VALUES
(11, 'Guantes de Boxeo', 'Guantes EverLast muy duraderos, nuevos y perfectos para hacer sparring', 'Guantes color blanco y negro, de la marca Everlast, son de 16 onzas perfectos para hacer sparring e incluye un bucal adicional', 1, 14000, '2023-05-05 01:50:56', 7, 0x4172726179, NULL, 100),
(12, 'Pelota de Voley', 'Pelota de voley', 'no hay mucho para decir', 2, 9000, '2023-05-05 01:52:23', 7, 0x4172726179, NULL, 100),
(13, 'Pelota de Spider Mar PRO', 'adawdwa', 'adwawdwad', 3, 4000, '2023-05-05 02:35:14', 7, 0x4172726179, NULL, 100),
(14, 'red de voley', 'waddawd', 'addwaadw', 2, 1200, '2023-05-05 02:36:20', 7, 0x4172726179, NULL, 100),
(15, 'Vendas Everlast', 'adwadawd', 'awdadwada', 1, 1200, '2023-05-05 02:37:15', 7, 0x4172726179, NULL, 100),
(16, 'Guantes Sporting', 'awddwa', 'awdadw', 3, 15000, '2023-05-05 02:38:53', 7, 0x4172726179, NULL, 100),
(17, 'Gafas de natacion PREMIUM ULTIMATUM', 'adwdad', 'adadwawd', 4, 16200, '2023-05-05 02:40:35', 7, 0x4172726179, NULL, 100),
(18, 'Botines de Hombre Araña muy PROS', 'adwadaw', 'awdawdwd', 3, 25600, '2023-05-05 02:42:27', 7, 0x4172726179, NULL, 100),
(19, 'Prueba de error 2', 'awdwdwad', 'adwd', 2, 12412, '2023-05-29 01:20:38', 7, 0x4172726179, NULL, 100),
(20, 'Prueba de Correcion de Error', 'Se supone que esto debe aparecer', 'awdawadawd', 7, 9900, '2023-05-29 01:22:02', 7, 0x4172726179, NULL, 95);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) UNSIGNED NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'usuario'),
(2, 'administrador'),
(3, 'moderador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  `descrip` varchar(500) NOT NULL DEFAULT 'Sin Descripcion',
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_name`, `contra`, `email`, `rol`, `fecha_alta`, `fecha_baja`, `descrip`, `foto`) VALUES
(6, '[value-2]', '276b6c4692e78d4799c12ada515bc3e4', 'peluka1709@gmail.com', 1, '0000-00-00 00:00:00', NULL, 'Amo romper mis limites, y estoy a un gran paso de superarme', 'perfil-1.png'),
(7, 'MikeNoble2905', 'e8494a1c9c7197508e5990872e417a0a', 'Mikemoble2905@gmail.com', 2, '0000-00-00 00:00:00', NULL, 'Esto es tan solo un demostracion de las cosas que se pueden hacer si uno lo propone', 'perfil-1.png'),
(9, 'laydo', '76d80224611fc919a5d54f0ff9fba446', 'parditop@gmail.com', 2, '0000-00-00 00:00:00', NULL, 'Amo el deporte.', 'perfil-1.png'),
(40, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, '2023-06-07 01:21:51', NULL, 'Sin Descripcion', 'perfil-1.png'),
(41, 'asd', '76d80224611fc919a5d54f0ff9fba446', 'qwe@gmail.com', 1, '2023-06-17 05:10:17', NULL, 'Sin Descripcion', 'perfil.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_carrito` datetime NOT NULL,
  `precio_total` int(11) NOT NULL,
  `cantidad vendida` int(11) NOT NULL,
  `fecha_ventas` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_deporte`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_deporte` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
