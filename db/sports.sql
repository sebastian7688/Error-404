-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2023 a las 19:52:18
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
-- Base de datos: `sports`
--

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
(1, 'Atletismo'),
(2, 'voley'),
(3, 'Bádminton'),
(4, 'futbol'),
(5, 'Boxeo'),
(7, 'Basket'),
(9, 'Artes Marciales'),
(10, 'Ciclismo'),
(13, 'Tenis'),
(15, 'Pink Ponk'),
(17, 'Rugby'),
(18, 'Golf'),
(19, 'Natacion'),
(20, 'Surf'),
(21, 'Handbal');

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
  `imagen` mediumblob NOT NULL,
  `descuento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_prod`, `descripcion`, `texto`, `id_deporte`, `precio`, `fecha_alta`, `id_usuario`, `imagen`, `descuento`) VALUES
(11, 'Guantes de Boxeo', 'Guantes EverLast muy duraderos, nuevos y perfectos para hacer sparring', 'Guantes color blanco y negro, de la marca Everlast, son de 16 onzas perfectos para hacer sparring e incluye un bucal adicional', 1, 14000, '2023-05-05 01:50:56', 7, 0x4172726179, NULL),
(12, 'Pelota de Voley', 'Pelota de voley', 'no hay mucho para decir', 2, 9000, '2023-05-05 01:52:23', 7, 0x4172726179, NULL),
(13, 'Pelota de Spider Mar PRO', 'adawdwa', 'adwawdwad', 3, 4000, '2023-05-05 02:35:14', 7, 0x4172726179, NULL),
(14, 'red de voley', 'waddawd', 'addwaadw', 2, 1200, '2023-05-05 02:36:20', 7, 0x4172726179, NULL),
(15, 'Vendas Everlast', 'adwadawd', 'awdadwada', 1, 1200, '2023-05-05 02:37:15', 7, 0x4172726179, NULL),
(16, 'Guantes Sporting', 'awddwa', 'awdadw', 3, 15000, '2023-05-05 02:38:53', 7, 0x4172726179, NULL),
(17, 'Gafas de natacion PREMIUM ULTIMATUM', 'adwdad', 'adadwawd', 4, 16200, '2023-05-05 02:40:35', 7, 0x4172726179, NULL),
(18, 'Botines de Hombre Araña muy PROS', 'adwadaw', 'awdawdwd', 3, 25600, '2023-05-05 02:42:27', 7, 0x4172726179, NULL);

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
  `descrip` varchar(500) NOT NULL DEFAULT 'Sin Descripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_name`, `contra`, `email`, `rol`, `fecha_alta`, `fecha_baja`, `descrip`) VALUES
(6, 'Anitaxx', '276b6c4692e78d4799c12ada515bc3e4', 'peluka1709@gmail.com', 1, '0000-00-00 00:00:00', NULL, 'Amo romper mis limites, y estoy a un gran paso de superarme'),
(7, 'MikeNoble2905', 'e8494a1c9c7197508e5990872e417a0a', 'Mikemoble2905@gmail.com', 2, '0000-00-00 00:00:00', NULL, 'Esto es tan solo un demostracion de las cosas que se pueden hacer si uno lo propone'),
(9, 'laydo', '76d80224611fc919a5d54f0ff9fba446', 'parditop404@gmail.com', 2, '0000-00-00 00:00:00', NULL, 'Amo el deporte.'),
(39, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, '2023-05-19 07:13:26', NULL, 'Sin Descripcion');

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
  MODIFY `id_deporte` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
